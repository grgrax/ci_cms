<?
class comments extends CI_Model
{
	function get_all_comments($id)
		{
			$this->db->select('tbl_blogs_comments.*')
							 ->from('tbl_blogs_comments')
							 ->join('tbl_blogs','tbl_blogs_comments.blog_id=tbl_blogs.id')
							 ->where('tbl_blogs_comments.blog_id',$id)
							 ->order_by('tbl_blogs_comments.comment_id','desc');
			$rs=$this->db->get();
			return ($rs->result_array($rs));
		}

	function create_row($data)
		{
			$this->db->insert('tbl_blogs_comments',$data);
		}
}
?>