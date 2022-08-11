<?php

use App\Rooms\DoubleRoom;
use App\Rooms\LargeRoom;
use App\Rooms\SingleRoom;
use App\Tourist\Tourist;

require 'vendor/autoload.php';
try {
    $largeRoom = new LargeRoom(['first floor', 2], 1, 140, false);
    $tourist = new Tourist('Jessie', 'Pinkman');
    $tourist->bookRoom($largeRoom);
    $tourist1 = new Tourist('Walter', 'Wilde');
    $tourist2 = new Tourist('Bob', 'White');
    $singleRoom = new SingleRoom(['second floor', 5], 2, 200, false);
    $tourist1->bookRoom($singleRoom);
    $tourist->bookRoom($singleRoom);
} catch (Exception $e) {
    echo $e;
}
