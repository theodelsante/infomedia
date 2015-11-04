<div class="row">
    <div id="content" class="col-md-9 col-sm-12">
        <img id="img" src="<?php echo $json['news'][$_GET['id']]['img']; ?>"/>
        <div id="text">
            <h1><?php echo $json['news'][$_GET['id']]['title']; ?></h1>
            <p><?php echo $json['news'][$_GET['id']]['text']; ?></p>
            <a href="./?page=listnews" class="btn btn-primary" role="button">Retour a la liste des news</a>
        </div>
    </div>
    <?php
    require_once ('sidebar.php');
    ?>
</div>