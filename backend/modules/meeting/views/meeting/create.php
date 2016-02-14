<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\meeting\models\Meeting */

$this->title = 'เพิ่มการจองห้องประชุม';
$this->params['breadcrumbs'][] = ['label' => 'จองห้องประชุม', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-danger">
    <div class="panel-heading">
        <h4><i class="fa fa-diamond"></i><?= Html::encode($this->title) ?></h4>
    </div>
    <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    </div>
</div>
