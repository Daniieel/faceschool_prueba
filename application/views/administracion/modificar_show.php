<div class="container" style="margin-top:30px; margin-bottom:60px;">
	<div class="row">
		<div class="col-md-3">

		<ul class="nav nav-pills nav-stacked">
		  <li><a href="<?= base_url(''); ?>administracion/admin">Agregar Colegio</a></li>
		  <li class="active"><a href="<?= base_url(''); ?>administracion/seleccionar_colegio_mod">Modificar Colegio</a></li>
		  <li><a href="#">Eliminar Colegio</a></li>
		</ul>

		</div>

		<div class = "col-md-9">

		<form class="form-horizontal" role="form" action="<?= base_url('administracion/nose')  ?>" method="post">
			
		<div class="form-group">
				<input type="hidden" name="id_colegio" value="<?= $colegio->id_colegio?>">
			    <label for="inputEmail3" class="col-sm-2 control-label">Nombre colegio</label>
			    <div class="col-sm-10">
			       <input type="text" name="nombre" class="form-control" id="inputEmail3" value ="<?= $colegio->nombre ?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Provincia</label>
			    <div class="col-sm-10">
			      <input  type="text" class="form-control" id="inputPassword3" value ="<?= $colegio->provincia?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Region</label>
			    <div class="col-sm-10">
			      <input  type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->region?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Comuna</label>
			    <div class="col-sm-10">
			      <input  type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->comuna?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Direccion</label>
			    <div class="col-sm-10">
			      <input  type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->direccion?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Telefono</label>
			    <div class="col-sm-10">
			      <input  type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->telefono?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Pagina Web</label>
			    <div class="col-sm-10">
			      <input  type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->pagina_web?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Dependencia</label>
			    <div class="col-sm-10">
			      <input  type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->dependencia?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Promedio PSU</label>
			    <div class="col-sm-10">
			      <input  type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->promedio_psu?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Grupo Socioeconomico</label>
			    <div class="col-sm-10">
			      <input  type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->grupo_socioeco?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Promedio Simce 4Basico Lenguaje</label>
			    <div class="col-sm-10">
			      <input  type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->prom_simce_4bas_leng?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Promedio Simce 4Basico Matematicas</label>
			    <div class="col-sm-10">
			      <input  type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->prom_simce_4bas_mate?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Promedio Simce 4Basico Ciencias</label>
			    <div class="col-sm-10">
			      <input  type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->prom_simce_4bas_cienc?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Promedio Simce 2Medio Lenguaje</label>
			    <div class="col-sm-10">
			      <input  type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->prom_simce_2med_leng?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Promedio Simce 2Medio Matematicas</label>
			    <div class="col-sm-10">
			      <input  type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->prom_simce_2med_mate?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Religion</label>
			    <div class="col-sm-10">
			      <input  type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->religion?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Idioma</label>
			    <div class="col-sm-10">
			      <input  type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->idioma?>">
			    </div>
			  </div>

			 <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Modificar</button>
			    </div>
			  </div>
			</form>
			
		</div>
	</div>
</div>


