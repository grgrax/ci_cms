<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends Admin_Controller {

	const MODULE='user/';

	function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
		$this->load->helper('user');
		$this->load->helper('group/group');
		$this->template_data['user_m']=$this->user_m;
		$this->template_data['url']=base_url().self::MODULE;
		$this->breadcrumb->append_crumb('List Users',base_url().self::MODULE.'index');
		$this->template_data['groups']=get_all_groups();
	}

	function index($offset=0)
	{
		$per_page=5;
		$total_rows=$this->user_m->count_rows();
		$this->template_data['rows']=$this->user_m->read_all($per_page,$offset);
		if($total_rows>$per_page){
			$this->load->library('pagination');
			$config['base_url']=base_url().self::MODULE."index";
			$config['total_rows']=$total_rows;
			$config['per_page']=$per_page;
			$config['prev']='Previous';
			$config['next']='Next';
			$this->pagination->initialize($config);
			$this->template_data['pages']=$this->pagination->create_links();
		}
		$this->template_data['offset']=$offset;
		$this->template_data['subview']=self::MODULE.'list';
		$this->load->view('admin/main_layout',$this->template_data);
	}


	function action($action_id=NULL,$id=NULL){
		try{
			if(!$action_id || !$id) throw new Exception('Invalid paramter');
			switch($action_id){
				case user_m::ACTIVE:
				{
					$status=user_m::ACTIVE;
					break;
				}
				case user_m::BLOCKED:
				{
					$status=user_m::BLOCKED;
					break;
				}
				case user_m::DELETED:
				{
					$status=user_m::DELETED;
					break;
				}
			}
			$this->template_data=array('status'=>$status);
			$this->user_m->update_row($id,$this->template_data);
			$this->session->set_flashdata('success', 'User '.user_m::status($action_id).' successfully');
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
		$this->controller_redirect();				
	}


	function add()
	{
		try {
			if($this->input->post())
			{
				$rules=$this->user_m->set_rules();
				$password=array(
					'field'=>'password',
					'label'=>'Password',
					'rules'=>'trim|required|min_length[6]|xss_clean'
					);
				array_push($rules,$password);
				$this->form_validation->set_rules($rules);
				if($this->form_validation->run($this)===TRUE)
				{
					$this->template_data['insert_data']=array(
						'group_id'=>$this->input->post('group'),
						'username'=>$this->input->post('username'),
						'email'=>$this->input->post('email'),
						'pass'=>sha1($this->input->post('password'))
						);
					$this->user_m->create_row($this->template_data['insert_data']);
					$this->session->set_flashdata('success', 'User added successfully');
					$this->controller_redirect();				
				}
				else{
					throw new Exception("Could not add User <hr/>");
				}
			}			
		} catch (Exception $e) {
			$this->session->set_flashdata('error', $e->getMessage());
		}
		$this->breadcrumb->append_crumb('Add','add');
		$this->template_data['subview']=self::MODULE.'add';
		$this->load->view('admin/main_layout',$this->template_data);
	}


	function edit($id)
	{
		try {
			if(!$id) throw new Exception("Invalid Parameter", 1);
			$this->template_data['row']=$this->user_m->read_row($id);
			if($this->input->post())
			{
				$rules=$this->user_m->set_rules(array('group'));
				if($this->input->post('password')){
					$password=array(
						'field'=>'password',
						'label'=>'Password',
						'rules'=>'trim|required|min_length[6]|matches[confirm_password]|xss_clean'
						);
					array_push($rules,$password);
					$password_confirm=array(
						'field'=>'password',
						'label'=>'Confrim Password',
						'rules'=>'trim|required|min_length[6]|xss_clean'
						);
					array_push($rules,$password_confirm);
				}
				// show_pre($rules);
				$this->form_validation->set_rules($rules);
				if($this->form_validation->run($this)===TRUE)
				{
					$this->template_data['update_data']=array(
						'username'=>$this->input->post('username'),
						'email'=>$this->input->post('email')
						);
					if($this->input->post('password')){
						$this->template_data['update_data']['pass']=sha1($this->input->post('password'));
					}
					$this->user_m->update_row($id,$this->template_data['update_data']);
					$this->session->set_flashdata('success', 'User updated successfully');
					$this->controller_redirect();				
				}
				else{
					throw new Exception("Could not add Testimonial <hr/>");
				}
			}			
		} catch (Exception $e) {
			$this->session->set_flashdata('error', $e->getMessage());
		}
		$this->breadcrumb->append_crumb('Edit','edit');
		$this->template_data['subview']=self::MODULE.'edit';
		$this->load->view('admin/main_layout',$this->template_data);
	}

	function profile(){
		try {
			if(!$id) throw new Exception("Invalid Parameter", 1);
			$this->template_data['row']=$this->user_m->read_row($id);
			if($this->input->post())
			{
				$rules=$this->user_m->set_rules(array('group'));
				if($this->input->post('password')==$this->input->post('confirm_password')){
					$password=array(
						array(
							'field'=>'password',
							'label'=>'Password',
							'rules'=>'trim|required|min_length[6]|matches[confirm_password]|xss_clean'
							),
						array(
							'field'=>'password',
							'label'=>'Confrim Password',
							'rules'=>'trim|required|min_length[6]|xss_clean'
							),
						);				
				}
				else{
					throw new Exception("Password din't matched", 1);
				}
				$this->form_validation->set_rules($rules);
				if($this->form_validation->run($this)===TRUE)
				{
					$this->template_data['update_data']=array(
						'username'=>$this->input->post('username'),
						'email'=>$this->input->post('email')
						);
					$this->user_m->update_row($id,$this->template_data['update_data']);
					$this->session->set_flashdata('success', 'User updated successfully');
					$this->controller_redirect();				
				}
				else{
					throw new Exception("Could not add Testimonial <hr/>");
				}
			}			
		} catch (Exception $e) {
			$this->session->set_flashdata('error', $e->getMessage());
		}
		$this->breadcrumb->append_crumb('Edit','edit');
		$this->template_data['subview']=self::MODULE.'edit';
		$this->load->view('admin/main_layout',$this->template_data);

	}

	function controller_redirect(){
		$this->template_data['url']=base_url().self::MODULE;
		echo $this->template_data['url'];
		$this->template_data['url'];
		redirect($this->template_data['url']);				
	}

	
}	
/* End of file user.php */
/* Location: ./application/modules/user/controllers/user.php */


