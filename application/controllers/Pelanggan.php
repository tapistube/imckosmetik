<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Glory
 * Date: 29/11/2018
 * Time: 15:18
 */
class Pelanggan extends CI_Controller
{

    var $userSession;
    var $tbl_pelanggan = "mst_pelanggan";
    function __construct()
    {
        parent::__construct();
        $hakAkses = $this->session->userdata('hak_akses');
        if ($hakAkses != ""){

        }else{
            redirect('Login');
        }
    }

    function index(){
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('pelanggan/pelanggan');
        $this->load->view('footer');
    }

    function simpan(){
        $in['nama_pelanggan'] = $this->input->post('namaPelanggan');
        $in['jenis_pelanggan'] = $this->input->post('jenis');
        $in['no_hp'] = $this->input->post('noHape');
        $in['no_telepon'] = $this->input->post('noTelepon');
        $in['no_ktp'] = $this->input->post('noKtp');
        $in['alamat'] = $this->input->post('alamat');

        $this->db->insert($this->tbl_pelanggan,$in);
        $this->session->set_flashdata("success","Tambah Data Pelanggan Berhasil");

    }
}