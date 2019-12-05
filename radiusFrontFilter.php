<?php 
require "connect.php";
$type = (int)json_decode($_COOKIE["type"], true);
$cub = (int)json_decode($_COOKIE["cub"], true);
$q = $db->query("SELECT * FROM product WHERE kit_unit=$type AND cub=$cub");
$prod = $q->fetch_array(MYSQLI_ASSOC);
if($prod['radius_front']): ?>

<?php
$count = 0;
$q = $db->query("SELECT * FROM product WHERE kit_unit=$type AND cub=$cub");
if($q):
    $prod = $q->fetch_array(MYSQLI_ASSOC);
        $count++;
?>
        <div 
            class="block <?php if($count == 1) echo 'active';?>"
            id="radius_front_value_<?php echo $prod['radius_front'];?>" 
            onclick="selectRadius(<?php echo $prod['radius_front'] ?>, 'radius_front', 0);"
        >
            <h4><?php echo $prod['radius_front']?> R</h4>
            <p>Передняя</p>
        </div>

        <? 
    endif; 
    ?>
    <?php
endif; mysqli_close($db);?>