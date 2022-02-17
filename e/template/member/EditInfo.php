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
		  <li class="active">修改资料</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>


<div class="wrapper">

<?=$url?>

	<div class="form_main">
		<h2 class="title">修改基本资料</h2>
		<form class="form-horizontal" method="post" action="../doaction.php" name="userinfoform" enctype="multipart/form-data">
			
			<input type="hidden" name="enews" value="EditInfo">
			
			<div class="form-group">
				<label class="col-sm-4 control-label">用户名</label>
				<div class="col-sm-4">
				  <p class="form-control-static"><?=$user[username]?></p>
				</div>
			</div>
<?php
@include($formfile);
?>			
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">
					<input type="submit" name="Submit" value="修改信息" class="btn btn-danger btn-block">
				</div>			
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">
					<div class="text-center">
						<a href="EditSafeInfo.php" target="_blank">密码安全修改?</a>
					</div>
				</div>
			</div>
		</form>	
	</div>

</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>