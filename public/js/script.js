$(function () {
  $(".modal-ubah").on("click", function () {
    $("#tambahData").html("Ubah Data");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $("form[method=post]").attr("action", "http://localhost/mvc/public/siswa/ubah");

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/mvc/public/siswa/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama").val(data.nama);
        $("#kelas").val(data.kelas);
        $("#jurusan").val(data.jurusan);
        $("#ttl").val(data.ttl);
        $("#gender").val(data.gender);
        $("#hp").val(data.hp);
        $("#alamat").val(data.alamat);
        $("#quotes").val(data.quotes);
        $("#id").val(data.id);
      },
    });
  });

  $(".btnTambah").on("click", function () {
    $("#tambahData").html("Tambah Data");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $("#nama").val("");
    $("#kelas").val("");
    $("#jurusan").val("");
    $("#ttl").val("");
    $("#gender").val("");
    $("#hp").val("");
    $("#alamat").val("");
    $("#quotes").val("");
  });
});
