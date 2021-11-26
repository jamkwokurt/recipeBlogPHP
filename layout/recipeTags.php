<?php
$getTag_sql = 'SELECT tag FROM tag';
$getTag = mysqli_query($con,$getTag_sql);
while($tag = mysqli_fetch_assoc($getTag)) {
    ?>
    <li class="list-group-item"><a href="#"><?php echo $tag['tag']?></a><span class="badge">5</span></li>
    <?php
}
?>

