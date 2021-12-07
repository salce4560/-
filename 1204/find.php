<?php



function find($table,$id){

$dsn="mysql:host=localhost;charset=utf8;dbname=myname";
$pdo=new PDO($dsn,'root','');
$sql="SELECT * from `table` where `id` =`$id`";    
return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

}



?>