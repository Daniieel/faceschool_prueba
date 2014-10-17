<body>
<link  rel="stylesheet" media="screen" href="<?= base_url(); ?>styleslibro.css" >
<form style="margin-left:8em;" class="contact_form" action="#" method="post">
    <ul>
        <li>
             <h2>Libro de Clases</h2>
        </li>
        <form action="procesa.php" method="post" name="datos">
         <li>

            <label for="date" >Fecha:</label>
            <input  type="date" name="Fecha" placeholder="DD-MM-AAAA" required />
        </li>
        <li>
            <label for="Mensaje">Curso:</label>
            <select style="margin-left:5em;" name="Curso" class="btn btn-default" >

              <?php foreach ($cursos as $curso) {
              ?>

              <option value="<?= $curso->id_curso ?>"><?= $curso->curso ?></option>

              <?php }

               ?> 
           </select> 
        </li>
        <li>
            <label for="Mensaje">Asignatura:</label>
            <select style="margin-left:5em;" name="Asignatura" class="btn btn-default" >

              <?php foreach ($asignaturas as $asignatura) {
              ?>

              <option value="<?= $asignatura->id_asignatura ?>"><?= $asignatura->nombre ?></option>

              <?php }

               ?> 
           </select> 
        </li>
        <li>
            <label for="name_alum" >Alumno:</label>
            <input type="text" required />
        </li>
         <li>
            <label for="name_prof">Profesor:</label>
            <input name="web" required />
        </li>
        <li>
            <label for="anotacion">Anotacion:</label>
            <textarea name="Mensaje" cols="40" rows="6" required ></textarea>
        </li>
        <li>
        	 <input type="submit" name="ok" id="ok" value="Aceptar" />
        </li>
    </ul>
</form>
</body>