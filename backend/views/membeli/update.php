<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Membeli\Membeli */

$this->title = 'Update Membeli: ' . $model->id_barang;
$this->params['breadcrumbs'][] = ['label' => 'Membelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_barang, 'url' => ['view', 'id_barang' => $model->id_barang, 'id_agen' => $model->id_agen]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="membeli-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
