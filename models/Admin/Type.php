<?php

class Type
{
    private $_id;
    private $_Libelle;
    private $_id_marque;

    /**
     * @param $_Libelle
     * @param $_id_marque
     */
    public function __construct($_Libelle, $_id_marque)
    {
        $this->_Libelle = $_Libelle;
        $this->_id_marque = $_id_marque;
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

    /**
     * @return mixed
     */
    public function getIdMarque()
    {
        return $this->_id_marque;
    }

    /**
     * @param mixed $id_marque
     */
    public function setIdMarque($id_marque)
    {
        $this->_id_marque = $id_marque;
    }

}