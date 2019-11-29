<div class="blocks" id="cub_blocks">
<?php
    require "connect.php";
    $q = $db->query("SELECT * FROM term_link WHERE term_id=1");
    if(!$q):
        echo "По Вашему запросу ничего не найдено :( ";
        echo "Попробуйте ещё раз";
    else:
        while($prod = $q->fetch_array(MYSQLI_ASSOC)): 
?>
    <div 
        class="block" 
        id="cub_value_<?php echo $prod['value'];?>" 
        onclick="selectCub(<?php echo $prod['value'] ?>);" 
    >
        <h4><?php echo $prod['value'] ?> CC</h4>
        <p><?php 
                $cub = $prod['value'];
                unset($rad);
                $q2 = $db->query("SELECT * FROM product WHERE cub=$cub"); 
                while($prod2 = $q2->fetch_array(MYSQLI_ASSOC)):
                    $rad[] .= $prod2['radius_front'];
                    $rad[] .= $prod2['radius_back'];
                endwhile;
                $res = array_unique($rad);
                sort($res);
                $count = 0;
                foreach ($res as $radius)
                    if($radius){
                        $count++;
                        if($count == 1)
                            echo 'R' . $radius;
                        else
                            echo '/R' . $radius;
                    }
             ?>
        </p>
    </div>
        <?php endwhile; endif; mysqli_close($db);?>
</div>
