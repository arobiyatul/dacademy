<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DosenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Dosen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dosen-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= 

        (!Yii::$app->user->isGuest) ?Html::a('Create Dosen', ['create'], ['class' => 'btn btn-success']) : ''
        ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nidn',
            'nama',
            'tmp_lahir',
            'tgl_lahir',
            'jk',
            // 'prodi_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    Nama Guest :
    <?php 
        echo (Yii::$app->user->isGuest) ? "Belum Login" : "Sudah login";

    ?>
</div>
