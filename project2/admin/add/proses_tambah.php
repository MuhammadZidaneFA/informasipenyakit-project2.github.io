<?php
include ("../../conf/koneksi.php");

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $p3 = $_POST['p3'];
    $p4 = $_POST['p4'];
    $p5 = $_POST['p5'];
    $img1 = $_FILES["img1"]["name"];
    $tempname = $_FILES["img1"]["tmp_name"];
    //move_uploaded_file($tempname, '../image'.$img1)
    $folder = "../image/" .$img1;
    //$img1 = $_POST['img1'];
    //$img2 = $_POST['img2'];

    // buat query
    $sql = "INSERT INTO nama_penyakit (nama, p1, p2, p3, p4, p5, img1, img2) VALUE ('$nama', '$p1', '$p2', '$p3', '$p4', '$p5', '$img1', '$img2')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        //kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('location: ../index.php?page=data-mahasiswa?status=sukses');
    }
    if( $query ) {
        //kalau berhasil alihkan ke halaman index.php dengan status=gagal
        header('location: ../index.php?page=data-mahasiswastatus=gagak');
    }
    if (move_uploaded_file($tempname, $folder)) {
        header('location: ../index.php?page=data-mahasiswa?status=sukses');
    } else {
        header('location: ../index.php?page=data-mahasiswastatus=gagak');
    }
}
else {
    header('location: ../index.php?page=data-mahasiswastatus=error');
}
?>