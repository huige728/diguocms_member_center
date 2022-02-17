<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
//位置
$url="$spacename &gt; $mr[qmname]";
include("header.temp.php");
?>

	<div class="container">
		<div class="row">
			<main class="col-md-9">
				<?=$spacegg?>
				<div class="panel panel-danger">
					<div class="panel-heading clearfix">
						<h3 class="pull-left panel-title"><?=$mr['qmname']?></h3>
						<div class="pull-right"><a href="../DoInfo/ChangeClass.php?mid=<?=$mid?>" target="_blank">增加<?=$mr['qmname']?></a></div>
					</div>
					<div class="panel-body">
<?php
while($r=$empire->fetch($sql))
{
	$titleurl=sys_ReturnBqTitleLink($r);//链接
?>	
<div class="list-group">
  <a href="<?=$titleurl?>" target="_blank" class="list-group-item"><?=stripSlashes($r[title])?></a>&nbsp;&nbsp;
  <font color="#666666">(<?=date("Y-m-d H:i:s",$r[newstime])?>)</font>
</div>
<?php
}
?>				
					</div>
					<?=$returnpage?>					
				</div>
				
			</main>
<?php
include("side.temp.php");
?>
		</div>
	</div>
<?php
include("footer.temp.php");
?>
