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

class ForumController extends Controller
{
    public $enableCsrfValidation =false;

    //发布公告
    public function actionElements(){
    	return $this->renderPartial('form-elements');
    }

    //进入论坛
    public function actionWizard(){
    	return $this->renderPartial('form-wizard');
    }

}