<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Dichvu */

$this->title = 'Create Dichvu';
$this->params['breadcrumbs'][] = ['label' => 'Dichvus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dichvu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
