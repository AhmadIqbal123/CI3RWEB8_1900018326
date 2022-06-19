<div class="container">
    <div class="row mt-5">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $jurnal['id']; ?>">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control" id="judul" value="<?= $jurnal['judul']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control" id="penerbit" value="<?= $jurnal['penerbit']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="penulis">Penulis</label>
                            <input type="text" name="penulis" class="form-control" id="penulis" value="<?= $jurnal['penulis']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="vol">Volume</label>
                            <input type="text" name="vol" class="form-control" id="vol" value="<?= $jurnal['vol']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="tahun">Bulan Tahun Terbit</label>
                            <input type="text" name="tahun" class="form-control" id="tahun" value="<?= $jurnal['tahun']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi</label>
                            <input type="textarea" name="isi" class="form-control" id="isi" value="<?= $jurnal['isi']; ?>"></input>
                        </div>
                        <button type="submit" name="ubah data" class="btn btn-primary " style="margin: 20px; float:right;">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>