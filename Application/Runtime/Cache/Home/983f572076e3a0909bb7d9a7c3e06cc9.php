<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>智能交通管理系统</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="/itmsdb/Public/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="/itmsdb/Public/bower_components/font-awesome/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="/itmsdb/Public/bower_components/Ionicons/css/ionicons.min.css">
<!-- jvectormap -->
<link rel="stylesheet" href="/itmsdb/Public/bower_components/jvectormap/jquery-jvectormap.css">
<!-- Theme style -->
<link rel="stylesheet" href="/itmsdb/Public/dist/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="/itmsdb/Public/dist/css/skins/_all-skins.min.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

<!-- Google Font -->
<link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header"> 
    
    <!-- Logo --> 
    <a href="<?php echo U('Index/index2');?>" class="logo"> 
    <!-- mini logo for sidebar mini 50x50 pixels --> 
    <span class="logo-mini"><b>智能交通管理系统</b></span> 
    <!-- logo for regular state and mobile devices --> 
    <span class="logo-lg"><b>智能交通管理系统</b></span> </a> 
    
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top"> 
      <!-- Sidebar toggle button--> 
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> 
	  <span class="sr-only">Toggle navigation</span> </a> 
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- Control Sidebar Toggle Button -->
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="<?php echo U('Index/logout');?>" ><i class="glyphicon glyphicon-off"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar"> 
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar"> 
      <!-- Sidebar user panel -->
      <!-- Profile Image -->
      <div class="box box-primary">
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-circle" src="/itmsdb/Public/dist/img/user4-128x128.jpg" alt="User profile picture">
          <h3 class="profile-username text-center">阿尼玛甜</h3>
          </ul>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active treeview"> <a href="<?php echo U('Index/index2');?>"> <i class="fa fa-home"></i> <span>主页</span> <span class="pull-right-container">  </span> </a> </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-car"></i> <span>小车子系统</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo U('Index/data011');?>"><i class="fa fa-circle-o"></i>车辆基本信息</a></li>
            <li><a href="<?php echo U('Index/data012');?>"><i class="fa fa-circle-o"></i>车辆充值记录</a></li>
            <li><a href="<?php echo U('Index/data013');?>"><i class="fa fa-circle-o"></i>车辆违章记录</a></li>
          </ul>
        </li>
        <li> <a href="pages/tables/data021.html"> <i class="fa fa-map-signs"></i> <span>红绿灯子系统</span> <span class="pull-right-container">  </span> </a>
        </li>
        <li> <a href="pages/tables/data031.html"> <i class="fa fa-filter"></i> <span>路灯子系统</span> <span class="pull-right-container">  </span> </a>
        </li>
        <li> <a href="pages/tables/data041.html"> <i class="fa fa-filter"></i> <span>环境子系统</span> <span class="pull-right-container">  </span> </a>
        </li>
   
        <li class="treeview"> <a href="#"> <i class="fa fa-bus"></i> <span>公交车模块</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/data051.html"><i class="fa fa-circle-o"></i> 站台信息查询</a></li>
            <li><a href="pages/tables/data052.html"><i class="fa fa-circle-o"></i> 车载容量查询</a></li>
          </ul>
        </li>
        <li> <a href="pages/tables/data061.html"> <i class="fa fa-road"></i> <span>道路子系统</span> <span class="pull-right-container">  </span> </a>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-database"></i> <span>基础数据表 </span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/data071.html"><i class="fa fa-circle-o"></i> 车辆信息（管理员权限）</a></li>
            <li><a href="pages/tables/data072.html"><i class="fa fa-circle-o"></i> 违章代码</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-users"></i> <span>用户管理</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/data081.html"><i class="fa fa-circle-o"></i> 用户权限管理（管理员权限）</a></li>
            <li><a href="pages/tables/data082.html"><i class="fa fa-circle-o"></i> 获取所有用户信息（管理员权限）</a></li>
          </ul>
        </li>
        <li> <a href="pages/tables/data091.html"> <i class="fa fa-cloud"></i> <span>气象信息查询</span> <span class="pull-right-container">  </span> </a>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-exchange"></i> <span>Etc模块</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/data101.html"><i class="fa fa-circle-o"></i> Etc基本信息</a></li>
            <li><a href="pages/tables/data111.html"><i class="fa fa-circle-o"></i> Etc通行日志</a></li>
          </ul>
        </li>
      

      </ul>
    </section>
    <!-- /.sidebar --> 
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> 仪表盘 <small>版本 2.0</small> </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li class="active">仪表盘</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content"> 
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box"> <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
            <div class="info-box-content"> <span class="info-box-text">温度</span> <span class="info-box-number">20<small>℃</small></span> </div>
            <!-- /.info-box-content --> 
          </div>
          <!-- /.info-box --> 
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box"> <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
            <div class="info-box-content"> <span class="info-box-text">湿度</span> <span class="info-box-number">41,410</span> </div>
            <!-- /.info-box-content --> 
          </div>
          <!-- /.info-box --> 
        </div>
        <!-- /.col --> 
        
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box"> <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
            <div class="info-box-content"> <span class="info-box-text">CQ2</span> <span class="info-box-number">760</span> </div>
            <!-- /.info-box-content --> 
          </div>
          <!-- /.info-box --> 
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box"> <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
            <div class="info-box-content"> <span class="info-box-text">PM2.5</span> <span class="info-box-number">2,000</span> </div>
            <!-- /.info-box-content --> 
          </div>
          <!-- /.info-box --> 
        </div>
        <!-- /.col --> 
      </div>
      <!-- /.row -->
      
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">月度回顾报告</h3>
			  <img class="img-responsive pad" src="/itmsdb/Public/dist/img/main_bg.jpg" alt="Photo">


            </div>
            
            </div>
            
            </div>
            <!-- /.box-footer --> 
          </div>
          <!-- /.box --> 
        </div>
        <!-- /.col --> 
      <!-- /.row --> 
      
 
    </section>
    <!-- /.content --> 
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <div class="pull-right hidden-xs"> <b>Version</b> 2.0.7 </div>
    <strong>Copyright &copy; 2016-2017 成都中慧.</strong> All rights
    reserved. </footer>
  

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper --> 

<!-- jQuery 3 --> 
<script src="/itmsdb/Public/bower_components/jquery/dist/jquery.min.js"></script> 
<!-- Bootstrap 3.3.7 --> 
<script src="/itmsdb/Public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> 
<!-- FastClick --> 
<script src="/itmsdb/Public/bower_components/fastclick/lib/fastclick.js"></script> 
<!-- AdminLTE App --> 
<script src="/itmsdb/Public/dist/js/adminlte.min.js"></script> 
<!-- Sparkline --> 
<script src="/itmsdb/Public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script> 
<!-- jvectormap  --> 
<script src="/itmsdb/Public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script> 
<script src="/itmsdb/Public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> 
<!-- SlimScroll --> 
<script src="/itmsdb/Public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script> 
<!-- ChartJS --> 
<script src="/itmsdb/Public/bower_components/Chart.js/Chart.js"></script> 
<!-- AdminLTE dashboard demo (This is only for demo purposes) --> 
<script src="/itmsdb/Public/dist/js/pages/dashboard2.js"></script> 
<!-- AdminLTE for demo purposes --> 
<script src="/itmsdb/Public/dist/js/demo.js"></script>
</body>
</html>