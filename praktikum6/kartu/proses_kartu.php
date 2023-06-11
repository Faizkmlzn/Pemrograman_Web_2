<?php 
require_once '../vendor/koneksi_mysql.php';
?>
<?php 
   $_1 = $_POST['kode'];
   $_2 = $_POST['nama'];
   $_3 = $_POST['diskon'];
   $_4 = $_POST['iuran'];


   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_1; // ? 1
   $ar_data[]=$_2; // ? 2
   $ar_data[]=$_3;// 3
   $ar_data[]=$_4;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO kartu (kode,nama,diskon,iuran) VALUES (?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE kartu SET kode=?,nama=?,diskon=?,iuran=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location: kartu.php');
?>