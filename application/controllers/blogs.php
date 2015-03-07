<?
class blogs extends CI_Controller
{
	public static $title="blogs";
	function __construct()
		{
			parent::__construct();
			$this->load->model('blog');
		}

	function index($start=0)
		{
			$data['rows']=$this->blog->read_all(3,$start);
			
			//for pagination
			$this->load->library('pagination');
			$config['base_url']=base_url()."blogs/index";
			$config['total_rows']=$this->blog->count_all();
			$config['per_page']=3;
			
			$this->pagination->initialize($config);
			$data['pages']=$this->pagination->create_links();
			
			
			$this->load->view('blogs',$data);
			
			
			
		}
	function add()
		{
			if($_POST)
				{
					$data=array(
											'title'=>$_POST['title'],
											'dsc'=>$_POST['dsc'],
											'ps_date'=>$_POST['ps_date'],
											'author'=>$_POST['author']
										 );
					$this->blog->create_row($data);
					redirect(base_url()."blogs");
				}
			else
					$this->load->view('blog_add');
		}
	function get($id)
		{
			$data['blog']=$this->blog->read_row($id);
			$this->load->helper('form');
			//load comments
			$this->load->model('comments');
			$data['comments']=$this->comments->get_all_comments($id);
			
			//captcha
			$this->load->helper('captcha');
			$vals = array(
								'word'	 => '',
								'img_path'	 => './captcha/',
								'img_url'	 => base_url().'captcha/',
								'img_width'	 => 150,
								'img_height' => 30
								);
			$cap = create_captcha($vals);
			$data['captcha']=$cap['image'];
			$this->session->set_userdata('captcha',$cap['word']);
	    //$this->session->set_userdata('mkd','mkd_val');
			$this->load->view('blog',$data);
		}
	function edit($id)
		{
			if($_POST)
				{
					$data=array(
											'title'=>$_POST['title'],
											'dsc'=>$_POST['dsc'],
											'ps_date'=>$_POST['ps_date'],
											'author'=>$_POST['author'],
											);
					$this->blog->update_row($id,$data);						
				}
			$data['blog']=$this->blog->read_row($id);
			$this->load->view('blog_edit',$data);
		}
	function remove($id)
		{
			$this->blog->delete_row($id);
			redirect(base_url()."blogs");
		}

	function add_comment($id=0)
		{
			?>
      <br/> u typed: <?=$_POST['captcha']?>
			<br/> n captch was: <?=$this->session->userdata('captcha')?>
			<?
			if($_POST && strtolower($this->session->userdata('captcha'))==strtolower($_POST['captcha']))
				{
					$data=array(
											'blog_id'=>$id,
											'comment'=>$_POST['content'],
											'by'=>$_POST['by'],
											'date'=>$_POST['date'],
											);
					$this->load->model('comments');
					$this->comments->create_row($data);
					//redirect(base_url()."blogs/get/$id");
				}
			else
				{
					//redirect(base_url()."blogs/get/$id");
					?>
          <br/> 
          <font color="red">captcha mismatched</font> 
          try again 
					<?
				}
		}

}
?>



