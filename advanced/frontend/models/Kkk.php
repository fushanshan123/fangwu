<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kkk".
 *
 * @property integer $id
 * @property string $name
 * @property string $class
 */
class Kkk extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kkk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'class'], 'required'],
            [['id'], 'integer'],
            [['name', 'class'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'class' => 'Class',
        ];
    }
}
