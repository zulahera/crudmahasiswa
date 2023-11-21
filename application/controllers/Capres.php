
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Capres extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Capres_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Capres";
        $data['prodi'] = $this->Capres_model->get();
        $this->load->view("layout/header");
        $this->load->view("capres/vw_capres", $data);
        $this->load->view("layout/footer");
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Capres";
        $this->load->view("layout/header");
        $this->load->view("capres/vw_tambah_capres", $data);
        $this->load->view("layout/footer");
    }

    public function hapus($id)
    {
        $this->Prodi_model->delete($id);
        redirect('Capres');
    }

    public function detail($id)
    {
        $data['judul'] = "Halaman Detail  Capres";
        $data['prodi'] = $this->Prodi_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("capres/vw_detail_capres", $data);
        $this->load->view("layout/footer");
    }
    function upload()
    {
        $data = [
            'NIK' => $this->input->post('NIK'),
            'NamaLengkap' => $this->input->post('NamaLengkap'),
            'Asal' => $this->input->post('Asal'),
            'PartaiPendukung' => $this->input->post('PartaiPendukung'),
            'RiwayatPekerjaan' => $this->input->post('RiwayatPekerjaan'),
            'Umur' => $this->input->post('Umur')

        ];

        $this->Capres_model->insert($data);
        redirect('Capres');
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit Capres";
        $data['capres'] = $this->Capres_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("capres/vw_edit_capres", $data);
        $this->load->view("layout/footer");
    }


    function ubah()
    {
        $data = [
            'NIK' => $this->input->post('NIK'),
            'NamaLengkap' => $this->input->post('NamaLengkap'),
            'Asal' => $this->input->post('Asal'),
            'PartaiPendukung' => $this->input->post('PartaiPendukung'),
            'RiwayatPekerjaan' => $this->input->post('RiwayatPekerjaan'),
            'Umur' => $this->input->post('Umur'),


        ];
        $id = $this->input->post('id');
        $this->Prodi_model->update(['id' => $id], $data);
        redirect('Capres');
    }
}

