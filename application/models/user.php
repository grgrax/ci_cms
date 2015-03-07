<?
class user extends CI_Model
{
	function read_all($total,$start)
	{
		$this->db->select()
		->from('tbl_users')
		->order_by('id','desc')
		->limit($total,$start);
		$rs=$this->db->get();
		return $rs->result_array();				 
	}

	function count_rows()
	{
		$this->db->select()
		->from('tbl_users')
		->order_by('id','desc');
		$rs=$this->db->get();
		return $rs->num_rows();				 
	}
	function create_row($data)
	{
		$this->db->insert('tbl_users',$data);
	}
	function read_row($id)
	{
		$this->db->select()
		->from('tbl_users')
		->where('id',$id);
		$rs=$this->db->get();
		return ($rs->first_row('array'));
	}
	function update_row($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('tbl_users',$data);
	}
	function delete_row($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tbl_users');
	}
	function check_login($username,$pass)
	{
		$where=array('username'=>$username,'pass'=>sha1($pass));
		$this->db->select()->from('tbl_users')->where($where);
		$rs=$this->db->get();
		return $rs->first_row('array');

	}

}
?>