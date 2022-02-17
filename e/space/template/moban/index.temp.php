<?php
if(!defined('InEmpireCMS'))
{
	exit();
}

include("header.temp.php");
$registertime=eReturnMemberRegtime($ur['registertime'],"Y-m-d H:i:s");
//oicq
if($addur['oicq'])
{
	$addur['oicq']="<a href='http://wpa.qq.com/msgrd?V=1&amp;Uin=".$addur['oicq']."&amp;Site=".$public_r['sitename']."&amp;Menu=yes' target='_blank'><img src='http://wpa.qq.com/pa?p=1:".$addur['oicq'].":4'  border='0' alt='QQ' />".$addur['oicq']."</a>";
}
//简介
$usersay=$addur['saytext']?$addur['saytext']:'暂无简介';
$usersay=RepFieldtextNbsp(stripSlashes($usersay));
?>

	<div class="container">
		<div class="row">
			<main class="col-md-9">
				<?=$spacegg?>
				<div class="panel panel-danger">
					<div class="panel-heading"><h3 class="panel-title">个人介绍</h3></div>
					<div class="panel-body"><?=nl2br($usersay)?></div>
				</div>
				<div class="panel panel-danger">
					<div class="panel-heading"><h3 class="panel-title">详细信息</h3></div>
					<div class="panel-body">
						<table class="table table-hover table-bordered">
							<tr>
								<td width="30%" align="right">用户名：</td>
								<td width="70%"><?=$username?></td>
							</tr>
							<tr>
								<td align="right">会员等级：</td>
								<td><?=$level_r[$ur['groupid']]['groupname']?></td>
							</tr>
							<tr>
								<td align="right">注册时间：</td>
								<td><?=$registertime?></td>
							</tr>
							<tr>
								<td align="right">联系邮箱：</td>
								<td><a href="mailto:<?=$ur['email']?>"><?=$ur['email']?></a></td>
							</tr>
							<tr>
								<td align="right">姓名：</td>
								<td><?=$addur[truename]?></td>
							</tr>
							<tr>
								<td align="right">联系电话：</td>
								<td><?=$addur[mycall]?></td>
							</tr>
							<tr>
								<td align="right">手机：</td>
								<td><?=$addur[phone]?></td>
							</tr>
							<tr>
								<td align="right">QQ：</td>
								<td><?=$addur[oicq]?></td>
							</tr>
							<tr>
								<td align="right">MSN：</td>
								<td><?=$addur[msn]?></td>
							</tr>
							<tr>
								<td align="right">网站：</td>
								<td><a href="<?=$addur[homepage]?>" target="_blank"><?=$addur[homepage]?></a></td>
							</tr>
							<tr>
								<td align="right">联系地址：</td>
								<td><?=$addur[address]?></td>
							</tr>
							<tr>
								<td align="right">邮编：</td>
								<td><?=$addur[zip]?></td>
							</tr>						
						</table>					
					</div>
				</div>
				
			</main>
<?php
include("side.temp.php");
?>
		</div>
	</div>

<?php
include("footer.temp.php");
?>