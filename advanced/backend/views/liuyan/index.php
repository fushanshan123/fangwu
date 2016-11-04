<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>留言板</h1>

      	  <form action="index.php?r=liuyan/insert" method="post">
      	  留言人：<input type="text" name="lname"><br>
        		内容 ：<textarea name="content" cols="50" rows="6" id="content"></textarea><br>
        		
				<input type="submit" value="添加">
      	  </form>			






