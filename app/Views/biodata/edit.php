<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Ubah Data Diri</h2>

            <form action="/biodata/update/<?= $biodata['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $biodata['slug']; ?>">
                <div class="from-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" autofocus value="<?= $biodata['nama']; ?>">
                    </div>
                </div>
                <div class="from-group row">
                    <label for="TTL" class="col-sm-2 col-form-label">TTL</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="TTL" name="TTL" value="<?= $biodata['TTL']; ?>">
                    </div>
                </div>

                <div class="from-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $biodata['alamat']; ?>">
                    </div>
                </div>

                <div class="from-group row">
                    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="foto" name="foto" value=>"<?= $biodata['foto']; ?>"
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>