<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JjjSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jjjs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jjj-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Jjj', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'leave',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
