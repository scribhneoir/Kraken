<?php
$servername = "kraken.cs.messiah.edu";
$dbusername = "csadmin";
$dbpassword = "s3amonst3r";
$dbname = "kraken_DB";

try {
    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(DPOException $e){
    echo 'ERROR: ' . $e->getMessage();
}
?>