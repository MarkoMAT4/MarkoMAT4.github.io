<html>
	<?php
		require_once 'connect.php';
	?>

	<head>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="jquery-3.4.1.min.js"></script>
		<script src="main.js"></script>
	</head>
	<?php
		require_once 'uvekisto.php';
	?>

<div class="nav">
	<div ><a href="index.php"><h3>Pocetna stranica</h3></a></div>
    <div ><a href="dodajpivo.php"><h3>Dodaj pivo</h3></a></div>

</div>

	<body>
	<div class = glavno>
		<div>
		<form action="dodajpivaru.php" method="POST">
				<h3>Ime proizvodjaca: </h3>
			<input type="text" name="ime" >
				<h3>Drzava porekla: </h3>
			<input type="text" name="poreklo">
				<h3>Osnivac: </h3>
			<input type="text" name="osnivac">
		
			<br><br>
				<div class = dugme>
			<input type="submit" val="Dodaj" value="Dodaj u bazu" >
				</div>
		</form>
				</div>
			
		<?php
			if(isset($_POST["ime"])) {
				$ime = $_POST["ime"];
				$poreklo = $_POST["poreklo"];
				$osnivac = $_POST["osnivac"];
			
				if(empty($ime) or empty($poreklo) or empty($osnivac)){
					echo '<h3 style="color:red">Unesite sve podatke</>';
				}else{
				
				$qryString = sprintf("INSERT INTO `proizvodjaci`(`ime`, `drzava`, `osnivac`) VALUES ('%s','%s','%s')", $ime, $poreklo, $osnivac);
				
				$link->query($qryString);
				echo '<p>Svaka cast</p>';
				}
			}
		?>
        </div>
        
		<div class="footer">
            <h2>Copyright 2019</h2>
		</div>
	</body>
	
</html>