<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Membeli\Membeli */

$this->title = $model->id_barang;
$this->params['breadcrumbs'][] = ['label' => 'Membelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="membeli-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_barang' => $model->id_barang, 'id_agen' => $model->id_agen], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_barang' => $model->id_barang, 'id_agen' => $model->id_agen], [
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
            'no_transaksi',
            'tgl_pembelian',
            'jml_barang',
            'id_barang',
            'id_agen',
        ],
    ]) ?>

</div>
