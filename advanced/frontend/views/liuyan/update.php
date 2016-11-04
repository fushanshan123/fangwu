<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>留言板</h1>
<div class="site-login">
    <div class="row">
        <div class="col-lg-5">
      	  <form action="index.php?r=liuyan/updatea" method="post">
      	  <input type="hidden" name="id" value="<?php echo $data['id']?>">
      	  留言人：<input type="text" name="lname" value="<?= $data['lname']?>"><br>
        		内容 ：<textarea name="content" cols="50" rows="6" id="content"><?=$data['content']?></textarea><br>
        		
				<input type="submit" value="添加">
      	  </form>			
        </div>
    </div>
</div>






