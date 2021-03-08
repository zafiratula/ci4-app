<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Diri</h2>

            <form action="/biodata/save" method="post">
                <?= csrf_field(); ?>
                <div class="from-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" autofocus>
                    </div>
                </div>
                <div class="from-group row">
                    <label for="TTL" class="col-sm-2 col-form-label">TTL</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="TTL" name="TTL">
                    </div>
                </div>

                <div class="from-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                </div>

                <div class="from-group row">
                    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="foto" name="foto">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>