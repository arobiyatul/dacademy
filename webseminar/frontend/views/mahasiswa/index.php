<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MahasiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Mahasiswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mahasiswa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nim',
            'nama',
            'tmp_lahir',
            'tgl_lahir',
            'ipk',
            // 'prodi_id',
            // 'rombel_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
