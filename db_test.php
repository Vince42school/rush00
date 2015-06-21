<?php
	require_once("header.php");

	$req = $db->query("SELECT * FROM user");

	while ($data = $req->fetch())
	{
		echo "<p>User : <b>".$data['login']."</b></p>";
		echo "<p>Pass : <b>".$data['password']."</b></p>";
		echo "<p>Admin : <b>".$data['admin']."</b></p>";
	}

	$req = $db->prepare("SELECT * FROM user WHERE login = ? AND admin = ?");
	$req->execute(array("Pyrate", 0));

	while ($data = $req->fetch())
	{
		echo "<p>User : <b>".$data['login']."</b></p>";
		echo "<p>Pass : <b>".$data['password']."</b></p>";
		echo "<p>Admin : <b>".$data['admin']."</b></p>";
	}
	require_once("footer.php");
?>
