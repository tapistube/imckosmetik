<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Glory
 * Date: 28/11/2018
 * Time: 10:20
 */
class M_Akun extends CI_Model
{
    var $mst_user = 'mst_user';
    var $mst_karyawan= 'mst_karyawan';
    var $mst_posisi= 'mst_posisi';

    public function cekLoginAdmin($data){

        $username = $data['username'];
        $password = $data['password'];

        $q_admin = $this->db->query("SELECT * FROM mst_user INNER JOIN mst_karyawan ON mst_user.id_karyawan = mst_karyawan.id_karyawan INNER JOIN mst_posisi ON mst_karyawan.id_posisi = mst_posisi.id_posisi WHERE username='$username' AND password='$password' AND status_aktif = '1'");

        if ($q_admin->num_rows() > 0){
            foreach ($q_admin->result() as $data){

                $session['id_user'] = $data->id_user;
                $session['id_karyawan'] = $data->id_karyawan;
                $session['nama'] = $data->nama_karyawan;
                $session['username'] = $data->username;
                $session['hak_akses'] = $data->nama_posisi;

                $this->session->set_userdata($session);
                redirect('Dashboard');
            }
        }
    }

}