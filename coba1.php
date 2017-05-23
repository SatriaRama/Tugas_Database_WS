<?php 
 $db_host = "localhost";
 $db_user = "root";
 $db_pass = "";
 $db_name = "coba1";
 $koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
 $sql = "Select * from  `tabel pelanggan` ";
 $query = mysqli_query($koneksi, $sql);
 $rows=array();
 while($data = mysqli_fetch_assoc($query))
 {
 $rows[] = $data;
 $rows[] = "<br>";
 }
 echo json_encode($rows);
?>