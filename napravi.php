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
	<body>
		<form action="napravi.php" method="POST">
			<p>Ime piva: </p>
			<input type="text" name="ime">
			<p>Procenat alkohola </p>
			<input type="text" name="procenat">
			<p>Godina porekla: </p>
			<input type="text" name="godina">
			
			<p>Proizvodjac: </p>
			<select name="proizv">
				
				  <?php
					$nesto = $link->query("SELECT * FROM `proizvodjaci` WHERE 1");
					while($row = mysqli_fetch_assoc($nesto)){
						echo '<option value=' . $row["ID"] .'>' . $row["ime"] . '</option>';
					}
				  ?>

			</select>
			
			<p>Drzava tocenja: </p>
			<input type="text" name="drzavaTocenja">
			<p>Slika: </p>
			<input type="text" name="urlSlike">
			<br>
			<input type="submit" val="Dodaj"></input>
		</form>
			
		<?php
			if(isset($_POST["ime"])) {
				$ime = $_POST["ime"];
				$procenat = $_POST["procenat"];
				$godina = $_POST["godina"];
				$drzava = $_POST["drzavaTocenja"];
				$url = $_POST["urlSlike"];
				
				/*if(empty($ime) or empty($procenat) or empty($godina) or empty($drzava) or empty($url)){
					echo '<p style="color:red">Unesite sve podatke</p>';
				}else{
					
				}*/
				$proizvodjac = $_POST["proizv"];
				
				$qryString = sprintf("INSERT INTO `piva`(`naziv`, `godina_porekla`, `proizvodjacID`, `drzava_tocenja`, `urlSlike`, `procenat`) VALUES ('%s','%s','%s','%s','%s','%s')", $ime, $godina, $proizvodjac, $drzava, $url, $procenat);
				
				$link->query($qryString);
				echo '<p>Svaka cast</p>';
				
			}
		?>
		<div class="footer">
            <h2>Copyright 2019</h2>
		</div>
	</body>
	
</html>