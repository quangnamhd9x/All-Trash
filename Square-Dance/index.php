<?php
include_once "Dancer.php";
include_once "Couple.php";

$couples = new Couple();

$maleDancer1 = new Dancer('Hoang', 'male');
$maleDancer2 = new Dancer('Nam', 'male');
$maleDancer3 = new Dancer('Truong', 'male');
$maleDancer4 = new Dancer('Long', 'male');
$femaleDancer5 = new Dancer('Lien', 'female');
$femaleDancer6 = new Dancer('Son', 'female');
$femaleDancer7 = new Dancer('Thang', 'female');

$couples->addDancerToQueue($maleDancer1);
$couples->addDancerToQueue($maleDancer2);
$couples->addDancerToQueue($maleDancer3);
$couples->addDancerToQueue($maleDancer4);
$couples->addDancerToQueue($femaleDancer5);
$couples->addDancerToQueue($femaleDancer6);
$couples->addDancerToQueue($femaleDancer7);

$status = false;
while (!$status) {
    $status = $couples->maleQueue->isEmpty() || $couples->femaleQueue->isEmpty();
    if ($status) {
        echo "Wait a minutes";
    } else {
        $couples->makeCouple();

    }
}
echo "<pre>";
print_r($couples->displayCouple());
echo "</pre>";


