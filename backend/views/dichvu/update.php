<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Dichvu */

$this->title = 'Update Dichvu: ' . $model->dichvu_id;
$this->params['breadcrumbs'][] = ['label' => 'Dichvus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dichvu_id, 'url' => ['view', 'id' => $model->dichvu_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dichvu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
