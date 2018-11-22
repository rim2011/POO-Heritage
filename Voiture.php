<?php
/**
 * Created by PhpStorm.
 * User: RIM
 * Date: 20/11/2018
 * Time: 17:27
 */

class Voiture extends Vehicule
{
    private $vitesse;
    private $couleur;


    /**
     * Voiture constructor.
     * @param $vitesse
     */
    public function __construct($marque, $date_achat, $prix_achat,$prix_courant,$vitesse,$couleur)
    {
        parent::__construct($marque, $date_achat, $prix_achat, $prix_courant);
        $this->vitesse = $vitesse;
        $this->couleur = $couleur;
        echo "Voiture <br>";

    }

    public function __destruct()
    {
        parent::__destruct();
        echo "La voiture a été détruite avec succès! <br>";
    }

    public function affiche(){
        echo "La marque de la voiture est: ".$this->getMarque().
            ". la vitesse est: ".$this->getVitesse().". La couleur est: ".
            $this->getCouleur()."<br>";

    }

    public function deplacer(){
        echo "La voiture se déplace";
    }

    public function taxeVente(){
        echo "Le montant de la taxe à payer est :" .($this->getPrixCourant()*5/100)."<br>";
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

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    /**
     * @return mixed
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * @param mixed $matricule
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }


}