<form action= "<?= base_url('colegio/show'); ?>" method="get" target="_blank" >  
	<select name="colegio" style="color:black" class="btn btn-default btn-lg"  >
	    <?php foreach ($colegios as $colegio) {
        ?>
        <option value="<?= $colegio->id_colegio ?>"><?= $colegio->nombre ?></option>  
        <?php }

        ?>
       <input type="submit" value="Ver Informacion" class="btn btn-primary btn-lg"> 
</select>