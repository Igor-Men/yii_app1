<?php

use yii\db\Schema;
use yii\db\Migration;

class m160211_213545_create_table_contact extends Migration
{
    public function up()
    {
        $this->createTable('contact', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'email' => Schema::TYPE_STRING . ' NOT NULL',
            'subject' => Schema::TYPE_STRING . ' NOT NULL',
            'message' =>  Schema::TYPE_TEXT,
        ],'ENGINE=InnoDB CHARSET=utf8');
    }

    public function down()
    {
        $this->dropTable('contact');
    }
}
