<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='发送消息';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../../">首页</a></li>
		  <li><a href="../../cp/">会员中心</a></li>
		  <li><a href="../../msg/">消息列表</a></li>
		  <li class="active">发送消息</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>

<div class="wrapper">
<?=$url?>
	<div class="form_main">
		<h2 class="title">发送消息</h2>
		<form action="../../doaction.php" method="post" name="sendmsg" id="sendmsg" class="form-horizontal">
			
			<div class="form-group">
				<label for="title2" class="col-sm-4 control-label">标题 <i class="text-danger">*</i></label>
				<div class="col-sm-4">
				  <input type="text" class="form-control" id="title2" name="title" value="<?=ehtmlspecialchars(stripSlashes($title))?>">
				</div>
			</div>
			<div class="form-group">
				<label for="to_username2" class="col-sm-4 control-label">接收者 <i class="text-danger">*</i></label>
				<div class="col-sm-2">
				  <input type="text" class="form-control" id="to_username2" name="to_username" value="<?=$username?>">
				</div>
				<div class="col-sm-2">
					[<a id="sendmsgfriend" href="#" onclick="window.open('../../friend/change/?fm=sendmsg&f=to_username','','width=250,height=360');">选择好友</a>]
				</div>					
			</div>
			<div class="form-group">
				<label for="textarea" class="col-sm-4 control-label">内容 <i class="text-danger">*</i></label>
				<div class="col-sm-4">
				  <textarea name="msgtext" cols="60" rows="12" id="textarea" class="form-control"><?=ehtmlspecialchars(stripSlashes($msgtext))?></textarea>
				</div>
			</div>					
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">					
					<input type="submit" name="Submit" value="发送" class="btn btn-danger">
					<input type="reset" name="Submit2" value="重置" class="btn btn-default">
					<input name="enews" type="hidden" id="enews" value="AddMsg">
				</div>			
			</div>

		</form>	
	</div>

</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>