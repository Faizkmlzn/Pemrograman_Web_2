<?php
require_once "layouts/header.php";
require_once "layouts/menu.php";

?>
<?php
$mahasiswa1 = ['ID'=>'1','NIM'=>1902930,'UTS'=>98, 'UAS'=>99, 'TUGAS'=>100];
$mahasiswa2 = ['ID'=>'2','NIM'=>1924671,'UTS'=>97, 'UAS'=>95, 'TUGAS'=>100];
$mahasiswa3 = ['ID'=>'3','NIM'=>1902145,'UTS'=>96, 'UAS'=>98, 'TUGAS'=>100];

$ar_nilai = [$mahasiswa1, $mahasiswa2, $mahasiswa3];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <table class="table table-striped">
    <thead class="thead-dark" >
        <tr>
        <th scope="col">ID</th>
        <th scope="col">NIM</th>
        <th scope="col">UTS</th>
        <th scope="col">UAS</th>
        <th scope="col">TUGAS</th>
        </tr>
    </thead>
    <?php foreach($ar_nilai as $nilai){ ?>
    <tbody>
        <tr>
        <td><?= $nilai['ID'];?></td>
        <td><?= $nilai['NIM'];?></td>
        <td><?= $nilai['UTS'];?></td>
        <td><?= $nilai['UAS'];?></td>
        <td><?= $nilai['TUGAS'];?></td>
        </tr>
    </tbody>
    <?php } ?>
    </table>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
<?php require_once "layouts/menu.php"; ?>
