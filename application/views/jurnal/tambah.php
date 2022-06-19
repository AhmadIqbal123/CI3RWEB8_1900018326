<div class="container">
    <div class="row mt-5">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Jurnal
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control" id="judul">
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control" id="penerbit">
                        </div>
                        <div class="form-group">
                            <label for="penulis">Penulis</label>
                            <input type="text" name="penulis" class="form-control" id="penulis">
                        </div>
                        <div class="form-group">
                            <label for="vol">Volume</label>
                            <input type="text" name="vol" class="form-control" id="vol">
                        </div>
                        <div class="form-group">
                            <label for="tahunt">Bulan Tahun Terbit</label>
                            <input type="text" name="tahun" class="form-control" id="tahun">
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi</label>
                            <textarea type="text" name="isi" class="form-control" id="isi"></textarea>
                        </div>
                        <button type="submit" name="tambah data" class="btn btn-primary " style="margin: 20px; float:right;">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>