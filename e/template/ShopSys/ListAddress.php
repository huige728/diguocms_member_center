<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='配送地址列表';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../">首页</a></li>
		  <li><a href="../../member/cp/">会员中心</a></li>
		  <li class="active">配送地址列表</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>

<div class="wrapper">
<?=$url?>
	<div class="form_main">
		<h2 class="title"><?=$public_diyr['pagetitle']?></h2>
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>地址名称</th>
						<th>默认</th>
						<th>操作</th>						
					</tr>
				</thead>
				<tbody>				
<?php
while($r=$empire->fetch($sql))
{
	if($r['isdefault'])
	{
		$isdefault='是';
	}
	else
	{
		$isdefault='--';
	}
?>				
					<tr>
						<td><?=stripSlashes($r['addressname'])?></td>
						<td><?=$isdefault?></td>
						<td>
							[<a href="AddAddress.php?enews=EditAddress&addressid=<?=$r['addressid']?>">修改</a>] 
							[<a href="../doaction.php?enews=DefAddress&addressid=<?=$r['addressid']?>" onclick="return confirm('确认要设为默认?');">默认</a>] 
							[<a href="../doaction.php?enews=DelAddress&addressid=<?=$r['addressid']?>" onclick="return confirm('确认要删除?');">删除</a>]						
						</td>
					</tr>
<?php
}
?>
					<tr>
						<td colspan="3">[<a href="AddAddress.php?enews=AddAddress">增加配送地址</a>]</td>
					</tr>			
				</tbody>	
			</table>
	</div>

</div>

<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>