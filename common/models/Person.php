<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property integer $user_id
 * @property string $fname
 * @property string $lname
 * @property string $addr
 * @property string $tel
 * @property integer $dep_id
 * @property string $photo
 *
 * @property Meeting[] $meetings
 * @property Dep $dep
 * @property User $user
 */
class Person extends \yii\db\ActiveRecord
{
    public $person_img;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'fname', 'lname', 'addr', 'tel', 'dep_id'], 'required'],
            [['user_id', 'dep_id'], 'integer'],
            [['addr'], 'string'],
            [['fname', 'lname'], 'string', 'max' => 100],
            [['tel'], 'string', 'max' => 10],
            [['photo'], 'string', 'max' => 255],
            [['person_img'],'file','skipOnEmpty'=>TRUE,'on'=>'update','extensions'=>'jpg,png,gif']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'fname' => 'ชื่อ',
            'lname' => 'นามสกุล',
            'addr' => 'ที่อยู่',
            'tel' => 'เบอร์โทรศัพท์',
            'dep_id' => 'แผนก',
            'photo' => 'รูป',
            'person_img'=>'รูปภาพ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMeetings()
    {
        return $this->hasMany(Meeting::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDep()
    {
        return $this->hasOne(Dep::className(), ['id' => 'dep_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
