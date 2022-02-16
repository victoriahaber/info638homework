<html>
<head>
    <title>Coding Homework 2</title>
</head>
<body>
<?php
//problem 2
//flip a coin 1 time and this coin will be heads or tails using the mt_rand function
$heads = 0;
$tails = 1;
//echo the random function to either flip 0 or 1

$randomizer = mt_rand($heads,$tails);

function show_tails_content(){ ?>
    <div>
        <h3> The coin landed on tails </h3>
        <img src="https://media.istockphoto.com/photos/quarter-dollar-us-coin-isolated-on-white-picture-id476142091?k=20&m=476142091&s=612x612&w=0&h=mX2-F4WTLslfOBnUrkOrp6noMqUyzAO1Iq8aHF_EGkY=">
        </div>
    <?php
}

function show_heads_content() { ?>
  <div>
        <h3> The coin landed on heads </h3>
        <img src="https://m.media-amazon.com/images/I/51xs7F+tP5L._AC_SY580_.jpg">
        </div>
    <?php
}




if ($randomizer == $tails){
    return show_tails_content();
} else 
    return show_heads_content();




//flip 3 times and loop function 3 times
for ($x = 0; $x <=3;){
    $randomizer = mt_rand($heads,$tails);
}


//flip 5 times
//flip 7 times
//flip 9 times
//problem 1 

$result = "Not a valid ISBN";
$top_mult = 10;
$resultnum = 0;
$isbn_no = "0596009763";
$isbn_str_arr = str_split($isbn_no, );
for ($x = 0; $x <= sizeof($isbn_str_arr)-1; $x++) {
  $resultnum += $top_mult * $isbn_str_arr[$x];
  //$tempresultnum = $top_mult * $isbn_str_arr[$x];
  //echo "($top_mult * $isbn_str_arr[$x]) = $tempresultnum <br>";
  $top_mult --;
}
//resultnum = 231
if ($resultnum % 11 == 0) {
    $result = "Valid ISBN<br>";
}
echo $result;


?>

</body>
</html>
