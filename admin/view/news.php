<?php
$title_fr = '';
$title_en = '';
$content_fr = '';
$content_en = '';
$date_publication = date('d/m/Y');
$img = '';
$type = 0;
$important = false;

if (isset($_GET['change']) && isset($_GET['id']) && intval($_GET['id'])) {
  $data = Db::select('news', '*', array('id' => $_GET['id']));
  $data = $data[0];
  $title_fr = $data['title_fr'];
  $title_en = $data['title_en'];
  $content_fr = $data['content_fr'];
  $content_en = $data['content_en'];
  $date_publication = date('d/m/Y', strtotime($data['date_publication']));
  $img = $data['img'];
  $type = $data['type'];
  $important = $data['important'];
}
?>
<link href="../assets/js/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" type="text/css" rel="stylesheet" media="all"/>
<link href="../assets/js/bootstrap-select/css/bootstrap-select.min.css" type="text/css" rel="stylesheet" media="all"/>
<form class="form-horizontal" action="./" method="post" enctype="multipart/form-data">
  <fieldset>
    <legend><?php echo $json['home']['news']; ?></legend>
    <!-- Title -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="title_fr"><?php echo $json['admin']['news']['title_fr']; ?></label>  
      <div class="col-md-6">
        <input id="title_fr" class="form-control" name="title_fr" type="text" value="<?php echo $title_fr; ?>" maxlength="40" onkeypress="if(this.value.length>=40)return false;" required/>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="title_en"><?php echo $json['admin']['news']['title_en']; ?></label>  
      <div class="col-md-6">
        <input id="title_en" class="form-control" name="title_en" type="text" value="<?php echo $title_en; ?>" maxlength="40" onkeypress="if(this.value.length>=40)return false;" required/>
      </div>
    </div>

    <!-- News content -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="text_fr"><?php echo $json['admin']['news']['content_fr']; ?></label>
      <div class="col-md-6">
        <textarea id="text_fr" class="form-control" name="content_fr" data-textboxio-index="0" required><?php echo $content_fr; ?></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="text_en"><?php echo $json['admin']['news']['content_en']; ?></label>
      <div class="col-md-6">
        <textarea id="text_en" class="form-control" name="content_en" data-textboxio-index="1" required><?php echo $content_en; ?></textarea>
      </div>
    </div>

    <!-- Publish date-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="date_publication"><?php echo $json['admin']['news']['date_publish']; ?></label>  
      <div class="col-md-6">
        <input id="date_publication" class="form-control" name="date_publication" type="texte" value="<?php echo $date_publication; ?>" pattern="d/m/Y" readonly required/>
        <div id="datepicker" data-date="<?php echo $date_publication; ?>"></div>
      </div>
    </div>

    <!-- Image --> 
    <div class="form-group">
      <label class="col-md-4 control-label" for="img"><?php echo $json['admin']['img']; ?></label>
      <div class="col-md-6">
        <span class="btn btn-default btn-file col-xs-3"><?php echo $json['admin']['import']; ?><input type="file" name="img" id="img" accept="image/*"/></span>
        <input type="text" id="img_text" class="form-control col-xs-9" value="<?php echo $img; ?>" readonly/>
      </div>
    </div>

    <!-- Type -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="type"><?php echo $json['admin']['news']['type']; ?></label>
      <div class="col-md-4"><?php echo Display::select('type', array($json['home']['news'], $json['home']['events'], $json['home']['news'].' & '.$json['home']['events']), null, $type); ?></div>
    </div>

    <!-- Importance -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="important"><?php echo $json['admin']['news']['important']; ?></label>
      <div class="col-md-4">
        <input type="checkbox" id="important" name="important" class="form-control" <?php if ($important == true) echo 'checked'; ?>/>
      </div>
    </div>

    <!-- Submit button -->
    <div class="form-group">
      <div class="hidden-xs col-sm-2"></div>
      <div class="col-xs-12 col-sm-8">
        <?php
        if (isset($_GET['change']) && isset($_GET['id']) && intval($_GET['id'])) {
          echo '<input type="hidden" name="id" value="'.$_GET['id'].'"/>
          <input type="hidden" name="news" value="change"/>
          <input type="submit" name="change_news" class="btn btn-success" value="'.$json['admin']['modify'].'"/>';
        } else {
          echo '<input type="hidden" name="news" value="add"/><input type="submit" name="add_news" class="btn btn-success" value="'.$json['admin']['add'].'"/>';
        }
        ?>
        <a href="./?page=list&list=news" class="btn btn-primary"><?php echo $json['back']; ?></a>
      </div>
      <div class="hidden-xs col-sm-2"></div>
    </div>
  </fieldset>
</form>
<script src="../assets/js/textboxio/textboxio.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap-datepicker/locales/bootstrap-datepicker.fr.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
<script type="text/javascript">
$('#datepicker').datepicker({
  // format: "DD d MM yyyy",
  startDate: "0d",
  endDate: "+1y",
  todayBtn: "linked",
  language: "<?php echo $_SESSION['lang']; ?>",
  daysOfWeekHighlighted: "0,6",
  autoclose: true,
  todayHighlight: true
});
$('#datepicker').on("changeDate", function() {
  $('#date_publication').val($('#datepicker').datepicker('getFormattedDate'));
});

$(document).ready( function() {
  $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
    $('#img_text').val(label);
  });

  $('select').selectpicker();

  textboxio.replaceAll('textarea'); // Textarea WYSIWYG editor
});

$(document).on('change', '.btn-file :file', function() {
  var input = $(this),
  numFiles = input.get(0).files ? input.get(0).files.length : 1,
  label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [numFiles, label]);
});
</script>