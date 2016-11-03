<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Tgp */

$this->title = 'Create Tgp';
$this->params['breadcrumbs'][] = ['label' => 'Tgps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tgp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
