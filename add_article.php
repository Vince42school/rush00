<?php
	require_once("entete.php");
	// if (!isset($_SESSION['admin']) || $_SESSION['admin']== 0)
	// 	header("location:index.php");

	$query = "	INSERT INTO
				article(name, price, category, quantity, image)
				VALUES
				('".$_POST['Name']."', '".$_POST['Price']."', '0', '".$_POST['Qt']."', '".$_POST['Image']."')";
	$req = mysqli_query($db, $query);

	mysqli_close($db);
	$_SESSION['msg']['msg'] = "L'article a bien été enregistré";
	$_SESSION['msg']['type'] = "success";
	header("location:admin_add_article.php");

?>