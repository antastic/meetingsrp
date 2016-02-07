<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\Dep;

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
            <?= Html::a(' เพิ่มบุคลากร', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'attribute' => 'photo',
                    'format' => 'html',
                    'value' => function ($model) {
                        return Html::img('uploads/person/'.$model->photo,['class' =>'thumbnail','width'=>100]);
                    }
                ],
                'user.username',
                'user.email',
                'fname',
                'lname',
                //'addr:ntext',
                'tel',
                [
                    'attribute' => 'dep_id',
                    'value' => function ($model) {
                        return $model->dep->dep;
                    },
                    'filter' => Html::activeDropDownList($searchModel, 'dep_id', ArrayHelper::map(Dep::find()->all(), 'id', 'dep'), ['class' => 'form-control'])
                ],
                // 'photo',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
        ?>

    </div>
</div>
