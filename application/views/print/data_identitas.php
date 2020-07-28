<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Detail Data Pegawai</title>
  <style>
    th,
    td {
      padding: 10px 0;
    }
  </style>
</head>

<body>
  <h1 class="h5 text-center mb-3 mt-5">Identitas Pegawai PT. Agro Muko Bunga Tanjung</h1>
  <hr style="width: 100%; border:2px solid black">
  <div class="container">
    <?php foreach ($row->result() as $key => $data) : ?>
      <div class="row justify-content-center">
        <table class="mt-4 mb-4">
          <tr>
            <td>Nama</td>
            <td class="pl-4 pr-4">:</td>
            <td><?= $data->nama ?></td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td class="pl-4 pr-4">:</td>
            <td><?= $data->jenkel ?></td>
          </tr>
          <tr>
            <td>Tempat lahir</td>
            <td class="pl-4 pr-4">:</td>
            <td><?= $data->tempat_lahir ?></td>
          </tr>
          <tr>
            <td>Tanggal lahir</td>
            <td class="pl-4 pr-4">:</td>
            <td><?= $data->tanggal_lahir  ?></td>
          </tr>
          <tr>
            <td>Jabatan</td>
            <td class="pl-4 pr-4">:</td>
            <td><?= $data->jabatan_name ?></td>
          </tr>
        </table>
      </div>
    <?php endforeach; ?>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>