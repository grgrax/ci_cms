<?
class article_m extends CI_Model
{

	protected $table='tbl_articles';

	public $rules=array(
		array(
			'field'=>'name',
			'label'=>'article Name',
			'rules'=>'trim|required|xss_clean'
			),
		array(
			'field'=>'content',
			'label'=>'article content',
			'rules'=>'trim|xss_clean'
			),
		array(
			'field'=>'category',
			'label'=>'category',
			'rules'=>'trim|number|xss_clean'
			),
		array(
			'field'=>'image',
			'label'=>'image',
			'rules'=>'trim|xss_clean'
			),
		array(
			'field'=>'image_title',
			'label'=>'image title',
			'rules'=>'trim|xss_clean'
			),
		array(
			'field'=>'video',
			'label'=>'video',
			'rules'=>'trim|xss_clean'
			),
		array(
			'field'=>'video_title',
			'label'=>'video title',
			'rules'=>'trim|xss_clean'
			),
		array(
			'field'=>'video_url',
			'label'=>'video url',
			'rules'=>'trim|xss_clean|url'
			),
		array(
			'field'=>'embed_code',
			'label'=>'embed code',
			'rules'=>'trim|xss_clean'
			),
		array(
			'field'=>'meta_keywords',
			'label'=>'meta keywords',
			'rules'=>'trim|xss_clean'
			),
		array(
			'field'=>'meta_description',
			'label'=>'meta description',
			'rules'=>'trim|xss_clean'
			),
		array(
			'field'=>'meta_robots',
			'label'=>'meta robots',
			'rules'=>'trim|xss_clean'
			),
		);

const UNPUBLISHED=0;
const PUBLISHED=1;
const BLOCKED=2;
const DELETED=3;

const file_path='articles/';

public static function status($key=null){
	$status=array(
		self::PUBLISHED=>'PUBLISHED',
		self::UNPUBLISHED=>'UNPUBLISHED',
		self::BLOCKED=>'BLOCKED',
		self::DELETED=>'DELETED',
		);
	if(isset($key)) return $status[$key];
	return $status;
}

public static function actions($key=null){
	$actions=array(
		self::PUBLISHED=>'PUBLISHED',
		self::UNPUBLISHED=>'UNPUBLISHED',
		self::BLOCKED=>'BLOCKED',
		self::DELETED=>'DELETED',
		);
	if(isset($key)) return $actions[$key];
	return $actions;
}

public function __construct(){
}

function read_all($total=0,$start=0)
{
	$this->db->select()
	->from($this->table)
	->limit($total,$start);
	$rs=$this->db->get();
	return $rs->result_array();				 
}

function count_rows()
{
	$this->db->select()
	->from($this->table)
	->where("status != ",3)
	->order_by('id','desc');
	$rs=$this->db->get();
	return $rs->num_rows();				 
}	
function create_row($data)
{
	$this->db->insert($this->table,$data);
}
function read_row($id)
{
	$this->db->select()
	->from($this->table)
	->where('id',$id);
	$rs=$this->db->get();
	return ($rs->first_row('array'));
}
public function read_row_by_slug($slug='')
{
	if(!$slug) return false;
	$this->db->select()
	->from($this->table)
	->where('slug',$slug);
	$rs=$this->db->get();
	if($rs->num_rows()==0)
		return false;
	return ($rs->first_row('array'));
}





function update_row($id,$data)
{
	try {
		$this->db->where('id',$id);
		$this->db->update($this->table,$data);
	} catch (Exception $e) {
		echo $e->getMessage();			
	}
}
function delete_row($id)
{
	$this->db->where('id',$id);
	$this->db->update($this->table,array('status' =>self::DELETED));

}


public function set_rules(array $escape_rules=NUll){
	if($escape_rules && is_array($escape_rules)){
		foreach($this->rules as $rule){
			if(in_array($rule['field'],$escape_rules)) continue;
			$applied_rules[]=$rule;
		}
		return $applied_rules;
	}
	return $this->rules;
}



}
?>