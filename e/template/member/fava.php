<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='收藏夹';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../">首页</a></li>
		  <li><a href="../cp/">会员中心</a></li>
		  <li class="active">收藏夹</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>

<div class="wrapper">

<?=$url?>

	<div class="form_main">
		<h2 class="title">收藏夹</h2>
		
		<div class="row m-b-20">
			<div class="col-md-2">
				<form method="post" action="" name="form1">
					<select id="select" name="cid" class="form-control" onchange=window.location='../fava/?cid='+this.options[this.selectedIndex].value>
						<option value="0">显示全部</option>
						<?=$select?>
					</select>					
				</form>	
			</div>
			<div class="col-md-2">
				<div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
					<a href="FavaClass/" class="btn btn-default" role="button">管理分类</a>
				</div>
			</div>
		</div>	
		<form name="favaform" method="post" action="../doaction.php" onsubmit="return confirm('确认要删除?');">	
			<input type="hidden" value="DelFava_All" name="enews">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th></th>
						<th>标题</th>
						<th>点击</th>
						<th>收藏时间</th>
						<th>选择</th>
					</tr>
				</thead>
				<tbody>	
<?php
while($fr=$empire->fetch($sql))
{
	if(empty($class_r[$fr[classid]][tbname]))
	{continue;}
	$r=$empire->fetch1("select title,isurl,titleurl,onclick,classid,id from {$dbtbpre}ecms_".$class_r[$fr[classid]][tbname]." where id='$fr[id]' limit 1");
	//标题链接
	$titlelink=sys_ReturnBqTitleLink($r);
	if(!$r['id'])
	{
		$r['title']="此信息已删除";
		$titlelink="#EmpireCMS";
	}
?>				
					<tr>
						<td><img src="../../data/images/dir.gif" border=0></td>
						<td><a href="<?=$titlelink?>" target="_blank"><?=stripSlashes($r[title])?></a></td>
						<td><?=$r[onclick]?></td>
						<td><?=$fr[favatime]?></td>
						<td><input name="favaid[]" type="checkbox" id="favaid[]2" value="<?=$fr[favaid]?>"></td>
					</tr>
<?php
}
?>
					<tr>
						<td colspan="5">
							<div class="col-sm-3">
								<select name="cid" class="form-control">
									<option value="0">请选择要转移的目标分类</option>
									<?=$select?>
								</select>
							</div>
							<input type="submit" name="Submit" value="转移选中" onclick="document.favaform.enews.value='MoveFava_All'" class="btn btn-default">
							<input type="submit" name="Submit" value="删除选中" onclick="document.favaform.enews.value='DelFava_All'" class="btn btn-default">
						</td>
					</tr>
					<tr>
						<td colspan="5"><?=$returnpage?></td>
					</tr>				
				</tbody>	
			</table>
		</form>
	</div>

</div>

<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>