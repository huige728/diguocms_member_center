<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='消费记录';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../">首页</a></li>
		  <li><a href="../cp/">会员中心</a></li>
		  <li class="active">消费记录</li>
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
					<th>标题</th>
					<th>扣除点数</th>
					<th>时间</th>				
				</tr>
			</thead>
			<tbody>
<?php
while($r=$empire->fetch($sql))
{
	if(empty($class_r[$r[classid]][tbname]))
	{continue;}
	$nr=$empire->fetch1("select title,isurl,titleurl,classid from {$dbtbpre}ecms_".$class_r[$r[classid]][tbname]." where id='$r[id]' limit 1");
	//标题链接
	$titlelink=sys_ReturnBqTitleLink($nr);
	if(!$nr['classid'])
	{
		$r['title']="此信息已删除";
		$titlelink="#";
	}
	if($r['online']==0)
	{
		$type='下载';
	}
	elseif($r['online']==1)
	{
		$type='观看';
	}
	elseif($r['online']==2)
	{
		$type='查看';
	}
	elseif($r['online']==3)
	{
		$type='发布';
	}
?>		
			
				<tr>
					<td>[<?=$type?>] &nbsp;<a href='<?=$titlelink?>' target='_blank'><?=$r[title]?></a></td>
					<td><?=$r[cardfen]?></td>
					<td><?=date("Y-m-d H:i:s",$r[truetime])?></td>					
				</tr>
<?php
}
?>
				<tr>
					<td colspan="3"><?=$returnpage?></td>
				</tr>				
			</tbody>	
		</table>	
			
	</div>

</div>

<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>