<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Dep */

$this->title = 'แก้ไขแผนก: ' . ' ' . $model->dep;
$this->params['breadcrumbs'][] = ['label' => 'แผนก', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dep, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="box box-success box-solid">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-th-large"></i><?= Html::encode($this->title) ?></h3>
    </div>

    <div class="box-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
