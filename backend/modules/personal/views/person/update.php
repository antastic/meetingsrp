<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Person */

$this->title = 'แก้ไขข้อมูลคุณ: ' . ' ' . $model->fname . ' ' . $model->lname;
$this->params['breadcrumbs'][] = ['label' => 'ข้อมูลบุคลากร', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fname, 'url' => ['view', '' => $model->user_id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="box box-success box-solid">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-user"></i><?= Html::encode($this->title) ?></h3>
    </div>

    <div class="box-body">

        <h1><?= Html::encode($this->title) ?></h1>

        <?=
        $this->render('_form', [
            'model' => $model,
            'user' => $user,
        ])
        ?>

    </div>
</div>