<div class="row">
<div class="form-group col">
        <label  for="departamento1_id">Departamento:</label>

        <select name="departamento1_id" id="departamento1_id" class="form-control">
            <option selected value="">-- Seleccione --</option>
            <?php foreach($departamento as $departamento) { ?>
                <option <?php echo $salarios->departamento1_id === $departamento->id ? 'selected' : '' ?> value="<?php echo s($departamento->id); ?>"><?php echo s($departamento->depto_nombre) ; ?>
            <?php  } ?>
        </select>
    </div>
    <div class="form-group col">
        <label  for="puesto1_id">Puesto:</label>

        <select name="puesto1_id" id="puesto1_id" class="form-control">
            <option selected value="">-- Seleccione --</option>
            <?php foreach($puesto1 as $puesto1) { ?>
                <option <?php echo $salarios->puesto1_id === $puesto1->id ? 'selected' : '' ?> value="<?php echo s($puesto1->id); ?>"><?php echo s($puesto1->puesto_nombre) ; ?>
            <?php  } ?>
        </select>
    </div>
</div>    
<div class="row">
    <div class="form-group col">
         <label  for="monto">Monto ($):</label>
         <input type="number" step="any" class="form-control" id="monto" name="monto" placeholder="Añade una cifra." value="<?php echo $salarios->monto;?>"/>
    </div>
</div>
