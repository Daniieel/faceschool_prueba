<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div style="padding:60px">
				<h3 align="center"> Login de Administración de Faceschool</h3>
				<br>
				<form  method="post" action="<?= base_url('administracion/login_action') ?>">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Usuario </label>
				    <input name="usuario" type="text" class="form-control" id="exampleInputEmail1" placeholder="Usuario">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Contraseña</label>
				    <input name="contraseña" type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
				  </div>
				  <button type="submit" class="btn btn-default">Entrar</button>
				</form>
			</div>
		</div>
	</div>
</div>