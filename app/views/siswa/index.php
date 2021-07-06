<div class="text-center mt-5 container">
    <div class="row">
        <div class="col">
            <h3>Daftar Siswa</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-6"><?= Flasher::flash(); ?></div>
    </div>

    <div class="row mt-3 xwidth">
        <div class="col-12">
            <form action="<?= Config::BASEURL ?>/siswa/cari" method="post">
                <div class="input-group">

                    <input type="text" class="form-control" placeholder="Cari" id="keyword" name="keyword"
                        aria-label="Example text with button addon" aria-describedby="button-addon1">
                    <button class="btn btn-dark bg-dark" type="submit" id="btnCari" name="cari">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="fluid-container">
                <table class="table table-striped table-dark text-center bgtable mt-4 table-hover" id="table">
                    <thead>
                        <tr>
                            <th>Absen</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Detail</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($data['siswa'] as $row) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $row["nama"]; ?></td>
                            <td><?= $row["kelas"]; ?></td>
                            <td><?= $row["jurusan"]; ?></td>
                            <td>
                                <a href="<?= Config::BASEURL; ?>/siswa/detail/<?= $row['id']; ?>"
                                    class="link-light">Detail</a>

                            </td>
                            <td>
                                <a href="<?= Config::BASEURL; ?>/siswa/hapus/<?= $row['id']; ?>" class="link-light"
                                    onclick="return confirm('Yakin ingin menghapus?')">hapus</a> |
                                <a href="<?= Config::BASEURL; ?>/siswa/ubah/<?= $row['id']; ?>"
                                    class="link-light modal-ubah" data-bs-toggle="modal" data-bs-target="#formModal"
                                    data-id="<?= $row['id']; ?>">Ubah</a>
                            </td>
                        </tr>
                        <?php $i++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->
    <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-outline-dark btnTambah" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data
        </button>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="Tambah Data" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahData">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= Config::BASEURL ?>/siswa/tambah" method="post">
                <div class="modal-body">
                    <input type="hidden" class="form-control" id="id" name="id">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama"
                            autocomplete="off" required>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-6">
                            <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas"
                                autocomplete="off" required>
                        </div>
                        <div class="mb-3 col-6">
                            <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan"
                                autocomplete="off" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Tempat/Tanggal Lahir"
                            autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="gender" name="gender" placeholder="Jenis Kelamin"
                            autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control" id="hp" name="hp" placeholder="Nomor Handphone"
                            autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"
                            autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="quotes" name="quotes" placeholder="Quotes"
                            autocomplete="off" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" name="">Tambahkan</button>
                </div>
            </form>
        </div>
    </div>
</div>