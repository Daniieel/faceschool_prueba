<html>
<head>

<title>Faceschool</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <script src="<?=base_url(); ?>template2/js/jquery.min.js"></script>
    <script src="<?=base_url(); ?>template2/js/jquery.dropotron.min.js"></script>
    <script src="<?=base_url(); ?>template2/js/jquery.scrolly.min.js"></script>
    <script src="<?=base_url(); ?>template2/js/jquery.scrollgress.min.js"></script>
    <script src="<?=base_url(); ?>template2/js/skel.min.js"></script>
    <script src="<?=base_url(); ?>template2/js/skel-layers.min.js"></script>
    <script src="<?=base_url(); ?>template2/js/init.js"></script>
    <noscript>
      <link rel="stylesheet" href="<?=base_url(); ?>css/skel.css" />
      <link rel="stylesheet" href="<?=base_url(); ?>css/style.css" />
      <link rel="stylesheet" href="<?=base_url(); ?>css/style-wide.css" />
      <link rel="stylesheet" href="<?=base_url(); ?>css/style-noscript.css" />
    </noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
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
        
var place = new google.maps.LatLng(-32.879306, -71.255000);
var marker = new google.maps.Marker({
        position: place
        , title: 'Colegio Francisco Miranda'
        ,icon: 'http://i.imgur.com/Vw20Fx3.png'
        , map: map
        , });
/*google.maps.event.addListener(marker, 'click', function() {
infowindow.open(map,marker);
});*/
//------------
/*var contentString = '<h1><font color="black">Colegio Aleman</h1>';
        var infowindow = new google.maps.InfoWindow({
          content: contentString
          });*/
var place1 = new google.maps.LatLng(-33.038964, -71.526258);
var marker1 = new google.maps.Marker({
        position: place1
        , title: 'Colegio Aleman'
        ,icon: 'http://i.imgur.com/Vw20Fx3.png'
        , map: map
        , });
/*google.maps.event.addListener(marker1, 'click', function() {
infowindow.open(map,marker1);
});*/
//-----------
var contentString = '<font color="black"><div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><b>Colegio Capellan Pascal</b></h1>'+
      '<div id="bodyContent">'+
      '<p><b>Dependencia</b>: Particular Pagado '+
      '<p><b>Region</b>: Valparaiso '+
      '<p><b>Provincia</b>: Valparaiso '+
      '<p><b>Comuna</b>: Viña del Mar '+
      '<p><b>Direccion</b>: Guardiamarina Riquelme s/n Población Allard Las Salinas Viña del Mar '+
      '<p><b>Telefono</b>: (56-32) 2546500 '+
      '<p><b>Promedio PSU</b>: 605,0'+
      '<p><b>Grupo socioeconómico del establecimiento (GSE)</b>: Alto'+
      '<p><b>Promedio Simce 2013 4º Basico Comprension de Lectura</b>: 297 '+
      '<p><b>Promedio Simce 2013 4º Basico Matematicas</b>: 308 '+
      '<p><b>Promedio Simce 2013 4º Basico Ciencias Naturales</b>: 284 '+
      '<p><b>Promedio Simce 2013  IIº Medio Comprension de Lectura</b>: 268'+
      '<p><b>Promedio Simce 2013 IIº Medio Matematicas</b>: 333'+
      '<P><b>Religion</b>: Catolica '+
      '<p><b>Idioma</b>: Ingles </p>'+
      '<p><b>Pagina del colegio</b>: <a href="http://www.colegiocapellanpascal.cl/CapellanPascal/">'+
      'http://www.colegiocapellanpascal.cl/CapellanPascal/</a> '+
      '</p>'+
      '</div>'+
      '</div>';
        var infowindow = new google.maps.InfoWindow({
          content: contentString
          });
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
var place3 = new google.maps.LatLng(-32.9606411, -71.5413962);
var marker3 = new google.maps.Marker({
        position: place3
        , title: 'Alliance Francaise de Valparaiso'
        ,icon: 'http://i.imgur.com/Vw20Fx3.png'
        , map: map
        , });
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
var place18 = new google.maps.LatLng(-33.0349594,-71.5316521);
var marke18 = new google.maps.Marker({
        position: place18
        , title: 'Seminario san rafael viña del mar'
        ,icon: 'http://i.imgur.com/Vw20Fx3.png'
        , map: map
        , });
//----------

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

<link rel="shortcut icon" href="http://localhost/faceschool/inicio/favicon.ico" type="image/x-icon">
<link rel="icon" href="http://localhost/faceschool/inicio/favicon.ico" type="image/x-icon">

<!-- Header -->
      <header id="header" class="alt">
       <h1 id="logo"><a href="http://localhost/faceschool/inicio/index.html"class="icon fa-home fa-3x"><span class="label"></span></a></h1>
        <nav id="nav">
          <ul>
            <li class="current"><a href="index.html">Nosotros</a></li>
            <li class="submenu">
              <a href="">Opciones</a>
              <ul>
                <li><a href="http://localhost/faceschool/menus/mapa_colegios_prueba.html">Colegios v2</a></li>
                <li><a href="#">Opcion 2</a></li>
                <li><a href="#">Opcion 3</a></li>
                
              </ul>
            </li>
            
          </ul>
        </nav>
      </header>
 <section id="banner">
</head>

<body>

 <form>
<section id="banner">
  <div class="4u skel-cell-important">
      <header>
         <h2>FaceSchool</h2>
          </header>
          <p>Aca podras encontrar todos los colegios
          <br />
          cercanos a tu <strong>ubicacion</strong>.
          <br />
          <input type="button" value="Como llegar!" onclick="travelToAddress();">
           <select  name="address" >
      <option value="-32.879306, -71.255000">Colegio Francisco Miranda</option>
      <option value="-33.038964, -71.526258">Colegio Aleman</option>
      <option value="-32.994575, -71.544635">Colegio Capellan Pascal</option> 
      <option value="-12.143893,-76.999268">COLEGIO CHAMPAGNAT</option>
      <option value="-33.049749,-71.442179">COLEGIO COEDUCACIONAL PART. QUILPUE</option>
      <option value="-33.603186,-70.579792">COLEGIO CORDILLERA</option>
      <option value="-33.027378,-71.552759">COLEGIO ESPAÑOL DE VIÑA DEL MAR</option>
      <option value="-33.40012,-70.564258">COLEGIO LEONARDO DA VINCI</option>
      <option value="-33.030768,-71.564592">COLEGIO PATMOS </option>
      <option value="-32.953305,-71.537315">COLEGIO SAGRADA FAMILIA</option>
      <option value="-33.4943226,-70.6653437">ESCUELA JOSÉ DOMINGO SAAVEDRA</option>
      <option value="-33.0496318,-71.6132892">LICEO EDUARDO DE LA BARRA</option>
      <option value="-33.013066,-71.5491853">LICEO VIÑA DEL MAR</option>
      <option value="-33.029743,-71.533045">PAN AMERICAN COLLEGE VIñA DEL MAR</option>
      <option value="-33.02241,-71.566881">SAINT PETER'S SCHOOL</option>
      <option value="-33.047137,-71.615274">SCUOLA ITALIANA ARTURO DELL'ORO</option>
      <option value="-32.972578,-71.535036">THE MACKAY SCHOOL</option>  
      <option value="-33.054471,-71.601976">SEMINARIO SAN RAFAEL</option>  
      <option value="-33.0349594,-71.5316521">Seminario san rafael viña del mar</option>     
    </select>
           </ul>
          </footer>
         </div>
        </section>
</div>
<form action="Colegios" method="get">
</form>
</form>
<div id="mapa" style="position:absolute; width:800px; height:600px; left:500px; top:90px"  ></div>
</body>

</html>