<?php
    $title = "View Our Listings";
    include('inc/header.php'); 
  //  $c = mysqli_connect("localhost", "vhaber_638", "vhaber_mysql", "FOUtSLTg12Ig");
    $sql = "SELECT * FROM property
    JOIN category ON category.cat_id=property.p_category
    JOIN location ON location.loc_id=property.p_location
    JOIN style ON style.style_id=property.p_style";
    ?>
<div class="content mt-5">
    <ul class="rig columns-4">

<?php
    $results = mysqli_query($c, $sql);
    while($row = mysqli_fetch_assoc($results)){?>
        <li><a href="details.php?p_id=<?php echo $row['p_id']?>"> <img src='img/<?php echo $row['p_id']?>f.jpg' /></a>
            <h4><?php echo $row['p_name']?></h4>
            <p><?php echo $row['p_description']?></p>
            <p><?php echo $row['city']?>, <?php echo $row['state']?></p>
            <a href="details.php?p_id=<?php echo $row['p_id'] ?>" class="btn btn-default btn-xs">Details</a>
        </li>
        <?php
    }
?>


<?php 
    include('inc/footer.php');
?>