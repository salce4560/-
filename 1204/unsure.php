<?php


function add(...$arg){
   $sum=0;
   foreach($arg as $num){
       if (is_numeric($num)) {

           $sum+=$num;      
        }
   }
   return $sum;
}
echo add(1,2);
echo"<hr>";
echo add(1,2,3,4);
echo"<hr>";
echo add(1,2,0,"mack",['a','b']);
echo"<hr>";
echo add('泰山訓練');












?>