<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Gioithieu */

$this->title = 'Create Gioithieu';
$this->params['breadcrumbs'][] = ['label' => 'Gioithieus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gioithieu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
