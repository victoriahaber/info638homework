<html>
<body>
<?php


/* assigning variables */
$change = 159;
$doll = "1 dollar";
$quart = "two quarters";
$nick = "one nickel";
$pen = "three pennys";

echo "You get 159 total cents in change from a store"."<br>"."The store gave you: $doll, $quart, $nick and $pen. <br> <br>";


$bottles = 99;
while ($bottles > 0){
  echo "$bottles bottles of beer on the wall, ";
  echo "$bottles bottles of beer, ";
  echo "take one down and pass it around </br></br> ";
  $bottles--;
  /* assigned 99 to variable bottles and then using decrement operators to decrease the value after each loop  */
}
?>
</body>
</html>
