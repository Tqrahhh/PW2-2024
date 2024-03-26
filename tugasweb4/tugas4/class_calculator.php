<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
    class Calculator {
        private $bilangan1;
        private $bilangan2;

        public function __construct($bilangan1, $bilangan2) {
            // code..
            $this->bilangan1 = $bilangan1;
            $this->bilangan2 = $bilangan2;
        }

        public function pertambahan() {
            return $this->bilangan1 + $this->bilangan2;
        }

        public function pengurangan() {
            return $this->bilangan1 - $this->bilangan2;
        }

        public function perkalian() {
            return $this->bilangan1 * $this->bilangan2;
        }

        public function pembagian() {
            if ($this->bilangan2 != 0) {
                return $this->bilangan1 / $this->bilangan2;
            }
            else {
                return "Error:";
            }
        }
    }
?>