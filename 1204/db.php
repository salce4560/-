<?php 

$column=['telphone'=>'2246','address'=>'開心我家'];
$where=['id'=>'7'];
update('students',$column,$where);
// $sql=" ";
// foreach ($array as $key => $value) {
//     echo '迴圈執行前=>' .$sql.'<br>';
//     $sql=$sql . "`$key`='$value' and ";
//     echo '迴圈執行後=>'.$sql.'<br>';
// }

// echo "迴圈完成後=>".$sql=MB_substr($sql,0,mb_strlen($sql)-5);

$dsn="mysql:host=localhost;charset=utf8;dbname=homework";;
$pdo=new PDO($dsn,'root','');

function update($table,$column,$where){
    global $pdo;

    $sql_set='';
    foreach ($column as $key => $value) {
        $sql_set=$sql_set . "`$key`='$value',";
    }
    $sql_set=trim($sql_set,',');

    $sql_where='';
    foreach ($where as $key => $value) {
        $sql_where=$sql_where . "`$key`='$value' AND ";
    }
    $sql_where=mb_substr($sql_where,0,mb_strlen($sql_where)-5);;

    mb_substr($sql_where,0,mb_strlen($sql_where)-5);
    $sql="UPDATE `$table` SET $sql_set WHERE $sql_where ";
    
    //echo $sql;
    $pdo->exec($sql);
 }




?>