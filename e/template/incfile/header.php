<?php
if(!defined('InEmpireCMS'))
{
	exit();
}

//--------------- 界面参数 ---------------

//会员界面附件地址前缀
$memberskinurl=$public_r['newsurl'].'skin/member_1/images/';

//LOGO图片地址
$logoimgurl=$memberskinurl.'logo.svg';


//--------------- 界面参数 ---------------


//识别并显示当前菜单
function EcmsShowThisMemberMenu(){
	global $memberskinurl,$noaddimgurl;
	$selffile=eReturnSelfPage(0);
	if(stristr($selffile,'/member/msg'))
	{
		$menuname='menumsg';
	}
	elseif(stristr($selffile,'e/DoInfo'))
	{
		$menuname='menuinfo';
	}
	elseif(stristr($selffile,'/member/mspace'))
	{
		$menuname='menuspace';
	}
	elseif(stristr($selffile,'e/ShopSys'))
	{
		$menuname='menushop';
	}
	elseif(stristr($selffile,'e/payapi')||stristr($selffile,'/member/buygroup')||stristr($selffile,'/member/card')||stristr($selffile,'/member/buybak')||stristr($selffile,'/member/downbak'))
	{
		$menuname='menupay';
	}
	else
	{
		$menuname='menumember';
	}
	return $menuname;

}

//网页标题
$thispagetitle=$public_diyr['pagetitle']?$public_diyr['pagetitle']:'会员中心';
//会员信息
$tmgetuserid=(int)getcvar('mluserid');	//用户ID
$tmgetusername=RepPostVar(getcvar('mlusername'));	//用户名
$tmgetgroupid=(int)getcvar('mlgroupid');	//用户组ID
$tmgetgroupname='游客';
//会员组名称
if($tmgetgroupid)
{
	$tmgetgroupname=$level_r[$tmgetgroupid]['groupname'];
	if(!$tmgetgroupname)
	{
		include_once(ECMS_PATH.'e/data/dbcache/MemberLevel.php');
		$tmgetgroupname=$level_r[$tmgetgroupid]['groupname'];
	}
}

//模型
$tgetmid=(int)$_GET['mid'];
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="renderer" content="webkit">
<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
<title><?=$thispagetitle?></title>
<link href="<?=$public_r['newsurl']?>skin/member_1/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Bootstrap -->
<link href="<?=$public_r['newsurl']?>skin/member_1/css/bootstrap.min.css" rel="stylesheet">

<link href="<?=$public_r['newsurl']?>skin/member_1/css/css.css" rel="stylesheet">

<!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
<!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
<!--[if lt IE 9]>
  <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<nav class="navbar-bg navbar-fixed-top">
    
	<div class="navbar-header">
		<ul class="sidebar_toggler">
			<li><a href="#" class="menu-toggler"><i class="fa fa-bars"></i></a></li>
		</ul>	
	</div>
	<div class="logo" id="logo">
		<a href="<?=$public_r['newsurl']?>"><img src="<?=$logoimgurl?>" height="38" /></a>
	</div>	
	<div class="header_right">
	
	<?php
		if($tmgetuserid){	//已登录
	?>
	  <ul>
		<li><span href="#" class="cur_btn">您好，<strong><?=$tmgetusername?></strong></span></li>		
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				<i class="fa fa-ellipsis-v top_icon"></i>
			</a>
			<ul class="dropdown-menu dropdown-menu-right">
				<li><a href="<?=$public_r['newsurl']?>e/member/msg/">站内消息</a></li>			
				<li><a href="<?=$public_r['newsurl']?>e/member/cp/">会员中心</a></li>
				<li><a href="<?=$public_r['newsurl']?>e/member/list/">会员列表</a></li>
				<li><a href="<?=$public_r['newsurl']?>e/member/doaction.php?enews=exit" onclick="return confirm('确认要退出?');">退出</a></li>
			</ul>
		</li>
	  </ul>
	<?php
		}else{	//游客	
	?>
	  <ul>
		<li><span class="cur_btn">您好，<strong>游客</strong></span></li>
	  </ul>
	<?php
		}
	?>	

	</div>

</nav>
<nav class="sidebar_nav">
	<?php
		if($tmgetuserid){	//已登录
	?>

	<ul class="sidebar_menu">
		<li class="menu_item">
			<a href="<?=$public_r['newsurl']?>e/member/cp/" class="menu_label"><i class="fa fa-home menu_icon"></i>会员主页</a>
		</li>
		<li class="menu_item<?php echo EcmsShowThisMemberMenu()=='menumember'?' menu_active':'';?>">
			<label class="menu_label"><i class="fa fa-user-circle-o menu_icon"></i><span>帐号</span></label>
			<ul class="menu_second">
				<li><a href="<?=$public_r['newsurl']?>e/member/EditInfo/">修改资料</a></li>
				<li><a href="<?=$public_r['newsurl']?>e/member/EditInfo/EditSafeInfo.php">修改安全信息</a></li>
				<li><a href="<?=$public_r['newsurl']?>e/member/my/">帐号状态</a></li>
				<li><a href="<?=$public_r['newsurl']?>e/member/fava/">收藏夹</a></li>					
				<li><a href="<?=$public_r['newsurl']?>e/member/friend/">好友列表</a></li>
				<li><a href="<?=$public_r['newsurl']?>e/memberconnect/ListBind.php">绑定外部登录</a></li>					
				
			</ul>
		</li>			
		<li class="menu_item<?php echo EcmsShowThisMemberMenu()=='menumsg'?' menu_active':'';?>">
			<label class="menu_label"><i class="fa fa-comments menu_icon"></i><span>站内信息</span></label>
			<ul class="menu_second">
				<li><a href="<?=$public_r['newsurl']?>e/member/msg/AddMsg/?enews=AddMsg">发送消息</a></li>
				<li><a href="<?=$public_r['newsurl']?>e/member/msg/">消息列表</a></li>
			</ul>
		</li>
		<li class="menu_item<?php echo EcmsShowThisMemberMenu()=='menuinfo'?' menu_active':'';?>">
			<label class="menu_label"><i class="fa fa-paper-plane menu_icon"></i><span>投稿</span></label>
			<ul class="menu_second">
				<?php
				//输出可管理的模型
				$tmodsql=$empire->query("select mid,qmname from {$dbtbpre}enewsmod where usemod=0 and showmod=0 and qenter<>'' order by myorder,mid");
				while($tmodr=$empire->fetch($tmodsql))
				{
					$fontb="";
					$fontb1="";
					if($tmodr['mid']==$tgetmid)
					{
						$fontb="<b>";
						$fontb1="</b>";
					}
				?>
				<li><a href="<?=$public_r['newsurl']?>e/DoInfo/ListInfo.php?mid=<?=$tmodr['mid']?>"><?=$fontb?>管理<?=$tmodr[qmname]?><?=$fontb1?></a></li>
				<li><a href="<?=$public_r['newsurl']?>e/DoInfo/ChangeClass.php?mid=<?=$tmodr['mid']?>"><?=$fontb?>发布<?=$tmodr[qmname]?><?=$fontb1?></a></li>
				<?php
				}
				?>				
			</ul>
		</li>
		<li class="menu_item<?php echo EcmsShowThisMemberMenu()=='menuspace'?' menu_active':'';?>">
			<label class="menu_label"><i class="fa fa-cloud menu_icon"></i><span>会员空间</span></label>
			<ul class="menu_second">
				<li><a href="<?=$public_r['newsurl']?>e/space/?userid=<?=$tmgetuserid?>">预览空间</a></li>
				<li><a href="<?=$public_r['newsurl']?>e/member/mspace/SetSpace.php">设置空间</a></li>
				<li><a href="<?=$public_r['newsurl']?>e/member/mspace/ChangeStyle.php">选择模板</a></li>
				<li><a href="<?=$public_r['newsurl']?>e/member/mspace/gbook.php">管理留言</a></li>
				<li><a href="<?=$public_r['newsurl']?>e/member/mspace/feedback.php">管理反馈</a></li>
			</ul>
		</li>
		<li class="menu_item<?php echo EcmsShowThisMemberMenu()=='menupay'?' menu_active':'';?>">
			<label class="menu_label"><i class="fa fa-credit-card menu_icon"></i><span>财务管理</span></label>
			<ul class="menu_second">
				<li><a href="<?=$public_r['newsurl']?>e/payapi/">在线支付</a></li>
				<li><a href="<?=$public_r['newsurl']?>e/member/buygroup/">在线充值</a></li>
				<li><a href="<?=$public_r['newsurl']?>e/member/card/">点卡充值</a></li>
				<li><a href="<?=$public_r['newsurl']?>e/member/buybak/">点卡充值记录</a></li>
				<li><a href="<?=$public_r['newsurl']?>e/member/downbak/">下载消费记录</a></li>
			</ul>
		</li>			
		<li class="menu_item<?php echo EcmsShowThisMemberMenu()=='menushop'?' menu_active':'';?>">
			<label class="menu_label"><i class="fa fa-cart-plus menu_icon"></i><span>商城</span></label>
			<ul class="menu_second">
				<li><a href="<?=$public_r['newsurl']?>e/ShopSys/ListDd/">我的订单</a></li>
				<li><a href="#ecms" onclick="window.open('<?=$public_r['newsurl']?>e/ShopSys/buycar/','','width=680,height=500,scrollbars=yes,resizable=yes');">我的购物车</a></li>
				<li><a href="<?=$public_r['newsurl']?>e/ShopSys/address/ListAddress.php">管理配送地址</a></li>
			</ul>
		</li>
		<li class="menu_item">
			<a href="<?=$public_r['newsurl']?>e/member/doaction.php?enews=exit" class="menu_label" onclick="return confirm('确认要退出?');"><i class="fa fa-home menu_icon"></i>退出</a>
		</li>			
	</ul>

	<?php
		}else{	//游客
	?>

	<ul class="sidebar_menu">
		<li class="menu_item">
			<a href="<?=$public_r['newsurl']?>" class="menu_label"><i class="fa fa-home menu_icon"></i>会员主页</a>
		</li>
		<li class="menu_item<?php echo EcmsShowThisMemberMenu()=='menumember'?' menu_active':'';?>">
			<label class="menu_label"><i class="fa fa-user-circle-o menu_icon"></i><span>帐号</span></label>
			<ul class="menu_second">
				<li><a href="<?=$public_r['newsurl']?>e/member/login/">会员登录</a></li>
				<li><a href="<?=$public_r['newsurl']?>e/member/register/">注册帐号</a></li>	
			</ul>
		</li>
		<li class="menu_item<?php echo EcmsShowThisMemberMenu()=='menuinfo'?' menu_active':'';?>">
			<label class="menu_label"><i class="fa fa-paper-plane menu_icon"></i><span>投稿</span></label>
			<ul class="menu_second">
				<?php
				//输出可管理的模型
				$tmodsql=$empire->query("select mid,qmname from {$dbtbpre}enewsmod where usemod=0 and showmod=0 and qenter<>'' order by myorder,mid");
				while($tmodr=$empire->fetch($tmodsql))
				{
					$fontb="";
					$fontb1="";
					if($tmodr['mid']==$tgetmid)
					{
						$fontb="<b>";
						$fontb1="</b>";
					}
				?>
				<li><a href="<?=$public_r['newsurl']?>e/DoInfo/ChangeClass.php?mid=<?=$tmodr['mid']?>"><?=$fontb?>发布<?=$tmodr[qmname]?><?=$fontb1?></a></li>
				<?php
				}
				?>				
			</ul>
		</li>		
		<li class="menu_item<?php echo EcmsShowThisMemberMenu()=='menushop'?' menu_active':'';?>">
			<label class="menu_label"><i class="fa fa-cart-plus menu_icon"></i><span>商城</span></label>
			<ul class="menu_second">	
				<li><a href="#ecms" onclick="window.open('<?=$public_r['newsurl']?>e/ShopSys/buycar/','','width=680,height=500,scrollbars=yes,resizable=yes');">我的购物车</a></li>
			</ul>
		</li>			
	</ul>

	<?php
		}
	?>	
	<div class="footer">
		<ul>
			<li><a href="#">关于我们</a></li>
			<li><a href="#">联系我们</a></li>
			<li><a href="#">广告</a></li>
		</ul>
		<div class="footer_content">
			<p>© 2021 <strong>feige</strong>. All Rights Reserved.</p>
		</div>
	</div>

</nav>