<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Prodi_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Prodi";
    $data['prodi'] = $this->Prodi_model->get();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view("layout/header", $data);
    $this->load->view("prodi/vw_prodi", $data);
    $this->load->view("layout/footer");
  }
  function tambah()
  {
    $data['judul'] = "Halaman Tambah Prodi Mahasiswa";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['prodi'] = $this->Prodi_model->get();

    $this->form_validation->set_rules('nama', 'Nama Prodi', 'required', ['required' => 'Nama Prodi Wajib di isi']);
    $this->form_validation->set_rules('ruangan', 'Ruangan', 'required', ['required' => 'Ruangan Wajib di isi']);
    $this->form_validation->set_rules('jurusan', 'jurusan', 'required', ['required' => 'Prodi Mahasiswa Wajib di isi']);
    $this->form_validation->set_rules('nama_kaprodi', 'Prodi', 'required', ['required' => 'Nama kaprodi Mahasiswa Wajib di isi']);
    $this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required', ['required' => 'Akreditasi Wajib di isi']);
    $this->form_validation->set_rules('tahun_berdiri', 'Tahun Berdiri', 'required', ['required' => 'Tahun Berdiri Wajib di isi']);
    $this->form_validation->set_rules('output_lulusan', 'Output Lulusan', 'required', ['required' => 'Output lulusan Wajib di isi']);


    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header", $data);
      $this->load->view("prodi/vw_tambah_prodi", $data);
      $this->load->view("layout/footer");
    } else {
      $data = [
        'nama' => $this->input->post('nama'),
        'ruangan' => $this->input->post('ruangan'),
        'jurusan' => $this->input->post('jurusan'),
        'nama_kaprodi' => $this->input->post('nama_kaprodi'),
        'akreditasi' => $this->input->post('akreditasi'),
        'tahun_berdiri' => $this->input->post('tahun_berdiri'),
        'output_lulusan' => $this->input->post('output_lulusan')

      ];
      $upload_image = $_FILES['gambar']['name'];
      if ($upload_image) {
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['upload_path'] = './assets/img/prodi/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
          $new_image = $this->upload->data('file_name');
          $this->db->set('gambar', $new_image);
        } else {
          echo $this->upload->display_errors();
        }
      }
      $this->Prodi_model->insert($data, $upload_image);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
Mahasiswa Berhasil Ditambah!</div>');
      redirect('Prodi');

      $this->Prodi_model->insert($data);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Mahasiswa Berhasil Ditambah!</div>');
      redirect('Prodi');
    }
  }

  public function detail($id)
  {
    $data['judul'] = "Halaman Detail  Prodi";
    $data['prodi'] = $this->Prodi_model->getById($id);
    $this->load->view("layout/header");
    $this->load->view("prodi/vw_detail_prodi", $data);
    $this->load->view("layout/footer");
  }


  function edit($id)
  {
    $data['judul'] = "Halaman Edit Prodi";
    $data['prodi'] = $this->Prodi_model->getById($id);
    $data['user'] = $this->db->get_where('user', [
      'nama' =>
        $this->session->userdata('nama')
    ])->row_array();
    $this->form_validation->set_rules('nama', 'Nama Prodi', 'required', [
      'required' => 'Nama Prodi Wajib di isi'
    ]);
    $this->form_validation->set_rules('ruangan', 'ruangan', 'required', [
      'required' => 'ruangan Wajib di isi'
    ]);
    $this->form_validation->set_rules('jurusan', 'jurusan', 'required', [
      'required' => 'Jurusan  Wajib di isi'
    ]);
    $this->form_validation->set_rules('akreditasi', 'akreditasi', 'required', [
      'required' => 'Akreditasi  Wajib di isi'
    ]);
    $this->form_validation->set_rules('nama_kaprodi', 'nama kaprodi', 'required', [
      'required' => 'nama kaprodi  Wajib di isi'
    ]);
    $this->form_validation->set_rules('tahun_berdiri', 'tahun_berdiri', 'required', [
      'required' => 'nama kaprodi  Mahasiswa Wajib di isi'
    ]);
    $this->form_validation->set_rules('output_lulusan', 'output_lulusan', 'required', [
      'required' => 'output_lulusan Mahasiswa Wajib di isi'
    ]);

    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header", $data);
      $this->load->view("prodi/vw_edit_prodi", $data);
      $this->load->view("layout/footer");
    } else {
      $data = [
        'nama' => $this->input->post('nama'),
        'ruangan' => $this->input->post('ruangan'),
        'jurusan' => $this->input->post('jurusan'),
        'akreditasi' => $this->input->post('akreditasi'),
        'nama_kaprodi' => $this->input->post('nama_kaprodi'),
        'tahun_berdiri' => $this->input->post('tahun_berdiri'),
        'output_lulusan' => $this->input->post('output_lulusan'),
      ];
      $id = $this->input->post('id');
      $this->Prodi_model->update(['id' => $id], $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success"
role="alert">Data Prodi Berhasil DiUbah!</div>');
      redirect('Prodi');
    }
  }


  function ubah()
  {
    $data = [
      'nama' => $this->input->post('nama'),
      'ruangan' => $this->input->post('ruangan'),
      'jurusan' => $this->input->post('jurusan'),
      'akreditasi' => $this->input->post('akreditasi'),
      'nama_kaprodi' => $this->input->post('nama_kaprodi'),
      'tahun_berdiri' => $this->input->post('tahun_berdiri'),
      'output_lulusan' => $this->input->post('output_lulusan'),

    ];
    $upload_image = $_FILES['gambar']['name'];
    if ($upload_image) {
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = '2048';
      $config['upload_path'] = './assets/img/prodi/';
      $this->load->library('upload', $config);
      if ($this->upload->do_upload('gambar')) {
        $old_image = $data['prodi']['gambar'];
        if ($old_image != 'default.jpg') {
          unlink(FCPATH . 'assets/img/prodi/' . $old_image);
        }
        $new_image = $this->upload->data('file_name');
        $this->db->set('gambar', $new_image);
      } else {
        echo $this->upload->display_errors();
      }
    }
    $id = $this->input->post('id');
    $this->Prodi_model->update(['id' => $id], $data, $upload_image);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Dosen Berhasil
Diubah!</div>');
    redirect('Prodi');
  }

  public function hapus($id)
  {
    $this->Prodi_model->delete($id);
    $error = $this->db->error();
    if ($error['code'] != 0) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
fas fa-info-circle"></i>Data Prodi tidak dapat dihapus (sudah berelasi)!</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
class="icon fas fa-check-circle"></i>Data Prodi Berhasil Dihapus!</div>');
    }
    redirect('Prodi');
  }

}

