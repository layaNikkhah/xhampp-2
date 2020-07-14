<?php
include("sqlConnection.php");
$result  = query("SELECT * FROM student");
?>
<!-- ////////////////////computer students ////////////////////////  -->

<!-- <div class="w-75 h-75 justify-content-center bg-dark mt-5 mb-5 pt-4" style="height: 500px ;margin-bottom:20px"> -->
<?php
foreach ($result as $key => $value) {
    if ($value['major'] == 'computer') {
?>


<!-- colomns -->
<?php
        foreach ($value as $in => $ls) {
            echo "imlaya";
        ?>
<div class="col-md-2 bg-secondary flex-fill h-100"
    style="border-right: white solid 1px;border-bottom: white solid 1px;">
    <?php echo $ls; ?></div>
<?php
        }
        ?>
</div>
<?php
    }
}
?>

<!-- ////////////////////Electerical students ////////////////////////   -->

<div class=" justify-content-center bg-primary mt-5 pt-4" style="height: 500px">
    <?php
    foreach ($result as $key => $value) {
        if ($value['major'] == 'Electerical') {
    ?>
    <!-- rows -->
    <div class="flex-row d-flex row-md-10 bg-primary text-light  " style="height:30px">
        <!-- colomns -->
        <?php
                foreach ($value as $in => $ls) {
                ?>
        <div class="col-md-2 bg-secondary flex-fill h-100"
            style="border-right: white solid 1px;border-bottom: white solid 1px;">
            <?php echo $ls; ?></div>
        <?php
                }
                ?>
    </div>
    <?php
        }
        ?>

    <?php
    }
    ?>



    <!-- ////////////////////Mechanic students ////////////////////////   -->

    <div class=" justify-content-center bg-primary mt-5 pt-4" style="height: 500px">
        <?php
        foreach ($result as $key => $value) {
            if ($value['major'] == 'Mechanic') {
        ?>
        <!-- rows -->
        <div class="flex-row d-flex row-md-10 bg-primary text-light  " style="height:30px">
            <!-- colomns -->
            <?php
                    foreach ($value as $in => $ls) {
                    ?>
            <div class="col-md-2 bg-secondary flex-fill h-100"
                style="border-right: white solid 1px;border-bottom: white solid 1px;">
                <?php echo $ls; ?></div>
            <?php
                    }
                    ?>
        </div>
        <?php
            }
            ?>

        <?php
        }
        ?>