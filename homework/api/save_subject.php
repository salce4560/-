<?php
include_once "db.php";

$topic_array=['topic'=>$_POST['subject']];
insert('topics',$topic_array);
$topic_sql="select * from `topics` where `topic`={$_POST['subject']}'";
 $topic=$pdo->query($topic_sql)->fetch();

// foreach($_POST['options']as $opt){
//     $opt_array=["opt"=>$opt,"topic_id"=>$topic['id']];
//     insert('options',$opt_array);
// }

?>