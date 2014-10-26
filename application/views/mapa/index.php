<title>Faceschool</title>
<script src="http://j.maxmind.com/app/geoip.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" title="Geo" >

var map;
var myPos;
var directionsRenderer;
var directionsService = new google.maps.DirectionsService();

if (navigator && navigator.geolocation) {
   navigator.geolocation.getCurrentPosition(geoOK, geoKO);
} else {
   geoMaxmind();
}


function geoOK(position) {
showMap(position.coords.latitude, position.coords.longitude);

//agrega marcador del colegio
//carga los marcadores del mapa con los colegios de la base de datos
<?php foreach ($colegios as $colegio) {
             ?> 
var place<?= $colegio->id_colegio ?> = new google.maps.LatLng(<?= $colegio->latitud ?>,<?= $colegio->longitud ?>);
var marke<?= $colegio->id_colegio ?> = new google.maps.Marker({
          position: place<?= $colegio->id_colegio ?>
        , title: "<?= $colegio->nombre ?>"
        , icon: 'http://i.imgur.com/Vw20Fx3.png'
        , map: map
        , });

<?php }

?>

}



function geoMaxmind() {
showMap(geoip_latitude(), geoip_longitude());
}

function geoKO(err) {
if (err.code == 1) {
error('El usuario ha denegado el permiso para obtener informacion de ubicacion.');
} else if (err.code == 2) {
error('Tu ubicacion no se puede determinar.');
} else if (err.code == 3) {
error('TimeOut.')
} else {
error('No sabemos que pasó pero ocurrio un error.');
}
}

function showMap(lat, longi, radius) {

myPos = new google.maps.LatLng(lat,longi);

var myOptions = {
  zoom: 14,
  center: myPos,
  mapTypeId: google.maps.MapTypeId.ROADMAP,

}

map = new google.maps.Map(document.getElementById("mapa"), myOptions);


var marker = new google.maps.Marker({
    position: myPos,
    title:"Tu Ubicacion",
    draggable:true,
    icon: 'https://dl.dropboxusercontent.com/u/20056281/Iconos/male-2.png',
    animation: google.maps.Animation.BOUNCE
});



marker.setMap(map);


// Agregar circulo al mapa
var circle = new google.maps.Circle({
  map: map,
  radius: 1000,    // 10 miles in metres
  fillColor: '#819FF7',
  strokeColor: '#2E9AFE'
});
circle.bindTo('center', marker, 'position');

directionsRenderer = new google.maps.DirectionsRenderer();
directionsRenderer.setMap(map);



}

function travelToAddress(){
 var colegioActual = document.forms[0].colegio.value;
 var LocalLatLong;
  if(colegioActual == -1){
    return;
  }
<?php foreach ($colegios as $colegio) { ?> 
   else if( <?= $colegio->id_colegio ?> == colegioActual){
     LocalLatLong =  '<?= $colegio->latitud ?>,<?= $colegio->longitud ?>';
   }
<?php } ?>


  //Obtenemos la direccion
  //destino=document.forms[0].address.value;
  destino = LocalLatLong;
  directionsService = new google.maps.DirectionsService();
  // opciones de busqueda
  var request = {
    origin: myPos,
    destination: destino,
    travelMode: google.maps.DirectionsTravelMode.DRIVING
  };
  directionsService.route(request,getRuta);
}

function getRuta(result, status){

    if (status == google.maps.DirectionsStatus.OK) {
       directionsRenderer.setDirections(result);
    } else {
       error("Ha ocurrido un error debido a : " + status);
    }
}
function error(msg) {
alert(msg);
}
function onGDirectionsLoad(){ 
      //resumen de tiempo y distancia
      document.getElementById("getDistance").innerHTML =gdir.getSummaryHtml(); 
}
function procesaClick() {
    alert("Marcador: " + this.title + ", ID: " + this.idColegio);
}

</script>

 <form action= "<?= base_url('colegio/show'); ?>" method="get" target="_blank" >
   <header>
    <br></br>

    <h1 style="margin-left:2.5em;" class="read">Aca podras <strong>encontrar</strong></h1>  
    <h1 style="margin-left:2.5em;"class="read">todos los <strong>colegios</strong></h1>
    <h1 style="margin-left:2.5em;"class="read">cercanos a tu <strong>ubicacion.</strong></h1>
      </header>
      <!-- se llena el combobox con los colegios con la posicion de la base de datos y hace la funcion "como llegar"--> 
      <br></br><select style="margin-left:5em;" name="colegio" class="btn btn-primary btn-lg" >

              <option value=""></option>
              <?php foreach ($colegios as $colegio) {
              ?>

              <option value="<?= $colegio->id_colegio ?>"><?= $colegio->nombre ?></option>

              <?php }

               ?> 
           </select> 
            
        <br></br>

        <input style="margin-left:5em;"  type="button" value="Como llegar!" onclick="travelToAddress();" class="btn btn-primary btn-lg">
        <input type="submit" value="Ver Informacion" class="btn btn-primary btn-lg" style="margin-left:1em">
      <br>
      <br>
      <h3 style="margin-left:4em;" class="read">Te invitamos a usar <strong>Street View</strong></h3>
      <h5 style="margin-left:7em;" class="read">Arrastra el icono de la persona naranja,</h5>
      <h5 style="margin-left:7em;" class="read">hacia el colegio que deseas ver.</h5>
      <br></br>
      <br></br>
      <br></br>
      <br></br>
      <br></br>
      <br></br>
<!-- MAPA -->
<div id="mapa" style="position:absolute; width:737px; height:470px; left:520px; top:250px; border: 2px solid black;  position: center; overflow: hidden"></div>

</form>

