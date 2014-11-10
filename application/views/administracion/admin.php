<div class="container" style="margin-top:30px; margin-bottom:60px;">
	<div class="row">
		<div class="col-md-3">

		<ul class="nav nav-pills nav-stacked">
		  <li class="active"><a href="<?= base_url(''); ?>administracion/inicio">Inicio</a></li>
		  
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
			    <label for="inputEmail3" class="col-sm-2 control-label">Region</label>
			    <div class="col-sm-10">
			      <select type="text" name="region" class="form-control" id="inputPassword3">
			      <option value="Arica y Parinacota">Arica y Parinacota</option>
			      <option value="Tarapaca">Tarapaca</option>
			      <option value="Antofagasta">Antofagasta</option>
			      <option value="Atacama">Atacama</option>
			      <option value="Coquimbo">Coquimbo</option>
			      <option value="Valparaiso">Valparaiso</option>
			      <option value="Libertador General Bernardo O'Higgins">Libertador General Bernardo O'Higgins</option>
			      <option value="Maule">Maule</option>
			      <option value="Bio Bio">Bio Bio</option>
			      <option value="Araucania">Araucania</option>
			      <option value="Rios">Rios</option>
			      <option value="Lagos">Lagos</option>
			      <option value="Aisén del General Carlos Ibáñez del Campo">Aisén del General Carlos Ibáñez del Campo</option>
			      <option value="Magallanes y Antártica Chilena">Magallanes y Antártica Chilena</option>
			      <option value="Metropolitana de Santiago">Metropolitana de Santiago</option>
			    </select>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Provincia</label>
			    <div class="col-sm-10">
			    <select type="text" name="provincia" class="form-control" id="inputPassword3">
			      <option value="Valparaiso">Valparaiso</option>
			      <option value="San Felipe">San Felipe</option>
			      <option value="San Antonio">San Antonio</option>
			      <option value="Quillota">Quillota</option>
			      <option value="Petorca">Petorca</option>
			      <option value="Marga Marga">Marga Marga</option>
			      <option value="Los Andres">Los Andes</option>
			      <option value="Isla de Pascua">Isla de Pascua</option>
			    </select>
			      <!--<input > -->
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
			      <input type="text" name="grupo_socioeco" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" name="" class="col-sm-2 control-label">Promedio Simce 4Basico Lenguaje</label>
			    <div class="col-sm-10">
			      <input type="text" name="prom_simce_4bas_leng" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Promedio Simce 4Basico Matematicas</label>
			    <div class="col-sm-10">
			      <input type="text" name="prom_simce_4bas_mate" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Promedio Simce 4Basico Ciencias</label>
			    <div class="col-sm-10">
			      <input type="text" name="prom_simce_4bas_cienc" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Promedio Simce 2Medio Lenguaje</label>
			    <div class="col-sm-10">
			      <input type="text" name="prom_simce_2med_leng" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Promedio Simce 2Medio Matematicas</label>
			    <div class="col-sm-10">
			      <input type="text" name="prom_simce_2med_mate" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Religion</label>
			    <div class="col-sm-10">
			      <input type="text" name="religion" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Idioma</label>
			    <div class="col-sm-10">
			      <input type="text" name="idioma" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Latitud</label>
			    <div class="col-sm-10">
			      <input type="text" name="latitud" class="form-control" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">longitud</label>
			    <div class="col-sm-10">
			      <input type="text" name="longitud" class="form-control" id="inputEmail3">
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





