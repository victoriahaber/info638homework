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
(mt_rand($heads,$tails));
$randomizer = mt_rand($heads,$tails);
if ($randomizer == $heads) echo ("The coin landed on heads");
else echo ("The coin landed on tails");
//flip 3 times
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
