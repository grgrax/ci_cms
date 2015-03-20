<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class front extends Frontend_Controller {

	const MODULE='front/';

	protected $active_menu_slug='';
	protected $active_model='';
	protected $active_template='';
	
	function __construct()
	{
		$this->load->model('menu/menu_m');
		$this->load->model('page/page_types_m');
		$this->data['menu_m']=$this->menu_m;
		$this->active_model=$this->menu_m;
		$this->data['content']='';
		parent::__construct();
	}

	public function index()
	{
		try {
			$this->active_menu_slug=$this->uri->segment(1,'home');
			if (!$this->active_menu_slug) throw new Exception();
			switch ($this->active_menu_slug) {
				case 'home':{
					$this->_home();
					break;				
				}
				case 'contact':{
					$this->_home();
					break;				
				}
				default:{
					$article_m=$this->load->model('article/article_m');
					$response=$this->_read_from_model();
					if(!$response['success']) throw new Exception($response['data'], 1);
					$template_id=$response['data']['page_type_id'];
					$menu=$response['data'];
					$template=$this->page_types_m->read_row($template_id);
					if($menu['article_id']){						
						$this->data['article']=$article_m->read_row($menu['article_id']);
					}
					if($menu['category_id']){
						$this->data['category']=$this->load->model('category/category_m')->read_row($menu['category_id']);						
						$this->data['articles']=$article_m->read_all_published_of_category($menu['category_id']);						
					}
					$this->active_template=$template['name'];
					break;
				}
			}
		} catch (Exception $e) {
			log_message('error', 'Could not load template ' . $this->active_template .' in file ' . __FILE__ . ' at line ' . __LINE__);
			$this->active_template='404';
		}
/*		echo "load :";
		show_pre($this->data['content']);
		echo "<hr/>template:".$this->active_template;
*/		
		$this->data['subview']=$this->active_template;
		$this->load->view('front/main_layout',$this->data);
//exit;


/*		
		$this->template_data['subview']=self::MODULE.'index';
		$this->load->view('front/main_layout',$this->template_data);
		$this->data['page'] = $this->menu_m->get_by(array('slug' => (string) $this->uri->segment(1)), TRUE);
		count($this->data['page']) || show_404(current_url());
		add_meta_title($this->data['page']->title);
*/	
	}

	public function _home(){
		$response=$this->_read_from_model();
		if(!$response['success']) throw new Exception($response['data'], 1);
		$this->data['content']=$response['data'];
		$this->active_template='home';
	}

	public function _read_from_model(){
		$response['success']=false;
		$response['data']='Error Processing Request';
		if(!$this->active_menu_slug) return $response;
		$menu=$this->active_model->read_row_by_slug($this->active_menu_slug);
		if($menu) {
			$response['success']=true;
			$response['data']=$menu;
		}
		else{
			$response['data']='menu not found';
		}
		return $response;		
	}

}

/* End of file user.php */
/* Location: ./application/modules/user/controllers/user.php */