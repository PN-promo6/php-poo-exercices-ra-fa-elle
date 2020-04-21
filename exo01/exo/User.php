<?php // déplacement de ma classe dans un nouveau répertoire

namespace exo;

class User
{
    private $name;
    private $pseudo;

    public function __construct($name, $pseudo) //passe les valeurs via le constructeur
    {
        $this->name = $name;
        $this->pseudo = $pseudo;
    }

    public function displayUser()
    {
        echo "L'utilisateur " . $this->name . " a choisi le pseudo " . $this->pseudo;
    }
}
