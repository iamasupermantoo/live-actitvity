<?php
/* Smarty version 3.1.33, created on 2024-06-14 18:09:56
  from '/www/wwwroot/interaction/Modules/Exportdata/templates/admin/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c16f46e22d6_98756868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40ce91c24f965ff3a262f728a9a5b5759aa1b919' => 
    array (
      0 => '/www/wwwroot/interaction/Modules/Exportdata/templates/admin/index.html',
      1 => 1557210560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666c16f46e22d6_98756868 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['html_header']->value;?>

<!--轮次设置-->
		<!-- /section:basics/navbar.layout -->
		<div class="main-container ace-save-state" id="main-container">
			<?php echo '<script'; ?>
 type="text/javascript">
			
				try{ace.settings.loadState('main-container')}catch(e){}
			
			<?php echo '</script'; ?>
>
			<!-- #section:basics/sidebar -->
            <?php echo $_smarty_tpl->tpl_vars['html_sidebar']->value;?>

			<!-- /section:basics/sidebar -->
			<div class="main-content">
				<div class="main-content-inner">
					<!-- #section:basics/content.breadcrumbs -->
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="/myadmin/index.php">首页</a>
							</li>
							<li class="active"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
						</ul><!-- /.breadcrumb -->
						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
					<h3 class="header smaller lighter blue">
						<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

						<small><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</small>
					</h3>
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-6 col-md-3 col-lg-2" style="margin-bottom:10px;">
										<a href="/myadmin/exportqd.php" target="_blank">
										<span class="btn btn-info" style="width:100%;">签到数据</span>
										</a>
									</div>
									<div class="col-xs-6 col-md-3 col-lg-2" style="margin-bottom:10px;">
										<a href="/Modules/module.php?m=prize&c=admin&a=exportdata&plugname=lottery" target="_blank">
										<span class="btn btn-info" style="width:100%;">所有抽奖数据</span>
										</a>
									</div>
								
									<div class="col-xs-6 col-md-3 col-lg-2" style="margin-bottom:10px;">
										<a href="/Modules/module.php?m=prize&c=admin&a=exportdata&plugname=ydj" target="_blank">
										<button class="btn btn-info" style="width:100%;">摇大奖数据</button>
										</a>
									</div>
									<div class="col-xs-6 col-md-3 col-lg-2" style="margin-bottom:10px;">
										<a href="/Modules/module.php?m=game&c=admin&a=exportData" target="_blank">
										<button class="btn btn-info" style="width:100%;">所有游戏数据</button>
										</a>
									</div>
									<div class="col-xs-6 col-md-3 col-lg-2" style="margin-bottom:10px;">
										<a href="/Modules/module.php?m=prize&c=admin&a=exportdata&plugname=choujiang" target="_blank">
										<button class="btn btn-info" style="width:100%;">手机端抽奖设置</button>
										</a>
									</div>
									<div class="col-xs-6 col-md-3 col-lg-2" style="margin-bottom:10px;">
										<a href="/Modules/module.php?m=importlottery&c=admin&a=exportdata" target="_blank">
										<button class="btn btn-info" style="width:100%;">导入信息抽奖中奖数据</button>
										</a>
									</div>
								</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<?php echo $_smarty_tpl->tpl_vars['html_footercontent']->value;?>

<!-- 写每个页面自定的js -->
<?php echo $_smarty_tpl->tpl_vars['html_footer']->value;
}
}
