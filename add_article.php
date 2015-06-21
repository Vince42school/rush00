<?php
	require_once("entete.php");
	// if (!isset($_SESSION['admin']) || $_SESSION['admin']== 0)
	// 	header("location:index.php");

	$name = htmlspecialchars($_POST['Name']);
	$price = htmlentities($_POST['Price']);
	$qt = htmlentities($_POST['Qt']);
	$img = htmlentities($_POST['Image']);
	$cat = "";
	foreach ($_POST as $key => $value)
	{
		if (is_numeric($key))
			$cat = empty($cat) ? $value : $cat.",".$value;
	}

	$query = "	INSERT INTO
				article(name, price, category, quantity, image)
				VALUES
				('".$name."', '".$price."', '".$cat."', '".$qt."', '".$img."')";
	$req = mysqli_query($db, $query);

	mysqli_close($db);
	$_SESSION['msg']['msg'] = "L'article a bien été enregistré";
	$_SESSION['msg']['type'] = "success";
	header("location:admin_add_article.php");

?>