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
<a style="display:block;width:200px;height:42px;line-height:42px;font-size:18px;text-align:center;margin:40px auto;font-weight:800;" href="#" class="tbox">点击弹出</a>

<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<h4 class="modal-title" align="center">会员登陆</h4>
				<br/>
				<form class="form-horizontal" role="form" name="form1" method="post" action="../doaction.php">
				    <input type="hidden" name="ecmsfrom" value="<?=ehtmlspecialchars($_GET['from'])?>">
					<input type="hidden" name="prtype" value="<?=ehtmlspecialchars($_GET['prt'])?>">
					<input type="hidden" name="enews" value="login">
					<div class="form-group">
						<label for="username" class="col-sm-offset-2 col-sm-2 control-label">用户名</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="username" name="username">
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-sm-offset-2 col-sm-2 control-label">密码</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="password" name="password">
						</div>
					</div>
					
					<div class="form-group">
						<label for="lifetime" class="col-sm-offset-2 col-sm-2 control-label">保存</label>
						<div class="col-sm-5">
							<select id="lifetime" name="lifetime" class="form-control">
								<option value="0">不保存</option>
								<option value="3600">一小时</option>
								<option value="86400">一天</option>
								<option value="2592000">一个月</option>
								<option value="315360000">永久</option>
							</select>
						</div>
					</div>				
					<?php
					if($public_r['loginkey_ok']){
					?>			
					<div class="form-group">
						<label for="key" class="col-sm-offset-2 col-sm-2 control-label">验证码</label>			
						<div class="col-sm-2">
							<input type="text" class="form-control" id="key" name="key" />
						</div>
						<div class="col-sm-2">  
							<a id="loginshowkey" href="#" onclick="edoshowkey('loginshowkey','login','<?=$public_r['newsurl']?>');" title="点击显示验证码">点击显示验证码</a>
						</div>					
					</div>
					<?php
					}	
					?>						
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-5">
							<input type="submit" name="Submit" value="登陆" class="btn btn-danger">
							<input type="button" name="button" value="注册" onclick="window.open('../register/');" class="btn btn-default">
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
			</div>
		</div>
		<!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<script src="<?=$public_r['newsurl']?>skin/member_1/js/jquery.min.js"></script>
<script src="<?=$public_r['newsurl']?>skin/member_1/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(function(){

	$(".tbox").click(function(){
		$('#myModal').modal('show') //显示模态框
	})
	
});
</script>	
</body>
</html>