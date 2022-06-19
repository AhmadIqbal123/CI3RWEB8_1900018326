<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('login/view_login');
    }

    function aksi()
    {
        $admin_login = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() != false) {
            $data = $this->M_login->login_admin($admin_login['email'], $admin_login['password']);

            if ($data) {
                $this->session->set_userdata('id', $data['id']);
                $this->session->set_userdata('nama', $data['nama']);

                redirect('jurnal');
            } else {
                redirect('Login');
            }
        } else {
            $this->load->view('login/view_login');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url());
    }
}
