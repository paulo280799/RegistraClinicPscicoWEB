<?php  

$dns = "mysql:dbname=PSICO;host=localhost";
$dbuser = "root";
$dbpass = "";

try{
	$pdo = new PDO($dns,$dbuser,$dbpass);

} catch(PDOException $e){
	echo "falhou:".$e->getMessage();
}

?>