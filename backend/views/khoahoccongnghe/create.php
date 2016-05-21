<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Khoahoccongnghe */

$this->title = 'Tạo mới';
$this->params['breadcrumbs'][] = ['label' => 'Khoa học công nghệ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="khoahoccongnghe-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
