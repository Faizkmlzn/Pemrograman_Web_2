<<<<<<< HEAD
<?php 
require_once 'koneksi_mysql.php';
?>

<?php 
    $_idedit = $_GET['idedit'];
    if(!empty($_idedit)){
        // edit
        $sql = "SELECT * FROM vendor WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_idedit]);
        $row = $st->fetch();
    }else{
        // new data
        $row = [];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Edit Data Vendor</title>
</head>
<body>
    <h2 style="margin-top: 3%" class="text-center">Edit Data Vendor</h2>
<div class="container-fluid">        
<form method="POST" action="proses_vendor.php" style="margin-top: 5%; margin-left: 30%;">
  <div class="form-group row">
    <label for="nomor" class="col-4 col-form-label">Nomor</label> 
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-person"></i>
                    </div>
                </div> 
            <input id="nomor" name="nomor" type="text" class="form-control col-md-4"
            value="<?= $row['nomor']?>">
            </div>
        </div>
    </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div> 
            <input id="nama" name="nama" type="text" class="form-control col-md-4" 
            value="<?= $row['nama']?>">
            </div>
        </div>
    </div>
  <div class="form-group row">
    <label for="kota" class="col-4 col-form-label">Kota</label> 
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-up"></i>
                    </div>
                </div> 
                <input id="kota" name="kota" value="<?= $row['kota']?>" type="text" class="form-control col-md-4">
            </div>
        </div>
    </div>
  <div class="form-group row">
    <label for="kontak" class="col-4 col-form-label">Kontak</label> 
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </div> 
                <input id="kontak" name="kontak" 
                value="<?= $row['kontak']?>"
                type="text" class="form-control col-md-4">
            </div>
        </div>
    </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-info" value="Update"/>
      <a class="btn btn-success" href="vendor.php">Kembali</a>
      <input type="hidden" name="idedit" value="<?=$_idedit?>"/>
    </div>
  </div>
</form>
</div>  
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
=======
<?php 
require_once 'koneksi_mysql.php';
?>

<?php 
    $_idedit = $_GET['idedit'];
    if(!empty($_idedit)){
        // edit
        $sql = "SELECT * FROM vendor WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_idedit]);
        $row = $st->fetch();
    }else{
        // new data
        $row = [];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Edit Data Vendor</title>
</head>
<body>
    <h2 style="margin-top: 3%" class="text-center">Edit Data Vendor</h2>
<div class="container-fluid">        
<form method="POST" action="proses_vendor.php" style="margin-top: 5%; margin-left: 30%;">
  <div class="form-group row">
    <label for="nomor" class="col-4 col-form-label">Nomor</label> 
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-person"></i>
                    </div>
                </div> 
            <input id="nomor" name="nomor" type="text" class="form-control col-md-4"
            value="<?= $row['nomor']?>">
            </div>
        </div>
    </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div> 
            <input id="nama" name="nama" type="text" class="form-control col-md-4" 
            value="<?= $row['nama']?>">
            </div>
        </div>
    </div>
  <div class="form-group row">
    <label for="kota" class="col-4 col-form-label">Kota</label> 
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-up"></i>
                    </div>
                </div> 
                <input id="kota" name="kota" value="<?= $row['kota']?>" type="text" class="form-control col-md-4">
            </div>
        </div>
    </div>
  <div class="form-group row">
    <label for="kontak" class="col-4 col-form-label">Kontak</label> 
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </div> 
                <input id="kontak" name="kontak" 
                value="<?= $row['kontak']?>"
                type="text" class="form-control col-md-4">
            </div>
        </div>
    </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-info" value="Update"/>
      <a class="btn btn-success" href="vendor.php">Kembali</a>
      <input type="hidden" name="idedit" value="<?=$_idedit?>"/>
    </div>
  </div>
</form>
</div>  
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
>>>>>>> b0da60dce06ffc71ce91684bd3073ead125dc9ef
