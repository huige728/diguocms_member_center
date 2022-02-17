<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='增加收藏夹';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../../">首页</a></li>
		  <li><a href="../../cp/">会员中心</a></li>
		  <li><a href="../../fava/">收藏夹</a></li>
		  <li class="active">增加收藏夹</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>

<div class="wrapper">

<?=$url?>

	<div class="form_main">
		<h2 class="title">增加收藏夹</h2>
		<form class="form-horizontal" method="post" action="../../doaction.php" name="form1">			
			
			<div class="form-group">
 				<label class="col-sm-4 control-label">增加收藏夹</label>
				<div class="col-sm-8">
				  <input name="enews" type="hidden" id="enews" value="AddFava">
                  <input name="from" type="hidden" id="from2" value="<?=$from?>">
                  <input name="classid" type="hidden" id="classid2" value="<?=$classid?>">
                  <input name="id" type="hidden" id="id2" value="<?=$id?>">				
				  <p class="form-control-static"><a href="../FavaClass/" target="_blank">增加收藏分类</a></p>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-4 control-label">收藏页面</label>
				<div class="col-sm-8">
				  <p class="form-control-static"><a href='<?=$titleurl?>' target="_blank"><?=stripSlashes($r[title])?></a></p>
				</div>
			</div>			
			<div class="form-group">
				<label for="select" class="col-sm-offset-2 col-sm-2 control-label">选择收藏分类</label>
				<div class="col-sm-2">
                  <select name="cid" id="select" class="form-control">
						<option value="0">不设置</option>
						<?=$select?>
                  </select>					
				</div>
			</div>

		
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">
					<input type="submit" name="Submit" value="收藏" class="btn btn-danger">
					<input type="button" name="Submit2" value="返回" onclick="javascript:history.go(-1)" class="btn btn-default"> 
				</div>
			</div>
	
		</form>	
	</div>

</div>

<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>