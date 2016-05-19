<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tintuc */

$this->title = 'Cập nhật: ' . $model->tintuc_id;
$this->params['breadcrumbs'][] = ['label' => 'Tin Tức', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tintuc_id, 'url' => ['view', 'id' => $model->tintuc_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tintuc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
