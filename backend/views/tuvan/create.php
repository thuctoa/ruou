<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Tuvan */

$this->title = 'Create Tuvan';
$this->params['breadcrumbs'][] = ['label' => 'Tuvans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuvan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
