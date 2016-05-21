<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Tuyendungnhansu */

$this->title = 'Create Tuyendungnhansu';
$this->params['breadcrumbs'][] = ['label' => 'Tuyendungnhansus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuyendungnhansu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
