<?php

abstract class Connexion
{
    //private static $_bdd;
    private $_bdd;

    //connexion a la bdd

    public function __construct()
    {
        try {
            $pdo_options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT => true);
            $this->_bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', $pdo_options);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

    }
    //fonction de connexion par defaut a la bdd

    /**
     * @return PDO
     */
    public function getBdd()
    {
        return $this->_bdd;
    }
}
?>