<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('datatables');
	}

	public function getDatatableCabor()
	{
		$this->datatables->select('id,nama,create_at')->from('cabor');
		return $this->datatables->generate();
	}
	public function getDatatableMedali_PorTY()
	{
		$this->datatables->select('medali.*')->from('medali');
		return $this->datatables->generate();
	}

	public function getDatatable($tb)
	{
		if ($tb != 'medali') {
			$this->datatables->select($tb . '.*')->from($tb);
		} else {
			$this->datatables->select($tb . '.*,cabor.nama AS cabor_nama')->from($tb)->join('cabor', 'cabor.id = ' . $tb . '.id_cabor', 'LEFT');
		}
		return $this->datatables->generate();
	}

	public function getRecordByID($tb, $id)
	{
		return $this->db->select($tb . '.*')->from($tb)->where('id', $id)->get()->row();
	}

	public function getTableRecord($tb){
		return $this->db->select($tb.'.*')->from($tb)->get()->result_array();
	}

	public function getMedali($tahun){
		return $this->db->select('SUM(jml_emas) AS jml_emas, SUM(jml_perak) AS jml_perak, SUM(jml_perunggu) AS jml_perunggu')->from('medali')->where('tahun',$tahun)->get()->row();
	}

	public function insert($data, $tb)
	{
		$this->db->trans_start();
		$this->db->insert($tb, $data);
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			return FALSE;
		} else {
			$this->db->trans_commit();
			return TRUE;
		}
	}
	public function update($data, $tb, $id)
	{
		$this->db->trans_start();
		$this->db->where('id', $id);
		$this->db->update($tb, $data);
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			return FALSE;
		} else {
			$this->db->trans_commit();
			return TRUE;
		}
	}
	public function delete($tb, $id)
	{
		$this->db->trans_start();
		$this->db->delete($tb, array('id' => $id));
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			return FALSE;
		} else {
			$this->db->trans_commit();
			return TRUE;
		}
	}
}
