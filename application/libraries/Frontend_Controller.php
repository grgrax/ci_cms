<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend_Controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		echo "inside ".__function__." of class:".get_class()."<br/>";

	}

	public function index()
	{
		// echo "inside ".__function__." of class:".get_class();
	}

}

/* End of file Frontend_Controller.php */
/* Location: ./application/libraries/Frontend_Controller.php */