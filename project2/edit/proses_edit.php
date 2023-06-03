<?php
include ("../../conf/koneksi.php");

if (isset($_POST['ubah'])) {
    $id = $_POST['id'];
    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $p3 = $_POST['p3'];
    $p4 = $_POST['p4'];
    $p5 = $_POST['p5'];
    $img1 = $_FILES["img1"]["name"];
    $tempname = $_FILES["img1"]["tmp_name"];
    $folder = "../image/" .$img1;

    //buat query
    $sql = "UPDATE nama_penyakit SET nama='$nama', nis='$nis', alamat='$alamat', jk='$jk', kelas='$kelas' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        //kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('location: ../index.php?page=data-mahasiswa?status=sukses');
    }
    if( $query ) {
        //kalau berhasil alihkan ke halaman index.php dengan status=gagal
        header('location: ../index.php?page=data-mahasiswa?status=gagak');
    }
    if (move_uploaded_file($tempname, $folder)) {
        header('location: ../index.php?page=data-mahasiswa?status=sukses');
    } else {
        header('location: ../index.php?page=data-mahasiswa?status=gagak');
    }
}
else {
    header('location: ../index.php?page=data-mahasiswa?status=error');
}
?>