<?php
$json_fr = json_decode(file_get_contents('../assets/lang/fr.json'), true);
$json_en = json_decode(file_get_contents('../assets/lang/en.json'), true);
?>
<link href="../assets/js/bootstrap-select/css/bootstrap-select.min.css" type="text/css" rel="stylesheet" media="all"/>
<form class="form-horizontal" action="./" method="post" enctype="multipart/form-data">
  <fieldset>
    <legend><?php echo $json['nav']['home']; ?></legend>
    <div class="form-group">
      <label class="col-md-4 control-label" for="highlight_img"><?php echo $json['home']['highlight_img_text']; ?></label>
      <div class="col-md-6"><?php echo Display::select('highlight_img', array(1, 2, 3, 4), null, $json['home']['highlight_img']); ?></div>
    </div>

    <legend><?php echo $json['sidebar']['mayor_word']; ?></legend>
    <div class="form-group">
      <label class="col-md-4 control-label" for="mayor_word_content_fr"><?php echo $json['admin']['news']['content_fr']; ?></label>
      <div class="col-md-6">
        <textarea id="mayor_word_content_fr" class="form-control" name="mayor_word_content_fr" required><?php echo $json_fr['sidebar']['mayor_word_content']; ?></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="mayor_word_content_en"><?php echo $json['admin']['news']['content_en']; ?></label>
      <div class="col-md-6">
        <textarea id="mayor_word_content_en" class="form-control" name="mayor_word_content_en" required><?php echo $json_en['sidebar']['mayor_word_content']; ?></textarea>
      </div>
    </div>

    <div class="form-group">
      <div class="hidden-xs col-sm-2"></div>
      <div class="col-xs-12 col-sm-8">
        <input type="submit" name="change_mayor_word" class="btn btn-success" value="<?php echo $json['admin']['save']; ?>"/>
      </div>
      <div class="hidden-xs col-sm-2"></div>
    </div>
  </fieldset>
</form>
<script src="../assets/js/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready( function() {
  $('select').selectpicker();
});
</script>