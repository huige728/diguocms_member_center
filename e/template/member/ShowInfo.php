<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
//oicq
if($addr['oicq'])
{
	$addr['oicq']="<a href='http://wpa.qq.com/msgrd?V=1&amp;Uin=".$addr['oicq']."&amp;Site=".$public_r['sitename']."&amp;Menu=yes' target='_blank'><img src='http://wpa.qq.com/pa?p=1:".$addr['oicq'].":4'  border='0' alt='QQ' />".$addr['oicq']."</a>";
}
//表单
$record="<!--record-->";
$field="<!--field--->";
$er=explode($record,$formr['viewenter']);
$count=count($er);
$memberinfo='';
for($i=0;$i<$count-1;$i++)
{
	$er1=explode($field,$er[$i]);
	if(strstr($formr['filef'],",".$er1[1].","))//附件
	{
		if($addr[$er1[1]])
		{
			$val="<a href='".$addr[$er1[1]]."' target='_blank'>".$addr[$er1[1]]."</a>";
		}
		else
		{
			$val="";
		}
	}
	elseif(strstr($formr['imgf'],",".$er1[1].","))//图片
	{
		if($addr[$er1[1]])
		{
			$val="<img src='".$addr[$er1[1]]."' border=0>";
		}
		else
		{
			$val="";
		}
	}
	elseif(strstr($formr['tobrf'],",".$er1[1].","))//多行文本框
	{
		$val=nl2br($addr[$er1[1]]);
	}
	else
	{
		$val=$addr[$er1[1]];
	}
	$memberinfo.="<tr><td align=right>".$er1[0].":</td><td>".$val."</td></tr>";
}

$public_diyr['pagetitle']='查看 '.$username.' 的会员资料';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../">首页</a></li>
		  <li><a href="../cp/">会员中心</a></li>
		  <li class="active">查看会员资料</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="wrapper">

<?=$url?>

	<div class="form_main">
		<h2 class="title">查看 <?=$username?> 的会员资料</h2>
		<table class="table table-hover table-bordered">
			<tr>
				<td align="right">用户名：</td>
				<td><?=$username?></td>
			</tr>
			<tr>
				<td width="30%" align="right">操作：</td>
				<td width="70%">
					[ <a href="../msg/AddMsg/?username=<?=$username?>" target="_blank">发短消息</a> ] 
					[ <a href="../friend/add/?fname=<?=$username?>" target="_blank">加为好友</a> ] 
					[ <a href="../../space/?userid=<?=$r[userid]?>" target="_blank">会员空间</a> ] 					
				</td>
			</tr>			
			<tr>
				<td align="right">会员等级：</td>
				<td><?=$level_r[$r[groupid]]['groupname']?></td>
			</tr>
			<tr>
				<td align="right">注册时间：</td>
				<td><?=$registertime?></td>
			</tr>
			<tr>
				<td align="right">邮箱：</td>
				<td><?=$email?></td>
			</tr>
			<?=$memberinfo?>			
		</table>
	</div>

</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>