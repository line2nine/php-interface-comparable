<?php
include "class/ComparableCircle.php";

$circles[0] = new ComparableCircle("Circle 1", 20);
$circles[1] = new ComparableCircle("Circle 2", 17);
$circles[2] = new ComparableCircle("Circle 3", 12);

echo('Pre-sort: <br>');
foreach ($circles as $circle) {
    echo('name: ' . $circle->getName() . ', radius: ' . $circle->getRadius() . '<br>');
}
sort($circles);
echo('<br>After-sorted: <br>');
foreach ($circles as $circle) {
    echo('name: ' . $circle->getName() . ', radius: ' . $circle->getRadius() . '<br>');
}