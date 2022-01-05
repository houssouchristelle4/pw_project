<?php

class Client
{
    private $_id;
    private $_nom;
    private $_prenom;
    private $_Adresse;
    private $_id_user;

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
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->_prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->_Adresse;
    }

    /**
     * @param mixed $Adresse
     */
    public function setAdresse($Adresse)
    {
        $this->_Adresse = $Adresse;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->_id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user)
    {
        $this->_id_user = $id_user;
    }

    /**
     * @param $_nom
     * @param $_prenom
     * @param $_Adresse
     * @param $_id_user
     */
    public function __construct($_nom, $_prenom, $_Adresse, $_id_user)
    {
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_Adresse = $_Adresse;
        $this->_id_user = $_id_user;
    }


}