<div class="row">
    <div class="form-group col">
        <label  for="produc3_incen_id">Tipo incentivo:</label>

        <select name="produc3_incen_id" id="produc3_incen_id" class="form-control">
            <option selected value="">-- Seleccione --</option>
            <?php foreach($produc_incen as $produc_incen) { ?>
                <option <?php echo $Tlm_c->produc3_incen_id === $produc_incen->id ? 'selected' : '' ?> value="<?php echo s($produc_incen->id); ?>"><?php echo s($produc_incen->nombreP) ; ?>
            <?php  } ?>
        </select>
    </div>
    <div class="form-group col">
         <label  for="rangoA">Rango A:</label>
         <input type="number" class="form-control" id='rangoA' name="rangoA" placeholder="" value="<?php echo $Tlm_c->rangoA;?>"/>
    </div>

</div>    
<div class="row">
    <div class="form-group col">
        <label  for="rangoB">Rango B:</label>
        <input type="number" class="form-control" id='rangoB' name="rangoB" placeholder="" value="<?php echo $Tlm_c->rangoB;?>"/>
    </div>
    <div class="form-group col">
        <label  for="factor">factor:</label>
        <input type="number" step="any" class="form-control" id='factor' name="factor" placeholder="" value="<?php echo $Tlm_c->factor;?>"/>
    </div>

</div>