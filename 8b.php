<?php
    $arr=array(
	 array(1,2,3),
	 array(4,5,6),
	 array(7,8,9)
);

echo "<h2> The given matrix is </h2>";
for($row=0; $row < 3; $row++){
echo "<br>";
for($col=0; $col < 3; $col++){
 echo " ".$trans[$row][$col];
}
}

echo "<h2> The Transpose of given matrix is </h2>";
for($row=0; $row < 3; $row++){
echo "<br>";
for($col=0; $col < 3; $col++){
 echo " ".$trans[$col][$row];
}
}

