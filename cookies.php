<?php
$exp = time() + 50;
setcookie("name","Bill",$exp);

print_r($_COOKIE);

?>