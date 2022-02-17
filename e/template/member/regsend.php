<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='发送帐号激活邮件';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../">首页</a></li>
		  <li><a href="../cp/">会员中心</a></li>
		  <li class="active">重发帐号激活邮件</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>


<div class="wrapper">

<?=$url?>

	<div class="form_main">
		<h2 class="title">重发帐号激活邮件</h2>
		<form class="form-horizontal" method="post" action="../doaction.php" name="RegSendForm">

			
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
				<label for="email" class="col-sm-4 control-label">邮箱 <i class="text-danger">*</i></label>
				<div class="col-sm-4">
				  <input type="email" class="form-control" id="email" name="email">
				</div>
			</div>	
			<div class="form-group">
				<label for="newemail" class="col-sm-4 control-label">新接收邮箱</label>
				<div class="col-sm-4">
				  <input type="email" class="form-control" id="newemail" name="newemail" placeholder="要改变接收邮箱可填写">
				</div>
			</div>
			<?php
			if($public_r['regkey_ok']){
			?>			
			<div class="form-group">
				<label for="key" class="col-sm-4 control-label">验证码</label>			
				<div class="col-sm-2">
					<input type="text" class="form-control" id="key" name="key" />
				</div>
				<div class="col-sm-2">  
					<a id="regsendshowkey" href="#" onclick="edoshowkey('regsendshowkey','regsend','<?=$public_r['newsurl']?>');" title="点击显示验证码">点击显示验证码</a>
				</div>					
			</div>
			<?php
			}	
			?>				
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">
					<input type="submit" name="button" value="提交" class="btn btn-danger"> 
					<input name="enews" type="hidden" id="enews" value="RegSend">
				</div>			
			</div>

		</form>	
	</div>

</div>


<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>