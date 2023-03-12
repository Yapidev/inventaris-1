<?php
$id_peminjaman = $_GET['id_peminjaman'];
if (empty($id_peminjaman)) {
?>
    <script type="text/javascript">
        window.location.href = "?p=pengembalian";
    </script>
<?php
}
?>

<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <h4>Konfirmasi Pengembalian Inventaris</h4>
        </div>
        <div class="card-body">
            <form action="">
                <div class="mb-3">
                    <label for="" class="form-label">Kode Peminjaman</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tanggal Peminjaman</label>
                    <input type="date" class="form-control" readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Nama Peminjam</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Jumlah</label>
                    <input type="number" class="form-control" readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" name="save" class="btn btn-md btn-primary">Simpan</button>
                    <a href="?p=pengembalian" class="btn btn-md btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>