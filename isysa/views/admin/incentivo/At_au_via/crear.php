<?php
include_once __DIR__ . '/../../../templates/header.php';
?>



<main class="container">  
<div class="container-fluid ">
  
  <h4 class="text-center">Nuevos incentivos</h2>
  <div class="btn-group">
    <a href="/admin-incentivo" class="btn btn-success">Regresar</a>
  </div>
  <?php include_once __DIR__ . '/../../../templates/alertas.php'; ?>
  <form method="POST" action="/admin-incentivo-At_au_via/crear" >
    
  <?php include_once __DIR__ . '/formulario.php'; ?>
     <div class="form-group">	      
       <div class="col-12">			 
         <button type="submit" class="btn btn-primary">Guardar</button>
       </div>     
     </div>
  </form>
  
 </div>
 <br><br>
</main>  

<?php 
    $script = "";
          
?>
<?php
  include_once __DIR__ . '/../../../templates/footer.php';
?> 