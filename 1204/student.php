<?php

include_once "db2.php";

?>
<?php
echo"<pre>";
print_r(all('students',['major'=>'國際貿易科']));
echo"</pre>";





?>