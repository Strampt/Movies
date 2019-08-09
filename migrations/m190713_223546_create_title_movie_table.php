<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%title_movie}}`.
 */
class m190713_223546_create_title_movie_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%title_movie}}', [
            'id' => $this->primaryKey(),
            'imdbid' => $this->string(30)->notNull()->unique(),
            'title' => $this->string(100)->notNull(),
            'year' => $this->integer(),
            'type' => $this->string(15),
            'poster' => $this->string(2000),
            'released' => $this->date(),
            'runtime' => $this->string(15),
            'genre' => $this->string(40),
            'plot' => $this->text(),
            'imdbrating' => $this->float(),
            'director' =>$this->string(40),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%title_movie}}');
    }
}
