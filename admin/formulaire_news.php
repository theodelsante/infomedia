<form class="form-horizontal" action="index.php" method="post" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>News</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="titrenews">Titre</label>  
  <div class="col-md-6">
  <input id="titrenews" name="titrenews" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textenews">Texte</label>
  <div class="col-md-6">                     
    <textarea class="form-control noresize" id="textenews" name="textenews" required></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="datepublication">Date publication</label>  
  <div class="col-md-6">
  <input id="datepublication" name="datepublication" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="imgnews">Image</label>
  <div class="col-md-4">
    <input id="imgnews" name="imgnews" class="input-file" type="file" accept="image/*">
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="importance">Importance</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="importance-0">
      <input type="radio" name="importance" id="importance-0" value="1" checked="checked">
      1
    </label> 
    <label class="radio-inline" for="importance-1">
      <input type="radio" name="importance" id="importance-1" value="2">
      2
    </label>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="ajouternews"></label>
  <div class="col-md-6">
    <input type="submit" id="ajouternews" name="ajouternews" class="btn btn-success col-md-4" value="Ajouter">
  </div>
</div>

</fieldset>
</form>