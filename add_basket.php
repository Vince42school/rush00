<?php

	require_once("entete.php");
	if (isset($_GET['id']) && is_numeric($_GET['id']))
	{
		$_SESSION['basket'][$_GET['id']] += 1;
	}
	header("location:".$_SERVER["HTTP_REFERER"]);

?>