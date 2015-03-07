<?
class events extends CI_Controller
{
	function show_events_in_calendar()
		{
			//load calendar library
			$config=array(
							 'show_next_prev'=>true,
							 'next_prev_url'=>base_url().'events/index'
							 );
			$this->load->library('calendar',$config);
			$links=array(
							3=>base_url().'events/get/167',
							6=>base_url().'events/get/177'
							  );
			echo $this->calendar->generate('','',$links);
		}
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('event');
		}

	function index($start=0)
		{
			$data['rows']=$this->event->read_all(3,$start);			
			$this->load->library('pagination');
			$config['base_url']=base_url()."events/index";
			$config['total_rows']=$this->event->count_rows();
			$config['per_page']=3;
			
			$this->pagination->initialize($config);
			$data['pages']=$this->pagination->create_links();

			//load calendar library
			$config=array(
							 'show_next_prev'=>true,
							 'next_prev_url'=>base_url().'events/index'
							 );
			$this->load->library('calendar',$config);
			$links=array(
							3=>base_url().'events/get/167',
							6=>base_url().'events/get/177'
							  );
	
			//echo $this->calendar->generate('','',$links);
			$data['calendar_events']=$this->calendar->generate('','',$links);
			$this->load->view('events',$data);

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
					$this->event->create_row($data);
					redirect(base_url()."events");
				}
			else
					$this->load->view('event_add');
		}
	function get($id)
		{
			$data['row']=$this->event->read_row($id);
			$this->load->view('event',$data);
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
					$this->event->update_row($id,$data);						
				}
			$data['row']=$this->event->read_row($id);
			$this->load->view('event_edit',$data);
		}
	function remove($id)
		{
			$this->event->delete_row($id);
			redirect(base_url()."events");
		}

}
?>

