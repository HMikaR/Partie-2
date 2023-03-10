<h1> Exercice 13</h1>

Créer une classe Voiture possédant les propriétés suivantes: <br> <br>

marque, modèle, nbPortes et vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( )et stopper( )en plus des accesseurs (get) et mutateurs (set) traditionnels. <br><br>

La vitesse initiale de chaque véhicule instancié est de 0. <br>
Une méthode personnalisée pourra afficher toutes les informations d’un véhicule.

<h2> Résultat </h2>

<?php

class Voiture
{
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle;
    private bool $_statut; // true : démarré, false : arrêt

    public function __construct(string $_marque, string $_modele, int $_nbPortes)
    {
        $this->_marque = $_marque;
        $this->_modele = $_modele;
        $this->_nbPortes = $_nbPortes;
        $this->_vitesseActuelle = 0;
        $this->_statut = false; // arrêt
    }

    //! Début accesseurs (getter) : param pour lire les valeurs.
    public function get_marque()
    {
        return $this->_marque;
    }
    public function get_modele()
    {
        return $this->_modele;
    }
    public function get_nbPortes()
    {
        return $this->_nbPortes;
    }
    public function get_vitesseActuelle()
    {
        return $this->_vitesseActuelle;
    }
    //! Fin accesseurs (getter).

    //* Début mutateurs (setter) : param qui permettent de modifier les valeurs. 

    public function set_marque($marque)
    {
        $this->_marque = $marque;
    }
    public function set_modele($modele)
    {
        $this->_modele = $modele;
    }
    public function set_nbPortes($nbPortes)
    {
        $this->_nbPortes = $nbPortes;
    }
    public function set_vitesseActuelle($vitesseActuelle)
    {
        $this->_vitesseActuelle = $vitesseActuelle;
    }

    //* Fin mutateurs (setter).

    //* ------------------------------------
    public function demarrer()
    {
        // ($this->_statut) = $this-> _statut = true
        if ($this->_statut) {
            echo "Le véhicule est déjà démarré !";
        } else {
            echo "Le véhicule " . $this->_marque . " "  . $this->_modele .  "  démarre <br> ";
            $this->_statut = true;
        }
    }

    public function stopper()
    {
        if (!$this->_statut) {
            echo "Le véhicule est déjà à l'arrêt !";
        } else {
            echo "Le véhicule " . $this->_marque . " "  . $this->_modele .  "  est stoppé <br> ";
            $this->_statut = false;
            $this->_vitesseActuelle = 0;
        }
    }


    public function accelerer($vitesse)
    {
        // (!$this->_statut) = $this->_statut = false
        if (!$this->_statut) {
            echo "Le véhicule " . $this->_marque . " " . $this->_modele . " veut accélérer de " . $vitesse . " km / h ." . "<br> Pour accélérer, il faut démarrer le véhicule " . $this->_marque . " "  . $this->_modele . " !";
        } else {
            echo "Le véhicule " . $this->_marque . " " . $this->_modele . " accélère de " . $vitesse . " km / h <br>";

            $this->_vitesseActuelle += $vitesse;
        }
    }

    public function ralentir($vitesse)
    {
        if (!$this->_statut) {
            echo "Pour ralentir, il faut que le véhicule" . $this->_marque . " "  . $this->_modele . "soit déjà démarré !";
        } else {
            echo "Le véhicule" . $this->_marque . " " . $this->_modele . "ralentit de " . $vitesse . " km / h <br>";
            $this->_vitesseActuelle -= $vitesse;
        }
    }
    public function infovehicule()
    {
        echo "Nom et modèle du véhicule : ".$this->_marque. " " .$this->_modele;
        echo "<br> Nombre de portes : ".$this->_nbPortes;
        if (!$this->_statut) {
            echo "<br>La voiture est démarrée. ";
        } else {
            echo "<br>La voiture est stoppée . ";
        }
        echo "<br>Sa vitesse actuelle est de : ".$this->get_vitesseActuelle(). " km / h <br>";
    }
}

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);

echo "<form style='background-color:E8E3E2;width: 680px; padding: 10px'>";

$v1->demarrer();
$v1->accelerer(50);
$v1->accelerer(50);
$v2->demarrer();
// $v2 -> stopper();
$v2->accelerer(20);
$v2->accelerer(70);


echo "La vitesse actuelle du véhicule Peugeot 408 est de " . $v1->get_vitesseActuelle() . " km / h <br>";
echo "La vitesse actuelle du véhicule Citroen C4 est de " . $v2->get_vitesseActuelle() . " km / h <br>";

echo "</form>";

// Tableau avec toutes les infos Véhicule 1 et Véhicule 2 :

echo "<form style='background-color:E8E3E2;width: 680px; padding: 10px'>";

echo "Infos véhicule 1 <br> <br> ********** <br> <br>";

$v1-> infovehicule();

echo "</form>";

echo "<form style='background-color:E8E3E2;width: 680px; padding: 10px'>";

echo "Infos véhicule 1 <br> <br> ********** <br> <br>";

$v2-> infovehicule();

echo "</form>";