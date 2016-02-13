<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\meeting\models\Room */

$this->title = $model->room;
$this->params['breadcrumbs'][] = ['label' => 'ห้องประชุม', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-info box-solid">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-home"></i><?= Html::encode($this->title) ?></h3>
    </div>

    <div class="box-body">
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
        <?=Html::img('uploads/room/'.$model->photo, ['class' => 'thumbnail img-responsive']); ?>
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
                'value' => '<span style="background-color:'. $model->color . ';">' .'<span style="color:' . $model->color . ';">' . $model->color . '</span></span>'
            ],
        ],
    ]) ?>

</div>
</div>