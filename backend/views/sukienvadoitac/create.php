<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Sukienvadoitac */

$this->title = 'Sự kiện và đối tac';
$this->params['breadcrumbs'][] = ['label' => 'Sukienvadoitacs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sukienvadoitac-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
