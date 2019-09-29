<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SearchMovie;

/**
 * SearchMovieSearch represents the model behind the search form of `app\models\SearchMovie`.
 */
class SearchMovieSearch extends SearchMovie
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'year'], 'integer'],
            [['imdbid', 'title', 'type', 'poster', 'released', 'runtime', 'genre', 'plot', 'director'], 'safe'],
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
        $query = SearchMovie::find();

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
            'released' => $this->released,
            'imdbrating' => $this->imdbrating,
        ]);

        $query->andFilterWhere(['like', 'imdbid', $this->imdbid])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'poster', $this->poster])
            ->andFilterWhere(['like', 'runtime', $this->runtime])
            ->andFilterWhere(['like', 'genre', $this->genre])
            ->andFilterWhere(['like', 'plot', $this->plot])
            ->andFilterWhere(['like', 'director', $this->director]);

        return $dataProvider;
    }
}
