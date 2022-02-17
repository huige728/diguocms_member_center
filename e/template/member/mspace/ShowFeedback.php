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
<title>查看信息</title>
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
			<h3 class="panel-title">标题：<?=stripSlashes($r[title])?></h3>
		</div>
		<div class="panel-body">			
				<div class="form-group">
					<label class="col-sm-4 control-label">提交者:</label>
					<div class="col-sm-4">
					  <p class="form-control-static"><?=stripSlashes($r[uname])?></p>
					</div>
				</div>				
				<div class="form-group">
					<label class="col-sm-4 control-label">发布时间:</label>
					<div class="col-sm-4">
					  <p class="form-control-static"><?=$r[addtime]?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label">IP地址:</label>
					<div class="col-sm-4">
					  <p class="form-control-static"><?=$r[ip]?>:<?=$r[eipport]?></p>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-4 control-label">姓名:</label>
					<div class="col-sm-4">
					  <p class="form-control-static"><?=stripSlashes($r[name])?></p>
					</div>
				</div>				
				<div class="form-group">
					<label class="col-sm-4 control-label">公司名称:</label>
					<div class="col-sm-4">
					  <p class="form-control-static"><?=stripSlashes($r[company])?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label">联系邮箱:</label>
					<div class="col-sm-4">
					  <p class="form-control-static"><?=stripSlashes($r[email])?></p>
					</div>
				</div>				
				<div class="form-group">
					<label class="col-sm-4 control-label">联系电话:</label>
					<div class="col-sm-4">
					  <p class="form-control-static"><?=stripSlashes($r[phone])?></p>
					</div>
				</div>				
				<div class="form-group">
					<label class="col-sm-4 control-label">传真:</label>
					<div class="col-sm-4">
					  <p class="form-control-static"><?=stripSlashes($r[fax])?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label">联系地址:</label>
					<div class="col-sm-4">
					  <p class="form-control-static"><?=stripSlashes($r[address])?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;邮编：<?=stripSlashes($r[zip])?></p>
					</div>
				</div>				
				<div class="form-group">
					<label class="col-sm-4 control-label">信息标题:</label>
					<div class="col-sm-4">
					  <p class="form-control-static"><?=stripSlashes($r[title])?></p>
					</div>
				</div>				
				<div class="form-group">
					<label class="col-sm-4 control-label">信息内容:</label>
					<div class="col-sm-4">
					  <p class="form-control-static"><?=nl2br(stripSlashes($r[ftext]))?></p>
					</div>
				</div>
		</div>
	</div>
	<p class="text-center">[ <a href="javascript:window.close();">关 闭</a> ]</p>
</div>

<script src="<?=$public_r['newsurl']?>skin/member_1/js/jquery.min.js"></script>
<script src="<?=$public_r['newsurl']?>skin/member_1/js/bootstrap.min.js"></script>	
</body>
</html>