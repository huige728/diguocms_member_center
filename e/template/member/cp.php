<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='会员中心';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../">首页</a></li>
		  <li><a href="../cp/">会员中心</a></li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="wrapper">

<?=$url?>

	<div class="form_main">
		<h2 class="title">会员中心</h2>
		<div class="row">
			<div class="col-md-3">
				<div class="text-center bg-navy">
					<div class="text-data font-bold"><?=$level_r[$r[groupid]][groupname]?></div>
					<div class="p-b-10">当前用户组</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="text-center bg-red">
					<div class="text-data font-bold"><?=$r[money]?></div>
					<div class="p-b-10">帐户余额（元）</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="text-center bg-lazur">
					<div class="text-data font-bold"><?=$r[userfen]?></div>
					<div class="p-b-10">剩余点数（点）</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="text-center bg-yellow">
					<div class="text-data font-bold"><?=$userdate?></div>
					<div class="p-b-10">剩余有效期（天）</div>
				</div>
			</div>
		</div>
		<div class="row m-t-20">
			<div class="col-md-6">
				<div class="widget-box text-center">
					<div class="m-b-20">
						<h2 class="font-bold no-margins">
							<?=$user[username]?>
						</h2>
						<small><a href="../../space/?userid=<?=$user[userid]?>" target="_blank">我的会员空间</a></small>
					</div>
					<img src="<?=$userpic?>" class="circle-border m-b-20">					
					<p>注册时间: <?=$registertime?></p>
				</div>
			</div>	
			<div class="col-md-6">
				<div class="list-group widget-link text-center">
					<a class="list-group-item" href="../EditInfo/">修改资料</a>
					<a class="list-group-item" href="../msg/">站内消息</a>
					<a class="list-group-item" href="../mspace/SetSpace.php">空间设置</a>
					<a class="list-group-item" href="../../DoInfo/">管理信息</a>
					<a class="list-group-item" href="../fava/">管理收藏夹</a>
					<a class="list-group-item" href="../friend/">我的好友</a>					
				</div>
				<div class="alert alert-danger" role="alert">新消息:<?=$havemsg?></div>
			</div>
		</div>
	</div>

</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>