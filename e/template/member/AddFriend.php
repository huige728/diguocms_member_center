<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']=$word;
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../../">首页</a></li>
		  <li><a href="../../cp/">会员中心</a></li>
		  <li><a href="../../friend/?cid='.$fcid.' ">好友列表</a></li>
		  <li class="active">'.$word.'</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?> 
<div class="wrapper">

<?=$url?>

	<div class="form_main">
		<h2 class="title"><?=$word?></h2>
		<form class="form-horizontal" method="post" action="../../doaction.php" name="form1">			
			<div class="form-group">
				<label for="fname" class="col-sm-4 control-label">用户名 <i class="text-danger">*</i></label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="fname" name="fname" value="<?=$fname?>"/>					
				</div>
			</div>
			<div class="form-group">
				<label for="cid" class="col-sm-offset-2 col-sm-2 control-label">所属分类</label>
				<div class="col-sm-2">
					<select id="cid" name="cid" class="form-control">
						<?=$select?>
					</select>
					
				</div>
				<div class="col-sm-2">
					[<a id="friendclass" href="../FriendClass/" target="_blank">管理分类</a>]
				</div>
			</div>
			<div class="form-group">
				<label for="fname3" class="col-sm-4 control-label">备注</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="fsay" id="fname3" value="<?=stripSlashes($r[fsay])?>">
				</div>
			</div>
		
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">
					<input type="submit" name="Submit" value="提交" class="btn btn-danger">
					<input type="reset" name="Submit2" value="重置" class="btn btn-default">
				
					<input name="enews" type="hidden" id="enews" value="<?=$enews?>">
					<input name="fid" type="hidden" id="fid" value="<?=$fid?>">
					<input name="fcid" type="hidden" id="fcid" value="<?=$fcid?>">
					<input name="oldfname" type="hidden" id="oldfname" value="<?=$r[fname]?>">					

				</div>
			</div>
	
		</form>	
	</div>

</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>