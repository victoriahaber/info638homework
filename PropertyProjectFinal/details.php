<?php
    $title = "Property Listings";
    include('inc/header.php'); 
    $id = $_GET['p_id'];
   // $c = mysqli_connect("localhost", "vhaber_638", "vhaber_mysql", "FOUtSLTg12Ig");
    $sql = "SELECT * FROM property
    JOIN category ON category.cat_id=property.p_category
    JOIN location ON location.loc_id=property.p_location
    JOIN style ON style.style_id=property.p_style
    WHERE p_id = $id";
    $query = mysqli_query($c, $sql);
    $result = mysqli_fetch_assoc($query);
    echo '<div class="fotorama"
    data-width="400"
    data-height="300"
    data-autoplay="true"
    data-loop="true">
    <img src="img/'.$id.'f.jpg" />
	<img src="img/'.$id.'s.jpg" />
    </div>';
    echo "<h1>".$result['p_name']."</h1>";
    echo "<h2>".$result['p_description']."</h2>";
    echo "<h3>".$result['style_name']."</h3>";
    echo "<p>Price: ".$result['p_price']." ".$result['curr_accepted']."</p>";
    echo "<p>".$result['p_size']."sqft<p>";
    echo "<p>County: ".$result['county']."<p>";
    echo "<p>".$result['city'].",".$result['state']." ".$result['zip']."</p>";
    include('inc/footer.php');
?>