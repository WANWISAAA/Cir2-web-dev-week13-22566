<?php
//Fuction in php
//1.User-defind a function
function add($a,$b) {
    $add = $a + $b;
    print ("This is a function add $a + $b = " . $add."<br />");
}
add(10,5);

function sub($a,$b) {
    $sub = $a - $b;
    print ("This is a function add $a - $b = " . $sub."<br />");
}
sub(10,5);

function multiple($a,$b) {
    $multiple = $a * $b;
    print ("This is a function add $a * $b = ". $multiple."<br />");
}
multiple(10,5);

function division($a,$b){
    $division = $a / $b;
    print ("This is a function add $a / $b = ". $division."");
}
division(10,5);
?>