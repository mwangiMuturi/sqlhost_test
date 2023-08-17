<?php
echo " This is us";

//$connection = new mysqli("localhost","root","","chickenland_pilau");
$pdo =new PDO("mysql:host=sql7.freesqldatabase.com;port=3306;dbname=sql7640346",'sql7640346','GILayLkNR5');  

 $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// Check connect


$statement= $pdo->prepare("SELECT * FROM sql7640346.counties;");
$statement->execute();
$result= $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($result);