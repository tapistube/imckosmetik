<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Glory
 * Date: 29/11/2018
 * Time: 9:26
 */
class Barang extends CI_Controller
{
    var $userSession;
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
        $this->load->view('barang/barang');
        $this->load->view('footer');
    }

}