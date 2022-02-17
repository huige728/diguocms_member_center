<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='点卡充值记录';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../">首页</a></li>
		  <li><a href="../cp/">会员中心</a></li>
		  <li class="active">点卡充值记录</li>
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
					<th>类型</th>
					<th>充值卡号</th>
					<th>充值金额</th>
					<th>购买点数</th>
					<th>有效期</th>
					<th>购买时间</th>					
				</tr>
			</thead>
			<tbody>
<?php
while($r=$empire->fetch($sql))
{
	//类型
	if($r['type']==0)
	{
		$type='点卡充值';
	}
	elseif($r['type']==1)
	{
		$type='在线充值';
	}
	elseif($r['type']==2)
	{
		$type='充值点数';
	}
	elseif($r['type']==3)
	{
		$type='充值金额';
	}
	else
	{
		$type='';
	}
?>			
			
				<tr>
					<td><?=$type?></td>
					<td><?=$r[card_no]?></td>
					<td><?=$r[money]?></td>
					<td><?=$r[cardfen]?></td>
					<td><?=$r[userdate]?></td>
					<td><?=$r[buytime]?></td>					
				</tr>
<?php
}
?>
				<tr>
					<td colspan="6"><?=$returnpage?></td>
				</tr>				
			</tbody>	
		</table>	
			
	</div>

</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>