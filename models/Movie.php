<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movie".
 *
 * @property int $id
 * @property string $imbdid
 * @property string $title
 * @property int $year
 * @property string $genre
 * @property string $director
 * @property string $plot
 * @property string $poster
 * @property double $imdbrating
 * @property string $type
 */
class Movie extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movie';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imbdid', 'title'], 'required'],
            [['year'], 'integer'],
            [['plot'], 'string'],
            [['imdbrating'], 'number'],
            [['imbdid', 'director'], 'string', 'max' => 30],
            [['title'], 'string', 'max' => 50],
            [['genre'], 'string', 'max' => 70],
            [['poster'], 'string', 'max' => 2000],
            [['type'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'imbdid' => Yii::t('app', 'Imbdid'),
            'title' => Yii::t('app', 'Title'),
            'year' => Yii::t('app', 'Year'),
            'genre' => Yii::t('app', 'Genre'),
            'director' => Yii::t('app', 'Director'),
            'plot' => Yii::t('app', 'Plot'),
            'poster' => Yii::t('app', 'Poster'),
            'imdbrating' => Yii::t('app', 'Imdbrating'),
            'type' => Yii::t('app', 'Type'),
        ];
    }
}
