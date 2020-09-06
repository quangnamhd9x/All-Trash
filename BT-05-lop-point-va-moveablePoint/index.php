<?php
include_once 'Point.php';
include_once 'MovablePoint.php';

$demoPoint = new Point(5,7);
echo $demoPoint;
echo "<pre>";
$demoMoveablePoint = new MovablePoint(1,2,3,4);
echo $demoMoveablePoint;
echo "<pre>";
