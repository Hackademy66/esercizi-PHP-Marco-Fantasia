<?php

include 'esercizio-zoo.php';

class Cielo extends Animal{
    public $statura;
    

    public static $counter = 0;

    public function __construct($nome, $genere, $età, $statura){
        
        parent::__construct($nome, $genere, $età);
        self::$counter++;
        
        $this-> statura = $statura;
        

    }
    public function info(){
            echo "esiste un $this->genere che si chiama $this->nome. Ha $this->età, ed ha le $this->statura.";
        }
}


$minnie = new Cielo('lucio', 'uccello', '6 anni', 'ali grandi');

$minnie->info();