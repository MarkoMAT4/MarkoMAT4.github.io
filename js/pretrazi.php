<?php
	require_once ('../connect.php');
	
	$query = "SELECT * FROM piva WHERE ";
	$prev = false;
	if($_POST["ime"] != ""){
		$query = $query . "naziv LIKE '%" . $_POST["ime"] ."%'";
		$prev = true;
	}
	
	if($_POST["procenat"] != ""){
		if($prev) $query = $query . " AND ";
		$query = $query . "procenat='" . $_POST["procenat"] . "'";
		$prev = true;
	}
	if($_POST["proizv"] != ""){
		if($prev) $query = $query . " AND ";
		$query = $query . "proizvodjacID='" . $_POST["proizv"] . "'";
		$prev = true;
	}
	if($_POST["godina"] != ""){
		if($prev) $query = $query . " AND ";
		$query = $query . "godina_porekla='" . $_POST["godina"] . "'";
		$prev = true;
	}
	if($_POST["drzavaTocenja"] != ""){
		if($prev) $query = $query . " AND ";
		$query = $query . "drzava_tocenja='" . $_POST["drzavaTocenja"] . "'";
		$prev = true;
	}
	
	if($prev == false) echo "nista";
	$rezultat = array();
	$svaPiva = $link->query($query);
	while($row = mysqli_fetch_assoc($svaPiva)){
		array_push($rezultat, $row);
	}
	echo json_encode($rezultat);
	
?>