<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<div class="site-login">
    <div class="row">
        <div class="col-lg-5">
      	  <form action="index.php?r=day/upone" method="post">
          <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
        		姓名：<input type="text" name="name" value="<?php echo $data['name'] ?>"><br>
    				年龄：<input type="text" name="age" value="<?php echo $data['age'] ?>"><br>
    				性别：<input type="text" name="sex" value="<?php echo $data['content']?>"><br>
				<input type="submit" value="修改">
      	  </form>			
        </div>
    </div>
</div>
