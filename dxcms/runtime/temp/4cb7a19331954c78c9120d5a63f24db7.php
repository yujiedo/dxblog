<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"D:\mumu\WWW\windowCms\public/../dxcms/app/admin\view\systems\add.html";i:1585910029;s:61:"D:\mumu\WWW\windowCms\dxcms\app\admin\view\common\_style.html";i:1585897035;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>添加设置 - Window - 后台模板 </title>
		<link rel="stylesheet" type="text/css" href="/dxcms/include/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/dxcms/include/layui/css/layui.css" />
<link rel="stylesheet" type="text/css" href="/dxcms/css/dx-template.css" />

<script src="/dxcms/js/jquery.js" type="text/javascript" charset="utf-8"></script>
<script src="/dxcms/include/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/dxcms/include/layui/layui.js" type="text/javascript" charset="utf-8"></script>
<script src="/dxcms/js/dx-template.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body>
		<div class="container-fluid dx-main">

			<form action="<?php echo url('systems/save'); ?>" method="POST" class="col-md-3 layui-form" style="height: auto;padding:20px 15px;">

				<div class="form-group">
					<label for="account">添加位置</label>
					<select name="pid" class="form-control">
						<option value="1" selected> 站点设置 </option>
						<option value="2"> 安全设置 </option>
						<option value="3"> 邮件设置 </option>
						<option value="4"> 支付设置 </option>
						<option value="5"> 联系方式 </option>
					</select>
				</div>

				<div class="form-group">
					<label for="account">设置说明</label>
					<input type="text" class="form-control" name="title" value="" id="account" autocomplete="off">
				</div>

				<div class="form-group">
					<label for="password">设置参数</label>
					<input type="text" class="form-control" name="name" value="" id="password" autocomplete="off">
				</div>

				<div class="form-group">
					<label for="name">默认内容</label>
					<textarea class="form-control" name="value" id="name" autocomplete="off"></textarea>
				</div>

				<div class="form-group">
					<label for="name">设置类型</label>
					<div>
						<input type="radio" name="input_type" value="1" title="单行文本" checked>
						<input type="radio" name="input_type" value="2" title="文本域">
					</div>
				</div>

				<button type="submit" class="btn btn-primary dx-btn-submit"> 提交 </button>
			</form>

		</div>

	</body>
	<script type="text/javascript">

	</script>
</html>
