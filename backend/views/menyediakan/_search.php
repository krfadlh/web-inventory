<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Menyediakan\MenyediakanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menyediakan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_beli') ?>

    <?= $form->field($model, 'tgl_pembelian') ?>

    <?= $form->field($model, 'jml_barang') ?>

    <?= $form->field($model, 'Id_barang') ?>

    <?= $form->field($model, 'id_supplier') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
