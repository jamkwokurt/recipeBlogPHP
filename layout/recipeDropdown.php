<?php
$getTag_sql = 'SELECT tag FROM tag';
$getTag = mysqli_query($con,$getTag_sql);
while($tag = mysqli_fetch_assoc($getTag)) {
    ?>
    <li><a href="#"><?php echo $tag['tag']?></a></li>
    <?php
}
?>