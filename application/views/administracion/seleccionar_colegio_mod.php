<div class="container" style="margin-top:30px; margin-bottom:60px;">
	<div class="row">
		<div class="col-md-3">

		<ul class="nav nav-pills nav-stacked">
		  <li><a href="#">Agregar Colegio</a></li>
		  <li class="active"><a href="<?= base_url(''); ?>administracion/seleccionar_colegio_mod">Modificar Colegio</a></li>
		  <li><a href="#">Eliminar Colegio</a></li>
		</ul>

		</div>

		<div class = "col-md-9">

			<form class="form-horizontal" role="form">
				<div class="form-group">
	             <label>Selecciona el colegio:</label>
	             <!-- se llena el combobox con los colegios con la posicion de la base de datos y hace la funcion "como llegar"--> 
	             <select name="colegio" class="form-control" >

	                   <option>Selecciona un colegio</option>
	                   <?php foreach ($colegios as $colegio) {
	                   ?>

	                   <option value="<?= $colegio->id_colegio ?>"><?= $colegio->nombre ?></option>

	                   <?php }

	                    ?> 
	                </select> 
				   </div>  			
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default"><a href="<?= base_url(''); ?>administracion/modificar_colegio">Siguiente</a></button>
			    </div>
			  </div>
			</form>
			
		</div>
	</div>
</div>





