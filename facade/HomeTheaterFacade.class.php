<?php
class HomeTheaterFacade {
    private $amp;
    private $tuner;
    private $dvd;
    private $cd;
    private $projector;
    private $lights;
    private $screen;
    private $popper;

    public function __construct ($amp, $tuner, $dvd, $cd, $projector, $screen, $lights, $popper) {
        $this->amp = $amp;
        $this->tuner = $tuner;
        $this->dvd = $dvd;
        $this->cd = $cd;
        $this->porjector = $projector;
        $this->screen = $screen;
        $this->ligths = $lights;
        $this->popper = $popper; 
    }

    public function watchMoive ($moive) {
        echo 'Get ready to watch a moive...<br/>';
        //$this->popper->on();
        //$this->popper->pop();
        //$this->ligths->dim(10);
        //$this->screen->down();
        //$this->projector->on();
        //$this->projector->wideScreenMode();
        $this->amp->on();
        $this->amp->setDvd($this->dvd);
        $this->amp->setSurroundSound();
        $this->amp->setVolume(5);
        $this->dvd->on();
        $this->dvd->play($moive);
    }

    public function endMoive () {
        echo 'Shutting moive theater down...<br/>';
        //$this->popper->off();
        //$this->ligths->on();
        //$this->screen->up();
        //$this->projector->off();
        $this->amp->off();
        $this->dvd->stop();
        $this->dvd->eject();
        $this->dvd->off();
    }

    public function listenToCd ($cdTitle) {
        echo 'Get ready for an audiopile experence...<br/>'; 
    }

    public function endCd () {
        echo 'Shutting down CD...<br/>';
    }

    public function listenToRadio ($frequecy) {
       echo 'Tuning in the airewaves...<br/>'; 
    }

    public function endRadio () {
        echo 'Shutting down the tuner...<br/>';
    }
}
