<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$postword=$enews=='EditAddress'?'修改地址':'增加地址';
$public_diyr['pagetitle']=$postword;
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../">首页</a></li>
		  <li><a href="../../member/cp/">会员中心</a></li>
		  <li><a href="ListAddress.php">配送地址列表</a></li>
		  <li class="active">'.$postword.'</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>

<div class="wrapper">
<?=$url?>
	<div class="form_main">
		<h2 class="title"><?=$public_diyr['pagetitle']?></h2>

		<form action="../doaction.php" method="post" name="addform" id="addform" class="form-horizontal">		
			<div class="form-group">
				<label for="addressname" class="col-sm-4 control-label">地址名称： <i class="text-danger">*</i></label>
				<div class="col-sm-4">
				  <input name="addressname" type="text" id="addressname" value="<?=stripSlashes($r[addressname])?>" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="truename" class="col-sm-4 control-label">姓名：</label>
				<div class="col-sm-4">
				  <input name="truename" type="text" id="truename" value="<?=stripSlashes($r[truename])?>" class="form-control">
				</div>
			</div>			
			<div class="form-group">
				<label for="email" class="col-sm-4 control-label">邮箱地址：</label>
				<div class="col-sm-4">
				  <input name="email" type="text" id="email" value="<?=stripSlashes($r[email])?>" class="form-control">
				</div>
			</div>			
			<div class="form-group">
				<label for="mycall" class="col-sm-4 control-label">固定电话：</label>
				<div class="col-sm-4">
				  <input name="mycall" type="text" id="mycall" value="<?=stripSlashes($r[mycall])?>" class="form-control">
				</div>
			</div>			
			<div class="form-group">
				<label for="phone" class="col-sm-4 control-label">手机号码：</label>
				<div class="col-sm-4">
				  <input name="phone" type="text" id="phone" value="<?=stripSlashes($r[phone])?>" class="form-control">
				</div>
			</div>	
			<div class="form-group">
				<label for="oicq" class="col-sm-4 control-label">QQ号码：</label>
				<div class="col-sm-4">
				  <input name="oicq" type="text" id="oicq" value="<?=stripSlashes($r[oicq])?>" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="msn" class="col-sm-4 control-label">MSN：</label>
				<div class="col-sm-4">
				  <input name="msn" type="text" id="msn" value="<?=stripSlashes($r[msn])?>" class="form-control">
				</div>
			</div>			
			<div class="form-group">
				<label for="address" class="col-sm-4 control-label">收货地址：</label>
				<div class="col-sm-4">
				  <input name="address" type="text" id="address" value="<?=stripSlashes($r[address])?>" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="zip" class="col-sm-4 control-label">邮编：</label>
				<div class="col-sm-4">
				  <input name="zip" type="text" id="zip" value="<?=stripSlashes($r[zip])?>" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="signbuild" class="col-sm-4 control-label">地址周边标志性建筑：</label>
				<div class="col-sm-4">
				  <input name="signbuild" type="text" id="signbuild" value="<?=stripSlashes($r[signbuild])?>" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="besttime" class="col-sm-4 control-label">最佳收货时间：</label>
				<div class="col-sm-4">
				  <input name="besttime" type="text" id="besttime" value="<?=stripSlashes($r[besttime])?>" class="form-control">
				</div>
			</div>	
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">				
					<input type="submit" name="Submit" value="提交" class="btn btn-danger">
					<input type="reset" name="Submit2" value="重置" class="btn btn-default">
					<input name="enews" type="hidden" id="enews" value="<?=$enews?>">
					<input name="addressid" type="hidden" id="addressid" value="<?=$addressid?>">	
				</div>			
			</div>			
		</form>
	</div>

</div>

<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>