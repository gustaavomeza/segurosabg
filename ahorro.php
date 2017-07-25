<?php 

include 'include/SSL.php'; 
include 'include/headHTML.php'; 

include 'include/navHTML.php'; 

?>









  <div class="row no-margin primerCONTENT">


    <div class="col-sm-12 fondotopAUTO">
      <h1 class="colorBLANCO text-sombra textGRANDE no-margin"><b>Vida</b> &<br> <b>Ahorro</b></h1>
    </div>

  </div>
  <style type="text/css">
  .fondotopAUTO {
    padding: 86px 0px 86px 100px;
    background: url(img/fondos/myfondo03.jpg) no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
  </style>



  <div style="background: #78A249">
    <div class="container myct" style="background: #FFFFFF;"><br><br>



      <div class="col-sm-6">

        <h3 class="no-margin colorVERDE textBLOD">
          <span><img src="img/iconos/cerdopng.png"></span> Vida & Ahorro
        </h3><br>

        <h4 class="no-margin colorMARINO text-justify">
          Asegura el patrimonio de tu familia y protege su futuro por medio de una inversión mínima que cuida el bienestar económico de los tuyos si llegas a faltar.
          <br><br>
          Además, existen inversiones que te ayudan ahorrar para tu retiro al mismo tiempo.
        </h4><br><br>
 

        <video controls autoplay loop style="width: 100%;">
          <source src="videos/servicios/04.3gp" type="video/3gp">
          <source src="videos/servicios/04.webm" type="video/webm">
          <source src="videos/servicios/04.mp4" type="video/mp4">
          <source src="videos/servicios/04.ogv" type="video/ogv" />
          Su navegador no soporta HTML5 video.
        </video>


      <br><br><br>
      </div>





      <div class="col-sm-6">


    
        <form action="php/mail.php" method="POST">
          




          <h3>Meta de Ahorro:   <span class="pull-right">$ <span id="ex6SliderVal">50,000.00</span></span></h3>
          <input id="ex6" type="text" data-slider-min="50000" data-slider-tooltip="hide" data-slider-max="1000000" style="width: 100%;"  data-slider-step="1" value="50000" name="metaahorro" /><br><br>






          <h3 class="no-margin">Datos personales:</h3><br>

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
              <i class="fa fa-user-o  fa-1x"></i> Nombre(s):
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




          <button type="submit" name="zona" value="Vida & Ahorro" class="btn-masINFO btn-verde btn-block"><h4 class="no-margin colorBLANCO">Enviar solicitud</h4></button>




        </form>


      <br><br>
      </div>

    <br><br><br></div>
  </div>






  <?php include 'include/pieHTML.php'; ?>