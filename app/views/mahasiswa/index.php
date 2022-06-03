<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
    <div class="col-lg-6">

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Mahasiswa
        </button>

        <br><br>

        <h3>Daftar Mahasiswa</h3>

        <ul class="list-group">
            <?php foreach ($data['mhs'] as $mhs) : ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $mhs['nama'] ?>
                    <a href="<?= BASE_URL ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge text-bg-primary text-decoration-none">Detail</a>
                    <a href="<?= BASE_URL ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge text-bg-danger text-decoration-none" onclick="return confirm('yakin ?')">Hapus</a>
                    
                </li>
            <?php endforeach ?>
        </ul>

    </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASE_URL ?>/mahasiswa/tambah" method="post">

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>

                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="number" class="form-control" id="umur" name="umur">
                    </div>

                    <div class="mb-3">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                            <option selected>Open this select menu</option>
                            <option value="CompSci">CompSci</option>
                            <option value="InfoSys">InfoSys</option>
                            <option value="EngLit">EngLit</option>
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>