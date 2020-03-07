<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%article}}`.
 */
class m200307_143401_create_article_table extends Migration
{
    // public $date = date("Y-m-d H:i:s");
    public $content = [];

    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->contentCreate();
        
        $this->createTable('article', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'published_at' => $this->date(),
            'content' => $this->text(),
        ]);
        $this->batchInsert('article', ['title', 'published_at', 'content'], $this->content);
    }

    public function contentCreate() 
    {
        date_default_timezone_set('Europe/Moscow');
        
        for($i = 1; $i<=55; $i++) {
           $this->content[$i] = ['Title '. $i, date("Y-m-d H:i:s"), 'Content Article ' . $i];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('article');
    }
}
