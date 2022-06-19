<?php
include_once __DIR__ . '/../../templates/header.php';
?>
<main class="container"><!-- inicio main -->
<div class="container-fluid ">
  
  <h2 class="text-center">Sección de Tipos de empleados</h2>

  <div class="btn-group">
    <a href="/admin-tipoEmpleado/crear" class="btn btn-primary">
     Crear un tipo de empleado
    </a>
  </div>

  
 
  <h3>tipos de empleado actuales</h3>
 
  <table class="table table-hover" id="tipo_empleado">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>

    </tr>
  </thead>
  <tbody>
  <?php foreach($tipo_empleado as $tipo_empleado) { ?>
    <tr>
      <td><?php echo $tipo_empleado->id; ?></th>
      <td><?php echo $tipo_empleado->tipo_nombre; ?></td>

      <td>
      <div class="btn-group">
          <a href="/admin-tipoEmpleado/actualizar?id=<?php echo $tipo_empleado->id; ?>" class="btn btn-primary">
          Editar  
          </a>
          <form action="/admin-tipoEmpleado/eliminar" method="POST">
                    <input type="hidden" name="id" value="<?php echo $tipo_empleado->id; ?>">
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>

  </div>
       </td>
    </tr>
    <?php } ?>
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