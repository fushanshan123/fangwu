<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>表单</h1>
<table border="1">
	<th>id</th>
	<th>姓名</th>
	<th>性别</th>
	<th>年龄</th>
	<th>操作</th>
	<?php foreach ($countries as $country): ?>
		<tr>
		        <td><?= Html::encode("{$country->id}") ?></td>	
		        <td><?= Html::encode("{$country->name}") ?></td>	
		        <td><?= Html::encode("{$country->sex}") ?></td>	
		        <td><?= Html::encode("{$country->age}") ?></td>	
		        <td><a href="index.php?r=day/del&id=<?= Html::encode("{$country->id}") ?>">删除</a>|<a href="index.php?r=day/update&id=<?= Html::encode("{$country->id}") ?>">修改</a></td>	
		</tr>	        
	<?php endforeach; ?>
	<?= LinkPager::widget(['pagination' => $pagination]) ?>
</table>

