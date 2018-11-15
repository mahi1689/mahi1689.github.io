<?php
    $arr1=array(
	 array(1,2,3),
	 array(4,5,6),
	 array(7,8,9)
);

$arr2=array(
	 array(1,2,3),
	 array(4,5,6),
	 array(7,8,9)
);
echo "<h2> The  matrix 1 is </h2>";
for($row=0; $row < 3; $row++){
for($col=0; $col < 3; $col++){
 echo $arr1[$row][$col]." ";
}
echo "<br>";
}

echo "<h2> The matrix 2 is </h2>";
for($row=0; $row < 3; $row++){
for($col=0; $col < 3; $col++){
 echo $arr2[$row][$col]." ";
}
echo "<br>";
}

echo "<h2> The addition of given matrix is </h2>";
for($row=0; $row < 3; $row++){
for($col=0; $col < 3; $col++){
 echo $arr1[$row][$col]+$arr2[$row][$col]." ";
}
echo "<br>";
}
