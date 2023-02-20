<?php


include 'esercizio-zoo.php';

class Mammifero extends Animal{
    public $habitat;
    public $caratteristiche;

    public static $counter = 0;

    public function __construct($nome, $genere, $età, $habitat, $caratteristiche){
        
        parent::__construct($nome, $genere, $età);
        self::$counter++;
        
        $this-> habitat = $habitat;
        $this-> caratteristiche = $caratteristiche;

    }
    public function info(){
            echo "ho un $this->genere che si chiama $this->nome. Ha $this->età, vive a $this->habitat ed è di $this->caratteristiche.";
        }
}


$minnie = new Mammifero('minnie', 'cane', '3 anni', 'casa', 'piccola statura');

$minnie->info();