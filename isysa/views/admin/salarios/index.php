<?php
include_once __DIR__ . '/../../templates/header.php';
?>
<main class="container"><!-- inicio main -->
<div class="container-fluid ">
  
  <h2 class="text-center">Sección de salarios</h2>
<br><br>
  <div class="btn-group">
    <a href="/admin-salarios/crear" class="btn btn-primary">Nuevo</a>
  </div>

  <h3>Salarios actuales</h3>
 
  <table class="table table-hover" id="salarios">
  <thead>
    <tr>
      <th scope="col">Departamento</th>
      <th scope="col">Puesto</th>
      <th scope="col">Monto</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($salarios as $salarios) { ?>
    <tr>
      <td><?php echo $salarios->departamento1_id; ?></th>
      <td><?php echo $salarios->puesto1_id; ?></td>
      <td><?php echo $salarios->monto; ?></th>
      <td>
      <div class="btn-group">
          <a href="/admin-salarios/actualizar?id=<?php echo $salarios->id; ?>" class="btn btn-primary">
          Editar  
          </a>
          <form action="/admin-salarios/eliminar" method="POST">
                    <input type="hidden" name="id" value="<?php echo $salarios->id; ?>">
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