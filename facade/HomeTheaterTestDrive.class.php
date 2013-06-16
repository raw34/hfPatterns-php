<?php
require_once 'autoload.php';

class HomeTheaterTestDrive {
    public function __construct () {
        $amp = new Amplifier('Top-O-Line Amplifier');
        $tuner = new Tuner('Top-O-Line AM/FM Tuner', $amp);
        $dvd = new DvdPlayer('Top-O-Line DVD Player', $amp);
        $cd = new CdPlayer('Top-O-Line CD player', $amp);
        $projector = NULL;
        $screen = NULL;
        $lights = NULL;
        $popper = NULL;

        $homeTheater = new HomeTheaterFacade($amp, $tuner, $dvd, $cd, $projector, $screen, $lights, $popper);

        $homeTheater->watchMoive('Leon');
        $homeTheater->endMoive();
    }
}

$obj = new HomeTheaterTestDrive();
