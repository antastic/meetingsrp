<?php

namespace backend\modules\meeting\models;

use Yii;

/**
 * This is the model class for table "meeting".
 *
 * @property integer $id
 * @property string $title
 * @property string $descition
 * @property string $date_start
 * @property string $date_end
 * @property string $create_at
 * @property string $update_at
 * @property string $optional
 * @property integer $room_id
 * @property integer $user_id
 * @property string $status
 *
 * @property EquipmentHasMeeting[] $equipmentHasMeetings
 * @property Equipment[] $equipment
 * @property Person $user
 * @property Room $room
 */
class Meeting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'meeting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'descition', 'date_start', 'date_end', 'create_at', 'update_at', 'room_id', 'user_id'], 'required'],
            [['descition', 'status'], 'string'],
            [['date_start', 'date_end', 'create_at', 'update_at'], 'safe'],
            [['room_id', 'user_id'], 'integer'],
            [['title'], 'string', 'max' => 100],
            [['optional'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'เรื่อง',
            'descition' => 'รายละเอียด',
            'date_start' => 'วันเวลาที่ใช้',
            'date_end' => 'วันเวลาที่เสร็จ',
            'create_at' => 'วันที่ยื่นขอ',
            'update_at' => 'วันที่ปรับปรุง',
            'optional' => 'อื่นๆ',
            'room_id' => 'ห้องประชุม',
            'user_id' => 'ผู้จอง',
            'status' => 'สถานะ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquipmentHasMeetings()
    {
        return $this->hasMany(EquipmentHasMeeting::className(), ['meeting_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquipment()
    {
        return $this->hasMany(Equipment::className(), ['id' => 'equipment_id'])->viaTable('equipment_has_meeting', ['meeting_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Person::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['id' => 'room_id']);
    }
}
