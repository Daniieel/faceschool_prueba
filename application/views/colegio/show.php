<div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- recomendador -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<div class="container">
	<div class="row">
		<div class="col-md-9 col-md-offset-1">
			<p  class="para"><h2 >Informacion del Colegio</h2></p>
			<p></p>

			<table width="200" border="5" class = "table table-striped" >
			<tr>
			<th><h5 style="margin-left:3em margin-right:3em;">Nombre</h5></th>
			<td><h5><?= $colegio->nombre ?></h5></td>

			</tr>


			<tr>
			<th><h5 >Direccion</h5></th>
			<td><h5><?= $colegio->direccion ?></h5></td>


			</tr>

			<tr>
			<th><h5 >Telefono</h5></th>
			 <td><h5><?= $colegio->telefono ?></h5></td>

			</tr>
			<tr>
			<th><h5 >Pagina Web </h5></th>

			<td><a target="_blank"  href="http://<?= $colegio->pagina_web ?>" class="fa-btn btn-1 btn-1e"><?= $colegio->pagina_web ?></a></td>
			</tr>

			<tr>
			<th><h5 >Tipo de Dependencia</h5></th>
			<td><h5><?= $colegio->dependencia ?></h5></td>

			</tr>

			<tr>
			<th><h5 >Religion</h5></th>
			 <td><h5><?= $colegio->religion ?></h5></td>

			</tr>

			<tr>
			<th><h5 >Idioma</h5></th>
			 <td><h5><?= $colegio->idioma ?> <?= $colegio->idioma2 ?> <?= $colegio->idioma3 ?> </h5></td>

			</tr>
			<th><h5 >Grupo Socioeconomico</h5></th>
			 <td><h5><?= $colegio->grupo_socioeco ?></h5></td>

			</tr>

			</tr>
			<th><h5 >Contacto</h5></th>
			 <td><h5></h5></td>

			</tr>

			</table>

			<!-- la otra tabla-->
			<p  class="para"><h2 >Resultado del Colegio</h2></p>
			<table width="200" border="5" class = "table" >

			

			<tr>
			
		      <thead>
		        <tr>
		          <th><h5>Año</h5></th>
		          <th><h5>2012</h5></th>
		          <th><h5>2013</h5></th>
		         
		        </tr>

		      </thead>
		      <tbody>
		      
				        <tr>
				          
				          <td><h5>Promedio PSU</h5></td>
				          <td><h5><?= $colegio->promedio_psu ?></h5></td>
				          <td><h5><?= $colegio->promedio_psu ?></h5></td>

				        </tr>
				        <tr>
				      

				        <tr>
				        <th><h5 >Promedio SIMCE 4Basico Lenguaje</h5></th>
						<td><h5>	- </h5></td>
				        <td><h5><?= $colegio->prom_simce_4bas_leng ?></h5></td>

				        </tr>

				        <tr>
				        <th><h5 >Promedio SIMCE 4 Basico Matematicas</h5></th>
				        <td><h5>	-</h5></td>
				         <td><h5><?= $colegio->prom_simce_4bas_mate ?></h5></td>

				        </tr>

				        <tr>
				        <th><h5 >Promedio SIMCE 4 Basico Ciencias</h5></th>
				        <td><h5>	-</h5></td>
				         <td><h5><?= $colegio->prom_simce_4bas_cienc ?></h5></td>

				        </tr>

				        <tr>
				        <th><h5 >Promedio SIMCE 2 Medio Lenguaje</h5></th>
				        <td><h5>	-</h5></td>
				         <td><h5><?= $colegio->prom_simce_2med_leng ?></h5></td>

				        </tr>

				        <tr>
				        <th><h5 >Promedio SIMCE 2 Medio Matematicas</h5></th>
				        <td><h5>	-</h5></td>
				         <td><h5><?= $colegio->prom_simce_2med_mate ?></h5></td>

				        </tr>
				        
				
		      </tbody>
		    
			</tr>


			

			

			
			</table>
		<?php if ($like == FALSE): ?>
				<form action="<?= base_url('colegio/agregar_me_gusta')  ?>" method="post">
				<div class="form-group">
			    	<div class="col-sm-10">
			      		<input type="hidden" name="ip_usuario" class="form-control" id="inputEmail3" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<div class="col-sm-10">
			      		<input type="hidden" name="id_colegio" class="form-control" id="inputEmail3" value="<?= $colegio->id_colegio ?>">
			    	</div>
			  	</div>

				<button type="submit" class="btn btn-primary">Me Gusta</button>
			</form>
		<?php else:?>
			<h5 class="lead text-info">Ya le has hecho me gusta	</h5>
		<?php endif ?>
		
			<div class="fb-comments" data-href="http://faceschool.cl/colegio/show?colegio=<?= $colegio->id_colegio ?>" data-numposts="5" data-colorscheme="light"></div>
			
		</div>

		
	</div>
</div>

