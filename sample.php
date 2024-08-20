<?php
$name = $_GET['name'];
$file = $_GET['txtfile'];
$names = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
if (in_array($name , $names)){
    echo "Hurray! you are in list";
}else{
    header('Location: https://media1.tenor.com/m/UOQYl0tLL_sAAAAC/qq-%E5%93%AD%E5%93%AD.gif');
}


?>