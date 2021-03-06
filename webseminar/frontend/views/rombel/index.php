<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\RombelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rombels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rombel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rombel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kode',
            'thn_masuk',
            'dosen_pa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
