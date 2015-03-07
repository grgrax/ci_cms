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
			$prefs=array(
							 'show_next_prev'=>true,
							 'next_prev_url'=>base_url().'events/index'
							 );
			$prefs['template'] = '

   {table_open}<table border="0" cellpadding="0" cellspacing="0" class="calendar_tbl">{/table_open}

   {heading_row_start}<tr>{/heading_row_start}

   {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
   {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
   {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

   {heading_row_end}</tr>{/heading_row_end}

   {week_row_start}<tr class="week_row">{/week_row_start}
   {week_day_cell}<td>{week_day}</td>{/week_day_cell}
   {week_row_end}</tr>{/week_row_end}

   {cal_row_start}<tr>{/cal_row_start}
   {cal_cell_start}<td>{/cal_cell_start}

   {cal_cell_content}<a href="{content}">{day}</a>{/cal_cell_content}
   {cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

   {cal_cell_no_content}{day}{/cal_cell_no_content}
   {cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

   {cal_cell_blank}&nbsp;{/cal_cell_blank}

   {cal_cell_end}</td>{/cal_cell_end}
   {cal_row_end}</tr>{/cal_row_end}

   {table_close}</table>{/table_close}
';

			$this->load->library('calendar',$prefs);
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

