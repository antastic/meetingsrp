<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Dep;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Person */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="person-form">

    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data']
    ]); ?>

    <?= $form->field($user, 'username')->textInput() ?>
    
    <?= $form->field($user, 'password_hash')->passwordInput() ?>
    
    <?= $form->field($user, 'email')->textInput() ?>

    <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'addr')->textarea(['rows' => 6]) ?>
 

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dep_id')->dropDownList(ArrayHelper::map(Dep::find()->all(), 'id', 'dep')) ?>

    <?= $form->field($model, 'person_img')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'เพิ่ม' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
