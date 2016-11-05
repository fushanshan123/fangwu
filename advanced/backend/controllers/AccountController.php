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

class AccountController extends Controller
{
    public $enableCsrfValidation =false;

    //账号记录
    public function actionRecord(){
    	return $this->renderPartial('account');
    }

    //账号添加
    public function actionAddaccount(){
    	return $this->renderPartial('addaccount');
    }


}