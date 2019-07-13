<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\movie;

/**
 * MovieSearch represents the model behind the search form of `app\models\movie`.
 */
class MovieSearch extends movie
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'year'], 'integer'],
            [['imbdid', 'title', 'genre', 'director', 'plot', 'poster', 'type'], 'safe'],
            [['imdbrating'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = movie::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'year' => $this->year,
            'imdbrating' => $this->imdbrating,
        ]);

        $query->andFilterWhere(['like', 'imbdid', $this->imbdid])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'genre', $this->genre])
            ->andFilterWhere(['like', 'director', $this->director])
            ->andFilterWhere(['like', 'plot', $this->plot])
            ->andFilterWhere(['like', 'poster', $this->poster])
            ->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }
}
