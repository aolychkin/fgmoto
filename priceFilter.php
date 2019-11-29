<?php
$cub = (int)json_decode($_COOKIE["cub"], true);
$type = (int)json_decode($_COOKIE["type"], true);
$radius_front = (int)json_decode($_COOKIE["radius_front"], true);
$radius_back = (int)json_decode($_COOKIE["radius_back"], true);
$spike = (int)json_decode($_COOKIE["spike"], true);


if($_COOKIE["radius_front"] || $_COOKIE["radius_back"] || $type != 3 || $cub < 120):
    require "connect.php";
    $radius = "";
    $spikeF = "";
    if ($radius_front)
       $radius .= " AND radius_front = $radius_front";
    if ($radius_back)
        $radius .= " AND radius_back = $radius_back";
    if ($spike && $cub > 120)
        $spikeF .= " AND spike = $spike";
    
    $q = $db->query("SELECT * FROM product WHERE cub=$cub AND kit_unit=$type $radius $spikeF");
    if($q):
        while($prod = $q->fetch_array(MYSQLI_ASSOC)):
            ?>
            <div class="price">
                <h4>Цена: <?php echo $prod['price']; ?></h4>
                <button onclick="buyForm(<?php echo $prod['id']; ?>);">Купить в один клик!</button>
            </div>
            <?php
        endwhile;  
    endif;
    mysqli_close($db);
endif;
