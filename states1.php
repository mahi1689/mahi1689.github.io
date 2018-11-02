<?php
$allTheStates="Mississippi Alabama Texas Massachussets Kansas";
$statesArray = [];
$states1 = explode(' ',$allTheStates);
$i=0;

//states that ends in xas
foreach ($states1 as $state) {
if(preg_match('/xas$/', ($state))) {
$statesArray[$i]=($state);
$i=$i+1;
echo "<br> The states that ends with xas:" .$state;
}
}

foreach ($states1 as $state) {
if(preg_match('/^k.*s$/', ($state))) {
$statesArray[$i]=($state);
$i=$i+1;
echo "<br> The states that begin with k and end with s:" .$state;
}
}

foreach ($states1 as $state) {
if(preg_match('/^M.*s$/', ($state))) {
$statesArray[$i]=($state);
$i=$i+1;
echo "<br> The states that begin with M and end with s:" .$state;
}
}

foreach ($states1 as $state) {
if(preg_match('/a$/', ($state))) {
$statesArray[$i]=($state);
$i=$i+1;
echo "<br> The states that ends with a:" .$state;
}
}

foreach ($statesArray as $element => $value)
{
print("<br>"  .$value. "is the element " .$element);
}
?>