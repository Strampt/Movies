<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use webvimark\modules\UserManagement\components\GhostNav;
use webvimark\modules\UserManagement\UserManagementModule;
use app\assets\AppAsset;
use app\models\SearchMovie;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../web/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet"> 
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="row">
    <?php
    if(Yii::$app->user->isSuperAdmin){
        NavBar::begin([
            'brandLabel' => 'Movies',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top',
            ],
        ]);
        echo GhostNav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'encodeLabels' => false,
            'items' => [
                //['label' => 'Home', 'url' => ['/search-movie/index']],
                ['label' => 'Search', 'url' => ['/search-movie/index']],
                [
                    'label' => 'Administration',
                    'items' => UserManagementModule::menuItems()
                ],
                [
                    'label' => Yii::$app->user->identity->username,
                    'items' => [
                        '<li role="presentation" class="divider"></li>',
                        ['label' => 'Change password', 'url' => ['/user-management/auth/change-own-password']],
                        ['label' => 'Logout', 'url' => ['/user-management/auth/logout']],
                    ],
                ]
            ],
        ]);
        NavBar::end();
    } else {
        NavBar::begin([
            'options' => [
                'class' => 'col-md-2',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'sidebar'],
            'encodeLabels' => false,

            'items' => [
                '<ul >',
                '<li role="presentation" class="divider">',
                    ['label' => 'Search', 'url' => ['/search-movie/index']],
                '</li>',
                '</ul>',
                //['label' => 'Home', 'url' => ['/search-movie/index']],
            ],
        ]);
        NavBar::end();
    }
    ?>

    <div class="col-md-10" <?= Yii::$app->user->isGuest ? "style='padding-top:10px'>" : "style='padding-top:70px'>" ?>
        <div class="container">
            <?php
                /*$eu = SearchMovie::getGenre();
                var_dump($eu);
                echo $eu[0]['genre'];*/
            ?>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Stram <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
