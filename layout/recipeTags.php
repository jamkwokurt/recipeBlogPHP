<?php
$getTag_sql = 'SELECT tag FROM tag';
$getTag = mysqli_query($con,$getTag_sql);
$getType_sql = 'SELECT type FROM recipe';
$getType = mysqli_query($con,$getType_sql);

//count each type and append counts to tags
$counts = [];

while($types = mysqli_fetch_assoc($getType)) {
    $values=array_count_values($types);
    foreach ($types as $value) {
        if (key_exists($value, $counts)) {
            $counts[$value] += 1;
        } else {
            $counts[$value] = 1;
        }
    }
}
while($tags = mysqli_fetch_assoc($getTag)){
    foreach ($tags as $value){
        ?>
        <li class="list-group-item"><a href="#"><?php echo $value?></a>
            <span class="badge"><?php echo $counts[$value] ?></span></li>
        <?php
    }
}
?>




