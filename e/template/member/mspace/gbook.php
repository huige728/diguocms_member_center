<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='管理留言';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../">首页</a></li>
		  <li><a href="../cp/">会员中心</a></li>
		  <li class="active">管理留言</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>

<div class="wrapper">
<?=$url?>
	<div class="form_main">
		<h2 class="title"><?=$public_diyr['pagetitle']?></h2>
		<form name="gbookform" method="post" action="index.php" onsubmit="return confirm('确认要删除?');">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th><input type='checkbox' name='chkall' value='on' onClick='CheckAll(this.form)'></th>
						<th>谁？</th>
						<th>内容</th>
						<th>操作</th>						
						<th>已回复</th>
					</tr>
				</thead>
				<tbody>				
<?php
while($r=$empire->fetch($sql))
{
	$private='';
	if($r['isprivate'])
	{
		$private='*悄悄话* / ';
	}
	$r[uname]=stripSlashes($r[uname]);
	$msg='';
	if($r['uid'])
	{
		$msg="<br /><a href='../msg/AddMsg/?username=$r[uname]' target='_blank'>消息回复</a>";
		$r['uname']="<a href='../../space/?userid=$r[uid]' target='_blank'>$r[uname]</a>";
	}
	$gbuname=$private.$r[uname]."<br />  留言于 ".$r[addtime]." <br /> ip: ".$r[ip].":".$r[eipport].$msg;
?>				
					<tr>
						<td><input name="gid[]" type="checkbox" id="gid[]" value="<?=$r[gid]?>"></td>
						<td><?=$gbuname?></td>
						<td><?=nl2br(stripSlashes($r['gbtext']))?></td>
						<td>
							[<a href="#" onclick="window.open('ReGbook.php?gid=<?=$r[gid]?>','','width=600,height=380,scrollbars=yes');">回复</a>]
							[<a href="index.php?enews=DelMemberGbook&gid=<?=$r[gid]?>" onclick="return confirm('确认要删除?');">删除</a>]						
						</td>						
						<?
							if($r['retext']){
						?>						
						<td><?=nl2br(stripSlashes($r['retext']))?></td>
						<?
							}else{
						?>	
							<td></td>	
						<?	
						}
						?>						
					</tr>
<?php
}
?>
					<tr>
						<td>
							<input type='submit' name='submit' value='批量删除' class="btn btn-default">
							<input name="enews" type="hidden" id="enews" value="DelMemberGbook_All">						
						</td>
						<td colspan="4"><?=$returnpage?></td>
					</tr>				
				</tbody>	
			</table>
		</form>	
	</div>

</div>
<script>
function CheckAll(form)
  {
  for (var i=0;i<form.elements.length;i++)
    {
    var e = form.elements[i];
    if (e.name != 'chkall')
       e.checked = form.chkall.checked;
    }
  }
</script>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>