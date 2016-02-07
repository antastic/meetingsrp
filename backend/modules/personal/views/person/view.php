<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
//use common\models\User;

/* @var $this yii\web\View */
/* @var $model common\models\Person */
//$user=new User();
$this->title = $model->fname.' '.$model->lname;
$this->params['breadcrumbs'][] = ['label' => 'ข้อมูลบุคลากร', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box box-success box-solid">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-user"></i><?= Html::encode($this->title) ?></h3>
    </div>

    <div class="box-body">
        <p>
            <?= Html::a('Update', ['update', 'id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
            <?=
            Html::a('Delete', ['delete', 'id' => $model->user_id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ])
            ?>
        </p>

        <?=
        DetailView::widget([
            'model' => $model,
            'attributes' => [
                'user_id',
                'fname',
                'lname',
                'addr:ntext',
                'tel',
                'dep_id',
                'photo',
            ],
        ])
        ?>

    </div>
</div>