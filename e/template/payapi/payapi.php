<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='在线支付';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../">首页</a></li>
		  <li><a href="../member/cp/">会员中心</a></li>
		  <li class="active">在线支付</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<script>
function ChangeShowBuyFen(amount){
	var fen;
	fen=Math.floor(amount)*<?=$pr[paymoneytofen]?>;
	document.getElementById("showbuyfen").innerHTML=fen+" 点";
}
</script>

<div class="wrapper">
<?=$url?>
	<div class="form_main">
		<h2 class="title"><?=$public_diyr['pagetitle']?></h2>
		
		<div class="row m-t-20">
			<div class="col-sm-6">
				<form name="paytofenform" method="post" action="pay.php" class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-4 control-label">购买点数：</label>
						<div class="col-sm-4">
						  <input type="hidden" name="phome" value="PayToFen">
						</div>
					</div>
					<div class="form-group">
						<label for="money" class="col-sm-4 control-label">购买金额：</label>
						<div class="col-sm-4">
						  <div class="input-group">
							  <input name="money" type="text" value="" onchange="ChangeShowBuyFen(document.paytofenform.money.value);" class="form-control" id="money">
							  <span class="input-group-addon">元</span>
						  </div>
						  <p class="help-block"><span class="text-danger">(1元 = <?=$pr[paymoneytofen]?>点数)</span></p>
						</div>
					</div>	
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
							<input type="submit" name="Submit" value="确定购买" class="btn btn-primary">
						</div>
					</div>					
				</form>
			</div>	
			
			
			<div class="col-sm-6">
				<form name="paytomoneyform" method="post" action="pay.php" class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-4 control-label">存预付款：</label>
						<div class="col-sm-4">
						  <input name="phome" type="hidden" id="phome" value="PayToMoney">
						</div>
					</div>
					<div class="form-group">
						<label for="money" class="col-sm-4 control-label">金额：</label>
						<div class="col-sm-4">
						  <div class="input-group">
							  <input name="money" type="text" value="" class="form-control" id="money">
							  <span class="input-group-addon">元</span>						  
						  </div>
						</div>
					</div>	
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
						<div class="col-sm-offset-4 col-sm-4">
							<input type="submit" name="Submit3" value="确定支付" class="btn btn-primary">
						</div>
					</div>					
				</form>				
			</div>
		</div>
	
	</div>

</div>

<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>