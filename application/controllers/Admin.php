<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->library('Datatables');
        $aSG_dateTimeNow = new DateTime("now", new DateTimeZone('Asia/Singapore'));
		$this->aSG_dateTimeNow = $aSG_dateTimeNow->format('Y-m-d H:i:s');
    }
    public function index()
    {
        $data['userdata'] = $this->session->userdata('userdata');
        $data['title'] = "admin";
        $data['submenu'] = "admin";
        $data['menu'] = "admin";
        $data['content'] = "admin/home";
        $data['subheader']['judul'] = "Admin";
        $data['subheader']['deskripsi'] = "Admin";

        $data['medali'] = $this->M_admin->getMedali(2020);
        $this->load->view('layouts/layout', $data);
    }

    public function list_cabor()
    {
        $data['userdata'] = $this->session->userdata('userdata');
        $data['title'] = "List Cabor";
        $data['menu'] = "Porprov";
        $data['submenu'] = "List Cabor";
        $data['content'] = "admin/list_cabor";
        $data['subheader']['judul'] = "List Cabang Olahraga";
        $data['subheader']['deskripsi'] = "Porprov";
        $this->load->view('layouts/layout', $data);
    }
    public function list_medali($type)
    {
        $data['userdata'] = $this->session->userdata('userdata');
        $data['title'] = "Perolehan Medali";
        $data['menu'] = "Porprov";
        $data['submenu'] = "Perolehan Medali";
        $data['content'] = ($type == 'Porprov') ? "admin/list_Medali_porprov" : "";
        $data['subheader']['judul'] = "List Perolehan Medali";
        $data['subheader']['deskripsi'] = "Porprov";
        $this->load->view('layouts/layout', $data);
    }

    public function list_user()
    {
        $data['userdata'] = $this->session->userdata('userdata');
        $data['title'] = "List Cabor";
        $data['menu'] = "Porprov";
        $data['submenu'] = "List Cabor";
        $data['content'] = "admin/list_user";
        $data['subheader']['judul'] = "List Cabang Olahraga";
        $data['subheader']['deskripsi'] = "Porprov";
        $this->load->view('layouts/layout', $data);
    }



    public function getDatatable($tb)
    {
        $data = $this->M_admin->getDatatable($tb);
        echo $data;
    }
    public function getRecordByID($tb, $id)
    {
        $data = $this->M_admin->getRecordByID($tb, $id);
        echo json_encode($data);
    }

    public function getMedali($tahun){
        $data = $this->M_admin->getMedali($tahun);
        echo json_encode($data);
    }

    // public function getDatatableCabor()
    // {
    //     $data = $this->M_admin->getDatatableCabor();
    //     echo $data;
    // }
    // public function getCaborByID($id){
    //     $data = $this->M_admin->getCaborByID($id);
    //     echo json_encode($data);
    // }
    // public function getDatatableMedali_PorTY(){
    //     $data = $this->M_admin->getDatatableMedali_PorTY();
    //     echo $data;
    // }
    // public function getDatatableMedali_PorTY_ByID($id){
    //     $data = $this->M_admin->getDatatableMedali_PorTY_ByID($id);
    //     echo json_encode($data);
    // }

    public function getTableRecord($tb)
    {
        $data = $this->M_admin->getTableRecord($tb);
        echo json_encode($data);
    }


    public function postCabor($command)
    {
        $post = $this->input->post();
        $userdata = $this->session->userdata('userdata');

        $data['nama'] = $post['nama'];
        if ($command == 'add') {
            if ($this->M_admin->insert($data, 'cabor') === TRUE) {
                $alert = array(
                    'message' => 'Data Berhasil disimpan',
                    'type' => 'success',
                );
            } else {
                $alert = array(
                    'message' => 'Error PRATA 1 : Data Gagal disimpan!',
                    'type' => 'error',
                );
            }
        } else if ($command == 'update') {
            $id = $post['id'];
            if ($this->M_admin->update($data, 'cabor', $id) === TRUE) {
                $alert = array(
                    'message' => 'Data Berhasil diperbaharui',
                    'type' => 'success',
                );
            } else {
                $alert = array(
                    'message' => 'Error PRATU : Data Gagal diperbaharui',
                    'type' => 'error',
                );
            }
        } else {
            $alert = array(
                'message' => 'Error : Action Not Recognized',
                'type' => 'error',
            );
        }
        echo json_encode($alert);
    }


    public function postMedali_PorTY($command)
    {
        $post = $this->input->post();
        $userdata = $this->session->userdata('userdata');
        // var_dump($post['id_kompetisi']);die();

        $data['tahun'] = $post['tahun'];
        $data['id_cabor'] = $post['id_cabor'];
        $data['id_kompetisi'] = $post['id_kompetisi'];
        $data['jml_emas'] = $post['jml_emas'];
        $data['jml_perak'] = $post['jml_perak'];
        $data['jml_perunggu'] = $post['jml_perunggu'];
        if ($command == 'add') {
            $data['create_at'] = $this->aSG_dateTimeNow;
            if ($this->M_admin->insert($data, 'medali') === TRUE) {
                $alert = array(
                    'message' => 'Data Berhasil disimpan',
                    'type' => 'success',
                );
            } else {
                $alert = array(
                    'message' => 'Error PRATA 1 : Data Gagal disimpan!',
                    'type' => 'error',
                );
            }
        } else if ($command == 'update') {
            $id = $post['id'];
            if ($this->M_admin->update($data, 'medali', $id) === TRUE) {
                $alert = array(
                    'message' => 'Data Berhasil diperbaharui',
                    'type' => 'success',
                );
            } else {
                $alert = array(
                    'message' => 'Error PRATU : Data Gagal diperbaharui',
                    'type' => 'error',
                );
            }
        } else {
            $alert = array(
                'message' => 'Error : Action Not Recognized',
                'type' => 'error',
            );
        }
        echo json_encode($alert);
    }

    public function postUser($command)
    {
        $post = $this->input->post();
        $userdata = $this->session->userdata('userdata');

        $data['name'] = $post['name'];
        $data['username'] = $post['username'];
        if ($command == 'add') {
            $data['password'] = $post['password'];
            if ($this->M_admin->insert($data, 'user') === TRUE) {
                $alert = array(
                    'message' => 'Data Berhasil disimpan',
                    'type' => 'success',
                );
            } else {
                $alert = array(
                    'message' => 'Error 1 : Data Gagal disimpan!',
                    'type' => 'error',
                );
            }
        } else if ($command == 'update') {
            $id = $post['id'];
            $oldData = $this->M_admin->getRecordByID('user',$id);
            $data['password'] = ($oldData->password != $post['password']) ? $post['password'] : $oldData->password;
            if ($this->M_admin->update($data, 'user', $id) === TRUE) {
                $alert = array(
                    'message' => 'Data Berhasil diperbaharui',
                    'type' => 'success',
                );
            } else {
                $alert = array(
                    'message' => 'Error 2 : Data Gagal diperbaharui',
                    'type' => 'error',
                );
            }
        } else {
            $alert = array(
                'message' => 'Error : Action Not Recognized',
                'type' => 'error',
            );
        }
        echo json_encode($alert);
    }
    public function delete($tb, $id)
    {
        if (isset($id)) {
            if ($this->M_admin->delete($tb, $id) === TRUE) {
                $alert = array(
                    'message' => 'Data Berhasil dihapus',
                    'type' => 'success',
                );
            } else {
                $alert = array(
                    'message' => 'Data Gagal dihapus',
                    'type' => 'error',
                );
            }
        } else {
            $alert = array(
                'message' => 'Data tidak ditemukan',
                'type' => 'error',
            );
        }
        echo json_encode($alert);
    }
}
