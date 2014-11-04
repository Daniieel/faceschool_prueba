<div class="container" style="margin-top:30px; margin-bottom:60px;">
	<div class="row">
		<div class="col-md-3">

		<ul class="nav nav-pills nav-stacked">
		  <li class="active"><a href="#">Agregar Colegio</a></li>
		  <li><a href="<?= base_url(''); ?>administracion/seleccionar_colegio_mod">Modificar Colegio</a></li>
		  <li><a href="#">Eliminar Colegio</a></li>
		</ul>

		</div>	

		<div class = "col-md-9">

			<form class="form-horizontal" role="form" action="<?= base_url('administracion/agregar_colegio')  ?>" method="post">
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Nombre colegio</label>
			    <div class="col-sm-10">
			      <input type="text" name="nombre" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Provincia</label>
			    <div class="col-sm-10">
			      <input type="text" name="provincia" class="form-control" id="inputPassword3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Region</label>
			    <div class="col-sm-10">
			      <input type="text" name="region" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Comuna</label>
			    <div class="col-sm-10">
			      <input type="text" name="comuna" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Direccion</label>
			    <div class="col-sm-10">
			      <input type="text" name="direccion" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Telefono</label>
			    <div class="col-sm-10">
			      <input type="text" name="telefono" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Pagina Web</label>
			    <div class="col-sm-10">
			      <input type="text" name="pagina_web" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Dependencia</label>
			    <div class="col-sm-10">
			      <input type="text" name="dependencia" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Promedio PSU</label>
			    <div class="col-sm-10">
			      <input type="text" name="promedio_psu" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Grupo Socioeconomico</label>
			    <div class="col-sm-10">
			      <input type="text" name="grupo_socioeconomico" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Promedio Simce 4Basico Lenguaje</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Promedio Simce 4Basico Matematicas</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Promedio Simce 4Basico Ciencias</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Promedio Simce 2Medio Lenguaje</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Promedio Simce 2Medio Matematicas</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Religion</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Idioma</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			 <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Agregar</button>
			    </div>
			  </div>
			</form>
			
		</div>
	</div>
</div>





