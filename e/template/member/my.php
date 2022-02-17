<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='帐号状态';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../">首页</a></li>
		  <li><a href="../cp/">会员中心</a></li>
		  <li class="active">帐号状态</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="wrapper">
<?=$url?>
	<div class="form_main">
		<h2 class="title">帐号状态</h2>
		<table class="table table-hover table-bordered">
			<tr>
				<td width="30%" align="right">用户ID：</td>
				<td width="70%"><?=$user[userid]?></td>
			</tr>
			<tr>
				<td align="right">用户名：</td>
				<td><?=$user[username]?>&nbsp;&nbsp;(<a href="../../space/?userid=<?=$user[userid]?>" target="_blank">我的会员空间</a>)</td>
			</tr>
			<tr>
				<td align="right">注册时间：</td>
				<td><?=$registertime?></td>
			</tr>
			<tr>
				<td align="right">会员等级：</td>
				<td><?=$level_r[$r[groupid]][groupname]?></td>
			</tr>
			<tr>
				<td align="right">剩余有效期：</td>
				<td><?=$userdate?> 天</td>
			</tr>
			<tr>
				<td align="right">剩余点数：</td>
				<td><?=$r[userfen]?> 点</td>
			</tr>
			<tr>
				<td align="right">帐户余额：</td>
				<td><?=$r[money]?> 元</td>
			</tr>
			<tr>
				<td align="right">新短消息：</td>
				<td><?=$havemsg?></td>
			</tr>					
		</table>
	</div>

</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>