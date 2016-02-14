<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\meeting\models\MeetingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ระบบจองห้องประชุม';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-danger">
    <div class="panel-heading">
        <h4><i class="fa fa-diamond"></i><?= Html::encode($this->title) ?></h4>
    </div>
    <div class="panel-body">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('สร้างการจอง', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            'descition:ntext',
            'date_start',
            'date_end',
            // 'create_at',
            // 'update_at',
            // 'optional',
            // 'room_id',
            // 'user_id',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
</div>