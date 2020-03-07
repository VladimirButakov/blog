<?php
$this->title = 'Articles';
use yii\widgets\LinkPager;
use yii\helpers\Url;
?>


<div class="site-index">

    <div class="jumbotron">
        <h1>Articles</h1>
    </div>

    <div class="body-content">
        <?php foreach($articles as $article):?>
        <div class="row">
            <div class="col-lg-4">
                <h2><?echo $article['title']?></h2>
                <p><?echo $article['published_at']?></p>
                <p><?echo $article['content']?></p>

                <p><a class="btn btn-default" href=<? echo Url::toRoute(['site/view', 'id'=>$article['id']])?>><?echo $article['title']?> &raquo;</a></p>
            </div>
        </div>
        <?php endforeach?>
    <br>
    <br>
        <div class="row">
            <div class="col-lg-4">
            <?php
                echo LinkPager::widget([
                    'pagination'=>$pagination,
                ]);
            ?>
        </div>
    </div>
</div>
