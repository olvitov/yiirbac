<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `post`.
 */
class m160903_124122_create_post_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('post', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING,
            'description' => Schema::TYPE_TEXT,
            'user_id' => Schema::TYPE_INTEGER
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('post');
    }
}
