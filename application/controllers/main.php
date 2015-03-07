<?
class Main extends MY_Controller
{
	public function __construct(){
		parent::__construct();
	} 
	function index()
		{
			if($this->session->userdata('username'))
				{
					$this->load->view('admin/dashboard');
				}
			else
				{
					//redirect to login view
					$data['error']=0;
					$this->load->helper('form');
					$this->load->view('admin/login',$data);
				}
		}
}
?>

