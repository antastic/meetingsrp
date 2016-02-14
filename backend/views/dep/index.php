<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DepSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'เเผนก';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-success box-solid">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-th-large"></i><?= Html::encode($this->title) ?></h3>
    </div>

    <div class="box-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มแผนก', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'dep',
            //'depcol',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
</div>