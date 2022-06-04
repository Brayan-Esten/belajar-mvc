$(function () {

    $('.editBtn').on('click', function () {

        $('#formModalLabel').html('Edit Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Simpan Perubahan');
        $('.modal-body form').attr('action', 'http://localhost/personal/public/mahasiswa/update');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/personal/public/mahasiswa/ubah',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#umur').val(data.umur);
                $('#jurusan').val(data.jurusan);
            }
        });

    });

    $('.addBtn').on('click', function () {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');

        $('#id').val('');
        $('#nama').val('');
        $('#umur').val('');
        $('#jurusan').val('');
    });

});