<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='点卡充值';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../">首页</a></li>
		  <li><a href="../cp/">会员中心</a></li>
		  <li class="active">点卡充值</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<script>
function GetFen1()
{
var ok;
ok=confirm("确认要充值?");
if(ok)
{
document.GetFen.Submit.disabled=true
return true;
}
else
{return false;}
}
</script>


<div class="wrapper">

<?=$url?>

	<div class="form_main">
		<h2 class="title"><?=$public_diyr['pagetitle']?></h2>
		<form name="GetFen" method="post" action="../doaction.php" onsubmit="return GetFen1();" class="form-horizontal">	
			<input type="hidden" name="enews" value="CardGetFen">
			<div class="form-group">
				<label for="username" class="col-sm-4 control-label">冲值的用户名： <i class="text-danger">*</i></label>
				<div class="col-sm-4">
				  <input name="username" type="text" id="username" value="<?=$user[username]?>"  class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="reusername" class="col-sm-4 control-label">重复用户名： <i class="text-danger">*</i></label>
				<div class="col-sm-4">
				  <input name="reusername" type="text" id="reusername" value="<?=$user[username]?>" class="form-control">
				</div>
			</div>			
			<div class="form-group">
				<label for="card_no" class="col-sm-4 control-label">冲值卡号： <i class="text-danger">*</i></label>
				<div class="col-sm-4">
				  <input name="card_no" type="text" id="card_no" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-sm-4 control-label">冲值卡密码： <i class="text-danger">*</i></label>
				<div class="col-sm-4">
				  <input name="password" type="password" id="password" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">
					<input type="submit" name="Submit" value="开始冲值" class="btn btn-danger">
					<input type="reset" name="Submit2" value="重置" class="btn btn-default">
				</div>
			</div>
		</form>	
	</div>

</div>

<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>