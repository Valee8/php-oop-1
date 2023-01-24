<?php

    class Movie {

        public $titolo;
        public $dataUscita;
        public $genere;
        public $durata;

        function __construct($titolo, $dataUscita, $genere, $durata) {

            $this -> titolo = $titolo;
            $this -> dataUscita = $dataUscita;
            $this -> genere = $genere;
            $this -> durata = $durata;

        }

        public function getInfo() {

            return $this -> titolo .
            " (" . $this -> dataUscita . ")" .
            "<br>Genere: " . $this -> genere . 
            "<br>Durata: " . $this -> durata;

        }
    }


    $movie = new Movie("Avatar", "2009", "fantascienza", 162);

    echo $movie -> getInfo();

?>