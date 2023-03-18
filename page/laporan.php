<?php
$hari_ini = date('Y-m-d');
?>
<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">Laporan Peminjaman Inventari</div>
        <div class="panel-body">
            <form action="" class="form-inline">
                <input type="hidden" name="p" value="laporan">
                <div class="form-group">
                    <label for="">Tanggal Awal</label><br>
                    <input type="date" id="tgl_awal" name="tglDari" class="form-control" value="<?= !empty($_GET['tglDari']) ? $_GET['tglDari'] : $hari_ini?>">
                </div>
<<<<<<< HEAD
            </div>
            <div class="card-body">
                <form action="" class="d-flex align-items-center">
                    <input type="hidden" name="p" value="laporan">
                    <div class="mb-3 d-flex align-items-center mx-2">
                        <label class="form-label">Tanggal Awal</label>
                        <input type="date" class="form-control" id="tgl_awal" name="tglDari" value="<?= !empty($_GET['tglDari']) ? $_GET['tglDari'] : $hari_ini ?>">
                    </div>
                    <div class="mb-3 d-flex align-items-center mx-2">
                        <label class="form-label">Tanggal Akhir</label>
                        <input type="date" class="form-control" id="tgl_sampai" name="tglSampai" value="<?= !empty($_GET['tglSampai']) ? $_GET['tglSampai'] : $hari_ini ?>">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-sm btn-primary" name="search" value="Filter">
                        <button class="btn btn-sm btn-success" id="cetak">Cetak Laporan</button>
                    </div>
                </form>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Peminjam</th>
                            <th>Nama Inventaris</th>
                            <th>Jumlah</th>
                            <th>Tanggal Peminjam</th>
                            <th>Tanggal Pengembalian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $search = '';
=======
                <div class="form-group">
                    <label for="">Tanggal Sampai</label><br>
                    <input type="date" id="tgl_sampai" name="tglSampai" class="form-control" value="<?= !empty($_GET['tglSampai']) ? $_GET['tglSampai'] : $hari_ini?>">
                </div>
                <div class="form-group"><br>
                    <input type="submit" class="btn btn-sm btn-primary" name="cari" value="Filter">
                    <button class="btn btn-sm btn-success" id="cetak">Cetak Laporan</button>
                </div>
            </form>
            <br>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Peminjam</th>
                        <th>Nama Inventaris</th>
                        <th>Jumlah</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Taggal Pengembalian</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $cari ='';
>>>>>>> bb82f61e0895c6a46ed7484c449100e77aa26f63
                        @$tglDari = $_GET['tglDari'];
                        @$tglSampai = $_GET['tglSampai'];

                        if(!empty($tglDari)){
                            $cari .= "and tanggal_pinjam >='".$tglDari."' and tanggal_pinjam >= '" .$hari_ini . "'";
                        }
                        if(!empty($tglSampai)){
                            $cari .= "and tanggal_pinjam <='".$tglSampai."'";
                        }
                        // if(empty($tglDari) && empty($tglSampai)){
                        //     $cari .= "and tanggal_pinjam >='".$hari_ini."' and tanggal_pinjam >='".$hari_ini."'";
                        // }

<<<<<<< HEAD
                        if (empty($tglDari) && empty($tglSampai)) {
                            $search .= "and tanggal_pinjam >='" . $hari_ini . "' and tanggal_pinjam >= '" . $hari_ini . "'";
                        }

                        $sql = "SELECT *, detail_pinjam.jumlah as jml FROM detail_pinjam LEFT JOIN peminjaman ON peminjaman.id_peminjaman = detail_pinjam.id_peminjaman LEFT JOIN inventaris on inventaris.id_inventaris = detail_pinjam.id_inventaris LEFT JOIN pegawai ON pegawai.id_pegawai = peminjaman.id_pegawai WHERE 1=1 $search";
=======
                        $sql = "SELECT *, detail_pinjam.jumlah as jml FROM detail_pinjam left join peminjaman on peminjaman.id_peminjaman = detail_pinjam.id_peminjaman left join inventaris on inventaris.id_inventaris = detail_pinjam.id_inventaris left join pegawai on pegawai.id_pegawai = peminjaman.id_pegawai WHERE 1=1 $cari";
>>>>>>> bb82f61e0895c6a46ed7484c449100e77aa26f63

                        $query = mysqli_query($koneksi, $sql);
                        $cek = mysqli_num_rows($query);

                        if($cek > 0){
                            $no = 1;
                            while($data = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['nama_pegawai']?></td>
                                    <td><?= $data['nama']?></td>
                                    <td><?= $data['jml']?></td>
                                    <td><?= $data['tanggal_pinjam']?></td>
                                    <td><?= $data['tanggal_kembali']?></td>
                                </tr>
                                <?php
                            }
                        }else{
                            ?>
                                <tr>
                                    <td colspan="6">Tidak Ada Data</td>
                                </tr>
                            <?php
                        }
                    ?>
                    <!-- <tr>
                        <td>1</td>
                        <td>Andika</td>
                        <td>Laptop</td>
                        <td>10</td>
                        <td>10-11-2021</td>
                        <td>12-11-2021</td>
                    </tr> -->
                </tbody>
            </table>
        </div>

    </div>

</div>