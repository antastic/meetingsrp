<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\meeting\models\Equipment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="equipment-form">

    <?php $form = ActiveForm::begin(
            [
                        'options' => [
                            'enctype' => 'multipart/form-data'
                        ]
    ]); ?>

    <?= $form->field($model, 'equipment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail')->textarea(['rows' => 6]) ?>
    <?php if (!$model->isNewRecord) { ?>
        <?= Html::img('uploads/room/' . $model->photo, ['class' => 'img-responsive thumbnail','width' => 250]) ?>
    <?php } ?>
    <?= $form->field($model, 'equipment_img')->fileInput() ?>

    <?php //$form->field($model, 'photo')->textInput(['maxlength' => true]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'เพิ่ม' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
