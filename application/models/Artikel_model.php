<?php

class Artikel_model extends CI_Model
{
	public function getAllArtikel()
	{
		return $this->db->get('tbl_artikel')->result_array();
	}

	public function getSawareh($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_artikel');
		$this->db->where('id_user', $id);

		return $this->db->get()->result();
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

		return $this->db->get()->result();
	}
	public function get_tmb($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_artikel');
		$this->db->where('id_artikel', $id);

		return $this->db->get()->row();
	}


	public function get_artikel_approved()
	{

		$this->db->select('*');
		$this->db->from('tbl_artikel');
		$this->db->where('status', 1);

		return $this->db->get()->result();
	}

	public function numartikel()
	{
		$query = $this->db->get('tbl_artikel');
		return $query->num_rows();
	}

	public function getGambar($id_gambar)
	{
		$this->db->select('*');
		$this->db->from('tbl_gambar');
		$this->db->where('id_gambar', $id_gambar);

		return $this->db->get()->row();
	}
	public function getDetailArtikel($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_artikel');
		$this->db->where('id_artikel', $id);

		return $this->db->get()->row();
	}
	public function hapus_artikel($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function getArtikelAlasan($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_artikel');
		$this->db->where('alasan_penolakan', $id);

		$this->db->get()->row();
	}
}
