<?php
    $type = (int)json_decode($_COOKIE["type"], true);
    $cub = (int)json_decode($_COOKIE["cub"], true);
    if(!$type){
        echo "<br> <br> Для начала выберите кубатуру и тип :) ";
    }
    ?>
    <div id="radiusFront_blocks" class="<?php if($type > 1) echo 'full_radius'?>">
        <?php require "radiusFrontFilter.php"; ?>
    </div>
    <div id="radiusBack_blocks" class="<?php if($type > 1) echo 'full_radius'?>">
        <?php
            require "radiusBackFilter.php";
        ?>
    </div>

<?php ?>
