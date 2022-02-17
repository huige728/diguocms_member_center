<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="<?=$public_r['newsurl']?>skin/member_1/js/jquery.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="<?=$public_r['newsurl']?>skin/member_1/js/bootstrap.min.js"></script>
<script src="<?=$public_r['newsurl']?>e/data/js/ajax.js"></script>
<script type="text/javascript">
$(function(){ 								         //  等待DOM加载完毕.

	var $toggleBtn = $('.menu-toggler');             //  获取“切换”按钮
	var $sidebar = $('.sidebar_nav');                //  获取“侧边菜单”
	var $wrapper = $('.wrapper');                    //  获取“主内容区”
	$toggleBtn.click(function(){
		var $left = $sidebar.position().left;
		if($left==0){
			$sidebar.animate({left: "-240px"}, "slow" ,function(){$wrapper.addClass("wrapper__minify");});   //  隐藏 侧边菜单,同时内容区添加margin-left:0 的class;

		}else{
			$sidebar.animate({left: "0px"}, "slow" ,function(){$wrapper.removeClass("wrapper__minify");});   //  显示 侧边菜单,同时内容区删除margin-left:0 的class;
		}
		return false;					      	//超链接不跳转
	})
	
	
	var time = 300;
	$(".sidebar_menu").on("click", "li label", function(f) {
		var cLabel = $(this); 
		var cUl = cLabel.next();
		if (cUl.is(".menu_second") && cUl.is(":visible")) {
            cUl.slideUp(time, function() {
               cLabel.find("span").removeClass("open");
            });	
		} else {
			if ((cUl.is(".menu_second")) && (!cUl.is(":visible"))) {
				var cTopUl = cLabel.parents("ul").first();
				var cOpenUl = cTopUl.find("ul:visible");
				cOpenUl.slideUp(time);
				cUl.slideDown(time, function() {
					cTopUl.find("span.open").removeClass("open");
					cLabel.find("span").addClass("open");
				})
			}
		}
        if (cUl.is(".menu_second")) {
            f.preventDefault()
        }
	})	


	var urlstr = window.location.href.split('/e')[window.location.href.split('/e').length-1];	
	$(".menu_second a").each(function () {
		var hrefstr = $(this).attr('href').split('/e')[$(this).attr('href').split('/e').length-1]
		console.log("urlstr is: " + urlstr);
		console.log("href is: " + hrefstr);
		if (hrefstr == urlstr) {
			$(this).addClass('cur'); 
			$(this).parent().parent().show();			
		} else {
			$(this).removeClass('cur');
		}
    });

	
})

</script>
</body>
</html>