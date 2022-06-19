<div class="row">
<div class="form-group col">
        <label  for="prod_incen_id">Tipo de producción:</label>

        <select name="prod_incen_id" id="prod_incen_id" class="form-control">
            <option selected value="">-- Seleccione --</option>
            <?php foreach($prod_incen as $prod_incen) { ?>
                <option <?php echo $produccion->prod_incen_id === $prod_incen->id ? 'selected' : '' ?> value="<?php echo s($prod_incen->id); ?>"><?php echo s($prod_incen->nombreP) ; ?>
            <?php  } ?>
        </select>
    </div>
    <div class="form-group col">
        <label  for="turnos1_id">Turno de producción:</label>

        <select name="turnos1_id" id="turnos1_id" class="form-control">
            <option selected value="">-- Seleccione --</option>
            <?php foreach($turnos1 as $turnos1) { ?>
                <option <?php echo $produccion->turnos1_id === $turnos1->id ? 'selected' : '' ?> value="<?php echo s($turnos1->id); ?>"><?php echo s($turnos1->turno_nombre) ; ?>
            <?php  } ?>
        </select>
    </div>
</div>    
<div class="row">
    <div class="form-group col">
         <label  for="fecha">Fecha de producción:</label>
         <input type="date" class="form-control" id="fecha" name="fecha" placeholder="" value="<?php echo $produccion->fecha;?>"/>
    </div>
    <div class="form-group col">
         <label  for="cantidad">Cantidad:</label>
         <input type="number" step="any" class="form-control" id="cantidad" name="cantidad" placeholder="Añade una cifra." value="<?php echo $produccion->cantidad;?>"/>
    </div>
</div>
