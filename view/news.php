<div class="row">
    <div id="content" class="col-md-9 col-sm-12">
        <?php
        $news = @Db::select('news', '*', array('id' => $_GET['id']))[0];
        if (!empty($news)) {
            if (!empty($news['img']) && is_file('assets/img/'.$page.'/'.$news['img'])) {
                echo '<img id="news_img" src="assets/img/'.$page.'/'.$news['img'].'"/>';
            }
            echo '<div id="news_text"><h1>'.$news['title_'.$_SESSION['lang']].'</h1><div>'.$news['content_'.$_SESSION['lang']].'</div>
            <a href="./?page=listnews" class="btn btn-primary" role="button">'.$json['back_to_news_list'].'</a></div>';
        } else {
            echo '<div id="news_text"><h1>'.$json['shop']['label'].' : '.$json['error']['no_news'].'</h1>
            <a href="./?page=listnews" class="btn btn-primary" role="button">'.$json['back_to_news_list'].'</a></div>';
        }
        ?>
    </div>
    <?php
    require_once ('sidebar.php');
    ?>
</div>