<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gaji extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_not_login();
    $this->load->model('gaji_m');
  }

  public function index()
  {
    $data['row'] =  $this->gaji_m->get();
    $data['title'] = "Data Gaji Penggajian";
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar');
    $this->load->view('gaji/gaji_data', $data);
    $this->load->view('template/footer');
  }

  public function show($id)
  {
    $data['row'] =  $this->gaji_m->get($id);
    $data['title'] = "Data detail Gaji Karyawan";
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar');
    $this->load->view('gaji/gaji_detail', $data);
    $this->load->view('template/footer');
  }

  public function add()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
    $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
    $this->form_validation->set_rules('absensi', 'Absensi', 'trim|required|numeric');
    $this->form_validation->set_rules('gaji_pokok', 'Gaji Pokok', 'trim|required');
    $this->form_validation->set_rules('tunjangan', 'Tunjangan', 'trim|required|numeric');
    $this->form_validation->set_rules('bonus', 'Bonus', 'trim|required|numeric');
    $this->form_validation->set_rules('lembur', 'Lembur', 'trim|required|numeric');
    $this->form_validation->set_rules('bpjs1', 'Bpjs ketenaga kerja', 'trim|required|numeric');
    $this->form_validation->set_rules('bpjs2', 'Bpjs keterangan kesehatan', 'trim|required|numeric');
    $this->form_validation->set_rules('listrik', 'Listrik', 'trim|required');
    $this->form_validation->set_rules('asuransi', 'Asuransi', 'trim|required|numeric');
    $this->form_validation->set_rules('total_pendapatan', 'Total Pendapatan', 'trim|required|numeric');
    $this->form_validation->set_rules('total_potongan', 'Total Potongan', 'trim|required|numeric');
    $this->form_validation->set_rules('gaji_bersih', 'Gaji Bersih', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      $data['title'] = "Tambah Data Gaji Pegawai";
      $this->load->view('template/header', $data);
      $this->load->view('template/sidebar');
      $this->load->view('gaji/tambah_data');
      $this->load->view('template/footer');
    } else {
      $post = $this->input->post(null, TRUE);
      $this->gaji_m->add($post);
      if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('success', 'Data berhasil disimpan!');
      }
      redirect('gaji');
    }
  }

  public function edit($id)
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
    $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
    $this->form_validation->set_rules('absensi', 'Absensi', 'trim|required|numeric');
    $this->form_validation->set_rules('gaji_pokok', 'Gaji Pokok', 'trim|required');
    $this->form_validation->set_rules('tunjangan', 'Tunjangan', 'trim|required|numeric');
    $this->form_validation->set_rules('bonus', 'Bonus', 'trim|required|numeric');
    $this->form_validation->set_rules('lembur', 'Lembur', 'trim|required|numeric');
    $this->form_validation->set_rules('bpjs1', 'Bpjs ketenaga kerja', 'trim|required|numeric');
    $this->form_validation->set_rules('bpjs2', 'Bpjs keterangan kesehatan', 'trim|required|numeric');
    $this->form_validation->set_rules('listrik', 'Listrik', 'trim|required');
    $this->form_validation->set_rules('asuransi', 'Asuransi', 'trim|required|numeric');
    $this->form_validation->set_rules('total_pendapatan', 'Total Pendapatan', 'trim|required|numeric');
    $this->form_validation->set_rules('total_potongan', 'Total Potongan', 'trim|required|numeric');
    $this->form_validation->set_rules('gaji_bersih', 'Gaji Bersih', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      $query = $this->gaji_m->get($id);
      if ($query->num_rows() > 0) {
        $data['row'] = $query->row();
        $data['title'] = "Edit Data Gaji Pegawai";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('gaji/edit_data', $data);
        $this->load->view('template/footer');
      } else {
        echo "<script>
          alert('data tidak ditemukan!');
          window.location = '" . base_url('gaji') . "';
        </script>";
      }
    } else {
      $post = $this->input->post(null, TRUE);
      $this->gaji_m->edit($post);
      if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('success', 'Data berhasil diubah!');
      }
      redirect('gaji');
    }
  }

  public function del()
  {
    $id = $this->input->post('id');
    $this->gaji_m->del($id);
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('error', 'Data berhasil dihapus!');
    }
    redirect('gaji');
  }

  public function print_data()
  {
    $data['row'] = $this->gaji_m->get();
    $html = $this->load->view('print/data_gaji', $data, true);
    $this->fungsi->PdfGenerator($html, 'Data_gaji', 'A4', 'potrait');
  }

  public function print_detail($id)
  {
    $data['row'] = $this->gaji_m->get($id);
    $html = $this->load->view('print/data_gaji_detail', $data, true);
    $this->fungsi->PdfGenerator($html, 'Data_detail_gaji', 'A4', 'potrait');
  }
}
