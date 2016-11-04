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

class LoginController extends Controller{
    public $enableCsrfValidation =false;

    public function actionLogin(){ 
        return $this->renderPartial('login');
    }

    public function actionAdmin()
    {
//        $connection = Yii::$app->db;
        $request = yii::$app->request;
        $username = $request->post('username');
        $password = $request->post('password');
        var_dump($username);
        var_dump($password);die;
//        $autoLogin = $request->post('autoLogin');
        $query = new Query();
        $res = $query->select("*")
            ->from('user')
            ->where("user_name='$username' and password='$password'")
            ->one();
        if($res)
        {
            $session = Yii::$app->session;
            $session['username'] = $username;
            $session['u_id'] = $res['u_id'];
            $this->redirect(array('/jianli/jianli'));

        }
        else
        {
            echo "<script>alert('账号或密码错误');location.href='?r=login/login'</script>";
        }
    }

    public function actionQuit(){
        unset(Yii::$app->session['username']);
        $this->redirect(array('/index/index'));
    }


}