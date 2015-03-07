<?
class users1 extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	}

	function index($start=0)
	{
		$rs=$this->user->read_all(3,$start);
		print_r($rs['rows']);
		$data['rows']=$rs['rows'];
		$data['total_rows']=$rs['total_rows'];;

		$this->load->library('pagination');
		$config['base_url']=base_url()."users/index";
		$config['total_rows']=$this->user->count_rows();
		$config['per_page']=3;

		$this->pagination->initialize($config);
		$data['pages']=$this->pagination->create_links();
			//print_r($config);

		
			//$this->load->library('table');
		$this->load->view('users',$data);
	}
	
	function add()
	{
		if($_POST)
		{
			$data=array(
				'content'=>$_POST['content'],
				'std_name'=>$_POST['std_name'],
				'std_add'=>$_POST['std_add'],
				'publish'=>$_POST['publish']
				);
			$this->user->create_row($data);
			redirect(base_url()."users");
		}
		else
			$this->load->view('user_add');
	}
	function get($id)
	{
		$data['row']=$this->user->read_row($id);
		$this->load->view('user',$data);
	}
	function edit($id)
	{
		if($_POST)
		{
			$data=array(
				'content'=>$_POST['content'],
				'std_name'=>$_POST['std_name'],
				'std_add'=>$_POST['std_add'],
				'publish'=>$_POST['publish']
				);
			$this->user->update_row($id,$data);						
		}
		$data['row']=$this->user->read_row($id);
		$this->load->view('user_edit',$data);
	}
	function remove($id)
	{
		$this->user->delete_row($id);
		redirect(base_url()."users");
	}


	function login()
	{
		$data['error']=0;
		if($_POST)
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
			$this->load->library('form_validation');	
			$this->form_validation->set_rules($config);
			if($this->form_validation->run()==FALSE)
			{
				$data['error']=validation_errors();
			}
			else
			{
				$username=$this->input->post('username',true);
				$pass=$this->input->post('password',true);
				$this_user=$this->user->check_login($username,$pass);
				if($this_user)
				{
					$this->session->set_userdata('username',$this_user['username']);
					$this->session->set_userdata('id',$this_user['id']);
					echo base_url();
					// exit;
					//redirect(base_url());
				}
				else
				{
					$data['error']="id/pass mismatch error";
				}	

			}
		}
		$this->load->helper('form');
		$this->load->view('user_login',$data);
		}//end of login function

		function logout()
		{
			$this->session->sess_destroy();
			echo "redirect";
			exit;
			// redirect(base_url());
		}

	}
	?>