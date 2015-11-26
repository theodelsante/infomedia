<?php
$name_fr = '';
$name_en = '';
$name_company = '';
$price = '';
$description_fr = '';
$description_en = '';
$img = '';
$vat = '';
$transportation_price = '';

if (isset($_GET['change']) && isset($_GET['id']) && intval($_GET['id'])) {
    $data = Db::select('product', '*', array('id' => $_GET['id']));
    $data = $data[0];
    $name_fr = $data['name_fr'];
    $name_en = $data['name_en'];
    $name_company = $data['name_company'];
    $price = $data['price'];
    $description_fr = $data['description_fr'];
    $description_en = $data['description_en'];
    $img = $data['img'];
    $vat = $data['vat'];
    $transportation_price = $data['transportation_price'];
}
?>
<form class="form-horizontal" action="./" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend><?php echo $json['shop']['label']; ?></legend>
        <div class="form-group">
            <label class="col-sm-4 control-label" for="name"><?php echo $json['admin']['product']['name_fr']; ?></label>  
            <div class="col-sm-6">
                <input id="name" name="name_fr" type="text" value="<?php echo $name_fr; ?>" class="form-control" maxlength="20" onkeypress="if(this.value.length>=20)return false;" required/>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label" for="name_eng"><?php echo $json['admin']['product']['name_en']; ?></label>
            <div class="col-sm-6">
                <input id="name_eng" name="name_en" type="text" value="<?php echo $name_en; ?>" class="form-control" maxlength="20" onkeypress="if(this.value.length>=20)return false;" required/>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label" for="name_company"><?php echo $json['admin']['product']['company']; ?></label>
            <div class="col-sm-6">
                <input id="name_company" name="name_company" type="text" value="<?php echo $name_company; ?>" class="form-control" maxlength="20" onkeypress="if(this.value.length>=20)return false;" required/>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label" for="price"><?php echo $json['admin']['product']['price']; ?></label>
            <div class="col-sm-6">
                <input id="price" name="price" type="number" value="<?php echo $price; ?>" class="form-control" maxlength="4" pattern="[0-9]{4}" min="1" max="9999" onkeypress="console.log(event);if(event.metaKey==true&&(event.keyCode==97||event.keyCode==99||event.keyCode==122))return true; else if(isNaN(String.fromCharCode(event.keyCode))||event.keyCode==32||this.value.length>=4)return false;" required/>
                <span class="unit">€</span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label" for="description"><?php echo $json['admin']['product']['desc_fr']; ?></label>
            <div class="col-sm-6">
                <textarea id="description" name="description_fr" class="form-control" required><?php echo $description_fr; ?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label" for="description_eng"><?php echo $json['admin']['product']['desc_en']; ?></label>
            <div class="col-sm-6">
                <textarea id="description_eng" name="description_en" class="form-control" required><?php echo $description_en; ?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label" for="img"><?php echo $json['admin']['img']; ?></label>
            <div class="col-md-6">
                <span class="btn btn-default btn-file col-xs-3"><?php echo $json['admin']['import']; ?><input type="file" name="img" id="img" accept="image/*"/></span>
                <input type="text" id="img_text" class="form-control col-xs-9" value="<?php echo $img; ?>" readonly/>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label" for="vat"><?php echo $json['admin']['product']['vat']; ?></label>
            <div class="col-sm-6">
                <input id="vat" name="vat" type="number" value="<?php echo $vat; ?>" class="form-control" maxlength="2" pattern="[0-9]{2}" min="1" max="99" onkeypress="console.log(event);if(event.metaKey==true&&(event.keyCode==97||event.keyCode==99||event.keyCode==122))return true; else if(isNaN(String.fromCharCode(event.keyCode))||event.keyCode==32||this.value.length>=2)return false;" required/>
                <span class="unit">€</span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label" for="transportation_price"><?php echo $json['admin']['product']['transportation_price']; ?></label>
            <div class="col-sm-6">
                <input id="transportation_price" name="transportation_price" type="number" value="<?php echo $transportation_price; ?>" class="form-control" maxlength="2" pattern="[0-9]{2}" min="1" max="99" onkeypress="console.log(event);if(event.metaKey==true&&(event.keyCode==97||event.keyCode==99||event.keyCode==122))return true; else if(isNaN(String.fromCharCode(event.keyCode))||event.keyCode==32||this.value.length>=2)return false;" required/>
                <span class="unit">€</span>
            </div>
        </div>
        <div class="form-group">
            <div class="hidden-xs col-sm-2"></div>
            <div class="col-xs-12 col-sm-8">
                <?php
                if (isset($_GET['change']) && isset($_GET['id']) && intval($_GET['id'])) {
                    echo '<input type="hidden" name="id" value="'.$_GET['id'].'"/>
                    <input type="hidden" name="product" value="change"/>
                    <input type="submit" name="change_product" class="btn btn-success" value="'.$json['admin']['modify'].'"/>';
                } else {
                    echo '<input type="hidden" name="product" value="add"/><input type="submit" name="add_product" class="btn btn-success" value="'.$json['admin']['add'].'"/>';
                }
                ?>
                <a href="./?page=list&list=product" class="btn btn-primary"><?php echo $json['back']; ?></a>
            </div>
            <div class="hidden-xs col-sm-2"></div>
        </div>
    </fieldset>
</form>
<script src="../assets/js/textboxio/textboxio.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready( function() {
  $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
    $('#img_text').val(label);
  });

  textboxio.replaceAll('textarea'); // Textarea WYSIWYG editor
});

$(document).on('change', '.btn-file :file', function() {
  var input = $(this),
  numFiles = input.get(0).files ? input.get(0).files.length : 1,
  label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [numFiles, label]);
});
</script>