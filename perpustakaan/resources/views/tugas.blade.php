<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tes Kesehatan </title>
</head>
<body>
    <h1>Tes Kesehatan</h1>

    <form>
        <div class="form-group row">
          <label for="nama" class="col-4 col-form-label">Nama</label> 
          <div class="col-8">
            <input id="nama" name="nama" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="tanggal" class="col-4 col-form-label">Tanggal Pemeriksaan</label> 
          <div class="col-8">
            <input id="tanggal" name="tanggal" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="usia" class="col-4 col-form-label">Usia</label> 
          <div class="col-8">
            <input id="usia" name="usia" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4">Jenis Kelamin</label> 
          <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
              <input name="jenis kelamin" id="jenis kelamin_0" type="radio" class="custom-control-input" value="laki laki"> 
              <label for="jenis kelamin_0" class="custom-control-label">Laki Laki</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="jenis kelamin" id="jenis kelamin_1" type="radio" class="custom-control-input" value="perempuan"> 
              <label for="jenis kelamin_1" class="custom-control-label">Perempuan</label>
            </div>
          </div>
        </div> 
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
    </form>

      <br>
      <hr>
      <br>
      <table border="1" cellspacing="0" align="center">
        <tr>
            <th rowspan="1" align="center">Jenis Tes</th>
            <th rowspan="1" align="center">Hasil Pemeriksaan</th>
            <th rowspan="1" align="center">Normal</th>
        </tr>
        <tr>
            <td>Tekanan Darah</td>
            <td>110/80</td>
            <td>120/80 mmhg</td>
        </tr>
        <tr>
            <td>Asam Urat</td>
            <td>130</td>
            <td>7 mg</td>
        </tr>
        <tr>
            <td>Kolesterol Total</td>
            <td>190</td>
            <td>200 mg/dl</td>
        </tr>
        <tr>
            <td>Gula Darah</td>
            <td>90</td>
            <td>Puasa : 70-110 mg/dl</td>
        </tr>
    </table>
</body>
</html>