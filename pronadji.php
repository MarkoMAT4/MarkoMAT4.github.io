<html>
	<?php
		require_once 'connect.php';
	?>

	<head>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/pretraga.js"></script>
	</head>
	<?php
		require_once 'uvekisto.php';
	?>

<div class="nav">
	<div ><a href="index.php"><h3>Pocetna stranica</h3></a></div>
    <div ><a href="dodajpivo.php"><h3>Dodaj pivo</h3></a></div>
	<div ><a href="dodajpivaru.php"><h3>Dodaj pivaru</h3></a></div>

</div>

	<body>
		<div class="glavno">
			<div class="pronadjiDiv" style="color:white">
			<div>
			<h3>Ime piva: </h3>
			<input type="text" id="ime" >
				<h3>Procenat alkohola: </h3>
			<input type="text" id="procenat">
				<h3>Godina porekla: </h3>
			<input type="text" id="godina">
			<h3>Proizvodjac: </h3>
			<select id="proizv">
				  <?php
					$nesto = $link->query("SELECT * FROM `proizvodjaci` WHERE 1");
					while($row = mysqli_fetch_assoc($nesto)){
						echo '<option value=' . $row["ID"] .'>' . $row["ime"] . '</option>';
					}
				  ?>

			</select>
			
				<h3>Drzava tocenja: </h3>
			<input type="text" id="drzavaTocenja">
			<br><br>
			</div>
			</div>


			<div class="lista">
				<ul style= "list-style: none;" id="rezlista">
                
            	</ul>
			
		</div>
		</div>
		
		
        
		<div class="footer">
            <h2>Copyright MATF 2019</h2>
		</div>
	</body>
	
</html>