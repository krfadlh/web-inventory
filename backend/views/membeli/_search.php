<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Membeli\MembeliSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="membeli-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_transaksi') ?>

    <?= $form->field($model, 'tgl_pembelian') ?>

    <?= $form->field($model, 'jml_barang') ?>

    <?= $form->field($model, 'id_barang') ?>

    <?= $form->field($model, 'id_agen') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
