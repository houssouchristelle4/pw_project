<?php

class VoitureDAO extends Connexion
{
    public function getVoitures(){
        return $this->getAll('voitures','Voiture');

    }

    public function getVoiture($id){
        return $this->getOne('voitures','Voiture',$id);


    }

    public function createVoiture(){
        return $this->createOne('voitures','Voiture');
    }
}