<<<<<<< HEAD
<?php 
    require_once '../vendor/koneksi_mysql.php';
?>
<?php 
   $sql = "SELECT * FROM kartu";
   $rs = $dbh->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Data Kartu Member</title>
</head>
<body>
    <div class="container-fluid">
      <a class="btn btn-success" href="form_kartu.php" role="button" style="margin-top: 5%;">Tambah Data Kartu</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2" style="margin-top: 2%;">
            <thead>
                <tr style="background: aqua;" class="text-center">
                    <th>Id</th><th>Kode</th><th>Nama Member</th>
                    <th>Diskon</th><th>Iuran</th>
                   
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td class="text-center"><?=$nomor?></td>
                        <td class="text-center"><?=$row['kode']?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['diskon']?></td>
                        <td><?=$row['iuran']?></td>
                        <td>
<a class="btn btn-info" href="view_kartu.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-warning" href="edit_kartu.php?idedit=<?=$row['id']?>">Edit</a>
<a class="btn btn-danger" href="dlt_kartu.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Kartu <?=$row['nama']?>?')) {return false}"
>Delete</a>
</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table> 
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
=======
<?php 
    require_once '../vendor/koneksi_mysql.php';
?>
<?php 
   $sql = "SELECT * FROM kartu";
   $rs = $dbh->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Data Kartu Member</title>
</head>
<body>
    <div class="container-fluid">
      <a class="btn btn-success" href="form_kartu.php" role="button" style="margin-top: 5%;">Tambah Data Kartu</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2" style="margin-top: 2%;">
            <thead>
                <tr style="background: aqua;" class="text-center">
                    <th>Id</th><th>Kode</th><th>Nama Member</th>
                    <th>Diskon</th><th>Iuran</th>
                   
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td class="text-center"><?=$nomor?></td>
                        <td class="text-center"><?=$row['kode']?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['diskon']?></td>
                        <td><?=$row['iuran']?></td>
                        <td>
<a class="btn btn-info" href="view_kartu.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-warning" href="edit_kartu.php?idedit=<?=$row['id']?>">Edit</a>
<a class="btn btn-danger" href="dlt_kartu.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Kartu <?=$row['nama']?>?')) {return false}"
>Delete</a>
</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table> 
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
>>>>>>> b0da60dce06ffc71ce91684bd3073ead125dc9ef
