<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$temp='
		<div class="col-sm-6">
			<div class="thumbnail text-center"><!--list.var1--></div>
		</div>
		<div class="col-sm-6">
			<div class="thumbnail text-center"><!--list.var2--></div>
		</div>
		<div class="col-sm-6">
			<div class="thumbnail text-center"><!--list.var3--></div>
		</div>
		<div class="col-sm-6">
			<div class="thumbnail text-center"><!--list.var4--></div>
		</div>
	';
$footer='<div style="text-align: center;">'.$returnpage.'</div>';

$templist="";
$sql=$empire->query($query);
$b=0;
$ti=0;
$tlistvar=$temp;
while($r=$empire->fetch($sql))
{
	$b=1;
	$ti++;
	if(empty($r[stylepic]))
	{
		$r[stylepic]="../../data/images/notemp.gif";
	}
	//当前模板
	if($r['styleid']==$addr[spacestyleid])
	{
		$r[stylename]='<span class="label label-success">当前主题</span> '.$r[stylename];
	}
	$var='
		  <img alt="'.$r[stylesay].'" src="'.$r[stylepic].'" class="img-responsive m-t-20" />
		  <div class="caption">
			<h3>'.$r[stylename].'</h3>
			<p><a href="index.php?enews=ChangeSpaceStyle&styleid='.$r[styleid].'" class="btn btn-primary" role="button">选定</a></p>
		  </div>	
	    ';	
	
	$tlistvar=str_replace("<!--list.var".$ti."-->",$var,$tlistvar);
	if($ti>=4)
	{
		$templist.=$tlistvar;
		$tlistvar=$temp;
		$ti=0;
	}
}
//模板
if($ti!=0&&$ti<4)
{
	$templist.=$tlistvar;
}
$templist=$templist.$footer;

$public_diyr['pagetitle']='选择空间模板';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../">首页</a></li>
		  <li><a href="../cp/">会员中心</a></li>
		  <li class="active">选择空间模板</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>

<div class="wrapper">
<?=$url?>
	<div class="form_main">
		<h2 class="title"><?=$public_diyr['pagetitle']?></h2>
		<div class="row">
			<?=$templist?>
		</div>
	</div>
</div>

<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>