<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<div class="site-login">
    <div class="row">
        <div class="col-lg-5">
      	  <form action="index.php?r=day/inset" method="post">
        		姓名：<input type="text" name="name"><br>
				年龄：<input type="text" name="age"><br>
				性别：<input type="text" name="sex"><br>
				<input type="submit" value="添加">
      	  </form>			
        </div>
    </div>
</div>
