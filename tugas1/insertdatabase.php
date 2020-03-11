<?php
// include"include.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";
$koneksi = mysqli_connect($servername,$username,$password) or die(mysqli_error());
	mysqli_select_db ($koneksi,$dbname) or die(mysqli_error());


//create connection
// $conn =mysqli_connect($servername,$username,$password,$dbname);
// //check connection
// if (!$conn) {
// 	die("connection failed: " . mysqli_connect_error());
// }

//Create table
// $sql = "INSERT INTO buku_tamu (ID_BT, NAMA, EMAIL, ISI) VALUES ('1', 'YUSUF', 'YUSUF@', 'SUKSES')";
// if (mysqli_query($conn, $sql)) {
// 	echo "New Record created succesfully";
// } else {
// 	echo "Error creating database: " . mysqli_error($conn);


// mysqli_close($conn);
?>