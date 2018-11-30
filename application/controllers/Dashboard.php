<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Glory
 * Date: 27/11/2018
 * Time: 16:57
 */
class Dashboard extends CI_Controller
{
    var $userSession;
    public function __construct()
    {
        parent::__construct();
      //  $this->load->helper(array('url','form'));
       // $this->load->library(array('session','encryption'));
        $this->userSession = $this->session->userdata('user');
    }

    public function index(){
        $hakAkses = $this->session->userdata('hak_akses');

        if($hakAkses != "") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('dashboard/dashboard');
            $this->load->view('footer');
        } else {
            redirect("Login");
        }
    }
}