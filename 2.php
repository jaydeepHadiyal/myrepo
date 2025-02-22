<! dotype html>
<html>
<body>
<?php
 $x=5;
 $y=10;
 function add($x,$y) {
    global $x,$y;
    return $x+$y;
 }
 echo "$x+$y is", add (10,5);
 ?>
 </body>
 </html>