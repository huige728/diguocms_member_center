<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$qappname=$appr['qappname'];

$public_diyr['pagetitle']='绑定登录';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../">首页</a></li>
		  <li class="active">绑定登录</li>
		</ol>
';
$regurl=$public_r['newsurl'].'e/member/register/?tobind=1';
$loginurl=$public_r['newsurl'].'e/member/login/?tobind=1';
require(ECMS_PATH.'e/template/incfile/header.php');
?>


<div class="wrapper">
<?=$url?>
	<div class="form_main">
		<h2 class="title"><?=$public_diyr['pagetitle']?></h2>
		
		<div class="alert alert-danger" role="alert">您好！已通过<?=$qappname?>成功登录！</div>
		
		<div class="row m-t-20">
			<div class="col-md-6">
				<form name="bindform" method="post" action="doaction.php">
				<div class="widget-box text-center">
					<div class="m-b-20">
						<h2 class="font-bold no-margins">
							1、如果您已有账号，可以点击下面登录绑定
						</h2>
					</div>
					<input type="button" name="Submit" value="马上登录绑定" onclick="window.open('<?=$loginurl?>');" class="btn btn-primary">
					<input name="enews" type="hidden" id="enews" value="BindUser">				
					<p>提示：捆绑成功后，下次<?=$qappname?>方式登录即可直接登录到捆绑后的账号。</p>
				</div>				
				</form>
			</div>	
			<div class="col-md-6">
				<form name="bindregform" method="post" action="doaction.php">
				<div class="widget-box text-center">
					<div class="m-b-20">
						<h2 class="font-bold no-margins">
							2、如果还没有账号，您可以快速注册
						</h2>
					</div>
					<input type="button" name="Submit2" value="马上注册绑定" onclick="window.open('<?=$regurl?>');" class="btn btn-primary">
					<input name="enews" type="hidden" id="enews" value="BindReg">			
					<p>提示：捆绑成功后，下次<?=$qappname?>方式登录即可直接登录到捆绑后的账号。</p>
				</div>				
				</form>				
			</div>
		</div>
	
	</div>

</div>

<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>