<?php
include_once __DIR__ . '/../../templates/header.php';
?>
<main class="container"><!-- inicio main -->
<div class="container-fluid ">
  
  <h2 class="text-center">Sección de Incidencias</h2>

  <div class="btn-group">
    <a href="/admin-incidencia/crear" class="btn btn-primary">
     Nuevo
    </a>
  </div>

  
 
  <h3>Incidencias actuales</h3>
 
  <table class="table table-hover" id="incidencia">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Concepto</th>
      <th scope="col">Acciones</th>

      
    </tr>
  </thead>
  <tbody>
  <?php foreach($incidencia as $incidencia) { ?>
    <tr>
      <td><?php echo $incidencia->codigo; ?></th>
      <td><?php echo $incidencia->concepto; ?></td>
      <td>
      <div class="btn-group">
          <a href="/admin-incidencia/actualizar?id=<?php echo $incidencia->id; ?>" class="btn btn-primary">
          Editar  
          </a>
          <form action="/admin-incidencia/eliminar" method="POST">
                    <input type="hidden" name="id" value="<?php echo $incidencia->id; ?>">
                    <button type="submit" class="btn btn-danger">Borar</button>
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