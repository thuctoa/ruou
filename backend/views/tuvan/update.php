<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tuvan */

$this->title = 'Update Tuvan: ' . $model->tuvan_id;
$this->params['breadcrumbs'][] = ['label' => 'Tuvans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tuvan_id, 'url' => ['view', 'id' => $model->tuvan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tuvan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
