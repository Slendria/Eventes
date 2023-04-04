<?php

require "config.php";

function findAllKontak(){
    global $conn;
    $sql = "SELECT * FROM kontak";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $hasil = $stmt->fetchAll();
    return $hasil;
}

function tambahKontak($nama,$no_hp,$alamat){
    $sql = "INSERT INTO kontak (nama,no_hp,alamat) VALUES (:nama,:no_hp,:alamat)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(':nama',$nama);
    $stmt->bind_param(':no_hp',$no_hp);
    $stmt->bind_param(':alamat',$alamat);

    if($stmt->execute()){
        return true:
    } else {
        return false;
    }
}