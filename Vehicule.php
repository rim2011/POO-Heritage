<?php
/**
 * Created by PhpStorm.
 * User: RIM
 * Date: 20/11/2018
 * Time: 17:0*/
abstract class Vehicule
{
    private $marque;
    private $date_achat;
    private $prix_achat;
    private $prix_courant;

    /**
     * Vehicule constructor.
     * @param $marque
     * @param $date_achat
     * @param $prix_achat
     */
    public function __construct($marque, $date_achat, $prix_achat, $prix_courant)
    {
        $this->marque = $marque;
        $this->date_achat = $date_achat;
        $this->prix_achat = $prix_achat;
        $this->prix_courant = $prix_courant;
        echo "Vehicule </br>";
    }

   public function __destruct()
    {
        echo "Véhicule détruite avec succès! </br>";
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getDateAchat()
    {
        return $this->date_achat;
    }

    /**
     * @param mixed $date_achat
     */
    public function setDateAchat($date_achat)
    {
        $this->date_achat = $date_achat;
    }

    /**
     * @return mixed
     */
    public function getPrixAchat()
    {
        return $this->prix_achat;
    }

    /**
     * @param mixed $prix_achat
     */
    public function setPrixAchat($prix_achat)
    {
        $this->prix_achat = $prix_achat;
    }

    /**
     * @return mixed
     */
    public function getPrixCourant()
    {
        return $this->prix_courant;
    }

    /**
     * @param mixed $prix_courant
     */
    public function setPrixCourant($prix_courant)
    {
        $this->prix_courant = $prix_courant;
    }


    public function affiche(){
        echo "La marque de la voiture est: ".$this->getMarque().
            ". la date d'achat est: ".$this->getDateAchat().". Le prix d'achat est: ".
             $this->getPrixAchat();

    }

     abstract public function deplacer();

}