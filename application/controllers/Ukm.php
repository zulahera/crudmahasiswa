<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ukm extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Ukm_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman UKM";
    $data['ukm'] = $this->Ukm_model->get();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view("layout/header", $data);
    $this->load->view("ukm/vw_ukm", $data);
    $this->load->view("layout/footer");
  }
  function tambah()
  {
    $data['judul'] = "Halaman Tambah Ukm Mahasiswa";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['ukm'] = $this->Ukm_model->get();

    $this->form_validation->set_rules('nama_ukm', 'Nama UKM', 'required', ['required' => 'Nama UKM Wajib di isi']);
    $this->form_validation->set_rules('bidang', 'Bidang', 'required', ['required' => 'Bidang Wajib di isi']);
    $this->form_validation->set_rules('jumlah_anggota', 'Jumlah anggota', 'required', ['required' => 'Jumlah anggota Mahasiswa Wajib di isi']);
    $this->form_validation->set_rules('nama_pembina', 'Nama Pembina', 'required', ['required' => 'Nama pembina  Mahasiswa Wajib di isi']);
    $this->form_validation->set_rules('nama_ketua', 'Nama ketua', 'required', ['required' => 'Nama ketua Wajib di isi']);

    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header", $data);
      $this->load->view("ukm/vw_tambah_ukm", $data);
      $this->load->view("layout/footer");
    } else {
      $data = [
        'nama_ukm' => $this->input->post('nama_ukm'),
        'bidang' => $this->input->post('bidang'),
        'jumlah_anggota' => $this->input->post('jumlah_anggota'),
        'nama_pembina' => $this->input->post('nama_pembina'),
        'nama_ketua' => $this->input->post('nama_ketua'),

      ];
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
Ukm Berhasil Ditambah!</div>');
      redirect('Ukm');

      $this->Ukm_model->insert($data);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Ukm Berhasil Ditambah!</div>');
      redirect('Ukm');
    }
  }

  public function detail($id)
  {
    $data['judul'] = "Halaman Detail  UKM";
    $data['ukm'] = $this->Ukm_model->getById($id);
    $this->load->view("layout/header");
    $this->load->view("ukm/vw_detail_ukm", $data);
    $this->load->view("layout/footer");
  }


  function edit($id)
  {
    $data['judul'] = "Halaman Edit UKM";
    $data['ukm'] = $this->Ukm_model->getById($id);
    $data['user'] = $this->db->get_where('user', [
      'nama' =>
        $this->session->userdata('nama_ukm')
    ])->row_array();
    $this->form_validation->set_rules('nama_ukm', 'Nama UKM', 'required', [
      'required' => 'Nama UKM Ukm Wajib di isi'
    ]);
    $this->form_validation->set_rules('bidang', 'Bidang', 'required', [
      'required' => 'Bidang Wajib di isi'
    ]);
    $this->form_validation->set_rules('jumlah_anggota', 'Jumlah anggota', 'required', [
      'required' => 'Jumlah anggota  Wajib di isi'
    ]);
    $this->form_validation->set_rules('nama_pembina', 'Nama pembina', 'required', [
      'required' => 'Nama pembina  Wajib di isi'
    ]);
    $this->form_validation->set_rules('nama_ketua', 'Nama Ketua', 'required', [
      'required' => 'Nama Ketua  Wajib di isi'
    ]);
    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header", $data);
      $this->load->view("ukm/vw_edit_ukm", $data);
      $this->load->view("layout/footer");
    } else {
      $data = [
        'nama_ukm' => $this->input->post('nama_ukm'),
        'bidang' => $this->input->post('bidang'),
        'jumlah_anggota' => $this->input->post('jumlah_anggota'),
        'nama_pembina' => $this->input->post('nama_pembina'),
        'nama_ketua' => $this->input->post('nama_ketua'),
      ];
      $id = $this->input->post('id');
      $this->Ukm_model->update(['id' => $id], $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success"
role="alert">Data UKM Berhasil DiUbah!</div>');
      redirect('Ukm');
    }
  }
  function ubah()
  {
    $data = [
      'nama_ukm' => $this->input->post('nama_ukm'),
      'bidang' => $this->input->post('bidang'),
      'jumlah_anggota' => $this->input->post('jumlah_anggota'),
      'nama_pembina' => $this->input->post('nama_pembina'),
      'nama_ketua' => $this->input->post('nama_ketua'),
    ];
    $id = $this->input->post('id');
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Dosen Berhasil
Diubah!</div>');
    redirect('Ukm');
  }
  public function hapus($id)
  {
    $this->Ukm_model->delete($id);
    $error = $this->db->error();
    if ($error['code'] != 0) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
fas fa-info-circle"></i>Data UKM tidak dapat dihapus (sudah berelasi)!</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
class="icon fas fa-check-circle"></i>Data UKM Berhasil Dihapus!</div>');
    }
    redirect('Ukm');
  }

}

