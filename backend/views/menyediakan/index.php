<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Menyediakan\MenyediakanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Menyediakans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menyediakan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Menyediakan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_beli',
            'tgl_pembelian',
            'jml_barang',
            'Id_barang',
            'id_supplier',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
