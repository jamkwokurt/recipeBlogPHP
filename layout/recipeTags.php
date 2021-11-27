<?php
$getTag_sql = 'SELECT tag FROM tag';
$getType_sql = 'SELECT type FROM recipe';
$getItem_sql = 'SELECT item FROM recipe';
$getTag = mysqli_query($con,$getTag_sql);
$getType = mysqli_query($con,$getType_sql);
$getItem = mysqli_query($con,$getItem_sql);
$count = 0;
while($tag = mysqli_fetch_assoc($getTag)) {
    while ($type = mysqli_fetch_assoc($getType)) {
        foreach($type as $value) {
            if ($type['type'] === $tag['tag']) {
                $count += $count;
            }
        }
    }


    ?>
    <li class="list-group-item"><a href="#"><?php echo $tag['tag']?></a>
        <span class="badge">1<?php $count ?></span></li>
    <?php
}
?>



