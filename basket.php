<?php
	require_once("top_filed.php");
?>
<h2 class="title">Mon panier</h2>
	<ul class="list-group">
	<?php
				$req = mysqli_query($db, "SELECT a.name, a.price, a.image FROM basket AS b INNER JOIN article AS a WHERE b.id_article = a.id");
				$row = mysqli_fetch_all($req, MYSQLI_ASSOC);
				foreach ($row as $value)  :
			?>
		<li class="list-group-item">
			<span class="badge"><?php echo $value['price']; ?></span>
				<div class="center">
      				<div class="input-group">
        			<span class="input-group-btn">
        		    	<button type="button" class="btn btn-warning btn-number"  data-type="minus" data-field="quant[2]">
        		    		<span class="glyphicon glyphicon-minus"></span>
        		    	</button>
        			</span>
        		  	<input type="text" name="quant[2]" class="form-control input-number" value="10" min="0" max="99">
        		  	<span class="input-group-btn">
        		    	<button type="button" class="btn btn-warning btn-number" data-type="plus" data-field="quant[2]">
        		    	      <span class="glyphicon glyphicon-plus"></span>
        		    	</button>
        			</span>
      				</div>
      			</div>
    			<img class="mini_img" src="img/<?php echo $value['image']; ?>">
    			 <h3><?php echo $value['name']; ?></h3>
    			 <?php echo $value['descr']; ?>
 		 </li>
<?php
	endforeach ;
?>
 		 
	</ul>
	
	<a href="paiement.php">
		<button type="button" class="btn_buy_right btn btn-sucess btn-lg button_float_right">
  		<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">
  		</span> Passer en caisse
  		</button>
	</a>
<a href="display.php" class="btn btn-default button_float_left" role="button">Retour à la boutique</a>
<?php require_once("footer.php"); ?>