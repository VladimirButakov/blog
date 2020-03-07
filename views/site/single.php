<?php
$this->title = 'Articles';
use yii\widgets\LinkPager;
use yii\helpers\Url;
?>


<div class="site-index">

    <div class="jumbotron">
        <h2><?echo $article['title']?></h2>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                
                <p><?echo $article['published_at']?></p>
                <p><?echo $article['content']?></p>
            </div>
        </div>
    </div>

    <?php foreach($articles as $vol):?>
        <div class="row">
            <div class="col-lg-4">
                <p><a class="btn btn-default" href=<? echo Url::toRoute(['site/view', 'id'=>$vol['id']])?>><?echo $vol['title']?> &raquo;</a></p>
            </div>
        </div>
    <?php endforeach?>
</div>