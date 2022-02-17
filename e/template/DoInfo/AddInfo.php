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
		  <li><a href="../../">首页</a></li>
		  <li><a href="../member/cp/">会员中心</a></li>
		  <li><a href="ListInfo.php?mid='.$mid.'">管理信息</a></li>
		  <li class="active">'.$word.'&nbsp;('.$mr[qmname].')</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<script type="text/javascript" src="../data/js/jstime/WdatePicker.js"></script>
<script type="text/javascript" src="../data/js/jscolor/jscolor.js"></script>
<script>
function bs(){
	var f=document.add
	if(f.title.value.length==0){alert("标题还没写");f.title.focus();return false;}
	if(f.classid.value==0){alert("请选择栏目");f.classid.focus();return false;}
}
function foreColor(){
  if(!Error())	return;
  var arr = showModalDialog("../data/html/selcolor.html", "", "dialogWidth:296px; dialogHeight:280px; status:0");
  if (arr != null) document.add.titlecolor.value=arr;
  else document.add.titlecolor.focus();
}
function FieldChangeColor(obj){
  if(!Error())	return;
  var arr = showModalDialog("../data/html/selcolor.html", "", "dialogWidth:296px; dialogHeight:280px; status:0");
  if (arr != null) obj.value=arr;
  else obj.focus();
}
</script>
<script src="../data/html/postinfo.js"></script>
<?=$loadeditorjs?>
<div class="wrapper">

<?=$url?>

	<div class="form_main">
		<h2 class="title"><?=$word?></h2>
		<form name="add" method="POST" enctype="multipart/form-data" action="ecms.php" onsubmit="return EmpireCMSQInfoPostFun(document.add,'<?=$mid?>');" class="form-horizontal">
		    <input type=hidden value="<?=$enews?>" name=enews> <input type=hidden value="<?=$classid?>" name=classid> 
            <input name=id type=hidden id="id" value="<?=$id?>"> <input type=hidden value="<?=$filepass?>" name=filepass> 
            <input name=mid type=hidden id="mid" value="<?=$mid?>">
			
			<div class="form-group">
				<label class="col-sm-4 control-label">提交者</label>
				<div class="col-sm-4">
					<p class="form-control-static"><?=$musername?></p>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">栏目</label>
				<div class="col-sm-4">
					<p class="form-control-static"><?=$postclass?></p>
				</div>
			</div>			
<?php
@include($modfile);
?>
<?=$showkey?>	

			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">
					<input type="submit" name="addnews" value="提交" class="btn btn-danger">
					<input type="reset" name="Submit2" value="重置" class="btn btn-default">
				</div>
			</div>		
		</form>
	</div>

</div>

<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>
<script type="text/javascript">
	$(document).ready(function(){
		var $alltext = $(".form-horizontal :text");
		var $allselect = $(".form-horizontal select");
		var $alltextarea = $(".form-horizontal textarea");		
		$alltext.addClass("form-control");
		$allselect.addClass("form-control");
		$alltextarea.addClass("form-control");
	});
</script>