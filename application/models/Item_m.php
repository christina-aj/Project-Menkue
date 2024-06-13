<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Item_m extends CI_Model {
    
    public function get($id = null)
    {   
        $this->db->select('p_item.*, p_kategori.name as kategori_name, p_unit.name as unit_name');
		$this->db->from('p_item');
		$this->db->join('p_kategori', 'p_kategori.kategori_id = p_item.kategori_id');
		$this->db->join('p_unit', 'p_unit.unit_id = p_item.unit_id');
		if($id != null){
			$this->db->where('item_id', $id);
		}
		$this->db->order_by('barcode', 'asc');
        $query = $this->db->get();
		return $query;
    }
    
    public function add($post)
    {
        $params = [
            'barcode' => $post['barcode'],
            'name' => $post['nama_produk'],
            'kategori_id' => $post['kategori'],
            'unit_id' => $post['unit'],
            'harga' => $post['harga'],
            'image' => $post['image'],
        ];
        $this->db->insert('p_item', $params);
    }

    public function edit($post)
    {
        $params = [
            'barcode' => $post['barcode'],
            'name' => $post['nama_produk'],
            'kategori_id' => $post['kategori'],
            'unit_id' => $post['unit'],
            'harga' => $post['harga'],
            'updated' => date('Y-m-d H:i:s')
        ];
        if($post['image'] != null){
            $params['image'] = $post['image'];
        }
        $this->db->where('item_id', $post['id']);
        $this->db->update('p_item', $params);

    }

    function check_barcode($code, $id = null){
        $this->db->from('p_item');
        $this->db->where('barcode', $code);
        if($id != null){
            $this->db->where('item_id !=', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function del($id)
	{	
        $this->db->where('item_id', $id);
        $this->db->delete('p_item');
	}

    function update_stock_in($data)
    {
        $qty = $data['qty'];
        $id = $data['item_id'];
        $sql = "UPDATE p_item SET stock = stock + $qty WHERE item_id = '$id'";
        $this->db->query($sql);
    }

    function update_stock_out($data)
    {
        $qty = $data['qty'];
        $id = $data['item_id'];
        $sql = "UPDATE p_item SET stock = stock - $qty WHERE item_id = '$id'";
        $this->db->query($sql);
    }
}