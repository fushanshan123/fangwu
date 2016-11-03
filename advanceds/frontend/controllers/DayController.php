<?php
//在Controller中引用 
use yii\data\Pagination;             //分页类
namespace frontend\controllers;

use yii\web\Controller;

use yii\db\Query;
use frontend\models\Book;

/**
 * Site controller
 */
class DayController extends Controller
{
	public $enableCsrfValidation = false;
    /**
     * @inheritdoc
     */
    public function actionShow(){
    	$query = Book::find();           //查表

        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $query->count(),
        ]);
         // var_dump($pagination);die;
        // $countries = $query->all();
          $countries = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('show', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
    public function actionAdd(){
    	return $this->render('add');
    }
    public function actionInset(){
    	//添加
    	$data = $_POST;
    	$db = \Yii::$app->db;
    	$db->createCommand()->insert('book', $data)->execute();   //执行添加入库
    	$this->redirect('index.php?r=day/show');                  //跳转到展示方法
    }
  
    public function actionDel(){
    	//删除
    	$id = $_GET['id'];
    	$db = \Yii::$app->db;
    	$db->createCommand()->delete('book','id='.$id)->execute();      //render渲染模板
    	$this->redirect('index.php?r=day/show');  
        //  if($res)
        // {
        //     Yii::$app->session->setFlash('success','删除成功');
        //     return $this->redirect('index.php?r=liuyan/show'); 
        // }
        // else
        // {
        //     Yii::$app->session->setFlash('error','删除失败');
        //     $this->redirect('index.php?r=liuyan/show'); 
        // }
            	
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
        $data = $db->select("*")->from("book")->where("id=".$id)->one(); 
// var_dump($data);die;

    	return $this->render('update', [
            'data' => $data,
        ]);

    }
    public function actionUpone(){
    	$id = $_POST['id'];
    	$name =   $_POST['name'];
    	$sex =   $_POST['sex'];
    	$age =   $_POST['age'];

    	$db = \Yii::$app->db;
    	//$data=$db->createCommand($sql)->queryRow(); 
        $db->createCommand()->update('book',['name'=>$name,'sex'=>$sex,'age'=>$age],'id='.$id)->execute();
        $this->redirect('index.php?r=day/show')  ;
    }
}