<!--<h1>Colegio</h1>
<ul>
	<li><?= $colegio->nombre ?></li>
	<li><?= $colegio->direccion ?></li>
	<li><?= $colegio->telefono ?></li>
	<li><?= $colegio->pagina_web ?></li>
</ul>
-->

<table align="center" border="6">
  <thead>
<tr>
      <th>Nombre</th>
      <th>Direccion</th>
      <th>Telefono</th>
      <th>Pagina Web</th>
    </tr>
</thead>
  <tfoot>
</tfoot>
  <tbody>
<tr>
      <td><?= $colegio->nombre ?></td>
      <td><?= $colegio->direccion ?></td>
      <td><?= $colegio->telefono ?></td>
      <td><?= $colegio->pagina_web ?></td>
    </tr>
</tbody>
</table>