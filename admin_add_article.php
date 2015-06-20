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
		
		<div>
			<label for="Name">Nom</label>
			<div>
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
			<div>
				<input type="text" name="Qt" id="Qt" placeholder="Quantité">
			</div>
		</div>

		<div class="btn-group" data-toggle="buttons">
		<?php

			$i = 0;
			$req = mysqli_query($db, "SELECT * FROM category");
			$row = mysqli_fetch_all($req, MYSQLI_ASSOC);
			foreach ($row as $value)  :
			?>
			<label class="btn btn-primary <?php if ($i == 0){ echo "active";} ?>">
				<input type="checkbox" name="<?php echo $value['id'] ?>" value="<?php echo $value['id'] ?>"  <?php if ($i == 0) { echo "checked"; $i++;} ?>> <?php echo $value['name'] ?>
			</label>
			<?php endforeach; ?>
		</div>
			<div class="btn-group" data-toggle="buttons">
			<button typ="button" onclick="location.href='admin_add_category.php'" class="btn btn-info">Ajouter une categorie</button>
			<button typ="button" onclick="location.href='admin_del_category.php'" class="btn btn-warning ">Supprimer une categorie</button>
		</div>

		<div>
			<label for="Image">File input</label>
			<div >
				<input type="file" name="Image" id="Image">
			</div>
		</div>

		<div>
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
