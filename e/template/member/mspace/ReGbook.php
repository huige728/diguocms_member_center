<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>回复留言</title>
<link href="<?=$public_r['newsurl']?>skin/member_1/css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
<!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
<!--[if lt IE 9]>
  <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
<![endif]-->
</head>
<body>



<div class="container">

	<div class="panel panel-danger">
		<div class="panel-heading">
			<h3 class="panel-title">回复/修改留言</h3>
		</div>
		<div class="panel-body">
			<form name="regbook" method="post" action="index.php" class="form-horizontal">
				<input name="enews" type="hidden" id="enews" value="ReMemberGbook">
				<input name="gid" type="hidden" id="gid" value="<?=$gid?>">
				
				<div class="form-group">
					<label class="col-sm-4 control-label">留言发表者:</label>
					<div class="col-sm-4">
					  <p class="form-control-static"><?=stripSlashes($r['uname'])?></p>
					</div>
				</div>				
				<div class="form-group">
					<label class="col-sm-4 control-label">留言内容:</label>
					<div class="col-sm-4">
					  <p class="form-control-static"><?=nl2br(stripSlashes($r[gbtext]))?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label">发布时间:</label>
					<div class="col-sm-4">
					  <p class="form-control-static"><?=$r[addtime]?>&nbsp;(IP:<?=$r[ip]?>)</p>
					</div>
				</div>
				<div class="form-group">
					<label for="retext" class="col-sm-4 control-label">回复内容:</label>
					<div class="col-sm-4">
					   <textarea name="retext" cols="60" rows="9" id="retext" class="form-control"><?=stripSlashes($r[retext])?></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-4 col-sm-4">
						<input type="submit" name="Submit" value="提交" class="btn btn-danger">
						<input type="reset" name="Submit2" value="重置" class="btn btn-default">
					</div>			
				</div>
			</form>
		</div>
	</div>
	<p class="text-center">[ <a href="javascript:window.close();">关 闭</a> ]</p>
</div>

<script src="<?=$public_r['newsurl']?>skin/member_1/js/jquery.min.js"></script>
<script src="<?=$public_r['newsurl']?>skin/member_1/js/bootstrap.min.js"></script>	
</body>
</html>