<?
class blog extends CI_Model
{
	function read_all($total,$start)
		{
			$this->db->select()
							 ->from('tbl_blogs')
							 ->order_by('id','desc')
							 ->limit($total,$start);
			$rs=$this->db->get();
			return $rs->result_array();				 
		}

	function count_all()
		{
			$this->db->select()
							 ->from('tbl_blogs')
							 ->order_by('id','desc');
			$rs=$this->db->get();
			return $rs->num_rows();				 
		}
	function create_row($data)
		{
			$this->db->insert('tbl_blogs',$data);
		}
	function read_row($id)
		{
			$this->db->select()
							 ->from('tbl_blogs')
							 ->where('id',$id);
			$rs=$this->db->get();
			return ($rs->first_row('array'));
		}
	function update_row($id,$data)
		{
			$this->db->where('id',$id);
			$this->db->update('tbl_blogs',$data);
		}
	function delete_row($id)
		{
			$this->db->where('id',$id);
			$this->db->delete('tbl_blogs');
		}
}
?>