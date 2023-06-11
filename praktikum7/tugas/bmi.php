<<<<<<< HEAD
<?php require_once "class_bmi.php"; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pasien</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <br>
    <h2 align="center">Data Pasien</h2>
    <br>
<form action="bmi.php" method="POST">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card-o"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Masukan Nama Lengkap" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="umur" class="col-4 col-form-label">Umur</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-birthday-cake"></i>
          </div>
        </div> 
        <input id="umur" name="umur" placeholder="Masukan Umur" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
    <div class="custom-control custom-radio custom-control-inline">
        <input name="jenkel" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="Pria" required="required"> 
        <label for="jenis_kelamin_0" class="custom-control-label">Pria</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
        <input name="jenkel" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="Wanita" required="required"> 
        <label for="jenis_kelamin_1" class="custom-control-label">Wanita</label>
    </div>
    </div>
    </div>
  <div class="form-group row">
    <label for="berat" class="col-4 col-form-label">Berat Badan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-balance-scale"></i>
          </div>
        </div> 
        <input id="berat" name="berat" placeholder="Masukan Berat Badan" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-4 col-form-label">Tinggi Badan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-text-height"></i>
          </div>
        </div> 
        <input id="tinggi" name="tinggi" placeholder="Masukan Tinggi Badan" type="text" required="required" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

    <div class="container">
        <table class="table table-bordered">
            <tr class="table-primary">
                <th>Nama</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Berat Badan</th>
                <th>Tinggi Badan</th>
                <th>Hasil</th>
                <th>Keterangan</th>
            </tr>
            <?php 
            if(isset($_POST['submit'])){
                $nama = $_POST['nama'];
                $umur = $_POST['umur'];
                $jenkel = $_POST['jenkel'];
                $berat = $_POST['berat'];
                $tinggi = $_POST['tinggi'];

                $bmi1 = new BmiPasien($berat, $tinggi);
            ?>
            <tr>
                <td><?= $nama;?></td>
                <td><?= $umur;?></td>
                <td><?= $jenkel;?></td>
                <td><?= $berat;?></td>
                <td><?= $tinggi;?></td>
                <td><?= number_format($bmi1->hasilBMI(), 1);?>
                <td><?= $bmi1->statusBMI();
                ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
=======
<?php require_once "class_bmi.php"; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pasien</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <br>
    <h2 align="center">Data Pasien</h2>
    <br>
<form action="bmi.php" method="POST">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card-o"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Masukan Nama Lengkap" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="umur" class="col-4 col-form-label">Umur</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-birthday-cake"></i>
          </div>
        </div> 
        <input id="umur" name="umur" placeholder="Masukan Umur" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
    <div class="custom-control custom-radio custom-control-inline">
        <input name="jenkel" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="Pria" required="required"> 
        <label for="jenis_kelamin_0" class="custom-control-label">Pria</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
        <input name="jenkel" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="Wanita" required="required"> 
        <label for="jenis_kelamin_1" class="custom-control-label">Wanita</label>
    </div>
    </div>
    </div>
  <div class="form-group row">
    <label for="berat" class="col-4 col-form-label">Berat Badan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-balance-scale"></i>
          </div>
        </div> 
        <input id="berat" name="berat" placeholder="Masukan Berat Badan" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-4 col-form-label">Tinggi Badan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-text-height"></i>
          </div>
        </div> 
        <input id="tinggi" name="tinggi" placeholder="Masukan Tinggi Badan" type="text" required="required" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

    <div class="container">
        <table class="table table-bordered">
            <tr class="table-primary">
                <th>Nama</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Berat Badan</th>
                <th>Tinggi Badan</th>
                <th>Hasil</th>
                <th>Keterangan</th>
            </tr>
            <?php 
            if(isset($_POST['submit'])){
                $nama = $_POST['nama'];
                $umur = $_POST['umur'];
                $jenkel = $_POST['jenkel'];
                $berat = $_POST['berat'];
                $tinggi = $_POST['tinggi'];

                $bmi1 = new BmiPasien($berat, $tinggi);
            ?>
            <tr>
                <td><?= $nama;?></td>
                <td><?= $umur;?></td>
                <td><?= $jenkel;?></td>
                <td><?= $berat;?></td>
                <td><?= $tinggi;?></td>
                <td><?= number_format($bmi1->hasilBMI(), 1);?>
                <td><?= $bmi1->statusBMI();
                ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
>>>>>>> b0da60dce06ffc71ce91684bd3073ead125dc9ef
</html>