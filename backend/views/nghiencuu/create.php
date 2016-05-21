<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Nghiencuu */

$this->title = 'Create Nghiencuu';
$this->params['breadcrumbs'][] = ['label' => 'Nghiencuus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nghiencuu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
