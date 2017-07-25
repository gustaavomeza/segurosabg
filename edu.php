<?php 

include 'include/SSL.php'; 
include 'include/headHTML.php'; 

include 'include/navHTML.php'; 

?>









  <div class="row no-margin primerCONTENT">


    <div class="col-sm-12 fondotopAUTO">
      <h1 class="colorBLANCO text-sombra textGRANDE no-margin text-right"><b>Educación</b><br>Profesional</h1>
    </div>

  </div>
  <style type="text/css">
  .fondotopAUTO {
    padding: 86px 100px 86px 0px;
    background: url(img/fondos/myfondo04.jpg) no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
  </style>



  <div style="background: #AA248C">
    <div class="container myct" style="background: #FFFFFF;"><br><br>



      <div class="col-sm-6">

        <h3 class="no-margin colorMORADO textBLOD">
          <span><img src="img/iconos/escuelapng.png"></span> Educación profesional
        </h3><br>

        <h4 class="no-margin colorMARINO text-justify">
          Invierte en la educación de tus hijos desde hoy. Un seguro de educación profesional asegura la Universidad de tus hijos y los protege económicamente en caso de fallecimiento de uno de los padres.
          <br><br>
          Puedes elegir entre cobrar toda la suma asegurada o bien otorgarles una renta mensual.
        </h4><br><br>
 

        <video controls autoplay loop style="width: 100%;">
          <source src="videos/servicios/02.3gp" type="video/3gp">
          <source src="videos/servicios/02.webm" type="video/webm">
          <source src="videos/servicios/02.mp4" type="video/mp4">
          <source src="videos/servicios/02.ogv" type="video/ogv" />
          Su navegador no soporta HTML5 video.
        </video>


      <br><br><br>
      </div>





      <div class="col-sm-6">


    
        <form action="php/mail.php" method="POST">
          




          <h3>Meta de Ahorro para Universidad:   <span class="pull-right">$ <span id="ex6SliderVal">250,000.00</span></span></h3>
          <input id="ex6" type="text" data-slider-min="250000" data-slider-tooltip="hide" data-slider-max="1000000" style="width: 100%;"  data-slider-step="1" value="250000" name="metaahorro" /><br><br>

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



          <h3 class="no-margin">Datos familiares:</h3><br>

          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-user-o  fa-1x"></i> Apellido paterno de cónyuge:
            </span>
            <input class="form-control" name="appaternoconyuge" type="text">
          </div><br>

          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-user-o  fa-1x"></i> Apellido materno de cónyuge:
            </span>
            <input class="form-control" name="apmaternoconyuge" type="text">
          </div><br>


          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-user-o  fa-1x"></i> Nombre(s) de cónyuge:
            </span>
            <input class="form-control" name="nombreconyuge" type="text">
          </div><br>





          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-user-o  fa-1x"></i> Nombre(s) del estudiante:
            </span>
            <input class="form-control" name="nombrebeneficiado" type="text" required>
          </div><br>





          <div class="input-group date">

            <span class="input-group-addon" >
              <i class="fa fa-clock-o  fa-1x"></i> Fecha de nacimiento del estudiante:
            </span>
            <input class="form-control" name="fechabeneficiado" type="text"  id='datetimepicker2'>
            <span class="input-group-addon" id="cal2">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>

          </div><br>



          <button type="submit" name="zona" value="Educación Profesional" class="btn-masINFO btn-morado btn-block"><h4 class="no-margin">Enviar solicitud</h4></button>

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
