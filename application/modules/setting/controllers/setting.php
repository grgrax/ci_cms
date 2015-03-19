<?php 
class setting extends Admin_Controller {

	const MODULE='setting/';

	function __construct()
	{
		parent::__construct();
		if(!permission_permit(['list-setting'])) redirect_to_dashboard();
		$this->load->model('setting_m');
		$this->template_data['setting_m']=$this->setting_m;
		$this->template_data['actions']=setting_m::actions();
		$this->template_data['link']=base_url().self::MODULE;
		$this->breadcrumb->append_crumb('List Setting',base_url().self::MODULE.'index');

	}

	function index($offset=0)
	{

		$this->template_data['link']=base_url().self::MODULE;
		$this->breadcrumb->append_crumb('List menus',base_url().self::MODULE.'index');
		$this->load->model('category/category_m');
		$this->template_data['category_m']=$this->category_m;
		$this->template_data['categories']=$this->category_m->read_all_published($this->category_m->count_rows());
		
		$this->template_data['rows']=$this->setting_m->read_all($this->setting_m->count_rows());
		$this->template_data['subview']=self::MODULE.'list';
		$this->load->view('admin/main_layout',$this->template_data);
	}

	function updateAll()
	{
		try {
			if($this->input->post())
			{
				$this->form_validation->set_rules($this->input->post('setting'),'Name','trim|required|xss_clean');
				if($this->form_validation->run($this)===TRUE)
				{
					foreach ($this->input->post('setting') as $key => $setting) {
						$this->template_data['update_data']=array(
							'name'=>$setting['name'],
							'slug'=>get_slug($field['name']),
							'value'=>$setting['value']
							);
						$this->setting_m->update_row($id,$this->template_data['update_data']);
					}
				}
				$this->session->set_flashdata('success', 'Setting updated successfully');
			}
			else{
				throw new Exception("Could not update Setting.");
			}
		} catch (Exception $e) {
			$this->session->set_flashdata('error', $e->getMessage());
		}
		$this->controller_redirect();
	}

	function controller_redirect(){
		$this->template_data['url']=base_url().self::MODULE;
		redirect($this->template_data['url']);				
	}

}	
