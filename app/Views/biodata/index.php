<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Data Diri</h1>
            <a href="/biodata/create" class="btn btn-primary mb-3">Tambah Data Diri</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($biodata as $b) :  ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/<?= $b['foto']; ?>" alt="" width="100"></td>
                            <td><?= $b['nama']; ?></td>
                            <td>
                                <a href="/biodata/<?= $b['slug']; ?>" class="btn btn-success">Detail</a>

                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>