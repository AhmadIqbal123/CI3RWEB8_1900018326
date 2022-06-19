<?php
class Jurnal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jurnal_model');
        $this->load->library('form_validation');
        if (!$this->session->userdata('id') && !$this->session->userdata('nama')) {
            redirect('/');
        }
    }
    public function index()
    {
        $data['judul'] = 'Daftar Jurnal';
        $data['jurnal'] = $this->Jurnal_model->getAllJurnal();
        $this->load->view('template/header', $data);
        $this->load->view('jurnal/index');
        $this->load->view('template/footer');
    }
    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Jurnal';
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'required');
        $this->form_validation->set_rules('vol', 'Vol', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('jurnal/tambah');
            $this->load->view('template/footer');
        } else {
            $this->Jurnal_model->tambahDataJurnal();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('jurnal');
        }
    }
    public function hapus($id)
    {
        $this->Jurnal_model->hapusDataJurnal($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('jurnal');
    }
    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Jurnal';
        $data['jurnal'] = $this->Jurnal_model->getJurnalById($id);
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'required');
        $this->form_validation->set_rules('vol', 'Vol', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('jurnal/ubah', $data);
            $this->load->view('template/footer');
        } else {
            $this->Jurnal_model->ubahDataJurnal();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('jurnal');
        }
    }
    public function detail($id)
    {
        $data['judul'] = 'Detail Data Jurnal';
        $data['jurnal'] = $this->Jurnal_model->getJurnalById($id);
        $this->load->view('template/header', $data);
        $this->load->view('jurnal/detail', $data);
        $this->load->view('template/footer');
    }
}
