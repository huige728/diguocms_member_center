<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php

//配置查询自定义字段列表,逗号开头，多个用逗号格开，格式“ui.字段名”
$useraddf=',ui.userpic';

//分页SQL
$query='select '.eReturnSelectMemberF('userid,username,email,registertime,groupid','u.').$useraddf.' from '.eReturnMemberTable().' u'.$add." order by u.".egetmf('userid')." desc limit $offset,$line";
$sql=$empire->query($query);

//导航
$public_diyr['pagetitle']='会员列表';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../">首页</a></li>
		  <li class="active">会员列表</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>

<div class="wrapper">

<?=$url?>

	<div class="form_main">
		<h2 class="title">会员列表</h2>
		<form name="memberform" method="get" action="index.php">
		    <input type="hidden" name="sear" value="1">
			<input type="hidden" name="groupid" value="<?=$groupid?>">
			
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>ID</th>
						<th>用户名</th>
						<th>注册时间</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
				
<?php
while($r=$empire->fetch($sql))
{
	//注册时间
	$registertime=eReturnMemberRegtime($r['registertime'],"Y-m-d H:i:s");
	//用户组
	$groupname=$level_r[$r['groupid']]['groupname'];
	//用户头像
	$userpic=$r['userpic']?$r['userpic']:$public_r[newsurl].'e/data/images/nouserpic.gif';
?>				
					<tr>
						<td><?=$r['userid']?></td>
						<td><?=$r['username']?></td>
						<td><?=$registertime?></td>
						<td>
							[<a href="<?=$public_r[newsurl]?>e/member/ShowInfo/?userid=<?=$r['userid']?>" target="_blank">会员资料</a>] 
							[<a href="<?=$public_r[newsurl]?>e/space/?userid=<?=$r['userid']?>" target="_blank">会员空间</a>]
						</td>
					</tr>
<?
}
?>
					<tr>
						<td colspan="4"><?=$returnpage?></td>
					</tr>
					<tr>
						<td colspan="4">
							<div class="input-group">
								<input type="text" class="form-control" name="keyboard[]" id="keyboard">
								<span class="input-group-btn">
									<input type="submit" name="Submit" value="搜索" class="btn btn-default">
								</span>
							</div>						
						</td>
					</tr>				
				</tbody>	
			</table>	
		</form>			
	</div>

</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>