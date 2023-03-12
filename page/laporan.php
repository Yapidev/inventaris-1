<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h4>Laporan Peminjaman Inventaris</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="" class="d-flex align-items-center">
                    <div class="mb-3 d-flex align-items-center mx-2">
                        <label for="tglDari" class="form-label">Tanggal Awal</label>
                        <input type="date" class="form-control" id="tg_awal" name="tglDari">
                    </div>
                    <div class="mb-3 d-flex align-items-center mx-2">
                        <label for="tglDari" class="form-label">Tanggal Akhir</label>
                        <input type="date" class="form-control" id="tgl_sampai" name="tglSampai">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-sm btn-primary" value="filter">
                        <button class="btn btn-sm btn-success">Cetak Laporan</button>
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
                        <tr>
                            <td>1</td>
                            <td>Andika</td>
                            <td>Laptop</td>
                            <td>5</td>
                            <td>25-02-2023</td>
                            <td>28-02-2023</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>