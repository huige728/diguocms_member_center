<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
//位置
$url="$spacename &gt; 在线反馈";
include("header.temp.php");
?>

	<div class="container">
		<div class="row">
			<main class="col-md-9">
				<?=$spacegg?>
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h3 class="panel-title">在线反馈</h3>
					</div>
					<div class="panel-body">
						<form name="addfeedback" method="post" action="../member/mspace/index.php" class="form-horizontal">
							<input type="hidden" name="userid" value="<?=$userid?>">
							<input type="hidden" name="enews" value="AddMemberFeedback">					
							
							<div class="form-group">
								<label for="name" class="col-sm-2 control-label">联系人</label>
								<div class="col-sm-10">
									<input type="text" id="name" name="name" class="form-control"> 
								</div>
							</div>
							<div class="form-group">
								<label for="company" class="col-sm-2 control-label">公司名称</label>
								<div class="col-sm-10">
									<input name="company" type="text" id="company" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-sm-2 control-label">联系邮箱</label>
								<div class="col-sm-10">
									<input name="email" type="text" id="email" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="phone" class="col-sm-2 control-label">联系电话</label>
								<div class="col-sm-10">
									<input name="phone" type="text" id="phone" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="fax" class="col-sm-2 control-label">传真</label>
								<div class="col-sm-10">
									<input name="fax" type="text" id="fax" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="address" class="col-sm-2 control-label">联系地址</label>
								<div class="col-sm-10">
									<input name="address" type="text" id="address" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="zip" class="col-sm-2 control-label">邮编</label>
								<div class="col-sm-10">
									<input name="zip" type="text" id="zip" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="title" class="col-sm-2 control-label">反馈标题</label>
								<div class="col-sm-10">
									<input name="title" type="text" id="title" value="<?=RepPostStr($_GET['title'],1)?>" class="form-control"> 
								</div>
							</div>
							<div class="form-group">
								<label for="ftext" class="col-sm-2 control-label">反馈内容</label>
								<div class="col-sm-10">
									<textarea name="ftext" cols="60" rows="12" id="ftext" class="form-control"></textarea> 
								</div>
							</div>
							<div class="form-group">
								<label for="key" class="col-sm-2 control-label">验证码：</label>			
								<div class="col-sm-8">
									<input type="text" class="form-control" id="key" name="key">
								</div>
								<div class="col-sm-2">
									<a id="spacefbshowkey" href="#" onclick="edoshowkey('spacefbshowkey','spacefb','<?=$public_r['newsurl']?>');" title="点击显示验证码">点击显示验证码</a>
								</div>					
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-4">
									<input type="submit" name="Submit" value="提交" class="btn btn-danger">
								</div>			
							</div>
							
						</form>

					</div>
					
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