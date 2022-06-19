<?php
class Jurnal_model extends CI_model
{
    public function getAllJurnal()
    {
        return $this->db->get('jurnal')->result_array();
    }
    public function tambahDataJurnal()
    {
        $data = [
            "judul" => $this->input->post('judul', true),
            "isi" => $this->input->post('isi', true),
            "penerbit" => $this->input->post('penerbit', true),
            "penulis" => $this->input->post('penulis', true),
            "vol" => $this->input->post('vol', true),
            "tahun" => $this->input->post('tahun', true)
        ];
        $this->db->insert('jurnal', $data);
    }
    public function hapusDataJurnal($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('jurnal');
    }
    public function getJurnalById($id)
    {
        return $this->db->get_where('jurnal', ['id' => $id])->row_array();
    }
    public function ubahDataJurnal()
    {
        $data = [
            "judul" => $this->input->post('judul', true),
            "isi" => $this->input->post('isi', true),
            "penerbit" => $this->input->post('penerbit', true),
            "penulis" => $this->input->post('penulis', true),
            "vol" => $this->input->post('vol', true),
            "tahun" => $this->input->post('tahun', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('jurnal', $data);
    }
}
