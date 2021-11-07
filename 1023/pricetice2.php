<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         table{
             width: 300px;
             height:200px;
             border: 1px solid gray;
             padding: 30px;
             margin:auto;

         }
         td{
             border: 1px solid gray;
             text-align:center;
         }
    </style>
</head>
<body>
<?php
$firstDay=date("m-y-01");
echo strtotime('2021-8-01');
echo "<br>";
echo "$firstDay";
echo "<br>";
$firstWeekfirstDay=date("m",strtotime($firstDay));
echo "<br>";
echo $firstWeekfirstDay;
echo "<table>";
echo"<tr>";
echo"<td>週日</td>";
echo"<td>周一</td>";
echo"<td>周二</td>";
echo"<td>周三</td>";
echo"<td>周四</td>";
echo"<td>周五</td>";
echo"<td>週六</td>";
echo"</tr>";
for ($i=0; $i<6 ; $i++) {
    echo"<tr>";
    for ($j=0; $j<7 ; $j++) { 
        if (($i==0 && $j<5)||($i==5 && $j>0)) {
            echo"<td>";
            echo"&nbsp";
            echo"</td>";
        }else{
        echo"<td>";
        echo 7*$i+($j-4);
        echo"</td>";
        }
    }
    
    echo "</tr>"; 
}


echo "</table>";

?>    
</body>
</html>