<?php
include_once __DIR__ . '/../../templates/header.php';
?>
<main class="container"><!-- inicio main -->
<div class="container-fluid ">
  
  <h2 class="text-center">Sección de Departamentos</h2>

  <div class="btn-group">
    <a href="/admin-departamento/crear" class="btn btn-primary">
     Nuevo Departamento
    </a>
  </div>

  
 
  <h3>Listado de Departamentos actuales</h3>
 
  <table class="table table-hover" id="departamentos">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Acciones</th>

      
    </tr>
  </thead>
  <tbody>
  <?php foreach($departamento as $departamento) { ?>
    <tr>
      <td><?php echo $departamento->id; ?></th>
      <td><?php echo $departamento->depto_nombre; ?></td>
      <td>
      <div class="btn-group">
          <a href="/admin-departamento/actualizar?id=<?php echo $departamento->id; ?>" class="btn btn-primary">
          Editar  
          </a>
          <form action="/admin-departamento/eliminar" method="POST">
                    <input type="hidden" name="id" value="<?php echo $departamento->id; ?>">
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