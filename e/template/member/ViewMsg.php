<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='查看消息';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../../">首页</a></li>
		  <li><a href="../../cp/">会员中心</a></li>
		  <li><a href="../../msg/">消息列表</a></li>
		  <li class="active">查看消息</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="wrapper">
<?=$url?>
	<div class="form_main">
		<h2 class="title"><a href="AddMsg/?enews=AddMsg">查看消息</a></h2>
		<form name="form1" method="post" action="../../doaction.php">
			<table class="table table-hover table-bordered">
				<tr>
					<td width="30%" align="right">标题：</td>
					<td width="70%"><?=stripSlashes($r[title])?></td>
				</tr>
				<tr>
					<td align="right">发送者：</td>
					<td><a href="../../ShowInfo/?userid=<?=$r[from_userid]?>"><?=$r[from_username]?></a></td>
				</tr>
				<tr>
					<td align="right">发送时间：</td>
					<td><?=$r[msgtime]?></td>
				</tr>
				<tr>
					<td align="right">内容：</td>
					<td><?=nl2br(stripSlashes($r[msgtext]))?></td>
				</tr>
				<tr>
					<td align="right">[<a href="#" onclick="javascript:history.go(-1);"><strong>返回</strong></a>] </td>
					<td>[<a href="../AddMsg/?enews=AddMsg&re=1&mid=<?=$mid?>"><strong>回复</strong></a>] </td>
				</tr>
				<tr>
					<td align="right">[<a href="../AddMsg/?enews=AddMsg&mid=<?=$mid?>"><strong>转发</strong></a>] </td>
					<td>[<a href="../../doaction.php?enews=DelMsg&mid=<?=$mid?>" onclick="return confirm('确认要删除?');"><strong>删除</strong></a>]</td>
				</tr>					
			</table>
		</form>	
	</div>

</div>

<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>