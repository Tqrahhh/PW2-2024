<?php

    class Hewan {
        // protected $hewan;
        // protected $jenisMakanan;
        // protected $habitat;

        protected function __construct($hewan, $jenisMakanan, $habitat) {
            $this->hewan = $hewan;
            $this->jenisMakanan = $jenisMakanan;
            $this->habitat = $habitat;
        }

        protected function getInfo() {
            echo "Nama:" . $this->hewan . "<br>";
            echo "JenisMakanan:" . $this->jenisMakanan . "<br>";
            echo "Habitat:" . $this->habitat . "<br>"; 
        }

    }

        class Singa extends Hewan {
            public function __construct($hewan, $jenisMakanan, $habitat) {
                parent::__construct($hewan, $jenisMakanan, $habitat);
            }

            public function tampilkanInfo() {
                echo $this->getInfo();
            }
        }

        class Sapi extends Hewan {
            public function __construct($hewan, $jenisMakanan, $habitat) {
                parent::__construct($hewan, $jenisMakanan, $habitat);
            }

            public function tampilkanInfo() {
                echo $this->getInfo();
            }
        }
?>