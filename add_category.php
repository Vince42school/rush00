<?php
	require_once("entete.php");
	// if (!isset($_SESSION['admin']) || $_SESSION['admin']== 0)
	// 	header("location:index.php");
	$name = htmlspecialchars($_POST['Cat']);
	var_dump($name);
	$query = "INSERT INTO category(name) VALUES('".$name."')";
	if(mysqli_query($sadb, $query))
	{
		$_SESSION['msg']['msg'] = "La catégorie a bien été enregistrée";
		$_SESSION['msg']['type'] = "success";
	}
	else
	{
		$_SESSION['msg']['msg'] = "La catégorie n'a pas pu être enregistrée. Contactez un ingénieur informatique ...";
		$_SESSION['msg']['type'] = "danger";
	}
	mysqli_close($db);
	header("location:admin_add_article.php");
?>