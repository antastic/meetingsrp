<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dep".
 *
 * @property integer $id
 * @property string $dep
 * @property string $depcol
 *
 * @property Person[] $people
 */
class Dep extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dep';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'depcol'], 'required'],
            [['id'], 'integer'],
            [['dep', 'depcol'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dep' => 'Dep',
            'depcol' => 'Depcol',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeople()
    {
        return $this->hasMany(Person::className(), ['dep_id' => 'id']);
    }
}
