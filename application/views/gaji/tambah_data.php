    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-dark bg-dark topbar mb-4 static-top shadow">
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <!-- Topbar Search -->
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
            </li>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= ucfirst($this->fungsi->user_login()->username) ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url('uploads/gambar/' .  $this->fungsi->user_login()->gambar) ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <!-- Content Row -->
          <div class="container">
            <div class="row">
              <div class="col-md">
                <div class="card">
                  <div class="card-header text-center">
                    Form Tambah Data
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm- p-2">
                        <a class="btn btn-warning" href="<?= base_url('user') ?>"><i class="fas fa-undo-alt"></i> Back</a>
                      </div>
                    </div>
                    <div class="row mt-4">
                      <div class="col-sm">
                        <form action="<?= base_url('gaji/add') ?>" method="post">
                          <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="<?= set_value('nama') ?>" placeholder="Nama....">
                            <?= form_error('nama', '<p class="text-danger">', '</p>'); ?>
                          </div>
                          <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" id="jabatan" value="<?= set_value('jabatan') ?>" placeholder="Jabatan....">
                            <?= form_error('jabatan', '<p class="text-danger">', '</p>'); ?>
                          </div>
                          <div class="form-group">
                            <label for="absensi">Jumlah Absensi</label>
                            <input type="text" class="form-control" name="absensi" id="absensi" placeholder="Absensi....">
                            <?= form_error('absensi', '<p class="text-danger">', '</p>'); ?>
                          </div>
                          <div class="form-group">
                            <label for="gaji_pokok">Gaji Pokok</label>
                            <input type="text" class="form-control" name="gaji_pokok" id="gaji_pokok" value="<?= set_value('gaji_pokok'); ?>" placeholder="Gaji Pokok....">
                            <?= form_error('gaji_pokok', '<p class="text-danger">', '</p>'); ?>
                          </div>
                          <div class="form-group">
                            <label for="tunjangan">Tunjangan</label>
                            <input type="text" class="form-control" name="tunjangan" id="tunjangan" value="<?= set_value('tunjangan'); ?>" placeholder="Tunjangan....">
                            <?= form_error('tunjangan', '<p class="text-danger">', '</p>'); ?>
                          </div>
                          <div class="form-group">
                            <label for="bonus">Bonus</label>
                            <input type="text" class="form-control" name="bonus" id="bonus" value="<?= set_value('bonus'); ?>" placeholder="Bonus....">
                            <?= form_error('bonus', '<p class="text-danger">', '</p>'); ?>
                          </div>
                          <div class="form-group">
                            <label for="lembur">Lembur</label>
                            <input type="text" class="form-control" name="lembur" id="lembur" value="<?= set_value('lembur'); ?>" placeholder="Lembur....">
                            <?= form_error('lembur', '<p class="text-danger">', '</p>'); ?>
                          </div>
                          <div class="form-group">
                            <label for="bpjs1">Bpjs Ketenaga kerjaan</label>
                            <input type="text" class="form-control" name="bpjs1" id="bpjs1" value="<?= set_value('bpjs1'); ?>" placeholder="Bpjs Ketenaga kerjaan....">
                            <?= form_error('bpjs1', '<p class="text-danger">', '</p>'); ?>
                          </div>
                          <div class="form-group">
                            <label for="bpjs2">Bpjs Keterangan kesehatan</label>
                            <input type="text" class="form-control" name="bpjs2" id="bpjs2" value="<?= set_value('bpjs2'); ?>" placeholder="Bpjs Keterangan kesehatan....">
                            <?= form_error('bpjs2', '<p class="text-danger">', '</p>'); ?>
                          </div>
                          <div class="form-group">
                            <label for="listrik">Listrik</label>
                            <input type="text" class="form-control" name="listrik" id="listrik" value="<?= set_value('listrik'); ?>" placeholder="Listrik....">
                            <?= form_error('listrik', '<p class="text-danger">', '</p>'); ?>
                          </div>
                          <div class="form-group">
                            <label for="asuransi">Asuransi</label>
                            <input type="text" class="form-control" name="asuransi" id="asuransi" value="<?= set_value('asuransi'); ?>" placeholder="Asuransi....">
                            <?= form_error('asuransi', '<p class="text-danger">', '</p>'); ?>
                          </div>
                          <br><br>
                          <div class="form-group">
                            <p class="text-danger">Tekan tombol hitung di bawah untuk menghitung</p>
                            <button type="button" onclick="hitung()" class="btn btn-sm btn-primary">Hitung</button>
                          </div>
                          <div class="form-group">
                            <label for="total_pendapatan">Total pendapatan</label>
                            <input type="text" class="form-control" name="total_pendapatan" id="total_pendapatan" value="<?= set_value('total_pendapatan'); ?>" placeholder="Total Pendapatan....">
                            <?= form_error('total_pendapatan', '<p class="text-danger">', '</p>'); ?>
                          </div>
                          <div class="form-group">
                            <label for="total_potongan">Total potongan</label>
                            <input type="text" class="form-control" name="total_potongan" id="total_potongan" value="<?= set_value('total_potongan'); ?>" placeholder="Total potongan....">
                            <?= form_error('total_potongan', '<p class="text-danger">', '</p>'); ?>
                          </div>
                          <div class="form-group">
                            <label for="gaji_bersih">Gaji Bersih</label>
                            <input type="text" class="form-control" name="gaji_bersih" id="gaji_bersih" value="<?= set_value('gaji_bersih'); ?>" placeholder="Gaji Bersih....">
                            <?= form_error('gaji_bersih', '<p class="text-danger">', '</p>'); ?>
                          </div>
                          <button type="submit" name="submit" class="btn btn-primary"><i class="far fa-paper-plane"></i> Submit</button>
                          <button type="reset" class="btn btn-danger"><i class="fas fa-trash-restore-alt"></i> Reset</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Erna Sihombing <?= date('Y'); ?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin keluar?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Tekan Logout dibawah jika anda ingin keluar.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <script>
      function hitung() {
        var gapok = parseInt(document.getElementById("gaji_pokok").value);
        var tunjangan = parseInt(document.getElementById("tunjangan").value);
        var bonus = parseInt(document.getElementById("bonus").value);
        var lembur = parseInt(document.getElementById("lembur").value);
        var bpjs1 = parseInt(document.getElementById("bpjs1").value);
        var bpjs2 = parseInt(document.getElementById("bpjs2").value);

        var pendapatan = gapok + tunjangan + bonus + lembur + bpjs1 + bpjs2;
        document.getElementById("total_pendapatan").value = pendapatan;

        var listrik = parseInt(document.getElementById("listrik").value);
        var asuransi = parseInt(document.getElementById("asuransi").value);

        var total_potongan = listrik + asuransi;
        document.getElementById("total_potongan").value = total_potongan;

        var gaji_bersih = pendapatan - total_potongan;
        document.getElementById("gaji_bersih").value = gaji_bersih;
      }
    </script>