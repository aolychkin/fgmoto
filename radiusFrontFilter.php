<?php 
$q = $db->query("SELECT * FROM product WHERE kit_unit=$type AND cub=$cub");
$prod = $q->fetch_array(MYSQLI_ASSOC);
if($prod['radius_front']): ?>

<div class="blocks-left <?php if($type > 1) echo 'full_radius'?>">

<?php
$q = $db->query("SELECT * FROM product WHERE kit_unit=$type AND cub=$cub");
if($q):
    while($prod = $q->fetch_array(MYSQLI_ASSOC)):
        $count++;
?>
        <div 
            class="block <?php if($count == 1) echo 'active';?>"
            id="radius_front_value_<?php echo $prod['radius_front'];?>" 
            onclick="selectRadius(<?php echo $prod['radius_front'] ?>, 'radius_front');"
        >
            <h4><?php echo $prod['radius_front']?> R</h4>
            <p><?php echo $prod['spike'] ? $prod['spike'] . ' шипов': 'Передняя';?></p>
        </div>

        <? 
        endwhile; 
    endif; ?>
    </div> 
    <?php
endif; ?>