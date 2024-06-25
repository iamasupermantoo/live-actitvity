<?php
/* Smarty version 3.1.33, created on 2024-06-14 17:47:42
  from '/www/wwwroot/interaction/myadmin/templates/login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c11bee9d693_37964008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae77a2f0067a4da81c4534820c3f759c0aeae810' => 
    array (
      0 => '/www/wwwroot/interaction/myadmin/templates/login.html',
      1 => 1672833874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666c11bee9d693_37964008 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>微信现场活动系统</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/ace_v1.4/assets/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/ace_v1.4/components/font-awesome/css/font-awesome.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/ace_v1.4/assets/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/ace_v1.4/assets/css/ace.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/ace_v1.4/assets/css/ace-part2.css" />
		<![endif]-->
		<link rel="stylesheet" href="assets/ace_v1.4/assets/css/ace-rtl.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/ace_v1.4/assets/css/ace-ie.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<?php echo '<script'; ?>
 src="assets/ace_v1.4/components/html5shiv/dist/html5shiv.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/ace_v1.4/components/respond/dest/respond.min.js"><?php echo '</script'; ?>
>
		<![endif]-->
	</head>

	<body class="login-layout blur-login">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<!-- <i class="ace-icon fa fa-leaf green"></i>
									<span class="red">Ace</span> -->
									<span class="white" id="id-text2">微信现场活动系统</span>
								</h1>
								<h4 class="light-blue" id="id-company-text">&copy; <a href="<?php echo $_smarty_tpl->tpl_vars['wall_config']->value['copyrightlink'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['wall_config']->value['copyright'];?>
</a></h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												请输入您的帐号和密码
											</h4>

											<div class="space-6"></div>

											<form action="login.do.php" method="post" >
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="username" class="form-control" placeholder="用户名" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="userpwd" class="form-control" placeholder="密码" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<!-- <label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> Remember Me</span>
														</label> -->

														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary btn-login">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">登录</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>
											<div>www.php-asp.net</div>
										</div><!-- /.widget-main -->

									
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

							</div><!-- /.position-relative -->

							
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<?php echo '<script'; ?>
 src="assets/ace_v1.4/components/jquery/dist/jquery.js"><?php echo '</script'; ?>
>

		<!-- <![endif]-->

		<!--[if IE]>
<?php echo '<script'; ?>
 src="../components/jquery.1x/dist/jquery.js"><?php echo '</script'; ?>
>
<![endif]-->
		<?php echo '<script'; ?>
 type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<?php echo '<script'; ?>
 src='../components/_mod/jquery.mobile.custom/jquery.mobile.custom.js'>"+"<"+"/script>");
		<?php echo '</script'; ?>
>

		<!-- inline scripts related to this page -->
		<?php echo '<script'; ?>
 type="text/javascript">
		
		/*
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			*/
		<?php echo '</script'; ?>
>
	</body>
</html>
<?php }
}
