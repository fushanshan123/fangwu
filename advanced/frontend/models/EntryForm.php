<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
// // use yii\db\ActiveRecord;
// use yii\base\Model;
// // use frontend\models\EntryForm;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}