<div class="row">
    <div id="content" class="col-md-9 col-sm-12">
        <ul class="cat-menu-2">
            <?php
            foreach ($json['category']['everyday'] as $key => $value) {
                $reverse = '';
                if ($key % 2) {
                    $reverse = ' reverse';
                }
                echo '<li class="cat-menu">
                    <div class="vignette col-md-6 col-sm-12 img-menu'.$reverse.'">
                        <a href="./?page=sscat&main=everyday&details='.$value['link'].'">
                        <img src="./assets/img/category/'.$value['img'].'" alt="'.$json['nav'][$value['link']].'"/>
                        </a>
                        <h2>'.$json['nav'][$value['link']].'</h2>
                    </div>
                    <div class="col-md-6 col-sm-12 txt-menu">
                        <p>'.$value['description'].'</p>
                    </div>
                </li>';
            }
            ?>
        </ul>
    </div>
    <?php
    require_once('sidebar.php');
    ?>
</div>