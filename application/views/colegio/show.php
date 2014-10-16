<html>
<head>
<title>Informacion colegio</title>
</head>

<body>
<p></p>
<p  class="para"><h2 style="margin-left:3em;">Informacion del Colegio</h2></p>
<p></p>

<table width="200" border="5" class = "table" style="margin-left:5em;" >

<tr>
<th><h5 style="margin-left:3em margin-right:3em;">Nombre</h5></th>
<td><h5><?= $colegio->nombre ?></h5></td>

</tr>

<tr>
<th><h5 style="margin-left:3em;">Direccion</h5></th>
<td><h5><?= $colegio->direccion ?></h5></td>


</tr>

<tr>
<th><h5 style="margin-left:3em;">Telefono</h5></th>
 <td><h5><?= $colegio->telefono ?></h5></td>

</tr>
<tr>
<th><h5 style="margin-left:3em;">Pagina Web </h5></th>

<td><a target="_blank"  href="http://<?= $colegio->pagina_web ?>" class="fa-btn btn-1 btn-1e"><?= $colegio->pagina_web ?></a></td>
</tr>

</table>

<!-- la otra tabla-->
<p><h1 style="margin-left:3em;">Resultados del colegio</h1></p>
<table width="200" border="5" class = "table" style="margin-left:5em;" >

<tr>
<th><h5 style="margin-left:3em;">Tipo de Dependencia</h5></th>
<td><h5><?= $colegio->dependencia ?></h5></td>

</tr>

<tr>
<th><h5 style="margin-left:3em;">Promedio PSU</h5></th>
<td><h5><?= $colegio->promedio_psu ?></h5></td>


</tr>

<tr>
<th><h5 style="margin-left:3em;">Grupo Socioeconomico</h5></th>
 <td><h5><?= $colegio->grupo_socioeco ?></h5></td>

</tr>

<tr>
<th><h5 style="margin-left:3em;">Promedio SIMCE 4Basico Lenguaje</h5></th>
 <td><h5><?= $colegio->prom_simce_4bas_leng ?></h5></td>

</tr>

<tr>
<th><h5 style="margin-left:3em;">Promedio SIMCE 4 Basico Matematicas</h5></th>
 <td><h5><?= $colegio->prom_simce_4bas_mate ?></h5></td>

</tr>

<tr>
<th><h5 style="margin-left:3em;">Promedio SIMCE 4 Basico Ciencias</h5></th>
 <td><h5><?= $colegio->prom_simce_4bas_cienc ?></h5></td>

</tr>

<tr>
<th><h5 style="margin-left:3em;">Promedio SIMCE 2 Medio Lenguaje</h5></th>
 <td><h5><?= $colegio->prom_simce_2med_leng ?></h5></td>

</tr>

<tr>
<th><h5 style="margin-left:3em;">Promedio SIMCE 2 Medio Matematicas</h5></th>
 <td><h5><?= $colegio->prom_simce_2med_mate ?></h5></td>

</tr>

<tr>
<th><h5 style="margin-left:3em;">Religion</h5></th>
 <td><h5><?= $colegio->religion ?></h5></td>

</tr>

<tr>
<th><h5 style="margin-left:3em;">Idioma</h5></th>
 <td><h5><?= $colegio->idioma ?></h5></td>

</tr>
</table>

</body>
</html> 