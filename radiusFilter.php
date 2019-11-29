<?php
    require "connect.php";
    $type = (int)json_decode($_COOKIE["type"], true);
    $cub = (int)json_decode($_COOKIE["cub"], true);
    if(!$type){
        echo "<br> <br> Для начала выберите кубатуру и тип :) ";
    }
    require "radiusFrontFilter.php";
    require "radiusBackFilter.php";
    mysqli_close($db);
?>
