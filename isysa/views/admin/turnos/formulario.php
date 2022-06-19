<div class="row">
    <div class="form-group col">
         <label  for="turno_clave">Clave:</label>
         <input type="text" class="form-control" id='turno_clave' name="turno_clave" placeholder="Añade una identificador.." value="<?php echo $turnos->turno_clave;?>"/>
    </div>
    <div class="form-group col">
         <label  for="turno_nombre">Nombre:</label>
         <input type="text" class="form-control" id='turno_nombre' name="turno_nombre" placeholder="Añade nombre de turno.." value="<?php echo $turnos->turno_nombre;?>"/>
    </div>

</div>    
<div class="row">
    <div class="form-group col">
        <label  for="hora_inicio">Hora Entrada:</label>
        <input type="time" class="form-control" id='hora_inicio' name="hora_inicio" placeholder="" value="<?php echo $turnos->hora_inicio;?>"/>
    </div>
    <div class="form-group col">
        <label  for="hora_fin">Hora Salida:</label>
        <input type="time" class="form-control" id='hora_fin' name="hora_fin" placeholder="" value="<?php echo $turnos->hora_fin;?>"/>
    </div>

</div>
