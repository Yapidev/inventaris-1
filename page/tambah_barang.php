<div class="row">
    <div class="col-lg-4">
        <div class="card mb-3">
            <div class="card-header">
                <div class="card-title">
                    <h4>Tambah Inventaris</h4>
                </div>
            </div>
            <div class="card-body">
                <?php
                if (isset($_POST['save'])) {
                    $kode_inventaris = $_POST['kode_inventaris'];
                    $nama = $_POST['nama'];
                    $kondisi = $_POST['kondisi'];
                    $jumlah = $_POST['jumlah'];
                    $id_jenis = $_POST['id_jenis'];
                    $id_ruang = $_POST['id_ruang'];
                    $keterangan = $_POST['keterangan'];
                    $id_petugas = $_POST['id_petugas'];

                    $sql = "INSERT INTO inventaris SET
                    kode_inventaris='$kode_inventaris',
                    nama='$nama', kondisi='$kondisi',
                    jumlah='$jumlah', 
                    id_jenis='$id_jenis', 
                    id_ruang='$id_ruang', 
                    keterangan='$keterangan', 
                    id_petugas='$id_petugas' 
                    ";

                    $query = mysqli_query($koneksi, $sql);
                    if ($query) {
                ?>
                        <div class="text-center alert alert-success d-flex align-items-center" role="alert">
                            Barang berhasil ditambahkan
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="text-center alert alert-danger d-flex align-items-center" role="alert">
                            Barang gagal ditambahkan
                        </div>
                <?php
                    }
                }
                ?>

                <form action="" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="kode_inventaris" id="kd_barang" placeholder="Kode Inventaris">
                        <label for="kd_barang" class="form-label">Kode Inventaris</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nama" id="nm_barang" placeholder="Nama Barang">
                        <label for="nm_barang" class="form-label">Nama Barang</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="kondisi" aria-label="">
                            <option name="kondisi" selected>Pilih</option>
                            <option name="kondisi" value="Baik">Baik</option>
                            <option name="kondisi" value="Rusak">Rusak</option>
                        </select>
                        <label for="kondisi" class="form-label">Kondisi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah">
                        <label for="jumlah" class="form-label">Jumlah</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="id_jenis" id="jenis" class="form-select">
                            <option name="" selected>Pilih</option>
                            <?php
                            $sql_jenis = "SELECT * FROM jenis";
                            $q_jenis = mysqli_query($koneksi, $sql_jenis);
                            while ($jenis = mysqli_fetch_array($q_jenis)) {
                            ?>
                                <option value="<?= $jenis['id_jenis'] ?>"><?= $jenis['nama_jenis'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <label for="jenis" class="form-label">Jenis Inventaris</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="id_ruang" id="ruang" class="form-select">
                            <option name="" selected>Pilih</option>
                            <?php
                            $sql_ruang = "SELECT * FROM ruang";
                            $q_ruang = mysqli_query($koneksi, $sql_ruang);
                            while ($ruang = mysqli_fetch_array($q_ruang)) {
                            ?>
                                <option value="<?= $ruang['id_ruang'] ?>"><?= $ruang['nama_ruang'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <label for="ruang" class="form-label">Nama Ruang</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="keterangan" placeholder="Keterangan" id="ket"></textarea>
                        <label for="ket" class="form-label">Keterangan</label>
                    </div>
                    <div class="mb-3 visually-hidden">
                        <label for="petugas" class="form-label">Jumlah</label>
                        <input type="number" name="id_petugas" value="2" class="form-control" id="petugas">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" name="save">Save</button>
                        <a href="?p=list_barang" class="btn btn-info">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>