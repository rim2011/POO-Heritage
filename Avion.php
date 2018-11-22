<?php
/**
 * Created by PhpStorm.
 * User: RIM
 * Date: 20/11/2018
 * Time: 17:27
 */

class Avion extends Vehicule
{

    private $nbMoteur;


    /**
     * Voiture constructor.
     * @param $vitesse
     */
    public function __construct($marque, $date_achat, $prix_achat,$prix_courant,$nbMoteur)
    {
        parent::__construct($marque, $date_achat, $prix_achat, $prix_courant);
        $this->nbMoteur = $nbMoteur;
        echo "Avion </br>";
    }

    public function __destruct()
    {
        parent::__destruct();
        echo "L'avion a été détruite avec succès! <br>";
    }


    public function affiche(){
        echo "Le nombre de moteur de l'avion est: $this->nbMoteur </br>";

    }

    public function deplacer(){
        echo "L'avion se déplace";
    }

    /**
     * @return mixed
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * @param mixed $vitesse
     */
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;
    }
}