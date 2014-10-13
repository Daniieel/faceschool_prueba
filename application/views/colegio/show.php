<html>
<head>
<title>Informacion colegio</title>
</head>

<body>
<p></p>
<table width="200" border="5" class = "table" >

<tr>
<th><h5>Nombre</h5></th>
<td><h5><?= $colegio->nombre ?></h5></td>

</tr>

<tr>
<th><h5>Direccion</h5></th>
<td><h5><?= $colegio->direccion ?></h5></td>


</tr>

<tr>
<th><h5>Telefono</h5></th>
 <td><h5><?= $colegio->telefono ?></h5></td>

</tr>

<tr>
<th><h5>Pagina web</h5></th>
<!-- boton del link del colegio-->
<td><a href="http://<?= $colegio->pagina_web ?>" class="fa-btn btn-1 btn-1e"><?= $colegio->pagina_web ?></a></td>


</tr>

</table>
</body>
</html> 