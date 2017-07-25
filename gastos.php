<?php 

include 'include/SSL.php'; 
include 'include/headHTML.php'; 

include 'include/navHTML.php'; 

?>









  <div class="row no-margin primerCONTENT">


    <div class="col-sm-12 fondotopAUTO">
      <h1 class="colorBLANCO text-sombra textGRANDE no-margin text-right"><b>Gastos</b><br>Médicos<br><b>Mayores</b></h1>
    </div>

  </div>
  <style type="text/css">
  .fondotopAUTO {
    padding: 43px 100px 43px 0px;
    background: url(img/fondos/myfondo05.jpg) no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
  </style>



  <div style="background: #5BBEDD">
    <div class="container myct" style="background: #FFFFFF;"><br><br>



      <div class="col-sm-6">

        <h3 class="no-margin colorCIELO textBLOD">
          <span><img src="img/iconos/doctorpng.png"></span> Gastos Médicos Mayores
        </h3><br>

        <h4 class="no-margin colorMARINO text-justify">
          Te da acceso a la medicina privada de la más alta calidad en caso de sufrir algún accidente o una enfermedad de alto costo, permitiendo salvaguardar tu patrimonio.
        </h4><br><br>
 

        <video controls autoplay loop style="width: 100%;">
          <source src="videos/servicios/03.3gp" type="video/3gp">
          <source src="videos/servicios/03.webm" type="video/webm">
          <source src="videos/servicios/03.mp4" type="video/mp4">
          <source src="videos/servicios/03.ogv" type="video/ogv" />
          Su navegador no soporta HTML5 video.
        </video>


      <br><br><br>
      </div>





      <div class="col-sm-6">


    
        <form action="php/mail.php" method="POST">
          







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





          <button type="submit" name="zona" value="Gastos Médicos Mayores" class="btn-masINFO btn-cielo btn-block"><h4 class="no-margin">Enviar solicitud</h4></button>

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
