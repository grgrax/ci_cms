<?
class debtor extends CI_Controller
{
	public static $title="blogs";
	function __construct()
		{
			parent::__construct();
			$this->load->model('blog');
			$this->load->library('form_validation');
		}

	function index($start=0)
		{			
			$this->load->view('debtor_add');
		}

	function add()
		{
			if($this->input->post())
				{
					//echo "posted";
					if($type=$this->input->post('type'))
						{
							if($type==3 or $type==4)
								$this->form_validation->set_rules('certificate_no','Certificate No','trim|required|Number');
							elseif($type==1)
								$this->form_validation->set_rules('citizenship_no','Citizenship No','trim|required|Number');
							elseif($type==2)
								$this->form_validation->set_rules('passport_no','Passport No','trim|required|Number');
							$this->form_validation->set_rules('name','Name','trim|required|alpha');
							$this->form_validation->set_rules('mob','Mobile','trim|required|Number');
							$this->form_validation->set_rules('file','File','trim|required');
							$this->validate($type);	
						}
					//print_r($this->input->post());
				}
			else	
				$this->load->view('debtor_add');				
		}

	private function validate($type)
		{
			if($this->form_validation->run($this))
				{
					echo "save";
					$data['success']="Debtor Sucessfully Added";
				}
			else
				$data['errors']=validation_errors();
			$data['selected_type']=$type;
			$this->load->view('debtor_add',$data);
		}

}
?>