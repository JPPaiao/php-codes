<?php
$host = 'localhost';
$user = 'root';
$pass =  '';
$db = 'cadastro02';

$mysql = mysqli_connect($host, $user, $pass)
    or die ("Connection failed: " . mysqli_connect_error());

echo "Connect suucessfuy";
mysqli_select_db($mysql, 'cadastro02');

// mysqli_query($mysql, "DROP TABLE test")
// mysqli_query($mysql, "CREATE TABLE test(id INT)");
// mysqli_query($mysql, "INSERT INTO test(id) VALUES (1)")


?>