<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <!-- add button -->
    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary addBtn" data-bs-toggle="modal" data-bs-target="#formModal">Tambah Data Mahasiswa</button>
        </div>
    </div>

    <!-- search btn -->
    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASE_URL ?>/mahasiswa/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Mahasiswa" name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $mhs['nama'] ?>

                        <!-- detail -->
                        <a href="<?= BASE_URL ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge text-bg-primary text-decoration-none">Detail</a>

                        <!-- edit -->
                        <a href="<?= BASE_URL ?>/mahasiswa/edit/<?= $mhs['id'] ?>" class="badge text-bg-success text-decoration-none editBtn" data-id="<?= $mhs['id'] ?>" data-bs-toggle="modal" data-bs-target="#formModal">Edit</a>

                        <!-- hapus -->
                        <a href=" <?= BASE_URL ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge text-bg-danger text-decoration-none" onclick="return confirm('yakin ?')">Hapus</a>

                    </li>
                <?php endforeach ?>

            </ul>
        </div>
    </div>

</div>



<!-- modal box popup -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASE_URL ?>/mahasiswa/tambah" method="post">

                    <!-- hidden id -->
                    <input type="hidden" name="id" id="id">

                    <!-- nama -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>

                    <!-- umur -->
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="number" class="form-control" id="umur" name="umur">
                    </div>

                    <!-- jurusan -->
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