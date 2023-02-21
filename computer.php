<?php

abstract class RAM{
    public abstract function memory();
}

abstract class VideoCard{
    public abstract function graphic();
}

abstract class Processor{
    public abstract function performance();
}

abstract class Accessories{
    public abstract function funzionality();
}




class IndoorUnits extends RAM{
    public function memory(){
        echo "possiamo inserirci tutti i nostri dati.";
    }
}


class GPU extends VideoCard{
    public function graphic(){
        echo "elabora i dati e li restituisce in video.";
    }
}


class ComputationalUnits extends Processor{
    public function performance(){
        echo "garantisce preformance alte in termini di elaborazione.";
    }
}


class keyboardAndMouse extends Accessories{
    public function funzionality(){
        echo "servono a dare comandi specifici.";
    }
}



class Computer{
    public $unity;

    public $images;

    public $power;

    public $commands;


  public function __construct(RAM $RAM, VideoCard $VideoCard, Processor $Processor, Accessories $Accessories){
    $this->unity = $RAM;
    $this->images = $VideoCard;
    $this->power = $Processor;
    $this->commands = $Accessories;
  }

}

$computer = new Computer(new IndoorUnits, new GPU, new ComputationalUnits, new KeyboardAndMouse);

print_r($computer);




