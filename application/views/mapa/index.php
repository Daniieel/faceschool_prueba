<div class="container">
  <div class="row">
    <div class="col-md-12" style="margin-bottom:30px;">

      <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
      
      <script src="http://j.maxmind.com/app/geoip.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
      <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
      <script type="text/javascript" title="Geo" ></script>
      <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

      <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
      <link rel="stylesheet" href="/resources/demos/style.css">
      <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

      
      <script>
      var map;
      var myPos;
      var directionsRenderer;
      var directionsService = new google.maps.DirectionsService();
      var directionsDisplay = new google.maps.DirectionsRenderer();
      var markers = [];
      var colegios = [];
      var circle = "";
      var myPos = null;
      var destination = "";
      if (navigator && navigator.geolocation) {
         navigator.geolocation.getCurrentPosition(geoOK, geoKO);
      } else {
         geoMaxmind();
      }

      //-----------------


      function initialize(){      
        
        var mapOptions = {
          zoom: 12,   
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        
        map = new google.maps.Map(document.getElementById('mapa'), mapOptions);
        
        var directionsDisplay = new google.maps.DirectionsRenderer();
        
        // Indicamos dónde esta el mapa para renderizarnos
        directionsDisplay.setMap(map);
        // Indicamos dónde esta el panel para mostrar el texto
        directionsDisplay.setPanel(document.getElementById("directionsPanel"));
        
      } 

      google.maps.event.addDomListener(window, 'load', initialize);

      //---------------
      function calcular_ruta(){
      var end = "";
      colegios.forEach(function(cole){
        if (cole.id == parseInt($('#colegio').val())) {
          end = cole.latitud+","+cole.longitud;
        };
      });
       var start = myPos;
         var request = {
             origin:start,
             destination:end,
             travelMode: google.maps.TravelMode.DRIVING
         };
         directionsService.route(request, function(response, status) {
           if (status == google.maps.DirectionsStatus.OK) {
             directionsDisplay.setDirections(response);
           }
         });
         directionsDisplay.setMap(map);
      }

      function geoOK(position) {
      showMap(position.coords.latitude, position.coords.longitude);

      //agrega marcador del colegio
      //carga los marcadores del mapa con los colegios de la base de datos
      <?php foreach ($colegios as $colegio) {
                   ?> 
      var place<?= $colegio->id_colegio ?> = new google.maps.LatLng(<?= $colegio->latitud ?>,<?= $colegio->longitud ?>);
      var marke = new google.maps.Marker({
                position: place<?= $colegio->id_colegio ?>
              , title: "<?= $colegio->nombre ?>"
              , icon: 'http://i.imgur.com/Vw20Fx3.png'
              , map: map
              , });
      var cole = {id:<?= $colegio->id_colegio?> , latitud:"<?= $colegio->latitud ?>", longitud:"<?= $colegio->longitud?>"};
      colegios.push(cole);
       markers.push(marke);
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
          draggable:false,
          icon: 'https://dl.dropboxusercontent.com/u/20056281/Iconos/male-2.png',
          animation: google.maps.Animation.BOUNCE
      });



      marker.setMap(map);


      // Agregar circulo al mapa
      circle = new google.maps.Circle({
        map: map,
        radius: 1000,    // 10 miles in metres
        fillColor: '#819FF7',
        strokeColor: '#2E9AFE'
      });
      circle.bindTo('center', marker, 'position');

      directionsRenderer = new google.maps.DirectionsRenderer();
      directionsRenderer.setMap(map);



      }
//---------------------------------------------------

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

//--------------------------------------------------------
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
      <script type="text/javascript">
        $( document ).ready(function() {
          
         
        $("#informacion").attr("disabled", "disabled");
        $("#como_llegar").attr("disabled", "disabled");
        $('#colegio').change(function() { //boton que cambia todo
          if ($('#colegio').val()== "" || $('#colegio').val() == null) {
              $("#informacion").attr("disabled", "disabled");
              $("#como_llegar").attr("disabled", "disabled");
          }else{
             $("#informacion").removeAttr("disabled");
             $("#como_llegar").removeAttr("disabled");
          }
        });
        $('#comuna, #dependencia, #religion, #idioma').change(function() { //boton que cambia todo
            

          //borro todos los makers (los colegios en el mapa)
           for (var i = 0; i < markers.length; i++) {
                    markers[i].setMap(null);
            }
           
           $.getJSON("<?= base_url('mapa/filtro') ?>", {comuna:$("#comuna").val(), dependencia:$("#dependencia").val(), religion:$("#religion").val(), idioma:$("#idioma").val()}, function(data) {
              
              var colegio = $('#colegio') //combobox
              $("option", colegio).remove(); //borro todos los elementos del colegio
              var option = '';
             
               $.each(data, function(index, op) {
                
                //agrego los nuevos makers
               for (var i = 0; i < markers.length; i++) {
                  if (op.nombre.localeCompare(markers[i].title) == 0) {
                    markers[i].setMap(map);
                    break;
                  }
                }
                
                //agrego los options del colegio
               option += "<option value='"+op.id_colegio+"'>"+op.nombre+"</option>";
                
                

               });
              colegio.html(option);
              $("#informacion").removeAttr("disabled");
            });
           
          });
        });
      </script>


<!-- para que cambie el recomendador -->

<script type="text/javascript">
        $( document ).ready(function() {       
         
        $('#recomendador').change(function() { //boton que cambia todo
         
        });

        $('#comuna, #dependencia, #religion, #idioma').change(function() { //boton que cambia todo
          $.getJSON("<?= base_url('mapa/recomendador') ?>", {comuna:$("#comuna").val(), dependencia:$("#dependencia").val(), religion:$("#religion").val(), idioma:$("#idioma").val()}, function(data) {
              
              var colegio = $('#recomendador') //combobox
              $("option", colegio).remove(); //borro todos los elementos del colegio
              var option = '';
              
              $.each(data, function(index, op) {
                //agrego los options del colegio
              option += "<tr><td><a href='<?= base_url('colegio/show?colegio='.'"+op.id_colegio+"'); ?>' target='_blank' class='btn btn-primary btn-xs' role='button'>"+op.nombre+" </a></td><br><td>"+op.total_megusta+"</td></tr>" 
              
               
              });
              colegio.html(option);
            });
           
          });
        });
      </script>






  <script>
  $(function() {
    $( "#amount").change(function() { 
       var rango = parseInt($("#amount").val());
       circle.setRadius(rango);
    
      });
  });


  </script>




<!-- recomendador -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>





      <h1 class= "read" align="" style="margin-top:60px; margin-bottom:30px;"><strong>Encuentra</strong> todos los <strong>colegios</strong> cercanos a tu <strong>ubicación</strong></h1>
      <div class="col-md-4" style="background:rgb(79, 78, 78); color:white;">
     <form action= "<?= base_url('colegio/show'); ?>" method="get" target="_blank" >
       <div class="form-group">
         <label><h4>Selecciona el colegio:</h4></label>
         <!-- se llena el combobox con los colegios con la posicion de la base de datos y hace la funcion "como llegar"--> 
         <select name="colegio" class="form-control" id="colegio">

               <option value="">Selecciona un colegio</option>
               <?php foreach ($colegios as $colegio) {
               ?>

               <option value="<?= $colegio->id_colegio ?>"><?= $colegio->nombre ?></option>

               <?php }

                ?> 

            </select> 
       </div>
      
        <div class="form-group">
          <input type="button"value="Como llegar!" onclick="calcular_ruta();" class="btn btn-danger" id="como_llegar">
          <input type="submit" value="Ver Informacion" class="btn btn-danger" id="informacion">
        </div>

      </form>
        <h3>Filtrar</h3>
          
       <div class="form-group">
          <label><h5>Selecciona comuna:</h5></label>
          <select name= "comuna" class= "form-control" id="comuna">
            <option value="Todos">Todos</option>
                <?php foreach ($comunas as $comuna) {
                ?>
                <option value="<?= $comuna->id_comuna ?>"><?= $comuna->nombre ?></option>
                <?php }

                 ?> 
          </select>
       </div>

         <div class="form-group">
          <label><h5>Tipo dependencia:</h5></label>
          <select name= "dependencia" class= "form-control" id="dependencia">
            <option value="Todos">Todos</option>
                <?php foreach ($dependencia as $dependencia) {
                ?>
                <option value="<?= $dependencia->id_dependencia ?>"><?= $dependencia->dependencia ?></option>
                <?php }

                 ?> 
          </select>
       </div>



         <div class="form-group">
          <label><h5>Selecciona religion:</h5></label>
          <select name= "religion" class= "form-control" id="religion">
            <option value="Todos">Todos</option>
                <?php foreach ($religiones as $religion) {
                ?>
                <option value="<?= $religion->id_religion ?>"><?= $religion->religion ?></option>
                <?php }

                 ?> 
          </select>
       </div>

      <div class="form-group">
          <label><h5>Tipo idioma:</h5></label>
          <select name= "idioma" class= "form-control" id="idioma">
            <option value="Todos">Todos</option>
                <?php foreach ($idiomas as $idioma) {
                ?>
                <option value="<?= $idioma->id_idioma ?>"><?= $idioma->idioma ?></option>
                <?php }

                 ?> 
          </select>
      </div>

       <div class="form-group">
        <p>
          <label for="amount"> <h5>Colegios a la redonda (Especifique en metros):</h5></label>
          <input type="text" id="amount" class="form-control">
        </p>
       
       </div>

      
       
        <br>
        <br>
        <h3 class="read">Te invitamos a usar <strong>Street View</strong></h3>
        <h5 class="read">Arrastra el icono de la persona naranja, hacia el colegio que deseas ver</h5>

        <br></br>
        <br></br>
        <br></br>
        <br></br>
            
            
    
      
      </div>
      
      <div class="col-md-8">
        <!-- MAPA -->
        <div id="mapa" style="width:100%; height:470px; border: 2px solid black;  position: center; overflow: hidden"></div>
        <table name ="recomendador" class="table table-striped" style="font-size:12px" >
              <thead>
                <tr>
                  <th>Colegios que mas han gustado!</th>
                  <th>A cuantos les gusta este colegio!</th>
                  
                </tr>

              </thead>
              <tbody id="recomendador" >

                <?php foreach ($me_gusta as $me_gusta) {
                ?>
              
                    <tr>
                      <td><a href="<?= base_url('colegio/show?colegio='.$me_gusta->id_colegio); ?>"  target="_blank" class="btn btn-primary btn-xs" role="button"><?= $me_gusta->nombre ?></a></td>
                      <td><?= $me_gusta->total_megusta ?></td>
                      
                     </tr>
                  <?php }

                  ?> 
              
              </tbody>
            </table>
        <div class="fb-recommendations" data-site="http://faceschool.cl/" data-action="likes, recommends" data-colorscheme="light" data-header="true" style="width: 100%;float:center;"></div>
      </div>

      <div class="col-md-12">
        
        <div id="directionsPanel" style="width: 100%;float:center;"></div>

      </div>
    </div>
  </div>
</div>