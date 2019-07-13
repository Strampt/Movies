<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%search_movie}}`.
 */
class m190713_222941_create_search_movie_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%search_movie}}', [
            'id' => $this->primaryKey(),
            'imdbid' => $this->string(30)->notNull(),
            'title' => $this->string(40)->notNull(),
            'year' => $this->integer(),
            'type' => $this->string(15),
            'poster' => $this->string(2000),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%search_movie}}');
    }
}
