<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Menyediakan\Menyediakan */

$this->title = 'Update Menyediakan: ' . $model->Id_barang;
$this->params['breadcrumbs'][] = ['label' => 'Menyediakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_barang, 'url' => ['view', 'Id_barang' => $model->Id_barang, 'id_supplier' => $model->id_supplier]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="menyediakan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
