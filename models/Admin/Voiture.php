<?php

class Voiture
{
    private $_id;
    private $_type;
    private $_categorie;
    private $_gps;
    private $_climatiseur;
    private $_nbr_porte;
    private $_place;
    private $_siege_enfant;
    private $_couleur;
    private $_kilometrage;
    private $_Assurances;
    private $_prix;

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->_prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->_prix = $prix;
    }

    /**
     * @param $_type
     * @param $_categorie
     * @param $_gps
     * @param $_climatiseur
     * @param $_nbr_porte
     * @param $_place
     * @param $_siege_enfant
     * @param $_couleur
     * @param $_kilometrage
     * @param $_Assurances
     * @param $_prix
     */
    public function __construct($_type, $_categorie, $_gps, $_climatiseur, $_nbr_porte, $_place, $_siege_enfant, $_couleur, $_kilometrage, $_Assurances, $_prix)
    {
        $this->_type = $_type;
        $this->_categorie = $_categorie;
        $this->_gps = $_gps;
        $this->_climatiseur = $_climatiseur;
        $this->_nbr_porte = $_nbr_porte;
        $this->_place = $_place;
        $this->_siege_enfant = $_siege_enfant;
        $this->_couleur = $_couleur;
        $this->_kilometrage = $_kilometrage;
        $this->_Assurances = $_Assurances;
        $this->_prix = $_prix;
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
    public function getType()
    {
        return $this->_type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->_type = $type;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->_categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie)
    {
        $this->_categorie = $categorie;
    }

    /**
     * @return mixed
     */
    public function getGps()
    {
        return $this->_gps;
    }

    /**
     * @param mixed $gps
     */
    public function setGps($gps)
    {
        $this->_gps = $gps;
    }

    /**
     * @return mixed
     */
    public function getClimatiseur()
    {
        return $this->_climatiseur;
    }

    /**
     * @param mixed $climatiseur
     */
    public function setClimatiseur($climatiseur)
    {
        $this->_climatiseur = $climatiseur;
    }

    /**
     * @return mixed
     */
    public function getNbrPorte()
    {
        return $this->_nbr_porte;
    }

    /**
     * @param mixed $nbr_porte
     */
    public function setNbrPorte($nbr_porte)
    {
        $this->_nbr_porte = $nbr_porte;
    }

    /**
     * @return mixed
     */
    public function getPlace()
    {
        return $this->_place;
    }

    /**
     * @param mixed $place
     */
    public function setPlace($place)
    {
        $this->_place = $place;
    }

    /**
     * @return mixed
     */
    public function getSiegeEnfant()
    {
        return $this->_siege_enfant;
    }

    /**
     * @param mixed $siege_enfant
     */
    public function setSiegeEnfant($siege_enfant)
    {
        $this->_siege_enfant = $siege_enfant;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->_couleur;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur)
    {
        $this->_couleur = $couleur;
    }

    /**
     * @return mixed
     */
    public function getKilometrage()
    {
        return $this->_kilometrage;
    }

    /**
     * @param mixed $kilometrage
     */
    public function setKilometrage($kilometrage)
    {
        $this->_kilometrage = $kilometrage;
    }

    /**
     * @return mixed
     */
    public function getAssurances()
    {
        return $this->_Assurances;
    }

    /**
     * @param mixed $Assurances
     */
    public function setAssurances($Assurances)
    {
        $this->_Assurances = $Assurances;
    }

}