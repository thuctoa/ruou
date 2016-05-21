<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Gioithieu */

$this->title = 'Update Gioithieu: ' . $model->gioithieu_tieude;
$this->params['breadcrumbs'][] = ['label' => 'Giới thiệu', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->gioithieu_id, 'url' => ['view', 'id' => $model->gioithieu_id]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="gioithieu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
