<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Sanphamkhac */

$this->title = 'Create Sanphamkhac';
$this->params['breadcrumbs'][] = ['label' => 'Sanphamkhacs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanphamkhac-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
