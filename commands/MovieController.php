<?php

namespace app\commands;

use yii\console\Controller;
use Yii;

class MovieController extends Controller 
{
    /**
     * Este comando é para inserir os dados da omdb na bd
     * 
     */
    public function actionInsertMovie ($filme) 
    {
        $urlMovies = 'http://www.omdbapi.com/?s='.$filme.'&page=1&apikey=a782fdd1';
        $jsonMovies = file_get_contents($urlMovies);
        $dataMovies = json_decode($jsonMovies, true);
        //foreach($dataMovies as $movie) {
        $imbdbidMovie = $dataMovies['Search']['0']['imdbID'];
        $titleMovie = $dataMovies['Search']['0']['Title'];
        $yearMovie = $dataMovies['Search']['0']['Year'];
        $posterMovie = $dataMovies['Search']['0']['Poster'];
        Yii::$app->db->createCommand()->insert('movie', [
            'imbdid' => $imbdbidMovie,
            'title' => $titleMovie,
            'year' => $yearMovie,
            'poster' => $posterMovie,
        ])->execute();
        //}
    }
}