<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Member\Member */

$this->title = 'Update Member: ' . $model->id_member;
$this->params['breadcrumbs'][] = ['label' => 'Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_member, 'url' => ['view', 'id' => $model->id_member]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="member-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
