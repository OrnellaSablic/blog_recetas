<?php

  require('vistas/header.php');

?>

<?php
  if(isset($_POST['enviar'])){
    if(!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['mensaje']) && !empty($_POST['asunto'])) {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];
        $header = 'From: webmaster@example.com' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        $mail = @mail($email, $asunto, $mensaje,$header);

        if($mail){
          echo "<p>¡Mail enviado exitosamente</p>";
        }else{
          echo "<p>¡Mail no enviado</p>";
        }

    }

  }
?>

    <!-- Sección formulario de contacto -->
    <section>
          
      <form method = "post" action ="contacto.php" style="background-color: orange">
        <div class="container titulo-contacto ">
              <h5>Escribime si tenés alguna consulta o sugerencia</h5>
          </div>
          <div class="form-group ">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="" class="form-control" name ="nombre" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="email" class="form-control" name ="email" id="exampleInputPassword1" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Asunto</label>
          <input type="text" class="form-control" name ="asunto" id="exampleInputPassword1" required="">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Mensaje</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" name ="mensaje" rows="3"  required=""></textarea>
        </div>
        
        <button type="submit" name="enviar" class="btn btn-primary" style="background-color: black">Enviar</button>
      </form>
    </section>

<?php

  require('vistas/footer.php');

?>