<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='提交错误报告';
$url='
		<ol class="breadcrumb">
		  <li><a href="../../../">首页</a></li>
		  <li><a href="'.$titleurl.'">'.$r[title].'</a></li>
		  <li class="active">提交错误报告</li>
		</ol>
';
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="wrapper">
<?=$url?>
	<div class="form_main">
		<h2 class="title"><?=$public_diyr['pagetitle']?></h2>
		<form name="form1" method="post" action="../../enews/index.php" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-4 control-label">信息标题:</label>
				<div class="col-sm-4">
				  <p class="form-control-static"><a href='<?=$titleurl?>' target=_blank><?=$r[title]?></a></p>
				</div>
			</div>			
			<div class="form-group">
				<label for="email" class="col-sm-4 control-label">您的邮箱: <i class="text-danger">（方便回复您）</i></label>
				<div class="col-sm-4">
				  <input type="email" class="form-control" id="email" name="email">
				</div>					
			</div>
			<div class="form-group">
				<label for="name4" class="col-sm-4 control-label">报告内容: <i class="text-danger">*</i></label>
				<div class="col-sm-4">
					<textarea name="errortext" cols="60" rows="12" id="name4" class="form-control"></textarea>
				</div>
			</div>	
			<?php
			if($public_r['reportkey']){
			?>			
			<div class="form-group">
				<label for="key" class="col-sm-4 control-label">验证码</label>			
				<div class="col-sm-2">
					<input type="text" class="form-control" id="key" name="key" />
				</div>
				<div class="col-sm-2">  
				<a id="reportshowkey" href="#" onclick="edoshowkey('reportshowkey','report','<?=$public_r['newsurl']?>');" title="点击显示验证码">点击显示验证码</a>
				</div>					
			</div>
			<?php
			}	
			?>

			
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">			
					<input type="submit" name="Submit" value="提交" class="btn btn-danger"> 
					<input type="reset" name="Submit2" value="重置" class="btn btn-default"> 
					<input name="enews" type="hidden" id="enews" value="AddError">
					<input name="id" type="hidden" id="id" value="<?=$id?>">
					<input name="classid" type="hidden" id="classid" value="<?=$classid?>">
				</div>			
			</div>

		</form>	
	</div>

</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>