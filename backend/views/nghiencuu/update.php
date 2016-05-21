<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Nghiencuu */

$this->title = 'Update Nghiencuu: ' . $model->nghiencuu_id;
$this->params['breadcrumbs'][] = ['label' => 'Nghiencuus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nghiencuu_id, 'url' => ['view', 'id' => $model->nghiencuu_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nghiencuu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
