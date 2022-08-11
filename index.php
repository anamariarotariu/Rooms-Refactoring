<?php

use App\HotelManager;
use App\Rooms\DoubleRoom;
use App\Rooms\LargeRoom;
use App\Rooms\SingleRoom;
use App\Tourist\Tourist;

require 'vendor/autoload.php';
try {
    $largeRoom = new LargeRoom(['second floor', 12], 2, 240);
    $largeRoom2 = new LargeRoom(['second floor', 10], 2, 240);
    $singleRoom = new SingleRoom(['first floor', 3], 2, 100);
    $singleRoom2 = new SingleRoom(['first floor', 2], 2, 100);
    $doubleRoom = new DoubleRoom(['third floor', 20], 3, 200);
    $doubleRoom2 = new DoubleRoom(['first floor', 1], 1, 50);
    $tourist = new Tourist('Jessie', 'Jones', $singleRoom);
    $tourist1 = new Tourist('Bob', 'Swift', $doubleRoom, $doubleRoom2);
    $manager = new HotelManager($tourist, $singleRoom, $doubleRoom);
    $result = $manager->manage($singleRoom);
    echo $result;
} catch (Exception $e) {
    echo $e;
}
