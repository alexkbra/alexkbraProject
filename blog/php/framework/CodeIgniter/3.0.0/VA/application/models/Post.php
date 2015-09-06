<?php 

/**
* 
*/
class Post extends CI_Model
{
	public function getListPost()
	{
		return $this->db->get('post');
	}
	public function getPostByUrl($url='')
	{
		$result = $this->db->query("SELECT * FROM post WHERE url = '".$url."' LIMIT 1");
		return $result->row();
	}
}