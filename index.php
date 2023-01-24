<?php

    class Genre {

        public $genere1;
        public $genere2;
        public $genere3;
        public $genere4;

        function __construct($genere1, $genere2, $genere3, $genere4) {

            $this -> genere1 = $genere1;
            $this -> genere2 = $genere2;
            $this -> genere3 = $genere3;
            $this -> genere4 = $genere4;

        }

        public function getGenre() {
            
            return $this -> genere1 . ", " . $this-> genere2 . ", " . $this-> genere3 . ($this-> genere4 ? ", " . $this-> genere4 : "");

        }
    }

    class Movie {

        public $titolo;
        public $dataUscita;
        public $generi;
        public $durata;

        function __construct($titolo, $dataUscita, $generi, $durata) {

            $this -> titolo = $titolo;
            $this -> dataUscita = $dataUscita;
            $this -> generi = $generi;
            $this -> durata = $durata;

        }

        public function getInfo() {

            return $this -> titolo .
            " (" . $this -> dataUscita . ")" .
            "<br>Genere: " . $this -> generi -> getGenre() . 
            "<br>Durata: " . $this -> durata . " min";

        }
    }

    $movies = [
        new Movie("Avatar", "2009", new Genre("fantascienza", "azione", "avventura", ""), 162),
        new Movie("Avengers: Endgame", "2019", new Genre("azione", "avventura", "fantascienza", ""), 181),
        new Movie("Pirati dei Caraibi - La maledizione della prima luna", "2003", new Genre("avventura", "commedia", "fantastico", "azione"), 143),
    ];

    echo "Lista film: <br>";

    foreach($movies as $movie) {

        echo $movie -> getInfo() . "<br><br>";

    }

?>