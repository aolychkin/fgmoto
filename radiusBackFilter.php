<?php 
require "connect.php";
$type = (int)json_decode($_COOKIE["type"], true);
$cub = (int)json_decode($_COOKIE["cub"], true);
$q = $db->query("SELECT * FROM product WHERE kit_unit=$type AND cub=$cub");
$prod = $q->fetch_array(MYSQLI_ASSOC);
$cub = (int)json_decode($_COOKIE["cub"], true);
if($prod['radius_back']): ?>

<?php
$count = 0;
$q = $db->query("SELECT * FROM product WHERE kit_unit=$type AND cub=$cub");
if($q):
    while($prod = $q->fetch_array(MYSQLI_ASSOC)):
        $count++;
?>
        <div 
            class="block<?php if($count == 1 && $type == 2) echo ' active'; elseif($cub < 120) echo ' active';?>"
            id="radius_back_value_<?php echo $prod['radius_back'];?>_spike_<?php echo $prod['spike'] != NULL ? $prod['spike'] : $count;?>" 
            onclick="selectRadius(<?php echo $prod['radius_back'] ?>, 'radius_back', <?php echo $prod['spike'] != NULL ? $prod['spike'] : $count;?>);"
        >
            <h4><?php echo $prod['radius_back']?> R</h4>
            <p><?php echo $prod['spike'] ? $prod['spike'] . ' шипов': 'Задняя';?></p>
        </div>
        <? 
        endwhile; 
    endif; 
    ?>
    <?php
endif; 
mysqli_close($db);?>