<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>华创信息科技 | 控制台</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/hc/Bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/hc/Plugins/fa/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/hc/Public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/hc/Public/css/skins.min.css">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>华</b>创</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>华创</b>信息科技</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning"></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">你的信息</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 后台信息
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i>  后台信息
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 后台信息
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 后台信息
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> 后台信息
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">查看</a></li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="/hc/Public/images/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo ($_SESSION['account']); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="/hc/Public/images/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      华创信息科技有限公司
                      <small>2016-4-25</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">信息</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">回收</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">权限</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo U('Home/Index/index');?>" class="btn btn-default btn-flat">前台</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo U('Login/quit');?>" class="btn btn-default btn-flat">退出</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">主菜单</li>
            <li class="active treeview">
              <a href="<?php echo U('Index/index');?>">
                <i class="fa fa-dashboard"></i> <span>控制台</span>
              </a>
            </li>
            <li id="pUser" class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>用户管理</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li id="iUser"><a href="<?php echo U('User/index');?>"><i class="fa fa-circle-o"></i> 查看用户</a></li>
                <li id="aUser"><a href="<?php echo U('User/add');?>"><i class="fa fa-circle-o"></i> 添加用户</a></li>
              </ul>
            </li>
            <li id="pList" class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>网站内容</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li id="iList"><a href="<?php echo U('List/index');?>"><i class="fa fa-circle-o"></i> 查看列表</a></li>
                <li id="aList"><a href="<?php echo U('List/add');?>"><i class="fa fa-circle-o"></i> 添加列表</a></li>
              </ul>
            </li>
			<li id="pAdmin" class="treeview">
              <a href="#">
                <i class="fa fa-key"></i>
                <span>管理员组</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li id="iAdmin"><a href="<?php echo U('Admin/index');?>"><i class="fa fa-circle-o"></i> 管理员列表</a></li>
                <li id="aAdmin"><a href="<?php echo U('Admin/add');?>"><i class="fa fa-circle-o"></i> 添加管理员</a></li>
              </ul>
            </li>
            <li id="important"><a href="#"><i class="fa fa-circle-o text-red"></i> <span>重要信息</span></a></li>
            <li id="warning"><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>警告信息</span></a></li>
            <li id="info"><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>一般信息</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			  <h1>
				控制台
				<small></small>
			  </h1>
			  <ol class="breadcrumb">
				<li><a href=""><i class="fa fa-dashboard"></i> 首页</a></li>
				<li class="active">控制台</li>
			  </ol>
			</section>

        <!-- Main content -->
			<section class="content">
			 <!-- Log List -->
				<div class="box box-primary">
					<div class="box-header">
						<i class="ion ion-clipboard"></i>
						<h3 class="box-title">用户日志</h3>
						<div class="box-tools pull-right">
							<ul class="pagination pagination-sm inline">
							  <?php echo ($page); ?>
							</ul>
						</div>
					</div><!-- /.box-header -->
					<div class="box-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th class="center">#</th>
									<th>用户</th>
									<th>IP</th>
									<th>日志内容</th>
									<th>时间</th>
								</tr>
							</thead>
							<tbody>
								<?php if(is_array($log)): $i = 0; $__LIST__ = $log;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
									<td class="center"><?php echo ($val['id']); ?></td>
									<td><?php echo ($val['user']); ?></td>
									<td><?php echo ($val['ip']); ?></td>
									<td><?php echo ($val['log']); ?></td>
									<td><?php echo ($val['time']); ?></td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
							</tbody>
						</table>
					</div><!-- /.box-body -->
				</div><!-- /.box-primary -->
			</section><!-- /.content -->
		</div><!-- /.content-wrapper -->
	  	<footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2016-2017 <a href="http://almsaeedstudio.com">ZZ Studio</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->
		<!-- jQuery 1.1.12 -->
    <script src="/hc/Public/js/jquery.js"></script>
	<!-- layer 2.2 -->
	<script src="/hc/Plugins/layer/layer.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/hc/Bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/hc/Public/js/app.min.js"></script>
  </body>
</html>