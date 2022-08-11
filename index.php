<?php

use App\Rooms\DoubleRoom;
use App\Rooms\LargeRoom;
use App\Rooms\SingleRoom;
use App\Tourist\Tourist;

require 'vendor/autoload.php';

try {
    $largeRoom = new LargeRoom(['second floor', 12], 2, 240);

    $singleRoom = new SingleRoom(['first floor', 3], 1, 100);
    $doubleRoom = new DoubleRoom(['third floor', 20], 3, 200);

    $tourist = new Tourist($largeRoom, $singleRoom, $doubleRoom, 'Jessie', 'Jones');

} catch (Exception $e) {
    echo $e;
}
