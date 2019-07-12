<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%movie}}`.
 */
class m190712_003418_create_movie_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%movie}}', [
            'id' => $this->primaryKey(),
            'imbdid' => $this->string(30)->notNull(),
            'title' => $this->string(50)->notNull(),
            'year' => $this->integer(),
            'genre' => $this->string(70),
            'director' => $this->string(30),
            'plot' => $this->text(),
            'poster' => $this->string(2000),
            'imdbrating' => $this->float(),
            'type' => $this->string(15),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%movie}}');
    }
}
