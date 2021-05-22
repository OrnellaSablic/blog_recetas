<?php

  require('vistas/header.php');

?>
    <!-- Sección formulario de contacto -->
    <section>
          
      <form>
        <div class="container titulo-contacto">
              <h5>Recibí las recetas en tu email</h5>
          </div>
          <div class="form-group ">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Mensaje</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </section>

<?php

  require('vistas/footer.php');

?>