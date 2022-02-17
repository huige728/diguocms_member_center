<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='好友列表';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../">首页</a></li>
		  <li><a href="../cp/">会员中心</a></li>
		  <li class="active">好友列表</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="wrapper">

<?=$url?>

	<div class="form_main">
		<h2 class="title">好友列表</h2>
		
		<div class="row m-b-20">
			<div class="col-md-2">
				<form method="post" action="" name="form1">	
					<select id="select" name="cid" class="form-control" onchange=window.location='../friend/?cid='+this.options[this.selectedIndex].value>
						<option value="0">显示全部</option>
						<?=$select?>
					</select> 
				</form>	
			</div>
			<div class="col-md-2">
				<div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
					<a href="FriendClass/" class="btn btn-default" role="button">管理分类</a>
					<a href="add/?fcid=<?=$cid?>" class="btn btn-default" role="button">添加好友</a>
				</div>
			</div>
		</div>	
		<form name="favaform" method="post" action="../doaction.php" onsubmit="return confirm('确认要删除?');">	
			<input type="hidden" value="hy" name="enews">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th></th>
						<th>用户名</th>
						<th>备注</th>
						<th>操作</th>						
					</tr>
				</thead>
				<tbody>	
<?php
	while($r=$empire->fetch($sql)){
?>				
					<tr>
						<td><img src="../../data/images/man.gif" width="16" height="16" border=0></td>
						<td><a href="../ShowInfo/?username=<?=$r[fname]?>" target="_blank"><?=$r[fname]?></a></td>
						<td><input name="fsay[]" type="text" id="fsay[]" value="<?=stripSlashes($r[fsay])?>" class="form-control"></td>
						<td>
					[<a href="add/?enews=EditFriend&fid=<?=$r[fid]?>&fcid=<?=$cid?>">修改</a>] 
					[<a href="../doaction.php?enews=DelFriend&fid=<?=$r[fid]?>&fcid=<?=$cid?>" onclick="return confirm('确认要删除?');">删除</a>]						
						</td>
					</tr>
<?php
}
?>
					<tr>
						<td colspan="4"><?=$returnpage?></td>
					</tr>
				
				</tbody>	
			</table>
		</form>
	</div>

</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>