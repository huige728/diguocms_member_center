<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='订单列表';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../">首页</a></li>
		  <li><a href="../../member/cp/">会员中心</a></li>
		  <li class="active">订单列表</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>


<div class="wrapper">

<?=$url?>

	<div class="form_main">
		<h2 class="title"><?=$public_diyr['pagetitle']?></h2>
		<form name="form1" method="get" action="index.php" class="form-inline m-b-20">
	
			<div class="form-group">
				<label for="keyboard">订单号为:</label>
				<input name="keyboard" type="text" id="keyboard" value="<?=$keyboard?>" class="form-control">						
			</div>	

			<div class="form-group">
				<label for="starttime2" class="control-label">时间从</label>
				<div class="input-group date">
					<input type="text" class="form-control" id="starttime2" name="starttime" value="<?=$starttime?>">
					<div class="input-group-addon">
						<span class="fa fa-calendar"></span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="endtime2" class="control-label">到</label>
				<div class="input-group date">
					<input type="text" class="form-control" id="endtime2" name="endtime" value="<?=$endtime?>">
					<div class="input-group-addon">
						<span class="fa fa-calendar"></span>
					</div>
				</div>
				<label for="endtime2" class="control-label">止的订单</label>
			</div>
			
			<input type="submit" name="Submit6" value="搜索" class="btn btn-primary"> 
			<input name="sear" type="hidden" id="sear2" value="1">

		</form>

		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>序号</th>
					<th>编号(点击查看)</th>
					<th>订购时间</th>
					<th>总金额</th>
					<th>支付方式</th>
					<th>状态</th>	
					<th>操作</th>	
				</tr>
			</thead>
			<tbody>	
<?
$todaytime=time();
$j=0;
while($r=$empire->fetch($sql))
{
$j++;
//点数购买
$total=0;
if($r[payby]==1)
{
	$total=$r[alltotalfen]+$r[pstotal];
	$mytotal="<a href='#ecms' title='商品额(".$r[alltotalfen].")+运费(".$r[pstotal].")'>".$total." 点</a>";
}
else
{
	//发票
	$fpa='';
	$pre='';
	if($r[fp])
	{
		$fpa="+发票费(".$r[fptotal].")";
	}
	//优惠
	if($r['pretotal'])
	{
		$pre="-优惠(".$r[pretotal].")";
	}
	$total=$r[alltotal]+$r[pstotal]+$r[fptotal]-$r[pretotal];
	$mytotal="<a href='#ecms' title='商品额(".$r[alltotal].")+运费(".$r[pstotal].")".$fpa.$pre."'>".$total." 元</a>";
}
//支付方式
if($r[payby]==1)
{
	$payfsname=$r[payfsname]."<br>(点数购买)";
}
elseif($r[payby]==2)
{
	$payfsname=$r[payfsname]."<br>(余额购买)";
}
else
{
	$payfsname=$r[payfsname];
}
//状态
if($r['checked']==1)
{
	$ch="已确认";
}
elseif($r['checked']==2)
{
	$ch="取消";
}
elseif($r['checked']==3)
{
	$ch="退货";
}
else
{
	$ch="<font color=red>未确认</font>";
}
if($r['outproduct']==1)
{
	$ou="已发货";
}
elseif($r['outproduct']==2)
{
	$ou="备货中";
}
else
{
	$ou="<font color=red>未发货</font>";
}
if($r['haveprice']==1)
{
	$ha="已付款";
}
else
{
	$ha="<font color=red>未付款</font>";
}
//操作
$doing='<a href="../doaction.php?enews=DelDd&ddid='.$r[ddid].'" onclick="return confirm(\'确认要取消？\');">取消</a>';
if($r['checked']||$r['outproduct']||$r['haveprice'])
{
	$doing='--';
}
$dddeltime=$shoppr['dddeltime']*60;
if($todaytime-$dddeltime>to_time($r['ddtime']))
{
	$doing='--';
}
?>		
				<tr>
					<td><?=$j?></td>
					<td><a href="#ecms" onclick="window.open('../ShowDd/?ddid=<?=$r[ddid]?>','','width=700,height=600,scrollbars=yes,resizable=yes');"><?=$r[ddno]?></a></td>
					<td><?=$r[ddtime]?></td>
					<td><?=$mytotal?></td>
					<td><?=$payfsname?></td>
					<td><strong><?=$ha?></strong>/<strong> <?=$ou?></strong>/<strong> <?=$ch?></strong></td>
					<td><?=$doing?></td>		
				</tr>
<?
}
?>
				<tr>
					<td colspan="7"><?=$returnpage?></td>
				</tr>
			
			</tbody>	
		</table>
	</div>

</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>
<link rel="stylesheet" href="<?=$public_r['newsurl']?>skin/member_1/js/bootstrap-datepicker/bootstrap-datepicker.min.css">
<script src="<?=$public_r['newsurl']?>skin/member_1/js/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="<?=$public_r['newsurl']?>skin/member_1/js/bootstrap-datepicker/bootstrap-datepicker.zh-CN.min.js"></script>
<script type="text/javascript">
$("#starttime2,#endtime2").datepicker({
	language: "zh-CN",
	clearBtn: true,//清除
    autoclose: true,
	todayHighlight: true,
    format: 'yyyy-mm-dd',
    startDate: '2021-01-01'

});
</script>