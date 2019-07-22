<?php
use yii\helpers\Html;
?>
<?php
// criar uma view com isto em baixo e aqui meto a render a view criada, 
foreach($movies as $movie) {
    echo Html::a($movie->title, ['/search-movie/view', 'id'=>$movie['id']]);
    echo $movie->year; 
}
//teste para github contribuitions    
?>
