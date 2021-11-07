
<?php

//  for ($j=0; $j<=5 ; $j++)
//   {  for ($i=0; $i<$j ; $i++) { 
//          echo"*";
//      }
//      echo "<br>"; 
//  }
// for ($j=5; $j<=5 ;  $j-1) {
// for ($i=5; $i<=$j ; $i-1) { 
//     echo"$i".i."*";
// }
// echo"$j".j."<br>";
// }
// for ($a=6; $a>0  ; $a=$a-1) { 
//     for($i=0;$i<$a;$i++){
//         echo"*";
//     }
//     echo "<br>";
// }
  $row=5;
  for ($j=1;$j<=$row;$j++) { 
  for ($i=0; $i<($row-$j) ; $i++) { 
          echo "&ensp;";
      }
  for ($i=0; $i<(2*$j-1) ; $i++) { 
      echo "*";
  }
  echo "<br>";
 }

// for ($i=5; $i>0 ; $i=$i-1) { 
//     for ($j=0; $j<$i ; $j++) { 
//     echo "*";    
//     }
//     echo "<br>";
// }












?>