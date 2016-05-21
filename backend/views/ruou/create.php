<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Ruou */

$this->title = 'Create Ruou';
$this->params['breadcrumbs'][] = ['label' => 'Ruous', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ruou-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
