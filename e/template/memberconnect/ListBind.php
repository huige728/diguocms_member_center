<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='登录绑定';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../">首页</a></li>
		  <li><a href="../member/cp/">会员中心</a></li>
		  <li class="active">登录绑定</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>

<div class="wrapper">
<?=$url?>
	<div class="form_main">
		<h2 class="title"><?=$public_diyr['pagetitle']?></h2>	
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>平台</th>
					<th>绑定时间</th>
					<th>上次登录</th>
					<th>登录次数</th>
					<th>操作</th>						
				</tr>
			</thead>
			<tbody>
<?php
while($r=$empire->fetch($sql))
{
  $bindr=$empire->fetch1("select id,bindtime,loginnum,lasttime from {$dbtbpre}enewsmember_connect where userid='$user[userid]' and apptype='$r[apptype]' limit 1");
  if($bindr['id'])
  {
	  $dourl='<a href="doaction.php?enews=DelBind&id='.$bindr['id'].'" onclick="return confirm(\'确认要解除绑定?\');">解除绑定</a>';
  }
  else
  {
	  $dourl='<a href="index.php?apptype='.$r['apptype'].'&ecms=1">立即绑定</a>';
  }
?>			
			
				<tr>
					<td><?=$r['appname']?></td>
					<td><?=$bindr['bindtime']?date('Y-m-d H:i:s',$bindr['bindtime']):'未绑定'?></td>
					<td><?=$bindr['lasttime']?date('Y-m-d H:i:s',$bindr['lasttime']):'--'?></td>
					<td><?=$bindr['loginnum']?></td>
					<td><?=$dourl?></td>
				</tr>
<?php
}
?>			
			</tbody>	
		</table>
	
	</div>

</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>