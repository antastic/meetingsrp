<?php

namespace backend\modules\meeting\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property integer $id
 * @property string $room
 * @property string $desciption
 * @property string $photo
 * @property string $color
 *
 * @property Meeting[] $meetings
 */
class Room extends \yii\db\ActiveRecord
{
    public $room_img;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'room';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room', 'desciption', 'photo', 'color'], 'required'],
            [['desciption'], 'string'],
            [['room', 'photo'], 'string', 'max' => 100],
            [['color'], 'string', 'max' => 7],
            [['room_img'],'file','skipOnEmpty'=>true,'on' => 'update','extensions' => 'png,jpg,gif']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'room' => 'ชื่อห้อง',
            'desciption' => 'รายละเอียด',
            'photo' => 'รูปห้อง',
            'color' => 'สีห้อง',
            'room_img' => 'รูปภาพ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMeetings()
    {
        return $this->hasMany(Meeting::className(), ['room_id' => 'id']);
    }
}
