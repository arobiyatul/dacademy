<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Rombel */

$this->title = 'Create Rombel';
$this->params['breadcrumbs'][] = ['label' => 'Rombels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rombel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
