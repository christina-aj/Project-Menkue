<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['report_m', 'customer_m']);
        
    }

	public function report_in_data()
	{
		$data['row'] = $this->report_m->get()->result();
		$this->template->load('template', 'transaction/report_in/report_in_data', $data);
	}

	public function report_in_add()
	{	
		
		$report = new stdClass();
		$report->report_id = null;
		$report->totalharga= null;
		$report->qty = null;
		$report->deskripsi = null;

		$query_customer = $this->customer_m->get();
		$customer[null] = 'Pilih Customer';
		foreach ($query_customer->result() as $cust){
			$customer[$cust->customer_id] = $cust->name;
		}
		
		$data = array(
			'page' => 'add',
			'row'=> $report,
			'customer' => $query_customer,
			'customer' => $customer,'selectedcustomer' =>null,
		);
		$this->template->load('template', 'transaction/report_in/report_in_form',$data);

	}

	public function print_report()
	{
		$data['row'] = $this->report_m->get()->result();
		$this->template->load('template', 'print/print_report', $data);
	}

	public function report_in_edit($id)
	{
		$query = $this->report_m->get($id);
		if($query->num_rows() > 0 ){
			$report = $query->row();
			$query_customer = $this->customer_m->get();
			$customer[null] = 'Pilih Customer';
			foreach ($query_customer->result() as $cust){
				$customer[$cust->customer_id] = $cust->name;
			}
			
			
			$data = array(
				'page' => 'edit',
				'row'=> $report,
				'customer' => $customer,'selectedcustomer' => null,
			);
			$this->template->load('template', 'transaction/report_in/report_in_form',$data);
		} else {
			echo "<script>alert('Data tidak ditemukan');";
            echo "window.location='".site_url('report/in')."';</script>";
		}
	}

	public function process()
	{
		$post =$this->input->post(null, TRUE);
		if(isset($_POST['add'] )){
			$this->report_m->add($post);
		} else if(isset($_POST['edit'] )){
			$this->report_m->edit($post);
		}

		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('Success','Data Berhasil Di simpan');
       }
       redirect('report/in');
	}
	

	public function report_in_del($id)
	{
		$report_id = $this->uri->segment(4);
        $this->report_m->del($report_id);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success','Data Report Berhasil Dihapus');
        }
        redirect('report/in');
    }



}
