<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/itmsdb/Public/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/itmsdb/Public/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/itmsdb/Public/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/itmsdb/Public/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/itmsdb/Public/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">

	<div class="login-logo">
	  <img class="img-responsive pad" src="/itmsdb/Public/dist/img/logo.png" alt="Photo">
	</div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">管理系统登录</p>


    <form action="" method="post" id="form_login">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" value="<?php echo $_COOKIE['name'];?>" placeholder="<?php echo $_COOKIE['name'];?>" name="info[username]" id="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input style="margin-top:35px;" type="password" value="<?php echo $_COOKIE['password']?>" class="form-control" placeholder="<?php echo $_COOKIE['password']?>" name="info[password]" id="password" type="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <!-- <input type="checkbox"> 记住密码 -->
			  <?php if($_COOKIE['remember'] == 1){?><input type="checkbox" name="remember" value="1" checked><?php }else{($_COOKIE['remember'] == "")?><input type="checkbox" name="remember" id="remember" value="1">记住密码<?php }?></td>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="button" class="btn btn-primary btn-block btn-flat" onclick="login()">登  录</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


    <!-- /.social-auth-links -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="/itmsdb/Public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/itmsdb/Public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/itmsdb/Public/plugins/iCheck/icheck.min.js"></script>
<script src="/itmsdb/Public/dist/js/layer.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
  function login(){
   
        var username = $("#username").val();
        var password = $("#password").val();
		var remember = $("#remember").val();
        if(!username){
		layer.tips('请输入用户名', '#username', {
		tips: [1, 'red'] 
});
            return false;
        }
        if(!password){
				layer.tips('请输入密码', '#password', {
				tips: [1, 'red'] 
});
            return false;
        }
		$.ajax({
        type: "post",
        url: "<?php echo U('Index/index');?>",
        data: {
            u: username,
            p: password,
			remember:remember
        },
        success: function(r) { 
			
            if(r == 1) {  
				alert("登录成功！");	
                window.location.href = "<?php echo U('Index/index2');?>";
            } else {
                alert("用户名或密码错误！");
            }
        }
    });
   
    

	}
</script>
</body>
</html>