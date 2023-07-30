<?php
$dbname = 'iot';
$dbuser = 'root';  
$dbpass = ''; 
$dbhost = 'localhost'; 

$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

$sql = mysqli_query($connect, "SELECT * from tb_jarak order by id desc");

$data = mysqli_fetch_array($sql);
$distanceCm = array(
    'distanceCm' => $data ['distanceCm']
);

// $data = mysqli_fetch_array($sql);
// $distanceCm = $data = ['distanceCm'];

if( $distanceCm == "") $distanceCm = 0;

echo implode($distanceCm) ;

?>  