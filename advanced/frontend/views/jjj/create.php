<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jjj */

$this->title = 'Create Jjj';
$this->params['breadcrumbs'][] = ['label' => 'Jjjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jjj-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
