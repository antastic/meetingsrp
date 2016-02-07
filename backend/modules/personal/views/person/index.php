<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\personal\models\PersonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ข้อมูลบุคลากร';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-success box-solid">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-user"></i><?= Html::encode($this->title) ?></h3>
    </div>

    <div class="box-body">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('Create Person', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'user_id',
                'fname',
                'lname',
                'addr:ntext',
                'tel',
                // 'dep_id',
                // 'photo',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
        ?>

    </div>
</div>
