<?php
include_once __DIR__ . '/../../templates/header.php';
?>
<main class="container"><!-- inicio main -->
<div class="container-fluid ">
  
  <h2 class="text-center">Crear tipos de empleados</h2>
  <div class="btn-group">
    <a href="/admin-tipoEmpleado" class="btn btn-success">
     Regresar
    </a>
  </div>
  <?php include_once __DIR__ . '/../../templates/alertas.php'; ?>
  <form method="POST" action="/admin-tipoEmpleado/crear" >
    
  <?php include_once __DIR__ . '/formulario.php'; ?>
     <div class="form-group">	      
       <div class="col-12">			 
         <button type="submit" class="btn btn-primary">Guardar</button>
       </div>     
     </div>
  </form>
  
 </div>
 <br><br>
</main><!-- inicio main -->

<?php 
    $script = "";
          
?>
<?php
  include_once __DIR__ . '/../../templates/footer.php';
?>