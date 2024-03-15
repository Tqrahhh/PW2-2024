<?php

    class car{
        // property
        public $brand;
        public $color;

        // method
        function getbrand(){
            return $this->brand;
        }
    }
     
    // object
    $rubicon = new car();
    $tesla = new car();

    echo $rubicon->brand = "Rubicon";
    echo $tesla->brand = "tesla";

    // echo
    echo $rubicon->getbrand();
    echo '<br><br>';
    echo $tesla->getbrand();


?>