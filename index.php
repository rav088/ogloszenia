test<?php
	include('naglowek.php');
?>

<div class="container">
  <h2 style="text-align: center">Sprawdź pesel</h2>
  <form method="post" action="sprawdz.php">
    <div class="form-group">
      <div class="form-group">
		<label for="tekst">Wprowadź pesel:</label>
		<input type="text" class="form-control" name="pesel">
      </div>
    </div>
	<div style="text-align: center;">
		<button type="submit" class="btn btn-default" name="wybor" value="litery">Sprawdz</button>
	</div>
  </form>
</div>

<?php

$link = strpos($_SERVER['REQUEST_URI'], "?");

if($link != false){
	$wynik = $_SERVER['REQUEST_URI'];
	$wynik = explode("?", $wynik);
	$wynik = explode("=", $wynik[1]);
	$wynik = $wynik[1];
}

if(isset($wynik) && $wynik == 0) {

echo '<div class="container">
		<div class="panel panel-danger">
			<div class="panel-heading">To nie jest liczba!</div>
		</div>
	  </div>';
	unset($wynik);
}
else if(isset($wynik) && $wynik == 1) {
	echo '<div class="container">
			<div class="panel panel-danger">
				<div class="panel-heading">Podaj 11 znaków!</div>
			</div>
		  </div>';
	unset($wynik);
}
else if(isset($wynik) && $wynik == 2) {
	echo '<div class="container">
			<div class="panel panel-danger">
				<div class="panel-heading">Pesel niepoprawny!</div>
			</div>
		  </div>';
	unset($wynik);
}
else if(isset($wynik) && $wynik == 3) {
	echo '<div class="container">
			<div class="panel panel-success">
				<div class="panel-heading">Pesel poprawny!</div>
			</div>
		  </div>';
	unset($wynik);
}

?>

</body>
</html>
