<?php
namespace backend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\PasswordResetRequestForm;
use backend\models\ResetPasswordForm;
use backend\models\SignupForm;
use backend\models\ContactForm;
use yii\web\Session;
use yii\db\Query;

class MoneyController extends Controller
{
    public $enableCsrfValidation =false;

    //余额充值
    public function actionAddmoney(){
    	return $this->renderPartial('addmoney');
    }

    //充值记录
    public function actionRecharge(){
    	return $this->renderPartial('recharge');
    }

    //密码设定
    public function actionChange(){
    	return $this->renderPartial('change');
    }

}