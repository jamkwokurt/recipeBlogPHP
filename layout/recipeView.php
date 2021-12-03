<?php
$getType_sql = 'SELECT type FROM recipe';
$getItem_sql = 'SELECT item FROM recipe';
$getDetail_sql = 'SELECT detail FROM recipe';
$getType = mysqli_query($con,$getType_sql);
$getItem = mysqli_query($con,$getItem_sql);
$getDetail = mysqli_query($con,$getDetail_sql);
while($type = mysqli_fetch_assoc($getType)) {
    ?>
    <div class="recipe-content-section">
        <div id="<?php echo $type['type']?>">
            <?php echo '<h3 class="recipe-item-name">' . '#' . $type['type'] . ' - ';
            echo mysqli_fetch_assoc($getItem)['item'] . '</h3>';
            echo '<br>';
            echo mysqli_fetch_assoc($getDetail)['detail']?>
        </div>
    </div>
    <?php
}
?>

