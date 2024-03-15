<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */

		// code..
        require_once 'class_balok.php';

        $balok1 = new Balok(29,16,7);
        $balok2 = new Balok(39,15,8);

        echo "<br>Luas Permukaan Balok = " . $balok1->getLuas() .'cm';
        echo "<br>Keliling Balok = " . $balok1->getKeliling() .'cm';
        echo "<br>Volume Balok = " . $balok1->getVolume() .'cm';

        echo "<br><br>";

        echo "<br>Luas Permukaan Balok = " . $balok2->getLuas() .'cm';
        echo "<br>Keliling Balok = " . $balok2->getKeliling() .'cm';
        echo "<br>Volume Balok = " . $balok2->getVolume() .'cm';
?>