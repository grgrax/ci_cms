<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends MX_Controller {

	public $template_data=array();

	public function __construct()
	{
		parent::__construct();
		//$this->output->enable_profiler('config');
		$this->load->library(array('form_validation','session','breadcrumb','form_validation'));
		if(!$this->session->userdata('username')){
			// redirect('auth/login');
			// echo "seesion not set";
			$auth_module = modules::load('auth');
			$auth_module->login();
		}
		else{
		// echo "inside ".__FUNCTION__." of class:".get_class();
			// echo "seesion set";
			$this->template_data['site_name']=config_item('site_name');
			$this->template_data['powered_by']=config_item('powered_by');
			$this->template_data['errors']='';
		//loading globally requried helper, libraries n etc
			$this->load->helper(array('form','text','my_text','my_date','my_table','my_dashboard','my_file','my_ui'));
			file_helper_init();
			$this->breadcrumb->append_crumb('Dashboard',base_url().'');
		}
		// show_pre($this);
	}	

	public function index()
	{
		echo "inside ".__FUNCTION__." of class:".get_class();
	}


}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */