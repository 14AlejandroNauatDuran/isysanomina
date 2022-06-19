<div class="row">
    <div class="form-group col">
        <label  for="produc14_incen_id">Tipo incentivo:</label>

        <select name="produc14_incen_id" id="produc14_incen_id" class="form-control">
            <option selected value="">-- Seleccione --</option>
            <?php foreach($produc_incen as $produc_incen) { ?>
                <option <?php echo $T_campo->produc14_incen_id === $produc_incen->id ? 'selected' : '' ?> value="<?php echo s($produc_incen->id); ?>"><?php echo s($produc_incen->nombreP) ; ?>
            <?php  } ?>
        </select>
    </div>
    <div class="form-group col">
        <label  for="factor">factor:</label>
        <input type="number" step="any" class="form-control" id='factor' name="factor" placeholder="" value="<?php echo $T_campo->factor;?>"/>
    </div>

</div>    

