<
<?php include "../vendor/koneksi_mysql.php";?>
 <?php

        $id_edit = $_GET['iddel'];
        var_dump($id_edit);
        $sql = "DELETE from kartu where id=?";
	 	$st = $dbh->prepare($sql);
        $st->execute([$id_edit]);
	 //echo $_POST['nama'];
   	header("location: kartu.php");
 ?> 