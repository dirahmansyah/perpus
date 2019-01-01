<?php
defined('BASEPATH') Or exit('No direct script access allowed');

class Kategori_Model extends CI_Model
{
	public function index()
	{
		return $this->db->get('kategori');
	}

	public function create($data)
	{
		if($this->db->insert('kategori', $data))
		{
			return true;
		
		}
		else
		{
		return false;
		}
	}
	
	public function delete($data, $id)
	{
		$this->db->set($data);
		$this->db->where('id_kategori', $id);
		if ($this->db->delete('kategori'))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
	