<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Gioithieu */

$this->title = 'tạo mới';
$this->params['breadcrumbs'][] = ['label' => 'Giới thiệu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gioithieu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
