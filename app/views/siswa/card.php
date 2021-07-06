<div class="d-flex justify-content-center card-margin">
    <div class="card shadow" style="width: 30rem; height: 20rem;">
        <div class="card-body">
            <h5 class="text-center"><?= $data['siswa']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted text-center mb-4">
                <?= $data['siswa']['jurusan']; ?>
            </h6>
            <div class="ps-4">
                <div class="row">
                    <div class="col-4">Tempat/tanggal lahir</div>
                    <div class="col-1">:</div>
                    <div class="col-7"><?= $data['siswa']['ttl'] ?></div>
                </div>
                <div class="row">
                    <div class="col-4">Jenis Kelamin</div>
                    <div class="col-1">:</div>
                    <div class="col-6"><?= $data['siswa']['gender'] ?></div>
                </div>

                <div class="row">
                    <div class="col-4">Alamat</div>
                    <div class="col-1">:</div>
                    <div class="col-6"><?= $data['siswa']['alamat'] ?></div>
                </div>
                <div class="row">
                    <div class="col-4">Kontak</div>
                    <div class="col-1">:</div>
                    <div class="col-6"><?= $data['siswa']['hp'] ?></div>
                </div>
            </div>

            <div class="row text-center mt-4">
                <p class="card-text">
                    "<?= $data['siswa']['quotes'] ?>"
                </p>
            </div>

            <a href="<?= Config::BASEURL ?>/siswa" class="card-link" style="bottom: 0; position: absolute;">back</a>
        </div>
    </div>
</div>