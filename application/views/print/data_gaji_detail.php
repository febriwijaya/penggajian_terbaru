<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Data Detail Gaji Pegawai!</title>
  <style>
    td,
    th {
      padding: 10px 0;
    }
  </style>
</head>

<body>
  <div class="mt-5 mb-3">
    <h1 class="h5 text-center font-weight-bold">PT. Agro Muko Bunga Tanjung</h1>
    <h2 class="h5 text-center font-weight-bold">Slip Gaji Karyawan Tetap</h2>
  </div>
  <hr style="width: 100%; border:2px solid black">

  <?php foreach ($row->result() as $key => $data) : ?>
    <div class="row mt-4">
      <div class="col-md">
        <table>
          <tr>
            <td> <small>Nama</small> </td>
            <td class="pl-3 pr-3"> <small>:</small> </td>
            <td> <small><?= $data->nama  ?></small> </td>
          </tr>
          <tr>
            <td> <small>Jabatan</small> </td>
            <td class="pl-3 pr-3"> <small>:</small> </td>
            <td> <small><?= $data->jabatan ?></small> </td>
          </tr>
          <tr>
            <td> <small>Jumlah absensi</small> </td>
            <td class="pl-3 pr-3"> <small>:</small> </td>
            <td> <small><?= $data->absensi ?></small> </td>
          </tr>
          <tr>
            <td> <small>Gaji pokok</small> </td>
            <td class="pl-3 pr-3"> <small>:</small> </td>
            <td> <small>Rp.<?= $data->gaji_pokok ?></small> </td>
          </tr>
          <tr>
            <td> <small>Tunjangan</small> </td>
            <td class="pl-3 pr-3"> <small>:</small> </td>
            <td> <small>Rp.<?= $data->tunjangan ?></small> </td>
          </tr>
          <tr>
            <td> <small>bonus</small> </td>
            <td class="pl-3 pr-3"> <small>:</small> </td>
            <td> <small>Rp.<?= $data->bonus ?></small> </td>
          </tr>
          <tr>
            <td> <small>Lembur</small> </td>
            <td class="pl-3 pr-3"> <small>:</small> </td>
            <td> <small>Rp.<?= $data->lembur ?></small> </td>
          </tr>
          <tr>
            <td> <small>Bpjs ketenaga kerjaan</small> </td>
            <td class="pl-3 pr-3"> <small>:</small> </td>
            <td> <small>Rp.<?= $data->bpjs1 ?></small> </td>
          </tr>
          <tr>
            <td> <small>Bpjs keterangan kesehatan</small> </td>
            <td class="pl-3 pr-3"> <small>:</small> </td>
            <td> <small>Rp.<?= $data->bpjs2 ?></small> </td>
          </tr>
          <hr>
          <tr>
            <td> <small>Total pendapatan</small> </td>
            <td class="pl-3 pr-3"> <small>:</small> </td>
            <td class="font-weight-bold"> <small>Rp.<?= $data->total_pendapatan ?></small> </td>
          </tr>
        </table>
        <div class="col-md">
          <table>
            <tr>
              <td><small>Potongan</small> </td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td> <small>Listrik</small> </td>
              <td class="pl-3 pr-3"> <small>:</small> </td>
              <td> <small>Rp.<?= $data->listrik ?></small> </td>
            </tr>
            <tr>
              <td> <small>Asuransi</small> </td>
              <td class="pl-3 pr-3"> <small>:</small> </td>
              <td> <small>Rp.<?= $data->asuransi ?></small> </td>
            </tr>
            <hr>
            <tr>
              <td> <small>Total potongan</small> </td>
              <td class="pl-3 pr-3"> <small>:</small> </td>
              <td class="font-weight-bold"> <small>Rp.<?= $data->total_potongan ?></small> </td>
            </tr>
            <tr>
              <td> <small>Gaji bersih</small> </td>
              <td class="pl-3 pr-3"> <small>:</small> </td>
              <td class="font-weight-bold"> <small>Rp.<?= $data->gaji_bersih ?></small> </td>
            </tr>
          </table>
        </div>
      </div>
    <?php endforeach; ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>