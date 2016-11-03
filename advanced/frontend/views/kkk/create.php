<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Kkk */

$this->title = 'Create Kkk';
$this->params['breadcrumbs'][] = ['label' => 'Kkks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kkk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
