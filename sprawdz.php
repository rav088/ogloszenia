<?php

	if(strlen($_POST['pesel']) == 11){
		if(!is_numeric($_POST['pesel'])){
			header("Location: index.php?wynik=0");
		}
		else{
			for($i = 0; $i < 11; $i++){
				$numer[$i] = substr($_POST['pesel'], $i, 1).'<br>';
			}
			$wynik = $numer[0] + 3 * $numer[1] + 7 * $numer[2] + 9 * $numer[3] + $numer[4] + 3 * $numer[5] + 7 * $numer[6] + 9 * $numer[7] + $numer[8] + 3 * $numer[9];
			
			//echo $wynik.' - '.$numer[10];
			$pobranieZnaku = strlen($wynik) - 1;
			$ostatniZnak = substr($wynik, $pobranieZnaku, 1);
			$dzialanie = 10 - $ostatniZnak;
			
			if($dzialanie == $numer[10]){
				header("Location: index.php?wynik=3");
			}
			else{
				header("Location: index.php?wynik=2");
			}
		}
	}
	else{
		if(is_numeric($_POST['pesel'])){
			header("Location: index.php?wynik=1");
		}
		else{
			header("Location: index.php?wynik=0");
		}
	}
?>
