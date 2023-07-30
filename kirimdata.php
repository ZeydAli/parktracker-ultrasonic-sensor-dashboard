<html>
<body>

<?php

$dbname = 'iot';
$dbuser = 'root';  
$dbpass = ''; 
$dbhost = 'localhost'; 

$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

mysqli_query($connect, "ALTER TABLE tb_jarak AUTO_INCREMENT=1");

if(!$connect){
	echo "Error: " . mysqli_connect_error();
	exit();
}

echo "Connection Success!<br><br>";

$distanceCm = $_GET["distanceCm"];

$query = "INSERT INTO tb_jarak (distanceCm) VALUES ('$distanceCm')";
$result = mysqli_query($connect,$query);

echo "Insertion Success!<br>";

?>
</body>
</html>