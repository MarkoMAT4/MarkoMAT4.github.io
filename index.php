<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MATF Pivara</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
	
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<?php
	require_once('connect.php');
?>

<body>

    <?php
		require_once 'uvekisto.php';
	?>

    <div class="glavno">
        <div>
            <h2>Sva nasa piva</h2>
        </div>
        <div class="lista">
            <ul style= "list-style: none;">
                <?php
					$svaPiva = $link->query("SELECT * FROM `piva` AS pi, `proizvodjaci` AS pr WHERE pr.id = pi.proizvodjacID");
					while($row = mysqli_fetch_assoc($svaPiva)){
						
						echo '<li><div class="kockapiva">
							<div class="pivoSlika">
								<img src="' . $row["urlSlike"] . '" class="slicica" alt="Slika nije dostupna"></img>
							</div>
							<div class="pivoInfo">
								<h3 class="pivoIme">' . $row["naziv"]. '</h3>
								<ul class="listaInformacija">
									<li>Drzava porekla: ' . $row["drzava"] . '</li>
									<li>Proizvodjac: ' . $row["ime"] . '</li>
									<li>Drzava tocenja: ' . $row["drzava_tocenja"] . '</li>
									<li>' . $row["procenat"] . '% alkohola</li>
									


								</ul>
							</div>
						</div></li>';
						
					}
				?>
            </ul>
        </div>
    </div>



    <div class="footer">
            <h2>Copyright 2019</h2>
    </div>


</body>
</html>