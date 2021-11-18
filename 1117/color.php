<?php

if(isset($_GET["cl"])){
    $color = $_GET["cl"];
    echo $color;
    echo "<style>body{background-color:$color}</style>";
?>