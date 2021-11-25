<?php

class Artikel_model extends CI_Model
{
	public function getAllArtikel()
	{
		return $this->db->get('tbl_artikel')->result_array();
	}

	public function getSawareh($id)
	{
		return $this->db->get_where('tbl_artikel',  $id)->result();
	}

	public function set_approve()
	{

		$this->db->set('status', 1);
		$this->db->where('id_artikel');
		$this->db->update('tbl_artikel');

		// return $this->db->get()->result_array();
	}

	public function get_artikel($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_artikel');
		$this->db->join('tbl_gambar', 'tbl_artikel.id_artikel=tbl_gambar.id_artikel');
		$this->db->where('tbl_gambar.id_artikel', $id);

		return $this->db->get()->result();
	}

	public function get_gambar($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_gambar');
		$this->db->where('id_artikel', $id);

		return $this->db->get()->row();
	}

	public function get_artikel_approved()
	{

		// $this->db->get('tbl_artikel', 'status' == 1);

		$this->db->select('*');
		$this->db->from('tbl_artikel');
		$this->db->where('status', 1);

		return $this->db->get()->result();
	}
}
