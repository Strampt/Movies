<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "search_movie".
 *
 * @property int $id
 * @property string $imdbid
 * @property string $title
 * @property int $year
 * @property string $type
 * @property string $poster
 */
class SearchMovie extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'search_movie';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imdbid', 'title'], 'required'],
            [['year'], 'integer'],
            [['released'], 'safe'],
            [['plot'], 'string'],
            [['imdbrating'], 'number'],
            [['imdbid'], 'string', 'max' => 30],
            [['title', 'director'], 'string', 'max' => 100],
            [['type'], 'string', 'max' => 50],
            [['poster'], 'string', 'max' => 2000],
            [['runtime'], 'string', 'max' => 15],
            [['genre'], 'string', 'max' => 150],
            [['imdbid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'imdbid' => 'Imdbid',
            'title' => 'Title',
            'year' => 'Year',
            'type' => 'Type',
            'poster' => 'Poster',
            'released' => 'Released',
            'runtime' => 'Runtime',
            'genre' => 'Genre',
            'plot' => 'Plot',
            'imdbrating' => 'Imdbrating',
            'director' => 'Director',
        ];
    }
}
