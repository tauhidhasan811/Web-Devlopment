<?php
$cars = array('Volvo', 'BMW', 100);
$details = array('model'=> "BMW", 'price'=> 200.30, "Loction"=>"dhaka");
var_dump($cars);
foreach($cars as $name)
{
    echo " $name <br>";
}
foreach($details as $ys => $value)
{
    echo "$ys : "."$value"."<br>";
}
for($x=0;$x<3;$x++)
{
    echo $cars[$x]."<br>";
}

$GLOBALS['x'] = 10;
$GLOBALS['y'] = 5;
function addition()
{
    $GLOBALS['z'] = $GLOBALS['x']+ $GLOBALS['y'];
    return $GLOBALS['z'];
}

addition();
echo $z. "<br>";


if(is_array($cars)){
    echo "Yes it is array <br>";
}

echo "<h1>File read write</h1><br>";

$file = fopen('file.txt','r') ;
echo "file variable: " .$file.'<br>';
echo fread($file, filesize('file.txt'));
$text = 'kjgnkjsrg';
$text2 = 'tlhkyhd';
$file2 = fopen('nura.txt','w');
fwrite($file2, $text);
fwrite($file2, $text2);
?>