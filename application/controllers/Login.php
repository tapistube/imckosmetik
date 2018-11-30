<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Glory
 * Date: 27/11/2018
 * Time: 17:03
 */
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
       // $this->load->helper(array('url','form'));
        //$this->load->library(array('session','encryption'));
        $this->load->model('M_Akun');

    }

    public function index(){
        $this->load->view('header_login');
        $this->load->view('login_form');
        $this->load->view('footer');
    }

    function signInAdmin(){
        $in['username'] = $this->input->post('username');
        $in['password'] = $this->input->post('password');
        $this->M_Akun->cekLoginAdmin($in);
    }

    function logout(){
        session_destroy();
        redirect(base_url());
    }
}