<?php

$rows=all('member');
// foreach($rows as $row){
//     echo $row['id'];
//     echo $row['name'];
// }
echo "<pre>";
print_r($rows);
echo  "</pre>";

function all($table){
$dsn="mysql:host=localhost;charset=utf8;dbname=myname";
$pdo=new PDO($dsn,'root','');
$sql="SELECT * FROM `$table`";
$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
return $rows;
}




?>