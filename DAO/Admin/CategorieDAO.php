<?php

class CategorieDAO extends Connexion
{
    public function getCategories(){
        return $this->getAll('categories','Categorie');

    }

    public function getCategorie($id){
        return $this->getOne('categories','Categorie',$id);


    }

    public function createCategorie(){
        return $this->createOne('categories','Categorie');
    }


}


