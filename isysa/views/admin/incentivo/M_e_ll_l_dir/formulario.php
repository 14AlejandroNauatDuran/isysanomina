<div class="row">
    <div class="form-group col">
        <label  for="produc36_incen_id">Tipo incentivo:</label>

        <select name="produc36_incen_id" id="produc36_incen_id" class="form-control">
            <option selected value="">-- Seleccione --</option>
            <?php foreach($produc_incen as $produc_incen) { ?>
                <option <?php echo $M_e_ll_l_dir->produc36_incen_id === $produc_incen->id ? 'selected' : '' ?> value="<?php echo s($produc_incen->id); ?>"><?php echo s($produc_incen->nombreP) ; ?>
            <?php  } ?>
        </select>
    </div>
    <div class="form-group col">
         <label  for="rangoA">Rango A:</label>
         <input type="number" class="form-control" id='rangoA' name="rangoA" placeholder="" value="<?php echo $M_e_ll_l_dir->rangoA;?>"/>
    </div>

</div>    
<div class="row">
    <div class="form-group col">
        <label  for="rangoB">Rango B:</label>
        <input type="number" class="form-control" id='rangoB' name="rangoB" placeholder="" value="<?php echo $M_e_ll_l_dir->rangoB;?>"/>
    </div>
    <div class="form-group col">
        <label  for="factor">factor:</label>
        <input type="number" step="any" class="form-control" id='factor' name="factor" placeholder="" value="<?php echo $M_e_ll_l_dir->factor;?>"/>
    </div>

</div>
