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
<title>登录</title>
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

	<h2 class="title">选择用户</h2>
	<div class="panel panel-danger">
		<div class="panel-heading">
			<h3 class="panel-title">分类</h3>
		</div>
		<div class="panel-body">
			<form class="form-horizontal" name="changeuser" method="GET" action="index.php?<?=$addvar?>">
				<div class="form-group">
					<label for="select" class="col-sm-2 control-label">分类：</label>
					<div class="col-sm-4">
						<select name="cid" id="select" class="form-control" onchange=window.location='index.php?<?=$addvar?>&cid='+this.options[this.selectedIndex].value>
						  <option value="0">显示全部</option>
						  <?=$select?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<select multiple class="form-control" name="fname" id="fname">
							<?=$hyselect?>
						</select>
					</div>
				</div>	
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <input type="button" name="Submit" value="确定" onclick="ChangeHy();" class="btn btn-default">
					</div>
				</div>					
			</form>
		</div>
	</div>

</div>

<script src="<?=$public_r['newsurl']?>skin/member_1/js/jquery.min.js"></script>
<script src="<?=$public_r['newsurl']?>skin/member_1/js/bootstrap.min.js"></script>
<script>
function ChangeHy()
{
	var fname=document.changeuser.fname.value;
	if(fname!="")
	{
		opener.document.<?=$fm?>.<?=$f?>.value=fname;
	}
	window.close();
}
</script>	
</body>
</html>