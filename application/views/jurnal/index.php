<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-5">
            <div class="col-md-15">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Data Jurnal<strong> berhasil </strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>jurnal/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-15">
            <h1>Daftar Jurnal</h1>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="tableJurnal">
                    <thead>
                        <tr class="table-success">
                            <th>Judul</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($jurnal as $jrn) : ?>
                            <tr>
                                <td> <?= $jrn['judul']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>jurnal/hapus/<?= $jrn['id']; ?>" class="btn btn-warning btn-sm float-right" onclick="return confirm('Apakah anda yakin untuk menghapus ?');"><i class="bi bi-trash "></i> </a>
                                    <a href="<?= base_url(); ?>jurnal/ubah/<?= $jrn['id']; ?>" class="btn btn-danger btn-sm"><i class="bi bi-pencil"></i> </a>
                                    <a href="<?= base_url(); ?>jurnal/detail/<?= $jrn['id']; ?>"><i class="bi bi-journal-bookmark-fill"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>