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
    }

?>