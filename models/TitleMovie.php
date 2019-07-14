<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "title_movie".
 *
 * @property int $id
 * @property string $imdbid
 * @property string $title
 * @property int $year
 * @property string $type
 * @property string $poster
 * @property string $released
 * @property string $runtime
 * @property string $genre
 * @property string $plot
 * @property double $imdbrating
 * @property string $director
 */
class TitleMovie extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'title_movie';
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
            [['title', 'genre', 'director'], 'string', 'max' => 40],
            [['type', 'runtime'], 'string', 'max' => 15],
            [['poster'], 'string', 'max' => 2000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'imdbid' => Yii::t('app', 'Imdbid'),
            'title' => Yii::t('app', 'Title'),
            'year' => Yii::t('app', 'Year'),
            'type' => Yii::t('app', 'Type'),
            'poster' => Yii::t('app', 'Poster'),
            'released' => Yii::t('app', 'Released'),
            'runtime' => Yii::t('app', 'Runtime'),
            'genre' => Yii::t('app', 'Genre'),
            'plot' => Yii::t('app', 'Plot'),
            'imdbrating' => Yii::t('app', 'Imdbrating'),
            'director' => Yii::t('app', 'Director'),
        ];
    }
}
