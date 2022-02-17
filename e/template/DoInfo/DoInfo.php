<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='管理信息';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../">首页</a></li>
		  <li><a href="../member/cp/">会员中心</a></li>
		  <li class="active">管理信息</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?> 
<div class="wrapper">

<?=$url?>

	<div class="form_main">
		<h2 class="title">管理信息</h2>
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h3 class="panel-title">欢迎来到信息管理中心</h3>
				</div>
				<div class="panel-body">
					选择左边您要增加或管理的信息。
				</div>
			</div>
	</div>

</div>

<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>