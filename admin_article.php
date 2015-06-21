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
		<div><h2>Ajouter un article</h2></div>
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

		<div>
			<label for="Qt" >Description</label>
			<div>
				<input type="textarea" name="Descr" id="Descr" placeholder="Description">
			</div>
		</div>

		<div class="btn-group" data-toggle="buttons">
		<?php

			$i = 0;
			$req = mysqli_query($db, "SELECT * FROM category");
			$row = mysqli_fetch_all($req, MYSQLI_ASSOC);
			foreach ($row as $value) :
		?>
			<label class="btn btn-primary <?php if ($i == 0){ echo "active";} ?>">
				<input type="checkbox" name="<?php echo $value['id'] ?>" value="<?php echo $value['id'] ?>"  <?php if ($i == 0) { echo "checked"; $i++;} ?>> <?php echo $value['name'] ?>
			</label>
		<?php endforeach; ?>
		</div>
		<div>
			<a href="admin_add_category.php" class="btn btn-info" role="button">Ajouter une categorie</a>
			<a href="admin_modif_category.php" class="btn btn-warning" role="button">Modifier une categorie</a>
			<a href="admin_del_category.php" class="btn btn-danger" role="button">Supprimer une categorie</a>
		</div>
		<div>
			<label for="Image">File input</label>
			<div >
				<input type="file" name="Image" id="Image">
			</div>
		</div>

		<div>
			<div>
				<button type="submit" class="btn btn-primary">Envoyer</button>
			</div>
		</div>

		</form>
	</div>
</div>
		<div><h2>Liste des article</h2></div>

	<table class="table table-striped table-bordered">
		
			<th>
				<td><strong>ID</strong></td>
				<td><strong>Nom</strong></td>
				<td><strong>Prix</strong></td>
				<td><strong>Quantité</strong></td>
				<td><strong>image</strong></td>
				<td><strong>Categorie</strong></td>
				<td></td>
				<td></td>
			</th>

			<?php

				$req = mysqli_query($db, "SELECT * FROM article");
				$row = mysqli_fetch_all($req, MYSQLI_ASSOC);
				foreach ($row as $value) :
			?>
			<tr>
				<td></td>
				<td><?php echo $value['id'] ?></td>
				<td><?php echo $value['name'] ?></td>
				<td><?php echo $value['price'] ?></td>
				<td><?php echo $value['quantity'] ?></td>
				<td><?php echo $value['image'] ?></td>
				<td><?php echo $value['category'] ?></td>
				<td><a href="admin_modif_article.php?id=<?php echo $value['id'] ?>" class="btn btn-warning" role="button">Modifier</a></td>
				<td><a href="del_article.php?id=<?php echo $value['id'] ?>" class="btn btn-danger" role="button">supprimer</a></td>
			</tr>
			<?php endforeach; ?>
		</table>
		<div>
			<a href="index.php" class="btn btn-info" role="button">Retour</a>
		</div>
	</form>

<?php

require_once("footer.php");

?>
