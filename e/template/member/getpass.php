<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='取回密码';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../">首页</a></li>
		  <li><a href="../cp/">会员中心</a></li>
		  <li class="active">取回密码</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="wrapper">

<?=$url?>

	<div class="form_main">
		<h2 class="title">重设密码</h2>
		<form class="form-horizontal" method="post" action="../doaction.php" name="GetPassForm">
			
			<div class="form-group">
				<label class="col-sm-4 control-label">用户名</label>
				<div class="col-sm-4">
				  <p class="form-control-static"><?=$user[username]?></p>
				</div>
			</div>
			<div class="form-group">
				<label for="newpassword" class="col-sm-4 control-label">新密码</label>
				<div class="col-sm-4">
				  <input type="password" class="form-control" id="newpassword" name="newpassword">
				</div>
			</div>
			<div class="form-group">
				<label for="renewpassword" class="col-sm-4 control-label">重复新密码</label>
				<div class="col-sm-4">
				  <input type="password" class="form-control" id="renewpassword" name="renewpassword">
				</div>
			</div>		
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">
					<input type="submit" name="button" value="修改" class="btn btn-danger btn-block"> 
					<input name="enews" type="hidden" id="enews" value="DoGetPassword">
					<input name="id" type="hidden" id="id" value="<?=$r[id]?>">
					<input name="tt" type="hidden" id="tt" value="<?=$r[tt]?>">
					<input name="cc" type="hidden" id="cc" value="<?=$r[cc]?>">
				</div>
			</div>	
		</form>	
	</div>

</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>