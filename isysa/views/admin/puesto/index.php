<?php
include_once __DIR__ . '/../../templates/header.php';
?>
<main class="container"><!-- inicio main -->
<div class="container-fluid ">
  
  <h2 class="text-center">Sección de puesto</h2>

  <div class="btn-group">
    <a href="/admin-puesto/crear" class="btn btn-primary">
     Crear un turno
    </a>
  </div>

  
 
  <h3>puesto actuales</h3>
 
  <table class="table table-hover" id="puesto">
  <thead>
    <tr>
      <th scope="col">Clave</th>
      <th scope="col">Nombre</th>
      <th scope="col">Departamento</th>
      
    </tr>
  </thead>
  <tbody>
  <?php foreach($puesto as $puesto) { 
     
   
    ?>
    <tr>
      <td><?php echo $puesto->puesto_clave; ?></th>
      <td><?php echo $puesto->puesto_nombre; ?></td>
      <td><?php echo $puesto->departamento_id; ?></th>

      <td>
      <div class="btn-group">
          <a href="/admin-puesto/actualizar?id=<?php echo $puesto->id; ?>" class="btn btn-primary">
          Editar  
          </a>
          <form action="/admin-puesto/eliminar" method="POST">
                    <input type="hidden" name="id" value="<?php echo $puesto->id; ?>">
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>

  </div>
       </td>
    </tr>
    <?php  } ?>
  </tbody>
  </table>
  
 </div>
 <br><br>
</main><!-- inicio main -->

<?php 
    $script = "";
          
?>
<?php
  include_once __DIR__ . '/../../templates/footer.php';
?>