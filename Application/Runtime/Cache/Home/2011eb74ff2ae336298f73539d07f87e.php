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
            <li><a href="<?php echo U('Index/index2');?>"><i class="fa  fa-sign-out"></i> 主页</a></li>
            
            <li class="active">气象信息查询</li>
          </ol>
      </h1>
    </section>

	<!-- Main content -->
    <section class="content">

		<div class="row">
			<div class="col-md-6">
				<!-- AREA CHART -->
				<div class="box box-primary">
				<div class="box-header with-border">
				  <h3 class="box-title">最近几天温度比较</h3>

				  <div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
					</button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
				  </div>
				</div>
				<div class="box-body chart-responsive">
				  <div class="chart" id="revenue-chart" style="height: 300px;"></div>
				</div>
				<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
			<!-- /.col -->

			<div class="col-md-6">
			
				<div class="box">

				<!-- interactive chart -->
				  <div class="box box-widget">
					<div class="box-header with-border">
					  <i class="fa fa-bar-chart-o"></i>

					  <h3 class="box-title">温度实时显示</h3>

					  <div class="box-tools pull-right">
						Real time
						<div class="btn-group" id="realtime" data-toggle="btn-toggle">
						  <button type="button" class="btn btn-default btn-xs active" data-toggle="on">On</button>
						  <button type="button" class="btn btn-default btn-xs" data-toggle="off">Off</button>
						</div>
					  </div>
					</div>
					<div class="box-body">
					  <div id="interactive" style="height: 300px;"></div>
					</div>
					<!-- /.box-body-->
				  </div>
				  <!-- /.box -->
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->		
			
		
								
			</div>
		</div>	
        <!-- /.col --> 
      </div>
      <!-- /.row --> 
    </section>
    <!-- /.content --> 
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
<!-- Morris.js charts -->
<script src="/itmsdb/Public/bower_components/raphael/raphael.min.js"></script>
<script src="/itmsdb/Public/bower_components/morris.js/morris.min.js"></script>
<!-- FastClick -->
<script src="/itmsdb/Public/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/itmsdb/Public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/itmsdb/Public/dist/js/demo.js"></script>
<!-- FLOT CHARTS -->
<script src="/itmsdb/Public/bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="/itmsdb/Public/bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="/itmsdb/Public/bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="/itmsdb/Public/bower_components/Flot/jquery.flot.categories.js"></script>
<!-- Page script -->
<!-- page script -->
<script>
  $(function () {
  
  /*
     * Flot Interactive Chart
     * -----------------------
     */
    // We use an inline data source in the example, usually data would
    // be fetched from a server
    var data = [], totalPoints = 100

    function getRandomData() {

      if (data.length > 0)
        data = data.slice(1)

      // Do a random walk
      while (data.length < totalPoints) {

        var prev = data.length > 0 ? data[data.length - 1] : 50,
            y    = prev + Math.random() * 10 - 5

        if (y < 0) {
          y = 0
        } else if (y > 100) {
          y = 100
        }

        data.push(y)
      }

      // Zip the generated y values with the x values
      var res = []
      for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]])
      }

      return res
    }

    var interactive_plot = $.plot('#interactive', [getRandomData()], {
      grid  : {
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color     : '#3c8dbc'
      },
      lines : {
        fill : true, //Converts the line chart to area chart
        color: '#3c8dbc'
      },
      yaxis : {
        min : 0,
        max : 100,
        show: true
      },
      xaxis : {
        show: true
      }
    })

    var updateInterval = 500 //Fetch data ever x milliseconds
    var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching
    function update() {

      interactive_plot.setData([getRandomData()])

      // Since the axes don't change, we don't need to call plot.setupGrid()
      interactive_plot.draw()
      if (realtime === 'on')
        setTimeout(update, updateInterval)
    }

    //INITIALIZE REALTIME DATA FETCHING
    if (realtime === 'on') {
      update()
    }
    //REALTIME TOGGLE
    $('#realtime .btn').click(function () {
      if ($(this).data('toggle') === 'on') {
        realtime = 'on'
      }
      else {
        realtime = 'off'
      }
      update()
    })
    /*
     * END INTERACTIVE CHART
     */
	
		
	
    "use strict";

    // AREA CHART
    var area = new Morris.Area({
      element: 'revenue-chart',
      resize: true,
      data: [
        {y: '2011 Q1', item1: 2666, item2: 2666},
        {y: '2011 Q2', item1: 2778, item2: 2294},
        {y: '2011 Q3', item1: 4912, item2: 1969},
        {y: '2011 Q4', item1: 3767, item2: 3597},
        {y: '2012 Q1', item1: 6810, item2: 1914},
        {y: '2012 Q2', item1: 5670, item2: 4293},
        {y: '2012 Q3', item1: 4820, item2: 3795},
        {y: '2012 Q4', item1: 15073, item2: 5967},
        {y: '2013 Q1', item1: 10687, item2: 4460},
        {y: '2013 Q2', item1: 8432, item2: 5713}
      ],
      xkey: 'y',
      ykeys: ['item1', 'item2'],
      labels: ['Item 1', 'Item 2'],
      lineColors: ['#a0d0e0', '#3c8dbc'],
      hideHover: 'auto'
    });

    // LINE CHART
    var line = new Morris.Line({
      element: 'line-chart',
      resize: true,
      data: [
        {y: '2011 Q1', item1: 2666},
        {y: '2011 Q2', item1: 2778},
        {y: '2011 Q3', item1: 4912},
        {y: '2011 Q4', item1: 3767},
        {y: '2012 Q1', item1: 6810},
        {y: '2012 Q2', item1: 5670},
        {y: '2012 Q3', item1: 4820},
        {y: '2012 Q4', item1: 15073},
        {y: '2013 Q1', item1: 10687},
        {y: '2013 Q2', item1: 8432}
      ],
      xkey: 'y',
      ykeys: ['item1'],
      labels: ['Item 1'],
      lineColors: ['#3c8dbc'],
      hideHover: 'auto'
    });

    //DONUT CHART
    var donut = new Morris.Donut({
      element: 'sales-chart',
      resize: true,
      colors: ["#3c8dbc", "#f56954", "#00a65a"],
      data: [
        {label: "Download Sales", value: 12},
        {label: "In-Store Sales", value: 30},
        {label: "Mail-Order Sales", value: 20}
      ],
      hideHover: 'auto'
    });
    //BAR CHART
    var bar = new Morris.Bar({
      element: 'bar-chart',
      resize: true,
      data: [
        {y: '2006', a: 100, b: 90},
        {y: '2007', a: 75, b: 65},
        {y: '2008', a: 50, b: 40},
        {y: '2009', a: 75, b: 65},
        {y: '2010', a: 50, b: 40},
        {y: '2011', a: 75, b: 65},
        {y: '2012', a: 100, b: 90}
      ],
      barColors: ['#00a65a', '#f56954'],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['CPU', 'DISK'],
      hideHover: 'auto'
    });
	
	
  });
</script>
</body>
</html>