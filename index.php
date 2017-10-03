<?php


class Voiture {
    //propriétés
    private $indicateurReserve;
    private $reservoir;


    public function __construct($nblitre){
        $this->setReservoir($nblitre);
    }
    

    public function getIndicateurReserve(){
        return $this->indicateurReserve;
    }

    public function setIndicateurReserve($indicateur){
        return $this->indicateurReserve($indicateur);
    }

    // accesseur reservoir 
    public function getReservoir(){
        return $this->reservoir;
    }

    public function setReservoir($nb_litre){
        $this->reservoir = $nblitre;
        if($nb_litre <= 20){
            $this->setIndicateurReserve = true;
        } else {
            $this->setIndicateurReserve = false;
        }
    }
    
    // //  Constructeur 
    // public function __construct($nblitre){
    //     $this->reservoir = $nblitre;
    //     //affectation

    // }

    // //methodes getteur
    // public function getReservoir(){
    //     return $this->__reservoir;
    // }

    // //methodes setteur 
    // public function setReservoir($nblitre){
    //     $this->reservoir = $nblitre;
    // }

    // //mettre a jour l'indicateur 
    // private function __updateIndicateur(){
    //     $this->__indicateurReserve = $this->__reservoir < 20;
    // }

}