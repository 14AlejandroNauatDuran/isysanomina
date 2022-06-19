<?php
include_once __DIR__ . '/../../templates/header.php';
?>
<main class="container"><!-- inicio main -->
<div class="container-fluid ">
  
  <h2 class="text-center">Sección de producción</h2>
<br><br>
  <div class="btn-group">
    <a href="/admin-produccion/crear" class="btn btn-primary">Nuevo</a>
  </div>

  <h3>Producción actual</h3>
 
  <table class="table table-hover" id="produccion">
  <thead>
    <tr>
      <th scope="col">Tipo de produccion</th>
      <th scope="col">Turno producido</th>
      <th scope="col">Fecha</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($produccion as $produccion) { ?>
    <tr>
      <td><?php echo $produccion->prod_incen_id; ?></th>
      <td><?php echo $produccion->turnos1_id; ?></td>
      <td><?php echo $produccion->fecha; ?></th>
      <td><?php echo $produccion->cantidad; ?></th>
      <td>
      <div class="btn-group">
          <a href="/admin-produccion/actualizar?id=<?php echo $produccion->id; ?>" class="btn btn-primary">
          Editar  
          </a>
          <form action="/admin-produccion/eliminar" method="POST">
                    <input type="hidden" name="id" value="<?php echo $produccion->id; ?>">
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