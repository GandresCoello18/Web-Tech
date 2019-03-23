<div class="col-12 col-md-4 mt-5">
	  	   		<div class="row">
	  	   			<h6 class="text-center p-2">Puede que te interesen</h6>
	  	   			<?php foreach ($recomendado as $valor): ?>
	  	   				<div class="col-12">
       	             		<a style="text-decoration: none;" href="../<?php echo $valor['enlace']; ?>">
       	    	 				<div class="media justify-content-center d-flex">
       	    	 					<img src="../<?php echo $valor['imagen']; ?>" width="50" height="70" class="d-flex align-self-start  mr-4">
       	    	 						<div class="media-body">
       	    	 					   <h6 style="color: #3299bb"><?php echo $valor['titulo']; ?></h6>
       	    	 					<p style="color: #000;"><?php echo $valor['descripcion']; ?></p>
       	    	 				  </div>
       	    	 				</div>
       	    	 			</a>
       	    	 			<hr/>
       	    			</div>
       	    		<?php endforeach; ?>	
	  	   		</div>
	  	   </div>