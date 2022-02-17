<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
//公告
$spacegg='';
if($addur['spacegg']){
	$spacegg='	
<div class="panel panel-danger">
    <div class="panel-heading"><h3 class="panel-title">公告</h3></div>
    <div class="panel-body">'.$addur['spacegg'].'</div>
</div>';
}
//导航菜单
$dhmenu='';
$modsql=$empire->query("select mid,qmname from {$dbtbpre}enewsmod where usemod=0 and showmod=0 and qenter<>'' order by myorder,mid");
while($modr=$empire->fetch($modsql))
{
	$dhmenu.='<li><a href="list.php?userid='.$userid.'&mid='.$modr[mid].'">'.$modr[qmname].'</a></li>';
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="renderer" content="webkit">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?=$spacename?></title>	
	<meta content="<?=$spacename?>" name="keywords" />
	<meta content="<?=$spacename?>" name="description" />
    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="template/moban/images/css.css" rel="stylesheet">

    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script src="https://fastly.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
	<script src="<?=$public_r['newsurl']?>e/data/js/ajax.js"></script>
  </head>
  <body>



    <nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">导航切换</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="<?=$public_r[newsurl]?>">网站首页</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="index.php?userid=<?=$userid?>">空间首页</a></li>
				<li><a href="UserInfo.php?userid=<?=$userid?>">个人资料</a></li>
				<li><a href="gbook.php?userid=<?=$userid?>">留言板</a></li>	
				<li><a href="feedback.php?userid=<?=$userid?>">在线反馈</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					分类 
					<span class="caret"></span>
				  </a>
				  <ul class="dropdown-menu">
					<?=$dhmenu?>
				  </ul>
				</li>
			  </ul>
			</div><!--/.nav-collapse -->
		</div>
    </nav> 

	<header class="main-header" style="background-image: url(template/default/images/bg.jpg)">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1><?=$spacename?></h1><h2><?=$spaceurl?></h2>
				</div>
			</div>
		</div>
	</header>