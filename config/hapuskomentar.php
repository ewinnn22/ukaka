<?php
session_start();
include 'koneksi.php';
if(!isset($_SESSION['userid']) || $_SESSION['status'] !== 'login'){
    exit('anda tidak memiliki izin untuk mengakses halaman ini.');
}

if (isset($_GET['$komentarid'])) {
    $komentarid = mysqli_real_escape_string($koneksi, $_GET['$komentarid']);

    $query = "DELETE * FROM komentarfoto WHERE komentarid = '$komentarid'";
    $result = mysqli_query($koneksi, $query);


    if($result){
        header("location: ". $_SERVER['HTTP_REFERER']);
        exit();
    }else{
        exit('gagal menghapus komentar.');
    }
    }else{
        exit('parameter di hapus');
        
}

