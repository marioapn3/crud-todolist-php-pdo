<?php
//ambil koneksi PDO
require_once __DIR__ . "/koneksi.php";

function ambilData()
{
       $conn = koneksi();
       $sql = "SELECT * FROM tugas_mario";
       $result = $conn->query($sql);

       return $result;
}
function ambilsatuData($id_tugas)
{
       $conn = koneksi();
       $sql = "SELECT * FROM tugas_mario WHERE id_tugas=$id_tugas";
       $result = $conn->query($sql);

       return $result;
}
function addData($nama_tugas, $deadline)
{
       $conn = koneksi();
       $sql = "INSERT INTO `tugas_mario`(`nama_tugas`, `deadline`) VALUES ('$nama_tugas','$deadline')";
       $result = $conn->exec($sql);

       return $result;
}

function deleteData($id_tugas)
{
       $conn = koneksi();
       $sql = "DELETE FROM `tugas_mario` WHERE id_tugas=$id_tugas";
       $result = $conn->exec($sql);

       return $result;
}

function editData($id_tugas, $nama_tugas, $deadline)
{
       $conn = koneksi();
       $sql = "UPDATE `tugas_mario` SET `nama_tugas`='$nama_tugas',`deadline`='$deadline' WHERE id_tugas=$id_tugas";
       $result = $conn->exec($sql);

       return $result;
}
