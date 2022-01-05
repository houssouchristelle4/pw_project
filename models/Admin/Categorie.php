<?php

class Categorie extends Model
{
    private $_id;
    private $_Libelle;

    /**
     * @param $_id
     * @param $_Libelle
     */
    public function __construct($_Libelle)
    {
        $this->_Libelle = $_Libelle;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->_Libelle;
    }

    /**
     * @param mixed $Libelle
     */
    public function setLibelle($Libelle)
    {
        $this->_Libelle = $Libelle;
    }

    public function __toString()
    {
        return $this->_id.",".$this->_Libelle;
    }


}