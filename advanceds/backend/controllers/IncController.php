<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\AdminloginModel;
use yii\web\Session;

/**
 * Login controller  赵尚制作
 */
class IncController extends Controller
{	
	//后台首页

	public $layout = false;

	public function actionHeader(){
		 $username = yii::$app->session['user_name'];
		return $this->render('head',['username'=>$username]);
	}
	public function actionLeft(){
		return $this->render('left');

	}






}