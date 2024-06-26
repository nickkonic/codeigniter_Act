<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Srms extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$sql = "SELECT * FROM tbl_student";
		$result = $this->db->query($sql);
		$data['students'] = $result->result_array();
		$this->load->view('srms_main', $data);
	}

	/*public function new_rec(){
		$this->load->view('smrs_new');
	}*/

	public function delete_rec(){
		$id =$this->uri->segment(3);
		$sql = "DELETE FROM tbl_student WHERE student_id='$id'";
		$this->db->query($sql);
		$this->index();
	}
}
