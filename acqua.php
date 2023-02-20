<?php

include 'esercizio-zoo.php'



class Aquatico extends Animal{
    public $cibo;
    
    public static $counter = 0;
    
    public function __construct($nome, $genere, $età, $cibo){
        
        parent::__construct($nome, $genere, $età);
        self::$counter++;
        
        $this-> cibo = $cibo;
        
        
    }
    
    public function info(){
        echo "c'è uno $this->genere che si chiama $this->nome. Ha $this->età, e si nutre di $this->cibo.";
    }
}


$shark = new Acquatico('shark', 'squalo', '10 anni', 'pesci piccoli');

$shark->info();