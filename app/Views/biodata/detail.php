<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Data Diri</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $biodata['foto']; ?>" alt="" width="100">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $biodata['nama']; ?></h5>
                            <p class="card-date"><b>TTL : </b><?= $biodata['TTL']; ?></p>
                            <p class="card-text"><small class="text-muted"></small><b>Alamat : </b><?= $biodata['alamat']; ?></p>


                            <a href="/biodata/edit/<?= $biodata['slug']; ?>" class="btn btn-warning">Edit</a>


                            <form action="/biodata/<?= $biodata['id']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                            </form>

                            <br><br>
                            <a href="/biodata">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>