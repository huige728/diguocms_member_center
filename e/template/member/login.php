<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='会员登录';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../">首页</a></li>
		  <li><a href="../cp/">会员中心</a></li>
		  <li class="active">会员登录</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="wrapper">

<?=$url?>

	<div class="form_main">
		<h2 class="title">会员登录<?=$tobind?' (绑定账号)':''?>  <small>还没有账号  <a href="<?=$public_r['newsurl']?>e/member/register/" target="_blank">立即注册</a></small></h2>
		<form class="form-horizontal" method="post" action="../doaction.php" name="form1">
			<input type="hidden" name="ecmsfrom" value="<?=ehtmlspecialchars($_GET['from'])?>">
			<input type="hidden" name="enews" value="login">
			<input name="tobind" type="hidden" id="tobind" value="<?=$tobind?>">			
			<div class="form-group">
				<label for="username" class="col-sm-4 control-label">用户名</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="username" name="username" />
					<?php
						if($public_r['regacttype']==1){
					?>
						&nbsp;&nbsp;<a href="../register/regsend.php" target="_blank">帐号未激活？</a>
					<?php
						}
					?>					
				</div>
			</div>

			<div class="form-group">
				<label for="password" class="col-sm-4 control-label">密码</label>
				<div class="col-sm-4">
					<input type="password" class="form-control" id="password" name="password" autocomplete />
				</div>
			</div>

			<div class="form-group">
				<label for="time" class="col-sm-4 control-label">保持时间</label>	
				<div class="col-sm-4">
					<label class="radio-inline">
						<input type="radio" name="lifetime" id="time" value="0" checked> 不保存
					</label>
					<label class="radio-inline">
						<input type="radio" name="lifetime" id="time2" value="3600"> 1小时
					</label>
					<label class="radio-inline">
						<input type="radio" name="lifetime" id="time3" value="86400"> 1天
					</label>
					<label class="radio-inline">
						<input type="radio" name="lifetime" id="time4" value="2592000"> 1个月
					</label>
					<label class="radio-inline">
						<input type="radio" name="lifetime" id="time5" value="315360000"> 永久
					</label>		
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
					<a id="loginshowkey" href="#" onclick="edoshowkey('loginshowkey','login','<?=$public_r['newsurl']?>');" title="点击显示验证码">点击显示验证码</a>
				</div>					
			</div>
			<?php
			}	
			?>			
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">
					<input type="submit" name="Submit" value=" 登 录 " class="btn btn-danger btn-block">
				</div>
			</div>
			
			
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">
					<div class="text-center">
						<a href="../GetPassword/" target="_blank">忘记密码?</a>
					</div>
				</div>
			</div>	
		</form>	
	</div>

</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>