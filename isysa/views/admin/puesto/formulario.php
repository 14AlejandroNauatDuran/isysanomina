<div class="row">
    <div class="form-group col">
         <label  for="puesto_clave">Clave:</label>
         <input type="text" class="form-control" id='puesto_clave' name="puesto_clave" placeholder="Añade una identificador.." value="<?php echo $puesto->puesto_clave;?>"/>
    </div>
    <div class="form-group col">
         <label  for="puesto_nombre">Nombre:</label>
         <input type="text" class="form-control" id='puesto_nombre' name="puesto_nombre" placeholder="Añade nombre de turno.." value="<?php echo $puesto->puesto_nombre;?>"/>
    </div>

</div>    
<div class="row">
    <div class="form-group col">
        <label  for="departamento_id">Departamento:</label>
        <!-- <input type="time" class="form-control" id='hora_inicio' name="hora_inicio" placeholder="" value="<?php echo $turnos->hora_inicio;?>"/> -->
        <select name="departamento_id" id="departamento_id" class="form-control">
            <option selected value="">-- Seleccione --</option>
            <?php foreach($departamento as $departamento) { ?>
                <option <?php echo $puesto->departamento_id === $departamento->id ? 'selected' : '' ?> value="<?php echo s($departamento->id); ?>"><?php echo s($departamento->depto_nombre) ; ?>
            <?php  } ?>
        </select>
    </div>
</div>
