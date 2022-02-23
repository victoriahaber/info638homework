<html>
<head>
    <title>Coding HW 3</title>
</head>
<body>

<?php
//problem 1

$bookdata = array (
    array("PHP and MySQL Web Development","Luke Welling",144, "Paperback","31.63"),

    array("Web Design with HTML, CSS, JavaScript and jQuery", "Jon Duckett", 135, "Paperback","41.23"),

    array("PHP Cookbook: Solutions & Examples for PHP Programmers", "David Sklar", 14, "Paperback", "40.88"),

    array("JavaScript and JQuery: Interactive Front-End Web Development", "Jon Duckett", 251, "Paperback", "22.09"),

    array("Modern PHP: New Features and Good Practices", "Josh Lockhard", 7, "Paperback", "28.49"),
    
    array("Programming PHP", "Kevin Tatroe", 26, "Paperback", "28.96"),
  );
/*
  echo '<pre>';
  print_r ($bookdata);
  echo '</pre>';*/

  echo '<table>';
  echo '<tr><th>Title</th><th>First Name</th><th>Last Name</th><th>Pages</th><th>Type</th><th>Price</th></tr>';
  $total_price = 0;
  foreach($bookdata as $key => $array) {
    $name = $array[1];
    $name_array = explode(' ', $name);
    echo '<tr><td>' . $array[0] .'</td><td>' . $name_array[0] . ' </td><td>' . $name_array[1] . '</td>';
    echo '<td>' . $array[2] . '</td><td>' . $array[3] . '</td><td>$' . $array[4].'</td> </tr>';
    $total_price = $total_price + $array[4];

  }



  echo '</table>';

  echo '<div class="total">$'.$total_price.'</div>';

?>

<?php

if(!empty($_GET['num'])) {
    $flips = intval($_GET['num']);
    flipping_for_heads($flips);
}

$heads = 0;
$tails = 1;
/*
if ($randomizer == $tails){
return show_tails_content();
} else
return show_heads_content();
*/



function flipping_for_heads($num_heads) {
    global $heads, $tails;
    $heads_in_a_row = 0;
    $flips_array = [];
    $c = 0;
    //flip 3 times and loop function 3 times
    //for ($x = 0; $x < 3; $x++) {
     //   echo $tails.'<br>';
    while($heads_in_a_row < $num_heads) {
        $randomizer = mt_rand(0,1);
      //  echo $randomizer;
        if ($randomizer == $tails){
           // $flips_array[$x]  = 
            show_tails_content();
            $heads_in_a_row = 0;
        } else {
            //$flips_array[$x]  = 
            show_heads_content();
            $heads_in_a_row++;

        }
        $c++;
        if($c > 100) {
            return;
        }
    }
    print $c;
}


function show_tails_content() {
    global $tails;
    echo '<img src="tails.jpg" alt="tails">';
    return $tails;

}

function show_heads_content() {
    global $heads;
    echo '<img src="heads.jpg" alt="heads">';
    return $heads;

}

