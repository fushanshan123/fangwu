<?php
namespace backend\controllers;

use Yii;
use yii\db\Query;
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
use helpFunction;

class IndexController extends Controller{
    public $enableCsrfValidation =false;
    public $layout = false;
    public function actionIndex()
    {
        return $this->renderPartial('index');
//         $query = new Query();
//         $res = $query->select("*")
//             ->from('positionType')
//             ->all();
// //        var_dump($res);die;
//         $arr = $query->select("*")
//             ->from('positionType')
//             ->orderBy(
//                 ['status' => SORT_DESC]
//             )
//             ->limit(10)
//             ->all();
//         $arr = helpFunction::CateTree($arr);
// //        print_r($arr);die;
//         $data = helpFunction::CateTree($res);
// //        var_dump($data);die;
//         return $this->render('index',['data'=>$data,'arr'=>$arr]);
    }
}