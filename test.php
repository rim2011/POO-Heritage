<?php
/**
 * Created by PhpStorm.
 * User: RIM
 * Date: 22/11/2018
 * Time: 09:55
 */

include 'Vehicule.php';
include 'Avion.php';
include 'Voiture.php';

$voiture1=new Voiture("BMW",12-06-2010,15000,20000,150,"rouge");
$voiture1->affiche();
$voiture1->taxeVente();

$avion1=new Avion("Boeing",13-10-2000,150000,200000,6);
$avion1->affiche();