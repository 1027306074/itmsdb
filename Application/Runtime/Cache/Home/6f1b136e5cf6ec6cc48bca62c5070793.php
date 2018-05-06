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
<script>
function set(username,key){
$.ajax({
				type : "post", 
                url : "<?php echo U('Index/data081');?>",
                data : {username:username,key:key},              
                success:function(res){
				
                   if(res==1){
						alert("修改成功！");
						location.reload();
				   }else{
						alert("修改失败！");
				
				   }
                } 
});
}
</script>
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
        <li> <a href="<?php echo U('Index/data021');?>"> <i class="fa fa-map-signs"></i> <span>红绿灯子系统</span> <span class="pull-right-container">  </span> </a>
        </li>
        <li> <a href="<?php echo U('Index/data031');?>"> <i class="fa fa-filter"></i> <span>路灯子系统</span> <span class="pull-right-container">  </span> </a>
        </li>
        <li> <a href="<?php echo U('Index/data041');?>"> <i class="fa fa-filter"></i> <span>环境子系统</span> <span class="pull-right-container">  </span> </a>
        </li>
   
        <li class="treeview"> <a href="#"> <i class="fa fa-bus"></i> <span>公交车模块</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo U('Index/data051');?>"><i class="fa fa-circle-o"></i> 站台信息查询</a></li>
            <li><a href="<?php echo U('Index/data052');?>"><i class="fa fa-circle-o"></i> 车载容量查询</a></li>
          </ul>
        </li>
        <li> <a href="<?php echo U('Index/data061');?>"> <i class="fa fa-road"></i> <span>道路子系统</span> <span class="pull-right-container">  </span> </a>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-database"></i> <span>基础数据表 </span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo U('Index/data071');?>"><i class="fa fa-circle-o"></i> 车辆信息（管理员权限）</a></li>
            <li><a href="<?php echo U('Index/data072');?>"><i class="fa fa-circle-o"></i> 违章代码</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-users"></i> <span>用户管理</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo U('Index/data081');?>"><i class="fa fa-circle-o"></i> 用户权限管理（管理员权限）</a></li>
            <li><a href="<?php echo U('Index/data082');?>"><i class="fa fa-circle-o"></i> 获取所有用户信息（管理员权限）</a></li>
          </ul>
        </li>
        <li> <a href="<?php echo U('Index/data091');?>"> <i class="fa fa-cloud"></i> <span>气象信息查询</span> <span class="pull-right-container">  </span> </a>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-exchange"></i> <span>Etc模块</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo U('Index/data101');?>"><i class="fa fa-circle-o"></i> Etc基本信息</a></li>
            <li><a href="<?php echo U('Index/data102');?>"><i class="fa fa-circle-o"></i> Etc通行日志</a></li>
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
      <h1>      
          <ol class="breadcrumb">
            <li><a href="../../index2.html"><i class="fa  fa-sign-out"></i> 主页</a></li>
            <li><a href="#">用户管理</a></li>
            <li class="active">用户管理权限</li>
          </ol>
      </h1>
    </section>

    <!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <div class="box">

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>用户名称</th>
                    <th>口令</th>
                    <th>角色</th>
                    <th>权限管理</th>
                  </tr>
                </thead>
                <tbody>
				<?php if(is_array($info)): $k = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
                    <td><?php echo ($k); ?></td>
                    <td><?php echo ($vo["username"]); ?></td>
                    <td><?php echo ($vo["password"]); ?></td>
				
					<?php if($vo["role"] == 1): ?><td>一般管理员</td>
						<?php elseif($vo["role"] == 2): ?>
						<td>普通用户</td>
						<?php elseif($vo["role"] == 3): ?>
						<td>无效用户</td><?php endif; ?>
                   <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-default" onclick="set('<?php echo ($vo["username"]); ?>',1)">设为一般管理员</button>
                          <button type="button" class="btn btn-default" onclick="set('<?php echo ($vo["username"]); ?>',2)">设为普通用户</button>
                          <button type="button" class="btn btn-default" onclick="set('<?php echo ($vo["username"]); ?>',3)">设为无效用户</button>
                        </div>
                    </td>
                  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                  
                                  
                  
                  
                  
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body --> 
          </div>
          <!-- /.box --> 
        </div>
        <!-- /.col --> 
      </div>
      <!-- /.row --> 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.0.7
    </div>
    <strong>Copyright &copy; 2016-2017 成都中慧.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="/itmsdb/Public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/itmsdb/Public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="/itmsdb/Public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/itmsdb/Public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/itmsdb/Public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/itmsdb/Public/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/itmsdb/Public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/itmsdb/Public/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>