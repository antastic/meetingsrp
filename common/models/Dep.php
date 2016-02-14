<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dep".
 *
 * @property integer $id
 * @property string $dep
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
            [['dep'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dep' => 'แผนก',
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
