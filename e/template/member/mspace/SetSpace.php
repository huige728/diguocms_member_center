<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='设置空间';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../">首页</a></li>
		  <li><a href="../cp/">会员中心</a></li>
		  <li class="active">设置空间</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>

<div class="wrapper">
<?=$url?>
	<div class="form_main">
		<h2 class="title"><?=$public_diyr['pagetitle']?></h2>
		<form name="setspace" method="post" action="index.php" class="form-horizontal">	
			<div class="form-group">
				<label for="spacename" class="col-sm-4 control-label">空间名称</label>
				<div class="col-sm-4">
					<input name="spacename" type="text" id="spacename" value="<?=stripSlashes($addr[spacename])?>" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="repassword" class="col-sm-4 control-label">内容</label>
				<div class="col-sm-4">
				  <textarea name="spacegg" cols="60" rows="6" id="spacegg" class="form-control"><?=stripSlashes($addr[spacegg])?></textarea>
				</div>
			</div>					
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">
					  <input type="submit" name="Submit" value="提交" class="btn btn-danger">
					  <input type="reset" name="Submit2" value="重置" class="btn btn-default">
					  <input name="enews" type="hidden" id="enews" value="DoSetSpace">					
				</div>			
			</div>

		</form>	
	</div>

</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>