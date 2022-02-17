<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='消息列表';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../">首页</a></li>
		  <li><a href="../cp/">会员中心</a></li>
		  <li class="active">消息列表(<a href="AddMsg/?enews=AddMsg">发送消息</a>)</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="wrapper">
<?=$url?>
	<div class="form_main">
		<h2 class="title"><a href="AddMsg/?enews=AddMsg">发送消息</a></h2>
		<form name="listmsg" method="post" action="../doaction.php" onsubmit="return confirm('确认要删除?');">	
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th><input type=checkbox name=chkall value=on onclick=CheckAll(this.form)></th>
						<th><img src="../../data/images/nohaveread.gif" width="14" height="11"></th>
						<th>标题</th>
						<th>发送者</th>
						<th>发送时间</th>
						<th>操作</th>						
					</tr>
				</thead>
				<tbody>
				
<?php
while($r=$empire->fetch($sql))
{
	$img="haveread";
	if(!$r[haveread])
	{$img="nohaveread";}
	//后台管理员
	if($r['isadmin'])
	{
		$from_username="<a title='后台管理员'><b>".$r[from_username]."</b></a>";
	}
	else
	{
		$from_username="<a href='../ShowInfo/?userid=".$r[from_userid]."' target='_blank'>".$r[from_username]."</a>";
	}
	//系统信息
	if($r['issys'])
	{
		$from_username="<b>系统消息</b>";
		$r[title]="<b>".$r[title]."</b>";
	}
?>				
					<tr>
						<td><input name="mid[]" type="checkbox" id="mid[]2" value="<?=$r[mid]?>"></td>
						<td><img src="../../data/images/<?=$img?>.gif" border=0></td>
						<td><a href="ViewMsg/?mid=<?=$r[mid]?>"><?=stripSlashes($r[title])?></a></td>
						<td><?=$from_username?></td>
						<td><?=$r[msgtime]?></td>
						<td>[<a href="../doaction.php?enews=DelMsg&mid=<?=$r[mid]?>" onclick="return confirm('确认要删除?');">删除</a>]</td>
					</tr>
<?php
}
?>
					<tr>
						<td>
							<input type="submit" name="Submit2" value="删除选中" class="btn btn-default">
							<input name="enews" type="hidden" value="DelMsg_all">						
						</td>
						<td colspan="5">说明：
												<img src="../../data/images/nohaveread.gif" width="14" height="11"> 代表未阅读消息，
												<img src="../../data/images/haveread.gif" width="15" height="12"> 代表已阅读消息.
						</td>
					</tr>
					<tr>
						<td colspan="6"><?=$returnpage?></td>
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