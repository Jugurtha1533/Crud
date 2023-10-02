<div class="col-md-6 col-sm-12 form-group">
    <label for="register-form-name">Name:</label>
    <input type="text" name="name" value="<?php if(isset($row)) { echo $row['productName']; } ?>" class="form-control" / required>
</div>
<div class="col-md-6 col-sm-12 form-group">
    <label for="register-form-name">Reference:</label>
    <input type="text" name="reference" value="<?php if(isset($row)) { echo $row['reference']; } ?>" class="form-control" / required>
</div>
<div class="col-md-6 col-sm-12 form-group">
    <label for="register-form-name">description:</label>
    <input type="text" name="description" value="<?php if(isset($row)) { echo $row['description']; } ?>" class="form-control" / required>
</div>
<div class="col-md-6 col-sm-12 form-group">
    <label for="register-form-name">priceTaxTnc:</label>
    <input type="text" name="priceTaxTnc" value="<?php if(isset($row)) { echo $row['priceTaxTnc']; } ?>" class="form-control" / required>
</div>
<div class="col-md-6 col-sm-12 form-group">
    <label for="register-form-name">priceTaxExcl:</label>
    <input type="text" class="form-control" name="priceTaxExcl" value="<?php if(isset($row)) { echo $row['priceTaxExcl']; } ?>" />
</div>
<div class="col-md-6 col-sm-12 form-group">
    <label for="register-form-name">unitsInStock:</label>
    <input type="text" class="form-control" name="unitsInStock" value="<?php if(isset($row)) { echo $row['unitsInStock']; } ?>" />
</div>


<div class="col-md-6 col-sm-12 form-group">
    <label for="register-form-name">Langue:</label>
    
    <select name="lang" class="form-control" required>

    <?php
        $selected = '';

        if(isset($row)) {

            foreach($langs as $lang) {

                if ($row['codeLang'] === $lang['codeLang']) {
                    $selected = 'selected';
                }
                
                echo "<option value='" . $lang['langID'] . "' $selected > " . $lang['codeLang'] . "</option>";
            }
        
        } else {

            foreach($langs as $lang) {
                
                echo "<option value='" . $lang['langID'] . "' > " . $lang['codeLang'] . "</option>";
            }

        }
        
    ?>
    </select>
</div>