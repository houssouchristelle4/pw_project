<?php

class Reservation
{
    private $_id;
    private $_date_dep;
    private $_date_arr;
    private $_id_user;
    private $_id_voiture;
    private $_montant;

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
    public function getDateDep()
    {
        return $this->_date_dep;
    }

    /**
     * @param mixed $date_dep
     */
    public function setDateDep($date_dep)
    {
        $this->_date_dep = $date_dep;
    }

    /**
     * @return mixed
     */
    public function getDateArr()
    {
        return $this->_date_arr;
    }

    /**
     * @param mixed $date_arr
     */
    public function setDateArr($date_arr)
    {
        $this->_date_arr = $date_arr;
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
     * @return mixed
     */
    public function getIdVoiture()
    {
        return $this->_id_voiture;
    }

    /**
     * @param mixed $id_voiture
     */
    public function setIdVoiture($id_voiture)
    {
        $this->_id_voiture = $id_voiture;
    }

    /**
     * @return mixed
     */
    public function getMontant()
    {
        return $this->_montant;
    }

    /**
     * @param mixed $montant
     */
    public function setMontant($montant)
    {
        $this->_montant = $montant;
    }

}