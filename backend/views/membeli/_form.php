<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Membeli\Membeli */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="membeli-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_transaksi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_pembelian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jml_barang')->textInput() ?>

    <?= $form->field($model, 'id_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_agen')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
