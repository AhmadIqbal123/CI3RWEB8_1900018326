<div class="container">
    <div class="row mt-3">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header">
                    Detail Jurnal
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $jurnal['judul']; ?></h5>
                    <p class="card-text"><?= $jurnal['penerbit']; ?></p>
                    <p class="card-text"><?= $jurnal['penulis']; ?></p>
                    <p class="card-text"><?= $jurnal['vol']; ?></p>
                    <p class="card-text"><?= $jurnal['tahun']; ?></p>
                    <p class="card-text"><?= $jurnal['isi']; ?></p>
                    <a href="<?= base_url(); ?>jurnal" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>