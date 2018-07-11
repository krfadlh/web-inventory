<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Menyediakan\Menyediakan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menyediakan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_beli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_pembelian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jml_barang')->textInput() ?>

    <?= $form->field($model, 'Id_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_supplier')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
