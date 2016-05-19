<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Tintuc */

$this->title = 'Tạo tin mới';
$this->params['breadcrumbs'][] = ['label' => 'Tin Tức', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tintuc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
