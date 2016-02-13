<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\color\ColorInput;

/* @var $this yii\web\View */
/* @var $model backend\modules\meeting\models\Room */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="room-form">
    <?php
    $form = ActiveForm::begin(
                    [
                        'options' => [
                            'enctype' => 'multipart/form-data'
                        ]
    ]);
    ?>

    <?= $form->field($model, 'room')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desciption')->textarea(['rows' => 6]) ?>

    <?php if (!$model->isNewRecord) { ?>
        <?= Html::img('uploads/room/' . $model->photo, ['class' => 'img-responsive thumbnail','width' => 250]) ?>
    <?php } ?>
    <?= $form->field($model, 'room_img')->fileInput() ?>

    <?=
    $form->field($model, 'color')->widget(ColorInput::classname(), [
        'options' => ['placeholder' => 'เลือกสีห้อง'],
    ])
    ?>

    <div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'เพิ่ม' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
