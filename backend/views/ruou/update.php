<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ruou */

$this->title = 'Update Ruou: ' . $model->ruou_id;
$this->params['breadcrumbs'][] = ['label' => 'Ruous', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ruou_id, 'url' => ['view', 'id' => $model->ruou_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ruou-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
