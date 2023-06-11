<<<<<<< HEAD
<?php 
require_once '../vendor/koneksi_mysql.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM kartu WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Detail Data kartu Member</title>
</head>
<body>
    <div class="container">
      <a class="btn btn-success" href="kartu.php" role="button" style="margin-top: 5%;">Kembali</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2" style="margin-top: 2%;">
            <thead>
                <tr style="background: aqua;" class="text-center">
                    <th colspan="2"><marquee behavior="alternate" onmouseover="this.stop()" onmouseout="this.start()" direction="right">~~~~~| Detail Data Kartu Member |~~~~~</marquee></th>
                </tr>
            </thead>
            <tbody class="text-center" width="50%">
                <tr>   <td width="50%">ID</td><td><?=$row['id']?></td></tr>
                <tr>   <td>Kode</td><td><?=$row['kode']?></td></tr>
                <tr>   <td>Nama Member</td><td><?=$row['nama']?></td></tr>
                <tr>   <td>Diskon Member</td><td><?=$row['diskon']?></td></tr>
                <tr>   <td>Iuran</td><td><?=$row['iuran']?></td></tr>
            </tbody>
</table>
=======
<?php 
require_once '../vendor/koneksi_mysql.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM kartu WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Detail Data kartu Member</title>
</head>
<body>
    <div class="container">
      <a class="btn btn-success" href="kartu.php" role="button" style="margin-top: 5%;">Kembali</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2" style="margin-top: 2%;">
            <thead>
                <tr style="background: aqua;" class="text-center">
                    <th colspan="2"><marquee behavior="alternate" onmouseover="this.stop()" onmouseout="this.start()" direction="right">~~~~~| Detail Data Kartu Member |~~~~~</marquee></th>
                </tr>
            </thead>
            <tbody class="text-center" width="50%">
                <tr>   <td width="50%">ID</td><td><?=$row['id']?></td></tr>
                <tr>   <td>Kode</td><td><?=$row['kode']?></td></tr>
                <tr>   <td>Nama Member</td><td><?=$row['nama']?></td></tr>
                <tr>   <td>Diskon Member</td><td><?=$row['diskon']?></td></tr>
                <tr>   <td>Iuran</td><td><?=$row['iuran']?></td></tr>
            </tbody>
</table>
>>>>>>> b0da60dce06ffc71ce91684bd3073ead125dc9ef
