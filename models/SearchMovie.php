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
            [['imdbid'], 'string', 'max' => 30],
            [['title'], 'string', 'max' => 40],
            [['type'], 'string', 'max' => 15],
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
        ];
    }
}
