<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tgp".
 *
 * @property integer $id
 * @property string $time
 */
class tgp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tgp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['time'], 'required'],
            [['time'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'time' => 'Time',
        ];
    }
}
