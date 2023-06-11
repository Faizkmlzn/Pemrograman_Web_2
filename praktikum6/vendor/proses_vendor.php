<?php 
require_once 'koneksi_mysql.php';
?>
<?php 
   $_kode = $_POST['nomor'];
   $_nama = $_POST['nama'];
   $_jk = $_POST['kota'];
   $_tmp_lahir = $_POST['kontak'];


   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_kode; // ? 1
   $ar_data[]=$_nama; // ? 2
   $ar_data[]=$_jk;// 3
   $ar_data[]=$_tmp_lahir;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO vendor (nomor,nama,kota,kontak) VALUES (?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE vendor SET nomor=?,nama=?,kota=?,kontak=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location: vendor.php');
?>