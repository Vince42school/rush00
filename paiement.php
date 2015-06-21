<?php
	require_once("entete.php");
	require_once("top_filed.php");
?>

<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="thumbnail thumb_middle">
      
				      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>
				<div class="carousel-inner" role="listbox">
				  <!-- Wrapper for slides -->
				  <?php
						$req = mysqli_query($db, "SELECT a.name, a.image FROM basket AS b INNER JOIN article AS a WHERE b.id_article = a.id");
						$row = mysqli_fetch_all($req, MYSQLI_ASSOC);
						foreach ($row as $value)  :
					?>
				  
				    <div class="item">
				      <img src="img/<?php echo $value['image']; ?>">
				      <div class="carousel-caption">
				        ...
				      </div>
				    </div>
				   
				  <?php
					endforeach ;
				?>
				 </div>
				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>

      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>

        <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Payer" data-content="Je crois qu'on va pas vous laisser faire ça, c'est vraiment trop dégueulasse.">
			Cliquer ici pour payer
		</button>

      </div>
    </div>
  </div>
</div>


	

<?php require_once("footer.php"); ?>