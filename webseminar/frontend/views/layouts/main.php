<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => "D'academy",
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        // ['label' => 'Home', 'url' => ['/site/index']],
        
        // ['label' => 'About', 'url' => ['/site/about']],
        // ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        // $menuItems[] = ['label' => 'Signup', 'url' => ['/user/register']];
        $menuItems[] = '<li>'
            . Html::beginForm(['/user/register'], 'post')
            . Html::submitButton(
                ' Signup',
                ['class' => 'btn btn-link logout glyphicon glyphicon-new-window']
            )
            . Html::endForm()
            . '</li>';
        // $menuItems[] = ['label' => 'Login', 'url' => ['/user/login']];
        $menuItems[] = '<li>'
            . Html::beginForm(['/user/login'], 'post')
            . Html::submitButton(
                ' Login',
                ['class' => 'btn btn-link logout glyphicon glyphicon-log-in']
            )
            . Html::endForm()
            . '</li>';
    } else {
        $menuItems[] = ['label'=>'Prodi','url'=>['/prodi/index']];
        $menuItems[] = ['label'=>'Dosen','url'=>['/dosen/index']];
        // $menuItems[] = ['label'=>'Profile','url'=>['/profile/index']];
        $menuItems[] = '<li>'
            . Html::beginForm(['/profile/index'], 'get')
            . Html::submitButton(
                ' (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout glyphicon glyphicon-user']
            )
            . Html::endForm()
            . '</li>';
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                ' Logout',
                ['class' => 'btn btn-link logout glyphicon glyphicon-log-out']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; STT NF <?= date('M-Y') ?></p>
        <div></div>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
