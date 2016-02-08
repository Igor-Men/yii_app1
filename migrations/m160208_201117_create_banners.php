<?php

use yii\db\Schema;
use yii\db\Migration;

class m160208_201117_create_banners extends Migration
{
    public function up()
    {
        $this->createTable('banners', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT,
            'image' => Schema::TYPE_STRING . ' NOT NULL'
        ]);
    }

    public function down()
    {
        $this->dropTable('banners');
    }
}
