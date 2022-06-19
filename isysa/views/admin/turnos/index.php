<?php
include_once __DIR__ . '/../../templates/header.php';
?>
<main class="container"><!-- inicio main -->
<div class="container-fluid ">
  
  <h2 class="text-center">Sección de Turnos</h2>

  <div class="btn-group">
    <a href="/admin-turnos/crear" class="btn btn-primary">
     Crear un turno
    </a>
  </div>

  
 
  <h3>Turnos actuales</h3>
 
  <table class="table table-hover" id="turnoss">
  <thead>
    <tr>
      <th scope="col">Clave</th>
      <th scope="col">Nombre</th>
      <th scope="col">Hora Inicio</th>
      <th scope="col">Hora Fin</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($turnos as $turnos) { ?>
    <tr>
      <td><?php echo $turnos->turno_clave; ?></th>
      <td><?php echo $turnos->turno_nombre; ?></td>
      <td><?php echo $turnos->hora_inicio; ?></th>
      <td><?php echo $turnos->hora_fin; ?></td>
      <td>
      <div class="btn-group">
          <a href="/admin-turnos/actualizar?id=<?php echo $turnos->id; ?>" class="btn btn-primary">
          Editar  
          </a>
          <form action="/admin-turnos/eliminar" method="POST">
                    <input type="hidden" name="id" value="<?php echo $turnos->id; ?>">
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