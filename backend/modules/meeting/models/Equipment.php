<?php

namespace backend\modules\meeting\models;

use Yii;

/**
 * This is the model class for table "equipment".
 *
 * @property integer $id
 * @property string $equipment
 * @property string $detail
 * @property string $photo
 *
 * @property EquipmentHasMeeting[] $equipmentHasMeetings
 * @property Meeting[] $meetings
 */
class Equipment extends \yii\db\ActiveRecord
{
    public $equipment_img;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'equipment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['equipment', 'detail', 'photo'], 'required'],
            [['detail'], 'string'],
            [['equipment', 'photo'], 'string', 'max' => 100],
            [['equipment_img'],'file','skipOnEmpty'=>true,'on'=>'update','extensions'=>'jpg,png,gif'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'equipment' => 'อุปกรณ์',
            'detail' => 'รายละเอียด',
            'photo' => 'รูปอุปกรณ์',
            'equipment_img' => 'รูป',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquipmentHasMeetings()
    {
        return $this->hasMany(EquipmentHasMeeting::className(), ['equipment_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMeetings()
    {
        return $this->hasMany(Meeting::className(), ['id' => 'meeting_id'])->viaTable('equipment_has_meeting', ['equipment_id' => 'id']);
    }
}
