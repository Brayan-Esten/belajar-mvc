<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhs']['nama'] ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['umur'] ?></h6>
            <p class="card-text">E-Mail</p>
            <p class="card-text"><?= $data['mhs']['jurusan'] ?></p>
            <a href="<?= BASE_URL ?>/mahasiswa" class="card-link">Back</a>
        </div>
    </div>
</div>