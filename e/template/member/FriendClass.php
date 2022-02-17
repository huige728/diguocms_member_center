<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='好友分类';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../../">首页</a></li>
		  <li><a href="../../cp/">会员中心</a></li>
		  <li><a href="../../friend/">好友列表</a></li>
		  <li class="active">管理分类</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<script>
function DelFriendClass(cid)
{
var ok;
ok=confirm("确认要删除?");
if(ok)
{
self.location.href='../../doaction.php?enews=DelFriendClass&doing=1&cid='+cid;
}
}
</script>


<div class="wrapper">

<?=$url?>

	<div class="form_main">
		<h2 class="title">管理分类</h2>
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h3 class="panel-title">增加好友分类</h3>
				</div>
				<div class="panel-body">
					<form class="form-inline" name="form1" method="post" action="../../doaction.php">
						<div class="form-group">
							<label for="cname">分类名称</label>
							<input type="text" class="form-control" id="cname" name="cname"> 						
						</div>
						<input type="submit" name="Submit" value="增加" class="btn btn-default">
						<input name="enews" type="hidden" id="enews" value="AddFriendClass">
						<input name="doing" type="hidden" id="doing" value="1">	
					</form>
				</div>
			</div>		
		
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>ID</th>
						<th>分类名称</th>
						<th>操作</th>						
					</tr>
				</thead>
				<tbody>	
<?php
while($r=$empire->fetch($sql)){
?>	
<form name="form" method="post" action="../../doaction.php">		
					<tr>
						<td><?=$r[cid]?></td>
						<td>
						  <input name="doing" type="hidden" id="doing" value="1">
						  <input name="enews" type="hidden" id="enews" value="EditFriendClass">
						  <input name="cid" type="hidden" value="<?=$r[cid]?>">
						  <input name="cname" type="text" id="cname" value="<?=stripSlashes($r[cname])?>" class="form-control">						
						</td>
						<td>
							<input type="submit" name="Submit2" value="修改" class="btn btn-danger">
							<input type="button" name="Submit3" value="删除" onclick="javascript:DelFriendClass(<?=$r[cid]?>);" class="btn btn-default">
						</td>
					</tr>
</form>					
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