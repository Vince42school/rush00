<?PHP
require_once("entete.php");
$pass = hash('whirlpool', $_POST['passwd']);
$query = "SELECT login,admin,password FROM user";
$req = mysqli_query($db, $query);
$row = mysqli_fetch_all($req, MYSQLI_ASSOC);
foreach ($row as $value)
{
	echo "pop corn";
	if ($_POST['login'] == $value['login'])
	{
		echo "NUGETS";
		if ($pass == $value['password'])
		{
			$_SESSION['loggued_on_user'] = $value['login'];
			$_SESSION['admin'] = $value['admin']; 
			header("location:display.php");
			return ;
		}

	}
}
$_SESSION['loggued_on_user'] = "";
header("location:log.php");
?>
