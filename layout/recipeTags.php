<?php
$getTag_sql = 'SELECT tag FROM tag';
$getType_sql = 'SELECT type FROM recipe';
$getItem_sql = 'SELECT item FROM recipe';
$getType = mysqli_query($con,$getType_sql);
$getItem = mysqli_query($con,$getItem_sql);
$getTag = mysqli_query($con,$getTag_sql);
$count = 0;
while($tag = mysqli_fetch_assoc($getTag)) {
    $type = mysqli_fetch_assoc($getType);
    $item = mysqli_fetch_assoc($getItem);
    foreach ($item as $i){
        if($type['type'] === $tag['tag']){
            $count += $count;
        }
    }
    ?>
    <li class="list-group-item"><a href="#"><?php echo $tag['tag']?></a>
        <span class="badge"><?php echo $count ?></span></li>
    <?php
}
?>



