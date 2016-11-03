<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jjj".
 *
 * @property integer $id
 * @property string $leave
 */
class Jjj extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jjj';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['leave'], 'required'],
            [['leave'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'leave' => 'Leave',
        ];
    }
}
