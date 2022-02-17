<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='修改资料';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../">首页</a></li>
		  <li><a href="../cp/">会员中心</a></li>
		  <li class="active">修改安全信息</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="wrapper">

<?=$url?>

	<div class="form_main">
		<h2 class="title">密码安全修改</h2>
		<form class="form-horizontal" method="post" action="../doaction.php" name="userinfoform" enctype="multipart/form-data">
			<input name="enews" type="hidden" value="EditSafeInfo">

			<div class="form-group">
				<label class="col-sm-4 control-label">用户名</label>
				<div class="col-sm-4">
				  <p class="form-control-static"><?=$user[username]?></p>
				</div>
			</div>			
			
			<div class="form-group">
				<label for="oldpassword" class="col-sm-4 control-label">原密码 <i class="text-danger">(修改密码或邮箱时需要密码验证)</i></label>
				<div class="col-sm-4">
				  <input type="password" class="form-control" id="oldpassword" name="oldpassword">
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-sm-4 control-label">新密码 <i class="text-danger">(不想修改请留空)</i></label>
				<div class="col-sm-4">
				  <input type="password" class="form-control" id="password" name="password">
				</div>
			</div>
			<div class="form-group">
				<label for="repassword" class="col-sm-4 control-label">确认新密码 <i class="text-danger">(不想修改请留空)</i></label>
				<div class="col-sm-4">
				  <input type="password" class="form-control" id="repassword" name="repassword">
				</div>
			</div>			
			<div class="form-group">
				<label for="email" class="col-sm-4 control-label">邮箱 </label>
				<div class="col-sm-4">
				  <input type="email" class="form-control" id="email" name="email" value="<?=$user[email]?>">
				</div>
			</div>	
			
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">
					<input type="submit" name="Submit" value="修改信息" class="btn btn-danger btn-block">
				</div>			
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">
					<div class="text-center">
						<a href="../EditInfo/" target="_blank">修改基本资料?</a>
					</div>
				</div>
			</div>

		</form>	
	</div>

</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>