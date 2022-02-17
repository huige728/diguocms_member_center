<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<aside class="col-md-3">

	<div class="side-login">
		<img src="template/moban/images/login-bg.jpg" class="login-bg img-responsive center-block">
		<div class="login-box">
			<img src="<?=$userpic?>" class="login-avatar">
			<a href="UserInfo.php?userid=<?=$userid?>" class="EnterBtn"><?=$username?></a>
			<div class="signup-box">
				<a href="../member/friend/add/?fname=<?=$username?>">加为好友</a> | 
				<a href="../member/msg/AddMsg/?username=<?=$username?>">发短消息</a> 
				<a href="UserInfo.php?userid=<?=$userid?>">用户资料</a> | 
				<a href="../member/cp">管理面板</a>
			</div>
			<div class="tongji">访问统计：<?=$addur[viewstats]?></div>
		</div>
	</div>
	
</aside>