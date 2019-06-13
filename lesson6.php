<?php
// PHP arrays
//array()
//syntax
//$variableName=array('benz','toyota')
//indexed arrays
$cars=array('benz','toyota','audi','ford');
//$cars[0]=='benz'
//$cars[1]=='toyota'
echo $cars[0];
echo"<br>";
echo $cars[3];
echo"<br>";
echo $cars[4];
echo"<br>";
echo"i like ".$cars[0].",".$cars[1].",".$cars[2] ." and ". $cars[3];
echo"<br>";
$num_cars=count($cars);
//echo $num_cars;
echo count($cars)."<br>";
//for (init count;test count;increment count){}
for ($x=0;$x<$num_cars;$x++){
    echo $x.".".$cars[$x]."<br>";
}

#PHP associative arrays
#associative arrays are arrays that use named keys that you
#assign to them.


$food = array("Uganda"=>"Matoke","Kenya"=>"Sembe","Tanzania"=>"Wali");
echo $food["Uganda"];

echo"<br>";
echo "I love " .$food["Uganda"]. ", ". $food["Kenya"]. " and ".$food["Tanzania"];

foreach($food as $country =>$dish){
    echo $country. " : ".$dish."<br>";
}

echo"<br>";
$electronics['Phone']='Huawei';
$electronics['Laptop']='Yoga';
$electronics['TV']='Samsung';

foreach($electronics as $device=>$brand) {
    echo $device . "  " . $brand . "<br>";
}
//create  two functions,one takes in an index array
// and the second one takes in an associative array as an
// argument and echos out each item


?>
