<?php
// $sql = "INSERT INTO buku_tamu (ID_BT, NAMA, EMAIL, ISI) VALUES ('5', 'HAI', 'HAI@', 'SUKSES')VALUES('6', 'KAMU', 'KAMU@', 'SUKSES')";
include"insertdatabase.php";
// menyimpan data kedalam variabel
$ID_BT           	= $_POST['ID_BT'];
$NAMA         		= $_POST['NAMA'];
$EMAIL        		= $_POST['EMAIL'];
$ISI  				= $_POST['ISI'];

// query SQL untuk insert data
$sql="INSERT INTO buku_tamu (ID_BT, NAMA, EMAIL, ISI) VALUES ('$ID_BT','$NAMA','$EMAIL','$ISI')";
mysqli_query($koneksi, $sql) or die (mysqli_error());
// mengalihkan ke halaman index.php
header("location:form.php");
?>