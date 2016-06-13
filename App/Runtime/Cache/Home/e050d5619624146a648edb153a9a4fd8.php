<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>公司动态-华创信息科技公司</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="/hc/Bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/hc/Public/css/leaflet.css" />
<link rel="icon" href="/hc/Public/images/title-logo.png">
<!--[if lte IE 8]>
	 <link rel="stylesheet" href="css/leaflet.ie.css" />
<![endif]-->
<link rel="stylesheet" href="/hc/Public/css/main.css">
<script src="/hc/Public/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
		<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <!-- Navigation & Logo-->
<div class="mainmenu-wrapper">
	<div class="container">
		<nav id="mainmenu" class="mainmenu">
			<ul>
				<li class="logo-wrapper"><a href="<?php echo U('Index/index');?>"><img src="/hc/Public/images/hc-logo.png" alt="Multipurpose Twitter Bootstrap Template"></a></li>
				<li id="index" class="active">
					<a href="<?php echo U('Index/index');?>">首页</a>
				</li>
				<li id="busi">
					<a href="<?php echo U('Busi/index');?>">主营业务</a>
				</li>
				<li id="news">
					<a href="<?php echo U('News/index');?>">公司动态</a>
				</li>
			</ul>
		</nav>
	</div>
</div>
		<div class="section">
			<div class="container">
				<div class="col-sm-8 latest-news">
					<h2>公司动态</h2>
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="row">
						<div class="col-sm-12">
							<div class="caption">
								<a href="<?php echo U('Home/News/news/theme/'.$val['id']);?>"><?php echo ($val['title']); ?></a>
								<div class="date"><?php echo ($val['time']); ?> </div>
							</div>
							<div class="intro"> <a href="<?php echo U('Home/News/news/theme/'.$val['id']);?>">查看更多</a></div>
						</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
					<ul class="pagination no-margin">
						<?php echo ($page); ?>
					</ul>
				</div>
				<div class="col-sm-4 blog-sidebar" style="padding-top:12px">
					<h4>联系我们</h4>
					<ul class="blog-categories">
						<li>电话:18027823968</li>
						<li>传真:0758-2107833</li>
						<li>邮箱:zqhcltd@163.com </li>
						<li>地址:肇庆市肇庆学院星湖校区大学生创新创业指导中心</li>
					</ul>
				</div>
				<!-- End Sidebar -->
			</div>
	    </div>
		<!-- Footer -->
<div class="footer">
	<div class="container">
		<div class="row">
		    <div class="col-footer col-sm-2 col-xs-4">
		    	<h3>关于我们</h3>
		    	<ul class="no-list-style footer-navigate-section">
		    		<li><a>关于我们</a></li>
		    		<li><a>服务范围</a></li>
		    		<li><a>网站开发</a></li>
		    		<li><a>联系我们</a></li>
				</ul>
			</div>
		    <div class="col-footer col-sm-2 col-xs-4">
				<h3>服务范围</h3>
				<ul class="no-list-style footer-navigate-section">
					<li>软件外包</li>
		    		<li>软件开发</li>
		    		<li>微信平台</li>
		    		<li>后台系统</li>
		    	</ul>
		    </div>
			<div class="col-footer col-sm-2 col-xs-4">
				<h3>工作招聘</h3>
				<ul class="no-list-style footer-navigate-section">
					<li>美工</li>
					<li>UI设计</li>
					<li>前端开发</li>
		    		<li>后端开发</li>
		    	</ul>
		    </div>
		   	<div class="col-footer col-sm-3 col-xs-6">
				<h3>联系我们</h3>
					<ul class="no-list-style footer-navigate-section">
		   			<li><b>电话:</b> 18027823968</li>
		   			<li><b>传真:</b> 0758-2107833</li>
		    		<li><b>邮箱:</b> zqhcltd@163.com</li>
		   			<li><b>地址:</b> 肇庆市肇庆学院星湖校区大学生创新创业指导中心</li>
		   		</ul>
		   	</div>
			<div class="col-footer col-sm-2 col-xs-6">
				<h3>扫一扫关注我们</h3>
				<img src="/hc/Public/images/QR-Code.png" alt="关注我们" width="150px"/>
			</div>
		</div>
		<div class="row">
		    <div class="col-md-12">
		    	<div class="footer-copyright">&copy; 2016 华创信息科技有限公司. All rights reserved.</div>
		    </div>
		</div>
	</div>
</div>
	<script src="/hc/Public/js/jquery.js"></script>
    <script src="/hc/Bootstrap/js/bootstrap.min.js"></script>
		<script>
			$('#news').addClass("active").siblings().removeClass("active");
		</script>
	</body>
</html>