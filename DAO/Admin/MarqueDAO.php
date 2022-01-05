<?php

class MarqueDAO extends Connexion
{
    public function getMarques(){
        return $this->getAll('marques','Marque');

    }

    public function getMarque($id){
        return $this->getOne('marques','Marque',$id);


    }

    public function createMarque(){
        return $this->createOne('marques','Marque');
    }
}