<?php
    $title = "Property Listings";
    include('inc/header.php'); 
  //  $c = mysqli_connect('localhost', 'vhaber_638', 'vhaber_mysql', 'FOUtSLTg12Ig');
    $sql = "SELECT * FROM property
    JOIN category ON category.cat_id=property.p_category
    JOIN location ON location.loc_id=property.p_location
    JOIN style ON style.style_id=property.p_style";
?>
<head> <link rel="stylesheet" href="style.css"> </head>

<h1>
    Take a look at our properties
</h1>
<?php 
    $results = mysqli_query($c, $sql);
   echo '<div class="fotorama"

    data-width=100%
    data-height=80%
    data-autoplay="true"
    data-loop="true"> ';
    while($row = mysqli_fetch_assoc($results)){?>
    <a href="details.php?p_id=<?php echo $row['p_id']?>"> <img src='img/<?php echo $row['p_id']?>f.jpg' /></a>
	<?php } 
   echo  '</div>';
?>
<?php 
    include('inc/footer.php');
?>