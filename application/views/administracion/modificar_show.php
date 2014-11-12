<div class="container" style="margin-top:30px; margin-bottom:60px;">
	<div class="row">
		<div class="col-md-3">

		<ul class="nav nav-pills nav-stacked">
		  <li class="active"><a href="#">Inicio</a></li>
		</ul>

		</div>

		<div class = "col-md-9">

		<form class="form-horizontal" role="form" action="<?= base_url('administracion/modificar_colegio_action')  ?>" method="post">
			
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
			      <input name="provincia" type="text" class="form-control" id="inputPassword3" value ="<?= $colegio->provincia?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Region</label>
			    <div class="col-sm-10">
			      <input name="region" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->region?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Comuna</label>
			    <div class="col-sm-10">
			      <input name="comuna" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->comuna?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Direccion</label>
			    <div class="col-sm-10">
			      <input name="direccion" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->direccion?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Telefono</label>
			    <div class="col-sm-10">
			      <input name="telefono" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->telefono?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Pagina Web</label>
			    <div class="col-sm-10">
			      <input name="pagina_web" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->pagina_web?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Dependencia</label>
			    <div class="col-sm-10">
			      <input name="dependencia" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->dependencia?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Promedio PSU</label>
			    <div class="col-sm-10">
			      <input name="promedio_psu" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->promedio_psu?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Grupo Socioeconomico</label>
			    <div class="col-sm-10">
			      <input name="grupo_socioeco" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->grupo_socioeco?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Promedio Simce 4Basico Lenguaje</label>
			    <div class="col-sm-10">
			      <input name="prom_simce_4bas_leng" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->prom_simce_4bas_leng?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Promedio Simce 4Basico Matematicas</label>
			    <div class="col-sm-10">
			      <input name="prom_simce_4bas_mate" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->prom_simce_4bas_mate?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Promedio Simce 4Basico Ciencias</label>
			    <div class="col-sm-10">
			      <input name="prom_simce_4bas_cienc" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->prom_simce_4bas_cienc?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Promedio Simce 2Medio Lenguaje</label>
			    <div class="col-sm-10">
			      <input name="prom_simce_2med_leng" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->prom_simce_2med_leng?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Promedio Simce 2Medio Matematicas</label>
			    <div class="col-sm-10">
			      <input name="prom_simce_2med_mate" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->prom_simce_2med_mate?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Religion</label>
			    <div class="col-sm-10">
			      <input name="religion" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->religion?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Idioma</label>
			    <div class="col-sm-10">
			      <input name="idioma" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->idioma?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Segundo Idioma</label>
			    <div class="col-sm-10">
			      <input name="idioma" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->idioma2?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Tercer Idioma</label>
			    <div class="col-sm-10">
			      <input name="idioma" type="text" class="form-control" id="inputEmail3" value ="<?= $colegio->idioma3?>">
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


