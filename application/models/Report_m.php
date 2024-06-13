<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Report_m extends CI_Model {
    
    public function get($id = null)
    {
        $this->db->select('report.report_id, deskripsi, totalharga, qty, customer.name as customer_name');
        $this->db->from('report');
        $this->db->join('customer', 'customer.customer_id = report.customer_id');
        if($id != null){
            $this->db->where('report_id', $id);
        }
        $this->db->order_by('report_id', 'desc');
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'customer_id' => $post['customer'],
            'totalharga' => $post['total_harga'],
            'qty' => $post['qty'],
            'deskripsi' =>empty($post['descc']) ? null : $post['descc'],
        ];
        $this->db->insert('report', $params);

    }

    public function edit($post)
    {
        $params = [
            'customer_id' => $post['customer'],
            'totalharga' => $post['total_harga'],
            'qty' => $post['qty'],
            'deskripsi' =>empty($post['descc']) ? null : $post['descc'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('report_id', $post['report_id']);
        $this->db->update('report', $params);

    }

    public function del($id)
	{	
        $this->db->where('report_id', $id);
        $this->db->delete('report');
	}
    
}