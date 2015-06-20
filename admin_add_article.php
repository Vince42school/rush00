<?php
require_once("header.php");
// if (!isset($_SESSION['admin']) || $_SESSION['admin']== 0)
// 	header("location:index.php");

if (isset($_SESSION['msg']))
{
	echo "<div class=\"alert alert-".$_SESSION['msg']['type']."\">".$_SESSION['msg']['msg']."</div>\n";
	unset($_SESSION['msg']);
}

?>
<div class="panel panel-default">
	<div class="panel-body">
		<form method="POST" action="add_article.php">
		<div >
		<label for="Name">Nom</label>
		<div >
		<input type="text" name="Name" id="Name" placeholder="Nom">
		</div>
		</div>
		<div>
		<label for="Price">Prix</label>
		<div>
		<input type="text" name="Price" id="Price" placeholder="Prix">
		</div>
		</div>
		<div>
		<label for="Qt" >Quantité</label>
		<div >
		<input type="text" name="Qt" id="Qt" placeholder="Quantité">
		</div>
		</div>
		<div >
		<label for="Image">File input</label>
		<div >
		<input type="file" name="Image" id="Image">    </div>
		</div>
		<div >
		<div>
		<button type="submit">Envoyer</button>
		</div>
		</div>
		</form>
	</div>
</div>
<?php

require_once("footer.php");

?>
