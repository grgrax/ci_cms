<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class auth extends MY_Controller {

	const MODULE='auth/';

	function __construct()
	{
		$this->load->library(array('form_validation','session','breadcrumb'));
		parent::__construct();
		$this->load->model('user_m');
		$this->template_data['user_m']=$this->user_m;
	}

	public function index()
	{
		$this->template_data['subview']=self::MODULE.'index';
		$this->load->view('admin/main_layout',$this->template_data);
	}

	function login()
	{
		if($this->session->userdata('username'))
			redirect('dashboard');
		try {
			if($this->input->post())
			{
				$config=array(
					array(
						'field'=>'username',
						'rules'=>'trim|required|min_length[3]'
						),
					array(
						'field'=>'password',
						'rules'=>'trim|required|min_length[5]'
						)
					);	
				$this->form_validation->set_rules($config);
				if($this->form_validation->run($this)===TRUE)
				{
					$username=$this->input->post('username',true);
					$pass=$this->input->post('password',true);
					$this->load->model('user_m');
					$this_user=$this->user_m->check_login($username,$pass);
					if($this_user)
					{
						$this->session->set_userdata('username',$this_user['username']);
						$this->session->set_userdata('id',$this_user['id']);
						// echo base_url();
						redirect('dashboard');

						// redirect(base_url());
					}
					//$this->redirect();				
				}
				else{
					throw new Exception("Invalid User <hr/>");
				}
			}
		} catch (Exception $e) {
			// redirect(current_url());
			// $this->session->set_flashdata('error', $e->getMessage());
			// redirect(base_url()."testimonial/add");				
		}
		// $this->template_data['subview']=self::MODULE.'login';
		$this->load->view('login',$this->template_data);

	}

	function logout()
	{
		// $this->session->unset_userdata('username');
		$this->session->sess_destroy();
		// $this->login();
		redirect('auth/login');
	}


}

/* End of file user.php */
/* Location: ./application/modules/user/controllers/user.php */