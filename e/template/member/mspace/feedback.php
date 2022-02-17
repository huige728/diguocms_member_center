<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='管理反馈';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../">首页</a></li>
		  <li><a href="../cp/">会员中心</a></li>
		  <li class="active">管理反馈</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>
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

<div class="wrapper">
<?=$url?>
	<div class="form_main">
		<h2 class="title"><?=$public_diyr['pagetitle']?></h2>
		<form name="feedbackform" method="post" action="index.php" onsubmit="return confirm('确认要删除?');">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th><input type='checkbox' name='chkall' value='on' onClick='CheckAll(this.form)'></th>
						<th>标题(点击查看)</th>
						<th>提交时间</th>
						<th>删除</th>						
					</tr>
				</thead>
				<tbody>				
<?php
while($r=$empire->fetch($sql))
{
	$r['uname']=stripSlashes($r['uname']);
	if($r['uid'])
	{
		$r['uname']="<a href='../../space/?userid=$r[uid]' target='_blank'>$r[uname]</a>";
	}
	else
	{
		$r['uname']='游客';
	}
?>				
					<tr>
						<td><input name="fid[]" type="checkbox" value="<?=$r[fid]?>"></td>
						<td>
						<a href="#ecms" onclick="window.open('ShowFeedback.php?fid=<?=$r[fid]?>','','width=650,height=600,scrollbars=yes,top=70,left=100');"><?=stripSlashes($r[title])?></a>&nbsp;(<?=$r['uname']?>)
						</td>
						<td><?=$r[addtime]?></td>
						<td><a href="index.php?enews=DelMemberFeedback&fid=<?=$r[fid]?>" onclick="return confirm('确认要删除?');">删除</a></td>
					</tr>
<?php
}
?>
					<tr>
						<td>
							<input type="submit" name="Submit" value="批量删除" class="btn btn-default">
							<input name="enews" type="hidden" id="enews" value="DelMemberFeedback_All">							
						</td>
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