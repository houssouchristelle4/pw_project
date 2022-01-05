<?php

class TypeDAO extends Connexion
{
    public function getTypes(){
        return $this->getAll('types','Type');

    }

    public function getType($id){
        return $this->getOne('types','Type',$id);


    }

    public function createType(){
        return $this->createOne('types','Type');
    }
}