<?php
include_once "Dancer.php";


class Couple
{
    public $maleQueue;
    public $femaleQueue;

    public function __construct()
    {
        $this->maleQueue = new SplQueue();
        $this->femaleQueue = new SplQueue();
        $this->couple = [];
    }

    public function getMaleQueue()
    {
        return $this->maleQueue;
    }

    public function setMaleQueue($maleQueue)
    {
        $this->maleQueue = $maleQueue;
    }

    public function getFemaleQueue()
    {
        return $this->femaleQueue;
    }

    public function setFemaleQueue($femaleQueue)
    {
        $this->femaleQueue = $femaleQueue;
    }

    public function addDancerToQueue($dancer)
    {
        if ($dancer->gender == "male") {
            $this->maleQueue->enqueue($dancer);
        } else {
            $this->femaleQueue->enqueue($dancer);
        }
    }

    public function makeCouple()
    {
        $arr = [];
        $man = $this->maleQueue->dequeue();
        $girl = $this->femaleQueue->dequeue();
        array_push($arr, $man, $girl);
        array_push($this->couple, $arr);
    }

    public function displayCouple()
    {
        return $this->couple;
    }
}