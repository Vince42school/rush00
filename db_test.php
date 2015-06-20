<?php
	require_once("header.php");

	$req = mysqli_query($db, "SELECT * FROM user");
	$row = mysqli_fetch_all($req, MYSQLI_ASSOC);

	foreach ($row as $value)
	{
		echo "<p>User : <b>".$value['login']."</b></p>";
		echo "<p>Pass : <b>".$value['password']."</b></p>";
		echo "<p>Admin : <b>".$value['admin']."</b></p>";
	}
	
	// $name = htmlspecialchars($_POST['login']);
	$name = "Pyrate";
	$i = 1;
	$query = "SELECT * FROM user WHERE login = '".$name."' AND admin = '".$i."'";
	$req = mysqli_query($db, $query);
	$row = mysqli_fetch_all($req, MYSQLI_ASSOC);
var_dump($row);
	foreach ($row as $value)
	{
		echo "<p>User : <b>".$value['login']."</b></p>";
		echo "<p>Pass : <b>".$value['password']."</b></p>";
		echo "<p>Admin : <b>".$value['admin']."</b></p>";
	}

	mysqli_close($db);
	require_once("footer.php");
?>