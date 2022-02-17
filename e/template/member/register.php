<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='注册会员';

$url='
		<ol class="breadcrumb">
		  <li><a href="../../../">首页</a></li>
		  <li><a href="../cp/">会员中心</a></li>
		  <li class="active">注册会员</li>
		</ol>
';

require(ECMS_PATH.'e/template/incfile/header.php');
?>

<div class="wrapper">
<?=$url?>
	<div class="form_main">
		<h2 class="title">注册会员<?=$tobind?' (绑定账号)':''?> <small>说明：带<i class="text-danger">*</i>项为必填</small></h2>
		<form class="form-horizontal" method="post" action="../doaction.php" name="userinfoform" enctype="multipart/form-data">
			<input name="enews" type="hidden" value="register">
			<input name="groupid" type="hidden" id="groupid" value="<?=$groupid?>">
			<input name="tobind" type="hidden" id="tobind" value="<?=$tobind?>">
			
			<div class="form-group">
				<label for="username" class="col-sm-4 control-label">用户名 <i class="text-danger">*</i></label>
				<div class="col-sm-4">
				  <input type="text" class="form-control" id="username" name="username">
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-sm-4 control-label">密码 <i class="text-danger">*</i></label>
				<div class="col-sm-4">
				  <input type="password" class="form-control" id="password" name="password">
				</div>
			</div>
			<div class="form-group">
				<label for="repassword" class="col-sm-4 control-label">重复密码 <i class="text-danger">*</i></label>
				<div class="col-sm-4">
				  <input type="password" class="form-control" id="repassword" name="repassword">
				</div>
			</div>	
			<div class="form-group">
				<label for="email" class="col-sm-4 control-label">邮箱 <i class="text-danger">*</i></label>
				<div class="col-sm-4">
				  <input type="email" class="form-control" id="email" name="email">
				</div>
			</div>	
<?php
@include($formfile);
?>
			<?php
			if($public_r['regkey_ok']){
			?>			
			<div class="form-group">
				<label for="key" class="col-sm-4 control-label">验证码</label>			
				<div class="col-sm-2">
					<input type="text" class="form-control" id="key" name="key" />
				</div>
				<div class="col-sm-2">  
					<a id="regshowkey" href="#" onclick="edoshowkey('regshowkey','reg','<?=$public_r['newsurl']?>');" title="点击显示验证码">点击显示验证码</a>
				</div>					
			</div>
			<?php
			}	
			?>				
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">					
					<input type="submit" name="Submit" value="马上注册" class="btn btn-danger"> 
					<input type="button" name="Submit2" value="返回" onclick="history.go(-1)" class="btn btn-default">					
				</div>			
			</div>

		</form>	
	</div>

</div>

<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>