<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Suachua */

$this->title = 'Update Suachua: ' . $model->suachua_id;
$this->params['breadcrumbs'][] = ['label' => 'Suachuas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->suachua_id, 'url' => ['view', 'id' => $model->suachua_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="suachua-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
