<div class="container d-flex justify-content-center align-items-center mt-4" style="height: 80vh;">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title mb-4"><?= $data['siswa']['nama']; ?></h5>
            <p class="card-subtitle">Umur: <?= $data['siswa']['umur']; ?> Tahun</p>
            <p class="card-text m-0">Kelas: <?= $data['siswa']['kelas']; ?></p>
            <p class="card-text">Jurusan: <?= $data['siswa']['jurusan']; ?></p>
            <a href="<?= BASEURL; ?>siswa" class="card-link">Kembali</a>
        </div>
    </div>
</div>