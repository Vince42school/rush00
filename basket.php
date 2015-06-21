<?php
	require_once("top_filed.php");
?>
<h2 class="title">Mon panier</h2>
	<ul class="list-group">
	<?php
		$req = mysqli_query($db, "SELECT * FROM article");
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

<?php require_once("footer.php"); ?>