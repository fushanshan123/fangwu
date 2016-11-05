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

class HouseController extends Controller
{
    public $enableCsrfValidation =false;

    public function actionRelease(){
    	$request = Yii::$app->request;
        if($request->ispost){
            print_r($request);
        }
    	return $this->renderPartial('release');
    }
    
    public function actionRecord(){
    	return $this->renderPartial('record');
    }

    public function actionRefresh(){
    	return $this->renderPartial('refresh');
    }

     public function actionCopy(){
    	return $this->renderPartial('copy');
    }


    //添加
    public function actionAdd(){
    	return $this->renderPartial('add');
    }

    //展示
    public function actionShow(){
    	$request = Yii::$app->request;
        $username = $request->post('username');
        $password = $request->post('password');
    }

}