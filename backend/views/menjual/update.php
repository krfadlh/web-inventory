<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Agen\Agen */

$this->title = 'Update Agen: ' . $model->id_agen;
$this->params['breadcrumbs'][] = ['label' => 'Agens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_agen, 'url' => ['view', 'id' => $model->id_agen]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="agen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
