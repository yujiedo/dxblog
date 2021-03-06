<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\mumu\WWW\windowCms\public/../dxcms/app/admin\view\login\login.html";i:1586068013;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录 - Window - 后台模板</title>

    <link rel="shortcut icon" type="text/css" href="/dxcms/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="/dxcms/include/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/dxcms/include/layui/css/layui.css" />
    <link rel="stylesheet" type="text/css" href="/dxcms/css/dx-template.css" />

    <script src="/dxcms/js/jquery.js" type="text/javascript" charset="utf-8"></script>
    <script src="/dxcms/include/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/dxcms/include/layui/layui.js" type="text/javascript" charset="utf-8"></script>

    <style type="text/css">
        .message{
            color: #FFF;
            line-height: 2;
            text-align: center;
            position: absolute;
            right: 0;
            left: 0;
            top: -50px;
            margin: auto;
        }
    </style>

</head>
<body class="dx-body">
<div class="dx-memu">
    <div class="dx-memu-item">
        <img src="/dxcms/icon/imageres_109.ico">
        <h3>我的电脑</h3>
    </div>

    <div class="dx-memu-item">
        <img src="/dxcms/icon/imageres_6400.ico">
        <h3>通讯录</h3>
    </div>

    <div class="dx-memu-item">
        <img src="/dxcms/icon/imageres_79.ico">
        <h3>管理员</h3>
    </div>

    <div class="dx-memu-item">
        <img src="/dxcms/icon/imageres_8.ico">
        <h3>新建文件夹</h3>
    </div>

    <div class="dx-memu-item">
        <img src="/dxcms/icon/imageres_181.ico">
        <h3>小电影</h3>
    </div>

    <div class="dx-memu-item">
        <img src="/dxcms/icon/imageres_113.ico">
        <h3>壁纸图片</h3>
    </div>

    <div class="dx-memu-item">
        <img src="/dxcms/icon/imageres_112.ico">
        <h3>文档管理</h3>
    </div>

    <div class="dx-memu-item">
        <img src="/dxcms/icon/imageres_1022.ico">
        <h3>系统日志</h3>
    </div>

    <div class="dx-memu-item">
        <img src="/dxcms/icon/imageres_55.ico">
        <h3>回收站</h3>
    </div>
</div>

<div class="login-body">

    <div class="code-img">
        <img src="<?php echo url('captcha/index'); ?>" alt="验证码" onclick="this.src='<?php echo url('captcha/index'); ?>?captcha'+Math.random()">
    </div>
    <div class="login-box">
        <div class="login-form">
            <div class="message" id="tishi"></div>
            <form class="form-inline" style="text-align: center;">

                <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail2">账号</label>
                    <input type="text" name="account" class="form-control" id="exampleInputEmail2" autocomplete="off" placeholder="账号">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputPassword3">密码</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword3" autocomplete="off" placeholder="密码">
                </div>
                <div class="checkbox code-box">
                    <label class="sr-only" for="exampleInputPassword4">验证码</label>
                    <input type="text" name="captcha" class="form-control" id="exampleInputPassword4" autocomplete="off" placeholder="验证码">
                </div>
                <button type="button" lay-submit lay-filter="formDemo" class="btn btn-default">登录</button>
            </form>
        </div>
    </div>
</div>
</body>

<script type="text/javascript">
    $('#exampleInputPassword4').focus(function(){
        $('.code-img').animate({
            top:'5%',
        }).animate({top:0},500);
    });


    layui.use('form', function(){
        var form = layui.form;
        var text = $('#tishi');

        $('input').focus(function () {
            text.html("");
        });
        //监听提交
        form.on('submit(formDemo)', function(data){
            $.ajax({
                type: "post",
                url: "<?php echo url('login/checkLogin'); ?>",
                async: true,
                data: $('form').serialize(),
                dataType: 'json',
                success: function (data) {
                    if (data.code === 0) {
                        text.html('<span class="icon icon-cuowu1" style="color: #FD482C;margin-right: 10px;font-size: 18px;"></span>'+ data.msg);
                    } else {
                        text.html('<span class="icon icon-fasong" style="color: #fff32f;"></span>'+ data.msg
                            +'<a href="{:url(\'dxcms/index/index\')}" style="color: #FD482C;">跳转中</a>……');
                        setInterval(function () {
                            window.location.href="<?php echo url('admin/index/index'); ?>";
                        },2000);

                    }
                }
            });
        });
    });

</script>

</html>
