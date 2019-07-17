<?php

namespace app\commands;

use yii\console\Controller;
use Yii;
use yii\i18n\Formatter;

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
        $urlSMovies = 'http://www.omdbapi.com/?s='.$filme.'&page=1&apikey=a782fdd1';
        $jsonSMovies = file_get_contents($urlSMovies);
        $dataSMovies = json_decode($jsonSMovies, true);
        $dataSLength = count($dataSMovies['Search']);
        for($i = 0; $i < $dataSLength; $i++) {
            $imbdbidSMovie = $dataSMovies['Search'][$i]['imdbID'];
            $titleSMovie = $dataSMovies['Search'][$i]['Title'];
            $yearSMovie = $dataSMovies['Search'][$i]['Year'];
            $typeSMovie = $dataSMovies['Search'][$i]['Type'];
            $posterSMovie = $dataSMovies['Search'][$i]['Poster'];
            Yii::$app->db->createCommand()->insert('search_movie', [
                'imdbid' => $imbdbidSMovie,
                'title' => $titleSMovie,
                'year' => $yearSMovie,
                'type' => $typeSMovie,
                'poster' => $posterSMovie,
            ])->execute();
        }
    }
    
    public function actionInsertTitleMovie($filme, $year) 
    {
        $filme = str_replace(" ", "+", $filme);
        $urlTMovies = 'http://www.omdbapi.com/?t='.$filme.'&y='.$year.'&plot=full&apikey=a782fdd1';
        $jsonTMovies = file_get_contents($urlTMovies);
        $dataTMovies = json_decode($jsonTMovies, true);
        $imdbidTMovie = $dataTMovies['imdbID'];
        $titleTMovie = $dataTMovies['Title'];
        $yearTMovie = $dataTMovies['Year'];
        $typeTMovie = $dataTMovies['Type'];
        $releasedTMovie = $dataTMovies['Released'];
        $runtimeTMovie = $dataTMovies['Runtime'];
        $genreTMovie = $dataTMovies['Genre'];
        $plotTMovie = $dataTMovies['Plot'];
        $posterTMovie = $dataTMovies['Poster'];
        $imdbratingTMovie = $dataTMovies['imdbRating'];
        $directorTMovie = $dataTMovies['Director'];
        $releasedTMovie = date('Y-m-d', strtotime($releasedTMovie));
        Yii::$app->db->createCommand()->insert('title_movie', [
            'imdbid' => $imdbidTMovie,
            'title' => $titleTMovie,
            'year' => $yearTMovie,
            'type' => $typeTMovie,
            'poster' => $posterTMovie,
            'released' => $releasedTMovie,
            'runtime' => $runtimeTMovie,
            'genre' => $genreTMovie,
            'plot' => $plotTMovie,
            'imdbrating' => $imdbratingTMovie,
            'director' =>$directorTMovie,
        ])->execute();
    }
}