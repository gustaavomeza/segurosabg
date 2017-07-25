<?php 

include 'include/SSL.php'; 
include 'include/headHTML.php'; 

include 'include/navHTML.php'; 

?>









  <div class="row no-margin primerCONTENT">


    <div class="col-sm-12 fondotopAUTO">
      <h1 class="colorBLANCO text-sombra textGRANDE no-margin"><b>Contáctanos</b></h1>
    </div>

  </div>
  <style type="text/css">
  .fondotopAUTO {
    padding: 129px 0px 129px 100px;
    background: url(img/fondos/myfondo01.jpg) no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
  </style>



  <div style="background: #23388C">
    <div class="container myct" style="background: #FFFFFF;"><br><br>



      <div class="col-sm-3"></div>


      <div class="col-sm-6">

        <form action="php/mail.php" method="POST">
          


          <h3 class="no-margin">Llámanos al número: &nbsp;&nbsp;
            <br>
            <h1 class="no-margin colorMARINO">
            <i class="fa fa-mobile fa-1x"></i> 222-902-29-21
            </h1>
          </h3><br>

          <h3 class="no-margin" style="margin-bottom: 10px !important;">
            O envíanos un correo
          </h3>

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


          <div class="form-group">
              <textarea class="form-control" name="mensaje" placeholder="Mensaje" style="width: 100%; height: 150px;  resize: vertical;" required></textarea>
          </div>
          


          <button type="submit" name="zona" value="contacto" class="btn-masINFO btn-azul btn-block"><h4 class="no-margin">Enviar mensaje</h4></button>

        </form>


      <br><br>
      </div>

      <div class="col-sm-3"></div>



    </div>
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
