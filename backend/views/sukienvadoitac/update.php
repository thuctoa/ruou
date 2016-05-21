<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Sukienvadoitac */

$this->title = 'Update Sukienvadoitac: ' . $model->baiviet_tieude;
$this->params['breadcrumbs'][] = ['label' => 'Sukienvadoitacs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->baiviet_tieude, 'url' => ['view', 'id' => $model->baiviet_tieude]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sukienvadoitac-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
