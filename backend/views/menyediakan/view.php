<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Menyediakan\Menyediakan */

$this->title = $model->Id_barang;
$this->params['breadcrumbs'][] = ['label' => 'Menyediakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menyediakan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Id_barang' => $model->Id_barang, 'id_supplier' => $model->id_supplier], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id_barang' => $model->Id_barang, 'id_supplier' => $model->id_supplier], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'no_beli',
            'tgl_pembelian',
            'jml_barang',
            'Id_barang',
            'id_supplier',
        ],
    ]) ?>

</div>
