<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\meeting\models\Room */

$this->title = $model->room;
$this->params['breadcrumbs'][] = ['label' => 'ห้องประชุม', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-view">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->

    <p>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <div class="text-center">
        <?=Html::img('uploads/room/'.$model->photo, ['class' => 'circle']); ?>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'room',
            'desciption:ntext',
            //'photo',
           // 'color',
            [
                'attribute' => 'color',
                'format' => 'html',
                'value' => '<span style="color:'.$model->color.';">'.$model->color.'</span>'
            ],
        ],
    ]) ?>

</div>
