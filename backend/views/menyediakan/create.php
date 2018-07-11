<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Menyediakan\Menyediakan */

$this->title = 'Create Menyediakan';
$this->params['breadcrumbs'][] = ['label' => 'Menyediakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menyediakan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
