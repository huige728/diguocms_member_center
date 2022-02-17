<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
//位置
$url="$spacename &gt; 留言";
include("header.temp.php");
$viewuid=(int)getcvar('mluserid');
$adminmenu='';
if($viewuid==$userid)
{
	$adminmenu="<a href='../member/mspace/gbook.php' target='_blank'>管理留言</a>";
}
?>

	<div class="container">
		<div class="row">
			<main class="col-md-9">
				<?=$spacegg?>
				<div class="panel panel-danger">
					<div class="panel-heading clearfix">
						<h3 class="pull-left panel-title">留言板</h3>
						<div class="pull-right"><?=$adminmenu?></div>
					</div>					
				
					<div class="panel-body">
<?php
while($r=$empire->fetch($sql))
{
	$r['uname']=stripSlashes($r['uname']);
	if($r['uid'])
	{
		$r['uname']="<b><a href='../space/?userid=$r[uid]' target='_blank'>$r[uname]</a></b>";
	}
	//管理菜单
	$adminlink='';
	$ip='';
	if($adminmenu)
	{
		$ip=' IP: '.$r[ip];
		$adminlink="[<a href='#ecms' onclick=\"window.open('../member/mspace/ReGbook.php?gid=$r[gid]','','width=600,height=380,scrollbars=yes');\">回复</a>]&nbsp;&nbsp;[<a href='../member/mspace/?enews=DelMemberGbook&gid=$r[gid]' onclick=\"return confirm('确认要删除?');\">删除</a>]";
	}
	$gbuname=$r[uname]." 留言于".$r[addtime].$ip;
	//私密
	if($r['isprivate'])
	{
		if($adminmenu||($r[uid]&&$viewuid==$r[uid]))
		{
			$r['gbtext']="<font color='blue'>[悄悄话] ".$r['gbtext']."</font>";
		}
		else
		{
			$r['gbtext']='[悄悄话隐藏]';
		}
	}
?>					
						<div class="panel panel-default">
							<div class="panel-heading clearfix">
								<div class="pull-left"><?=$gbuname?></div>
								<div class="pull-right"><?=$adminlink?></div>
							</div>
							<div class="panel-body">
								<p><?=nl2br(stripSlashes($r['gbtext']))?></p>
							</div>
							
							<?
							if($r['retext']){
							?>
								<div class="reply"><?=nl2br(stripSlashes($r['retext']))?></div>
							<?
							}
							?>
							
						</div>					
<?php
}
?>	
<?=$returnpage?>				
					</div>
				</div>
				<div class="panel panel-danger">
					<div class="panel-heading"><h3 class="panel-title">添加留言</h3></div>
					<div class="panel-body">
				
						<form name="addgbook" method="post" action="../member/mspace/index.php" class="form-horizontal">

							<input type="hidden" name="userid" value="<?=$userid?>">
							<input type="hidden" name="enews" value="AddMemberGbook">
							
							<div class="form-group">
								<label for="uname" class="col-sm-2 control-label">昵称：</label>
								<div class="col-sm-4">
									<input name="uname" type="text" id="uname" value="<?=RepPostStr(getcvar('mlusername'),1)?>" class="form-control">
								</div>
								<div class="col-sm-3">
									<label id="isprivate"><input name="isprivate" type="checkbox" id="isprivate" value="1"> 私密</label>
								</div>								
							</div>
							<div class="form-group">
								<label for="gbtext" class="col-sm-2 control-label">内容：</label>
								<div class="col-sm-6">
									<textarea name="gbtext" cols="60" rows="5" id="gbtext" class="form-control"></textarea>
								</div>					
							</div>
							<div class="form-group">
								<label for="key" class="col-sm-2 control-label">验证码：</label>			
								<div class="col-sm-4">
									<input type="text" class="form-control" id="key" name="key">
								</div>
								<div class="col-sm-2">  
									<a id="spacegbshowkey" href="#" onclick="edoshowkey('spacegbshowkey','spacegb','<?=$public_r['newsurl']?>');" title="点击显示验证码">点击显示验证码</a>
								</div>					
							</div>
				
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-4">
									<input type="submit" name="Submit" value="发表留言" class="btn btn-danger">
								</div>			
							</div>

						</form>	
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
