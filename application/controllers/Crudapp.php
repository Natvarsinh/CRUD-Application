<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crudapp extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct(){

		parent:: __construct();

		$this->load->view('header');
		$this->load->view('footer');
		$this->load->model('Student_model','Stud_m');
	}

	public function index()
	{
		$this->display();
	}

	public function add_student(){
		
		$this->load->view('addstudent');
	}

	public function insert_student(){
		
		$data = $this->input->post(array('name','contact'));
		
		if($this->Stud_m->insert_student("students",$data)){
				redirect('Crudapp/index');
		}
		else
		{
				$this->load->view('addstudent');
		}
	}

	public function update_student(){


		$posted_data = $this->input->post();
		if (isset($posted_data['update'])) {
			$data['name'] = $posted_data['name'];
			$data['contact'] = $posted_data['contact'];
			$where['id'] = $posted_data['id'];

			if($this->Stud_m->update_student("students",$data,$where)){
				redirect('Crudapp/index');
			}
			else{
				$this->load->view('editstudent');
			}
		}
		
		$data = $this->Stud_m->get_students("students");
		$this->load->view('updatestudent',['student_data'=>$data]);
	}

	public function edit_student($record_id){
		$data['student_info'] = $this->Stud_m->get_record_by_id("students",$record_id);
		$this->load->view('editstudent',$data);
	}

	public function delete_student(){

		$data['student_data'] = $this->Stud_m->get_students("students");
		$this->load->view('deletestudent',$data);
	}

	public function deleteStudent($record_id){
		if($this->Stud_m->delete_student("students",$record_id)){
			redirect('Crudapp/index');
		}
		else
		{
			$this->load->view('deletestudent');
		}
	}

	public function display(){

		$data = $this->Stud_m->get_students("students");
		$this->load->view('home',['student_data'=>$data]);
	}
}

?>