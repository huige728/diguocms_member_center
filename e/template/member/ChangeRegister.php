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
		  <li class="active">选择注册会员类型</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="wrapper">

<?=$url?>

	<div class="form_main">
		<h2 class="title">选择注册会员类型<?=$tobind?' (绑定账号)':''?></h2>
		<form class="form-horizontal" method="GET" action="index.php" name="ChRegForm">
			<input name="tobind" type="hidden" id="tobind" value="<?=$tobind?>">
			
			<div class="alert alert-danger" role="alert">			
<?php
while($r=$empire->fetch($sql))
{
	$checked='';
	if($r[groupid]==eReturnMemberDefGroupid())
	{
		$checked=' checked';
	}
?>				
				<div class="radio">
					<label>
						<input type="radio" name="groupid" value="<?=$r[groupid]?>" <?=$checked?>> <?=$r[groupname]?>
					</label>
				</div>
<?php
}
?>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-4">
					<input type="submit" name="button" value="下一步" class="btn btn-danger btn-block">
				</div>
			</div>

		</form>	
	</div>

</div>

<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>