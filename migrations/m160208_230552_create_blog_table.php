<?php

use yii\db\Schema;
use yii\db\Migration;

class m160208_230552_create_blog_table extends Migration
{
    public function up()
    {
        $this->createTable('blog', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT,
            'image' => Schema::TYPE_STRING . ' NOT NULL',
            'tags' =>  Schema::TYPE_STRING . ' NOT NULL'
        ],'ENGINE=InnoDB CHARSET=utf8');
    }

    public function down()
    {
        $this->dropTable('blog');
    }


}
