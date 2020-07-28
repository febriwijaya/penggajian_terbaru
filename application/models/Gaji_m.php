<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gaji_m extends CI_Model
{

  public function get($id = null)
  {
    $this->db->from('gaji');
    if ($id != null) {
      $this->db->where('id', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function add($post)
  {
    $params['nama'] = $post['nama'];
    $params['jabatan'] = $post['jabatan'];
    $params['absensi'] = $post['absensi'];
    $params['gaji_pokok'] = $post['gaji_pokok'];
    $params['tunjangan'] = $post['tunjangan'];
    $params['bonus'] = $post['bonus'];
    $params['lembur'] = $post['lembur'];
    $params['bpjs1'] = $post['bpjs1'];
    $params['bpjs2'] = $post['bpjs2'];
    $params['listrik'] = $post['listrik'];
    $params['asuransi'] = $post['asuransi'];
    $params['total_pendapatan'] = $post['total_pendapatan'];
    $params['total_potongan'] = $post['total_potongan'];
    $params['gaji_bersih'] = $post['gaji_bersih'];
    $this->db->insert('gaji', $params);
  }

  public function edit($post)
  {
    $params['nama'] = $post['nama'];
    $params['jabatan'] = $post['jabatan'];
    $params['absensi'] = $post['absensi'];
    $params['gaji_pokok'] = $post['gaji_pokok'];
    $params['tunjangan'] = $post['tunjangan'];
    $params['bonus'] = $post['bonus'];
    $params['lembur'] = $post['lembur'];
    $params['bpjs1'] = $post['bpjs1'];
    $params['bpjs2'] = $post['bpjs2'];
    $params['listrik'] = $post['listrik'];
    $params['asuransi'] = $post['asuransi'];
    $params['total_pendapatan'] = $post['total_pendapatan'];
    $params['total_potongan'] = $post['total_potongan'];
    $params['gaji_bersih'] = $post['gaji_bersih'];
    $this->db->where('id', $post['id']);
    $this->db->update('gaji', $params);
  }

  public function del($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('gaji');
  }
}
