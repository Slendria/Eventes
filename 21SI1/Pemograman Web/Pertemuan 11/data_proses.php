<?php
require "lib_db.php";

$action = $_REQUEST['action'];

if($action == "simpan"){
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO kontak (nama,no_hp,alamat) VALUES (:nama,:no_hp,:alamat)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(':nama',$nama);
    $stmt->bind_param(':no_hp',$no_hp);
    $stmt->bind_param(':alamat',$alamat);

    if(tambahKontak($nama,$no_hp,$alamat)){
        header('location: index.php');
    } else {
        die("gagal di tambah");
    }
} elseif ($action=="hapus") {
    $id = $_GET['id'];
    $sql = "DELETE FROM kontak WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i",$id);

    if($stmt->execute()){
        header('location: index.php');
    } else {
        die("gagal di hapus");
    }
} elseif($action == "edit"){
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $id = $_POST['id'];

    $sql = "UPDATE kontak SET nama=?, no_hp=? , alamat=? where id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi",$nama,$no_hp,$alamat,$id);

    if($stmt->execute()){
        header('location: index.php');
    } else {
        die("gagal di edit");
    }
}