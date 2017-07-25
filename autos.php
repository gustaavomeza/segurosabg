<?php 

include 'include/SSL.php'; 
include 'include/headHTML.php'; 

include 'include/navHTML.php'; 

?>









  <div class="row no-margin primerCONTENT">


    <div class="col-sm-12 fondotopAUTO">
      <center><h1 class="colorBLANCO text-sombra textGRANDE no-margin"><b>Asegura</b> tu <b>Auto</b></h1></center>
    </div>

  </div>
  <style type="text/css">
  .fondotopAUTO {
    padding: 130px 0px;
    background: url(img/fondos/myfondo02.jpg) no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
  </style>



  <div style="background: #FF8400">
    <div class="container myct" style="background: #FFFFFF;"><br><br>



      <div class="col-sm-6">

        <h3 class="no-margin colorNARANJA textBLOD">
          <span><img src="img/iconos/autopng.png"></span> Autos
        </h3><br>

        <h4 class="no-margin colorMARINO text-justify">
          Protege tu automóvil en caso de robo total o accidente.
          <br><br>
          Un seguro de autos cubre los gastos médicos de los ocupantes, te da asesoría legal y te permite responder por los daños ocasionados a terceras personas involucradas en el accidente.
          <br><br>
          Además, existen coberturas con las que recuperas una llanta dañada en un bache o una llave del auto perdida.
        </h4><br><br>
 

        <video controls autoplay loop style="width: 100%;">
          <source src="videos/servicios/01.3gp" type="video/3gp">
          <source src="videos/servicios/01.webm" type="video/webm">
          <source src="videos/servicios/01.mp4" type="video/mp4">
          <source src="videos/servicios/01.ogv" type="video/ogv" />
          Su navegador no soporta HTML5 video.
        </video>


      <br><br><br>
      </div>






      <div class="col-sm-6">


    
        <form action="php/mail.php" method="POST">
          

          <h3 class="no-margin">Datos del conductor:</h3><br>

          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-user-o  fa-1x"></i> Apellido paterno:
            </span>
            <input class="form-control" name="appaterno" type="text" required>
          </div><br>


          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-user-o  fa-1x"></i> Apellido materno:
            </span>
            <input class="form-control" name="apmaterno" type="text" required>
          </div><br>


          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-user-o  fa-1x"></i> Nombre(s) del conductor:
            </span>
            <input class="form-control" name="nombreusuario" type="text" required>
          </div><br>



          <div class="input-group date">

            <span class="input-group-addon" >
              <i class="fa fa-clock-o  fa-1x"></i> Fecha de nacimiento:
            </span>
            <input class="form-control" name="fechausuario" type="text"  id='datetimepicker1'>
            <span class="input-group-addon" id="cal1">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>

          </div><br>




          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-barcode fa-1x"></i> Código postal:
            </span>
            <input class="form-control" name="codigopostal" type="text" required>
          </div><br>

          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-phone fa-1x"></i> Teléfono fijo:
            </span>
            <input class="form-control" name="telefono" type="text">
          </div><br>

          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-mobile fa-1x"></i> Teléfono móvil:
            </span>
            <input class="form-control" name="movil" type="text" required>
          </div><br>

          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-envelope-open-o fa-1x"></i> E-mail:
            </span>
            <input class="form-control" name="email" type="email" required>
          </div><br>



          <h3 class="no-margin">Detalles de vehículo:</h3><br>

          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-car fa-1x"></i> Marca de auto:
            </span>
            <input class="form-control" name="marca" type="text" required>
          </div><br>

          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-car fa-1x"></i> Submarca:
            </span>
            <input class="form-control" name="submarca" type="text" required>
          </div><br>



          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-car fa-1x"></i> Modelo:
            </span>
            <input class="form-control" name="modelo" type="text" required>
          </div><br>








          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-car fa-1x"></i> Versión:
            </span>
            <span class="input-group-addon" style="padding: 0px;">
            </span>&nbsp;
          </div>
          <div class="col-sm-12">
          

            <div class="input-group">
              <span class="input-group-addon">
                Transmisión:
              </span>
              <select class="form-control" name="transmision">
                <option>Automático</option>
                <option>Estándar</option>
              </select>
            </div>
  

            <div class="input-group">
              <span class="input-group-addon">
                No. de puertas:
              </span>
              <select class="form-control" name="puertas">
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>

            <div class="input-group">
              <span class="input-group-addon">
                Quemacocos:
              </span>
              <select class="form-control" name="quemacocos">
                <option>No</option>
                <option>Si</option>
              </select>
            </div>

            <div class="input-group">
              <span class="input-group-addon">
                Aire acondicionado:
              </span>
              <select class="form-control" name="aire">
                <option>No</option>
                <option>Si</option>
              </select>
            </div>

            <div class="input-group">
              <span class="input-group-addon">
                Versión del motor:
              </span>
              <input class="form-control" name="versionmotor" type="text" required>
            </div><br> 
          </div>








          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-car fa-1x"></i> Uso de auto:
            </span>


            <select class="form-control" name="uso">
              <option>Particular</option>
              <option>Chofer privado</option>
            </select>


          </div><br>

          <button type="submit" name="zona" value="Asegura tu Auto" class="btn-masINFO btn-naranja btn-block"><h4 class="no-margin">Enviar solicitud</h4></button>


        </form>


      <br><br>
      </div>

    <br><br><br></div>
  </div>






  <?php include 'include/pieHTML.php'; ?>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102914794-1', 'auto');
  ga('send', 'pageview');

</script>
