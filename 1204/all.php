<?php

$rows=all('member');
// foreach($rows as $row){
//     echo $row['id'];
//     echo $row['name'];
// }
echo "<pre>";
print_r($rows);
echo  "</pre>";

function all($table,...$arg){
$dsn="mysql:host=localhost;charset=utf8;dbname=myname";
$pdo=new PDO($dsn,'root','');
$sql="SELECT * FROM `$table`";

if(isset($arg[0])){
    if(is_array($arg[0])){
        foreach ($arg[0] as $key => $value) {
            $temp[]="`$key`=$value";
        }
        $sql=
    }else{
        $sql=$sql.$arg[0];
    }
}
$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
return $rows;
}




?>