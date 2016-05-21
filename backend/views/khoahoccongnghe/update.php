<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Khoahoccongnghe */

$this->title = 'Update Khoahoccongnghe: ' . $model->baiviet_tieude;
$this->params['breadcrumbs'][] = ['label' => 'Khoahoccongnghes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->baiviet_id, 'url' => ['view', 'id' => $model->baiviet_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="khoahoccongnghe-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
