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
    <div ><a href="dodajpivaru.php"><h3>Dodaj pivaru</h3></a></div>

</div>

	<body>
	<div class = glavno>
		<div>
		<form action="dodajpivo.php" method="POST">
				<h3>Ime piva: </h3>
			<input type="text" name="ime" >
				<h3>Procenat alkohola: </h3>
			<input type="text" name="procenat">
				<h3>Godina porekla: </h3>
			<input type="text" name="godina">
			<h3>Proizvodjac: </h3>
			<select name="proizv">
				
				  <?php
					$nesto = $link->query("SELECT * FROM `proizvodjaci` WHERE 1");
					while($row = mysqli_fetch_assoc($nesto)){
						echo '<option value=' . $row["ID"] .'>' . $row["ime"] . '</option>';
					}
				  ?>

			</select>
			
				<h3>Drzava tocenja: </h3>
			<input type="text" name="drzavaTocenja">
				<h3>Slika: </h3>
			<input type="text" name="urlSlike">
			<br><br>
				<div class = dugme>
			<input type="submit" val="Dodaj" value="Dodaj pivo" >
				</div>
		</form>
				</div>
			
		<?php
			if(isset($_POST["ime"])) {
				$ime = $_POST["ime"];
				$procenat = $_POST["procenat"];
				$godina = $_POST["godina"];
				$drzava = $_POST["drzavaTocenja"];
				$url = $_POST["urlSlike"];
				
				if(empty($ime) or empty($procenat) or empty($godina) or empty($drzava) or empty($url)){
					echo '<h3 style="color:red">Unesite sve podatke</>';
				}else{
					
				
				$proizvodjac = $_POST["proizv"];
				
				$qryString = sprintf("INSERT INTO `piva`(`naziv`, `godina_porekla`, `proizvodjacID`, `drzava_tocenja`, `urlSlike`, `procenat`) VALUES ('%s','%s','%s','%s','%s','%s')", $ime, $godina, $proizvodjac, $drzava, $url, $procenat);
				
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