<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>留言列表</h1>
<table border="1">
	<th>id</th>
	<th>留言人</th>
	<th>内容</th>
	<th>操作</th>
	<?php foreach ($countries as $country): ?>
		<tr>
		        <td><?= Html::encode("{$country->id}") ?></td>	
		        <td><?= Html::encode("{$country->lname}") ?></td>	
		        <td><?= Html::encode("{$country->content}") ?></td>	
		        <td><a href="index.php?r=liuyan/del&id=<?= Html::encode("{$country->id}") ?>">删除</a>|<a href="index.php?r=liuyan/update&id=<?= Html::encode("{$country->id}") ?>">修改</a></td>	
		</tr>	        
	<?php endforeach; ?>
	<?= LinkPager::widget(['pagination' => $pagination]) ?>
</table>