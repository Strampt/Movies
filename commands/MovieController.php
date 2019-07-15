<?php

namespace app\commands;

use yii\console\Controller;
use Yii;

class MovieController extends Controller 
{
    /**
     * Este comando é para inserir os dados da omdb na bd
     * @param string $filme
     * 
     * 
     */
    public function actionInsertSearchMovie ($filme) 
    {
        $urlMovies = 'http://www.omdbapi.com/?s='.$filme.'&page=1&apikey=a782fdd1';
        $jsonMovies = file_get_contents($urlMovies);
        $dataMovies = json_decode($jsonMovies, true);
        $datalength = count($dataMovies['Search']);
        for($i = 0; $i < 9 && $i < $datalength; $i++) {
            $imbdbidMovie = $dataMovies['Search'][$i]['imdbID'];
            $titleMovie = $dataMovies['Search'][$i]['Title'];
            $yearMovie = $dataMovies['Search'][$i]['Year'];
            $typeMovie = $dataMovies['Search'][$i]['Type'];
            $posterMovie = $dataMovies['Search'][$i]['Poster'];
            Yii::$app->db->createCommand()->insert('search_movie', [
                'imdbid' => $imbdbidMovie,
                'title' => $titleMovie,
                'year' => $yearMovie,
                'type' => $typeMovie,
                'poster' => $posterMovie,
            ])->execute();
        }
    }
    
    /*public function actionInsertTitleMovie($filme,$year) 
    {

    }*/
}