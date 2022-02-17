<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='在线充值';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../">首页</a></li>
		  <li><a href="../cp/">会员中心</a></li>
		  <li class="active">在线充值</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>

<div class="wrapper">
<?=$url?>
	<div class="form_main">
		<h2 class="title"><?=$public_diyr['pagetitle']?></h2>
		
		<div class="row m-t-20">
				<form name="payform" method="post" action="../../payapi/BuyGroupPay.php" class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-4 control-label">请选择要购买的充值类型：</label>
						<div class="col-sm-4">

						</div>
					</div>
<?
while($r=$empire->fetch($sql)){
  if($r[buygroupid]&&$level_r[$r[buygroupid]][level]>$level_r[$user[groupid]][level])
  {
	  continue;
  }
?>					
					<div class="form-group">
						<label for="id" class="col-sm-4 control-label">购买金额：</label>
						<div class="col-sm-4">
						  <div class="input-group">
							  <input type="radio" name="id" value="<?=$r[id]?>" class="form-control" id="id"> 
							  <span class="input-group-addon">元 （<?=$r[gname]?>）</span>
						  </div>
						  <p class="help-block"><span class="text-danger"><?=nl2br($r[gsay])?></span></p>
						</div>
					</div>
<?
  }
?>					
					<div class="form-group">
						<label for="payid" class="col-sm-4 control-label">支付平台：</label>
						<div class="col-sm-4">
						  <div class="input-group">
							<select name="payid" class="form-control" id="payid">
								<?=$pays?>
							</select>						  
						  </div>
						</div>
					</div>					
					<div class="form-group">
						<label class="col-sm-4 control-label">购买点数：</label>
						<div class="col-sm-4">
						  <p class="form-control-static"> 0 点</p>
						</div>
					</div>	
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-4">
							<input type="submit" name="Submit" value="马上充值" class="btn btn-danger">
							<input type="button" name="Submit2" value="返回" onclick="self.location.href='../../../';" class="btn btn-default">
						</div>
					</div>					
				</form>

		</div>
	
	</div>

</div>

<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>