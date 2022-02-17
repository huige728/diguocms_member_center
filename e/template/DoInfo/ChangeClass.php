<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='增加信息';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../">首页</a></li>
		  <li><a href="../member/cp/">会员中心</a></li>
		  <li><a href="ListInfo.php?mid='.$mid.'">管理信息</a></li>
		  <li class="active">增加信息&nbsp;('.$mr[qmname].')</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<script>
function CheckChangeClass()
{
	if(document.changeclass.classid.value==0||document.changeclass.classid.value=='')
	{
		alert("请选择栏目");
		return false;
	}
	return true;
}
</script>

<div class="wrapper">

<?=$url?>

	<div class="form_main">
		<h2 class="title">增加信息</h2>
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title">你好，<b><?=$musername?></h3>
			</div>
			<div class="panel-body">
				<h4>请选择要增加信息的栏目 <small class="text-danger">(请选择终极栏目[蓝色条])</small></h4>
				<form action="AddInfo.php" method="get" name="changeclass" id="changeclass" onsubmit="return CheckChangeClass();">
					<input name="mid" type="hidden" id="mid" value="<?=$mid?>">
					<input name="enews" type="hidden" id="enews" value="MAddInfo">
					<div class="form-group">
						<select name="classid" multiple class="form-control">
							<script src="<?=$classjs?>"></script>
						</select>
					</div>
					<input type="submit" name="Submit" value="添加信息" class="btn btn-danger"> 
				 </form>			
			</div>			
		</div>
	</div>

</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>