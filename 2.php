<! dotype html>
<html>
<body>
<?php
 $x=5;
 function add($y) {
    global $x;
    return $x+$y;
 }
 echo "$x+5 is", add (5);
 ?>
 </body>
 </html>