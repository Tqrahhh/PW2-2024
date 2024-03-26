 <?php
    class Vehicle {
				// Property
        // protected-> $type;
        // protected-> $fuel;

				// Method
        protected function __construct($type, $fuel) {
            $this->type = $type;
            $this->fuel = $fuel;
        }

        protected function getInfo() {
            echo "Jenis Kendaraan: " . $this->type . "<br>";
            echo "Jenis Bahan Bakar: " . $this->fuel . "<br>";
        }
    }

    // code..
    
    // code class Vehicle

    class Motor extends Vehicle {
        public $wheels; 
        
                // Property

				// Method
        public function __construct($type, $fuel, $wheels) {
            parent::__construct($type, $fuel);
            $this->wheels = $wheels;
        }

        public function getInfomotor() {
            parent::getInfo();
            echo "Jumlah Roda: " . $this->wheels . "<br>";
        }
    }

    class Submarine extends Vehicle {
				// Property
        public $max_depth;

				// Method
        public function __construct($type, $fuel, $max_depth) {
            parent::__construct($type, $fuel);
            $this->max_depth = $max_depth;
        }

        public function getInfosubmarine() {
            parent::getInfo();
            echo "Kedalaman Maks: " . $this->max_depth . " meter <br>";
        }
    }

?>