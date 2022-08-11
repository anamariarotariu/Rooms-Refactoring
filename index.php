<?php

use App\HotelManager;
use App\Rooms\DoubleRoom;
use App\Rooms\LargeRoom;
use App\Rooms\SingleRoom;
use App\Tourist\Tourist;

require 'vendor/autoload.php';
try {
    $largeRoom = new LargeRoom(['second floor', 12], 2, 240, false);
    $largeRoom2 = new LargeRoom(['second floor', 10], 2, 240, false);
    $singleRoom = new SingleRoom(['first floor', 3], 2, 100, false);
    $singleRoom2 = new SingleRoom(['first floor', 2], 2, 100, false);
    $doubleRoom = new DoubleRoom(['third floor', 20], 3, 200, false);
    $doubleRoom2 = new DoubleRoom(['first floor', 1], 1, 50, false);
    $tourist = new Tourist('Jessie', 'Jones');
    $tourist1 = new Tourist('Bob', 'Swift');
    $manager = new HotelManager($tourist, $singleRoom, $doubleRoom);
    $tourist->bookRoom($doubleRoom);
    $result1 = $manager->manage($doubleRoom);
    $tourist1->bookRoom($largeRoom);
    $result2 = $manager->manage($largeRoom);
} catch (Exception $e) {
    echo $e;
}
