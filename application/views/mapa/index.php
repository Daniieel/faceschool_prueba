<html>
<head>

<title>Faceschool</title>
<script src="http://j.maxmind.com/app/geoip.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" >

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
/*var contentString = '<h1><font color="black">Colegio Franciso de Miranda</h1>';
        var infowindow = new google.maps.InfoWindow({
          content: contentString
          });*/
       
//-----------
var place2 = new google.maps.LatLng(-32.994575, -71.544635);
var marker2 = new google.maps.Marker({
        position: place2
        , title: 'Colegio Capellan Pascal'
        ,icon: 'http://i.imgur.com/Vw20Fx3.png'
        , map: map
        , });
google.maps.event.addListener(marker2, 'click', function() {
infowindow.open(map,marker2);
});
//--------

//------
var place4 = new google.maps.LatLng(-12.143893,-76.999268);
var marker4 = new google.maps.Marker({
        position: place4
        , title: 'COLEGIO CHAMPAGNAT'
        ,icon: 'http://i.imgur.com/Vw20Fx3.png'
        , map: map
        , });
//----------
//------
var place5 = new google.maps.LatLng(-33.049749,-71.442179);
var marker5 = new google.maps.Marker({
        position: place5
        , title: 'COLEGIO COEDUCACIONAL PART. QUILPUE'
        ,icon: 'http://i.imgur.com/Vw20Fx3.png'
        , map: map
        , });
//----------
//------
var place6 = new google.maps.LatLng(-33.603186,-70.579792);
var marker6 = new google.maps.Marker({
        position: place6
        , title: 'COLEGIO CORDILLERA'
        ,icon: 'http://i.imgur.com/Vw20Fx3.png'
        , map: map
        , });
//----------
//------
var place7 = new google.maps.LatLng(-33.027378,-71.552759);
var marker7 = new google.maps.Marker({
        position: place7
        , title: 'COLEGIO ESPAÑOL DE VIÑA DEL MAR'
        ,icon: 'http://i.imgur.com/Vw20Fx3.png'
        , map: map
        , });
//----------
//------
var place8 = new google.maps.LatLng(-33.40012,-70.564258);
var marker8 = new google.maps.Marker({
        position: place8
        , title: 'COLEGIO LEONARDO DA VINCI'
        ,icon: 'http://i.imgur.com/Vw20Fx3.png'
        , map: map
        , });
//----------
//------
var place9 = new google.maps.LatLng(-33.030768,-71.564592);
var marker9 = new google.maps.Marker({
        position: place9
        , title: 'COLEGIO PATMOS'
        ,icon: 'http://i.imgur.com/Vw20Fx3.png'
        , map: map
        , });
//----------
//------
var place10 = new google.maps.LatLng(-32.953305,-71.537315);
var marker10 = new google.maps.Marker({
        position: place10
        , title: 'COLEGIO SAGRADA FAMILIA'
        ,icon: 'http://i.imgur.com/Vw20Fx3.png'
        , map: map
        , });
//----------
//------
var place11 = new google.maps.LatLng(-33.4943226,-70.6653437);
var marker11 = new google.maps.Marker({
        position: place11
        , title: 'ESCUELA JOSÉ DOMINGO SAAVEDRA'
        ,icon: 'http://i.imgur.com/Vw20Fx3.png'
        , map: map
        , });
//----------
//------
var place12 = new google.maps.LatLng(-33.0496318,-71.6132892);
var marker12 = new google.maps.Marker({
        position: place12
        , title: 'LICEO EDUARDO DE LA BARRA'
        ,icon: 'http://i.imgur.com/Vw20Fx3.png'
        , map: map
        , });
//----------
//------
var place13 = new google.maps.LatLng(-33.013066,-71.5491853);
var marker13 = new google.maps.Marker({
        position: place13
        , title: 'LICEO VIÑA DEL MAR'
        ,icon: 'http://i.imgur.com/Vw20Fx3.png'
        , map: map
        , });
//----------
//------
var place13 = new google.maps.LatLng(-33.029743,-71.533045);
var marker13 = new google.maps.Marker({
        position: place13
        , title: 'PAN AMERICAN COLLEGE VIñA DEL MAR'
        ,icon: 'http://i.imgur.com/Vw20Fx3.png'
        , map: map
        , });
//----------
//------
var place14 = new google.maps.LatLng(-33.02241,-71.566881);
var marker14 = new google.maps.Marker({
        position: place14
        , title: 'SAINT PETERS SCHOOL'
        ,icon: 'http://i.imgur.com/Vw20Fx3.png'
        , map: map
        , });
//----------
//------
var place15 = new google.maps.LatLng(-33.047137,-71.615274);
var marker15 = new google.maps.Marker({
        position: place15
        , title: 'SCUOLA ITALIANA ARTURO DELL ORO '
        ,icon: 'http://i.imgur.com/Vw20Fx3.png'
        , map: map
        , });
//----------
//------
var place16 = new google.maps.LatLng(-32.972578,-71.535036);
var marker16 = new google.maps.Marker({
        position: place16
        , title: 'THE MACKAY SCHOOL'
        ,icon: 'http://i.imgur.com/Vw20Fx3.png'
        , map: map
        , });
//----------
//------
var place17 = new google.maps.LatLng(-33.054471,-71.601976);
var marker17 = new google.maps.Marker({
        position: place17
        , title: 'SEMINARIO SAN RAFAEL '
        ,icon: 'http://i.imgur.com/Vw20Fx3.png'
        , map: map
        , });
//----------
//------
//----


/*
<?php foreach ($colegios as $colegio) {
              ?>
var place = new google.maps.LatLng(<?= $colegio->latitud ?>,<?= $colegio->longitud ?>)
var marke = new google.maps.Marker({
          position: place
        , title: <?= $colegio->id_colegio ?>
        , icon: 'http://i.imgur.com/Vw20Fx3.png'
        , map: map
        , });
<?php }

?> */

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

function showMap(lat, longi) {

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
    animation: google.maps.Animation.BOUNCE
});

marker.setMap(map);

directionsRenderer = new google.maps.DirectionsRenderer();
directionsRenderer.setMap(map);


}

function travelToAddress(){

  //Obtenemos la direccion
  destino=document.forms[0].address.value;
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
</head>
<body>
 <form action= "<?= base_url('colegio/show'); ?>" method="get" target="_blank" >
   <header>
    <br></br>
    
    <h1 style="margin-left:3em;" class="read">Aca podras <strong>encontrar</strong></h1>  
    <h1 style="margin-left:3em;"class="read">todos los <strong>colegios</strong></h1>
    <h1 style="margin-left:3em;"class="read">cercanos a tu <strong>ubicacion.</strong></h1>
      </header>
      <!-- se llena el combobox con los colegios con la posicion de la base de datos y hace la funcion "como llegar"--> 
      <br></br><select style="margin-left:5em;" name="address" class="btn btn-primary btn-lg" >

              <?php foreach ($colegios as $colegio) {
              ?>

              <option value="<?= $colegio->latitud ?>,<?= $colegio->longitud ?>"><?= $colegio->nombre ?></option>
             
              <?php }

               ?> 
           </select> 

        <br></br>
        <input style="margin-left:5em;"  type="button" value="Como llegar!" onclick="travelToAddress();" class="btn btn-default btn-lg">
        <input type="submit" value="Ver Informacion" class="btn btn-primary btn-lg" style="margin-left:1em">
      <br></br>
      <br></br>
      <br></br>
      <br></br>
      <br></br>
      <br></br>
      <br></br>
      
      
      
</div>
<div id="mapa" style="position:absolute; width:737px; height:470px; left:520px; top:210px; border: 2px solid black;  position: center; overflow: hidden"></div>

</form>

</body>

</html>