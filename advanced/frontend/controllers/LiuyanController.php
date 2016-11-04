<?php
//在Controller中引用 
use yii\data\Pagination;             //分页类
namespace frontend\controllers;

use yii\web\Controller;
use Yii;
use yii\data\Pagination;
use yii\db\Query;
use frontend\models\liuyan;

/**
 * Site controller
 */
class LiuyanController extends Controller
{
   
	public $enableCsrfValidation = false;
    //展示
    public function actionShow(){
    	$query = liuyan::find();        
        // var_dump($query);die;
        $pagination = new Pagination([
            'defaultPageSize' => 4,
            'totalCount' => $query->count(),
        ]);
        // $countries = $query->all();
          $countries = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('show', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
    public function actionAdd(){
    	return $this->render('index');
    }
    public function actionInsert(){
    	//添加
    	// $data = $_POST;
        // var_dump($data);die;
         $request = Yii::$app->request;
      // $session = Yii::$app->session;
    	$db = Yii::$app->db;    
        if ( $request->isPost) {
              //接值
              $data=$request->post();                  //接的是数组==$_POST
              // var_dump($data);die;
              // $data['lname']=$request->post('lname');
              // $data['content']=$request->post('content');
              //入库
              $db->createCommand()->insert('liuyan', $data)->execute();  
              //跳转 
        }
        $this->redirect('index.php?r=liuyan/show');          
    	     
    }
  
    public function actionDel(){
    	//删除
    	$id = $_GET['id'];
    	$db = Yii::$app->db;
    	$db->createCommand()->delete('liuyan','id='.$id)->execute();     

    	$this->redirect('index.php?r=liuyan/show');  	
    }
    public function actionUpdate(){
    	//查询单条数据
    	$id = $_GET['id'];
    	// $db = \Yii::$app->db;
    	// $sql = "SELECT * FROM book WHERE id=".$id; 
    	// //$data=$db->createCommand($sql)->queryRow(); 
     //    $data=$db->createCommand($sql)->queryAll();

        //query类
        $db = new Query();
        $data = $db->select("*")->from("liuyan")->where("id=".$id)->one(); 
// var_dump($data);die;

    	return $this->render('update', [
            'data' => $data,
        ]);

    }
    public function actionUpdatea(){
        //修改
    	$id = $_POST['id'];
    	$lname =   $_POST['lname'];
    	$content =   $_POST['content'];

    	$db = Yii::$app->db;
    	//$data=$db->createCommand($sql)->queryRow(); 
        $db->createCommand()->update('liuyan',['lname'=>$lname,'content'=>$content],'id='.$id)->execute();
        $this->redirect('index.php?r=liuyan/show')  ;
    }
}