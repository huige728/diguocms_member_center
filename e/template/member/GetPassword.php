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
		<h2 class="title">取回密码</h2>
		<form class="form-horizontal" method="post" action="../doaction.php" name="GetPassForm">
			
			<div class="form-group">
				<label for="username" class="col-sm-4 control-label">用户名</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="username" name="username">				
				</div>
			</div>

			<div class="form-group">
				<label for="email" class="col-sm-4 control-label">邮箱 </label>
				<div class="col-sm-4">
				  <input type="email" class="form-control" id="email" name="email">
				</div>
			</div>
		
			<?php
			if($public_r['loginkey_ok']){
			?>			
			<div class="form-group">
				<label for="key" class="col-sm-4 control-label">验证码</label>			
				<div class="col-sm-2">
					<input type="text" class="form-control" id="key" name="key" />
				</div>
				<div class="col-sm-2">  
					<a id="getpasswordshowkey" href="#" onclick="edoshowkey('getpasswordshowkey','getpassword','<?=$public_r['newsurl']?>');" title="点击显示验证码">点击显示验证码</a>
				</div>					
			</div>
			<?php
			}	
			?>			
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">
					<input type="submit" name="button" value="提交" class="btn btn-danger btn-block">
					<input name="enews" type="hidden" id="enews" value="SendPassword">
				</div>
			</div>	
		</form>	
	</div>

</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>