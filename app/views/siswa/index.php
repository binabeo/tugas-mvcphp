<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Siswa
            </button>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>siswa/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="cari siswa..." name="keyword" id="keyword" aria-describedby="button-addon" autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <br><br>
    <h1>Daftar Siswa</h1>
    <ul class="list-group">
        <?php foreach ($data['siswa'] as $siswa) : ?>
            <li class="list-group-item d-flex flex-row justify-content-between">
                <?= $siswa['nama']; ?> | <?= $siswa['umur'] ?> Tahun | Kelas: <?= $siswa['kelas'] ?> | Jurusan: <?= $siswa['jurusan'] ?>
                <div class="d-flex gap-2">
                    <a href="<?= BASEURL; ?>siswa/detail/<?= $siswa['id'] ?>" class="badge text-bg-primary text-decoration-none float-right">detail</a>
                    <a href="<?= BASEURL; ?>siswa/ubah/<?= $siswa['id'] ?>" class="badge text-bg-success text-decoration-none float-right tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $siswa['id']; ?>">ubah</a>
                    <a href="<?= BASEURL; ?>siswa/hapus/<?= $siswa['id'] ?>" class="badge text-bg-danger text-decoration-none float-right" onclick="return confirm('apakah anda yakin ingin mengahapus siswa yang bernama <?= $siswa['nama'] ?>?')">hapus</a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</div>
</div>

<!-- Modal -->
<div class=" modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Data Siswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>siswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama: </label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur: </label>
                        <input type="number" class="form-control" id="umur" name="umur">
                    </div>
                    <select class="form-select mt-4 mb-4" id="kelas" name="kelas" aria-label="Default select example">
                        <option selected>Kelas:</option>
                        <option value="10">Kelas: 10</option>
                        <option value="11">Kelas: 11</option>
                        <option value="12">Kelas: 12</option>
                    </select>
                    <select class="form-select mb-3" id="jurusan" name="jurusan" aria-label="Default select example">
                        <option selected>Jurusan:</option>
                        <option value="Rekayasa Perangkat Lunak">Jurusan: Rekayasa Perangkat
                            Lunak</option>
                        <option value="Desain Komunikasi Visual (1)">Jurusan: Desain Komunikasi
                            Visual (1)</option>
                        <option value="Desain Komunikasi Visual (2)">Jurusan: Desain Komunikasi
                            Visual (2)</option>
                        <option value="Bisnis Reatail">Jurusan: Bisnis Retail</option>
                        <option value="Manajemen Perkantoran">Jurusan: Manajemen Perkantoran
                        </option>
                    </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>