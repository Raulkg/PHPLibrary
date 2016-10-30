<html>
<?php

include './vendor/autoload.php';

echo "Executing index.php/n";
$square = new Gshape\RightTriangle(10,20);
echo $square->getArea();


echo "\n";

echo $square->scaleByfactor(2);
echo "\n area after scaling:";

echo $square->getArea();


echo "checking rahul";

?>

</html>
