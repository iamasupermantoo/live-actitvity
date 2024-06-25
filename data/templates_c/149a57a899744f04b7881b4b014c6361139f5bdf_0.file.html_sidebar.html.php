<?php
/* Smarty version 3.1.33, created on 2024-06-14 17:48:48
  from '/www/wwwroot/interaction/myadmin/templates/html_sidebar.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c1200888739_61013599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '149a57a899744f04b7881b4b014c6361139f5bdf' => 
    array (
      0 => '/www/wwwroot/interaction/myadmin/templates/html_sidebar.html',
      1 => 1557210574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666c1200888739_61013599 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="sidebar" class="sidebar responsive ace-save-state">
	<?php echo '<script'; ?>
 type="text/javascript">
	
		try{ace.settings.loadState('sidebar')}catch(e){}
	
	<?php echo '</script'; ?>
>
	<div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
			<button class="btn btn-success" onclick="window.location.href='wallmessage.php'">
				<i class="ace-icon fa fa-comments"></i>
			</button>

			<button class="btn btn-info" onclick="window.location.href='wallnotice.php'">
				<i class="ace-icon fa fa-pencil"></i>
			</button>

			<!-- #section:basics/sidebar.layout.shortcuts -->
			<button class="btn btn-warning" onclick="window.location.href='qiandao.php'">
				<i class="ace-icon fa fa-users" ></i>
			</button>

			<button class="btn btn-danger" onclick="window.location.href='intergrate.php'">
				<i class="ace-icon fa fa-cogs"></i>
			</button>

			<!-- /section:basics/sidebar.layout.shortcuts -->
		</div>

		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<span class="btn btn-success"></span>

			<span class="btn btn-info"></span>

			<span class="btn btn-warning"></span>

			<span class="btn btn-danger"></span>
		</div>
	</div><!-- /.sidebar-shortcuts -->

	<ul class="nav nav-list">
		<li class="">
			<a href="index.php">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> 首页 </span>
			</a>
			<b class="arrow"></b>
		</li>
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-users"></i>
				<span class="menu-text">签到设置</span>
				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="qiandaosettings.php">
						<i class="menu-icon fa fa-caret-right"></i>
						签到设置
					</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="qiandao.php">
						<i class="menu-icon fa fa-caret-right"></i>
						签到列表
					</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="mobileqiandao.php">
						<i class="menu-icon fa fa-caret-right"></i>
						手机签到
					</a>
					<b class="arrow"></b>
				</li>
				
			</ul>
		</li>
		<li class="">
			<a href="threedimensionalsign.php">
				<i class="menu-icon fa  fa-desktop"></i>
				<span class="menu-text">3D签到设置</span>
			</a>
			<b class="arrow"></b>
		</li>
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-desktop"></i>
				<span class="menu-text">
					上墙消息管理
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>
			<ul class="submenu">
				<li class="">
					<a href="wallsettings.php">
						<i class="menu-icon fa fa-caret-right"></i>
						上墙设置
					</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="danmusettings.php">
						<i class="menu-icon fa fa-caret-right"></i>
						弹幕设置
					</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="wallmessage.php">
						<i class="menu-icon fa fa-caret-right"></i>
						消息列表
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="wallnotice.php">
						<i class="menu-icon fa fa-caret-right"></i>
						发布公告
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>

		<!-- <li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-trophy"></i>
				<span class="menu-text">摇一摇管理</span>
				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="shakeconfig.php">
						<i class="menu-icon fa fa-caret-right"></i>
						摇一摇设置
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="shakethemes.php">
						<i class="menu-icon fa fa-caret-right"></i>
						摇一摇主题
					</a>
					<b class="arrow"></b>
				</li>
			</ul>
		</li> -->
		<!-- <li class="">
			<a href="shuqianconfig.php">
				<i class="menu-icon fa  fa-trophy"></i>
				<span class="menu-text">数钱游戏</span>
			</a>
			<b class="arrow"></b>
		</li> -->
		<!-- <li class="">
			<a href="pashuconfig.php">
				<i class="menu-icon fa  fa-trophy"></i>
				<span class="menu-text">猴子爬树</span>
			</a>
			<b class="arrow"></b>
		</li> -->
		<li class="">
			<a href="voteconfig.php">
				<i class="menu-icon fa  fa-signal"></i>
				<span class="menu-text">投票管理</span>
			</a>
			<b class="arrow"></b>
		</li>
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-gift"></i>
				<span class="menu-text">幸运手机号</span>
				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				
				<li class="">
					<a href="xingyunshoujihao.php">
						<i class="menu-icon fa fa-caret-right"></i>
						中奖记录
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="xingyunshoujihaodesignatedlist.php">
						<i class="menu-icon fa fa-caret-right"></i>
						内定记录
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-gift"></i>
				<span class="menu-text">幸运号码</span>
				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="xingyunhaomaconfig.php">
						<i class="menu-icon fa fa-caret-right"></i>
						幸运号码设置
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="xingyunhaoma.php">
						<i class="menu-icon fa fa-caret-right"></i>
						中奖记录
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="xingyunhaomadesignated.php">
						<i class="menu-icon fa fa-caret-right"></i>
						内定记录
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>
		<li class="">
			<a href="xiangce.php">
				<i class="menu-icon fa  fa-picture-o"></i>
				<span class="menu-text">相册管理</span>
			</a>
			<b class="arrow"></b>
		</li>

	
		<li class="">
			<a href="kaimu.php">
				<i class="menu-icon fa  fa-desktop"></i>
				<span class="menu-text">开幕墙 </span>
			</a>
			<b class="arrow"></b>
		</li>
		<li class="">
			<a href="bimu.php">
				<i class="menu-icon fa  fa-desktop"></i>
				<span class="menu-text">闭幕墙 </span>
			</a>
			<b class="arrow"></b>
		</li>
		<?php if ($_smarty_tpl->tpl_vars['wall_config']->value['rentweixin'] == 1) {?>
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-gift"></i>
				<span class="menu-text">红包管理</span>
				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="redpacketconfig.php">
						<i class="menu-icon fa fa-caret-right"></i>
						红包基本设置
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="redpacket.php">
						<i class="menu-icon fa fa-caret-right"></i>
						红包设置列表
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>
		<?php }?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['enabledplug_configs']->value, 'config');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['config']->value) {
?>
		<?php if ($_smarty_tpl->tpl_vars['config']->value['config']['admin']) {?>
		<?php if ($_smarty_tpl->tpl_vars['config']->value['config']['admin']['menu']) {?>
		<?php if ($_smarty_tpl->tpl_vars['config']->value['config']['admin']['menu']['submenu']) {?>
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-gift"></i>
				<span class="menu-text"><?php echo $_smarty_tpl->tpl_vars['config']->value['config']['admin']['menu']['name'];?>
</span>
				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="submenu">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['config']->value['config']['admin']['menu']['submenu'], 'submenu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['submenu']->value) {
?>
				<li class="">
					<a href="<?php echo $_smarty_tpl->tpl_vars['submenu']->value['link'];?>
">
						<i class="menu-icon fa fa-caret-right"></i>
						<?php echo $_smarty_tpl->tpl_vars['submenu']->value['name'];?>

					</a>

					<b class="arrow"></b>
				</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</li>
		<?php } else { ?>
		<li class="">
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['config']['admin']['menu']['link'];?>
">
				<i class="menu-icon fa fa-gift"></i>
				<span class="menu-text"><?php echo $_smarty_tpl->tpl_vars['config']->value['config']['admin']['menu']['name'];?>
</span>
			</a>
			<b class="arrow"></b>
		</li>
		<?php }?>
		<?php }?>
		<?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-gear"></i>
				<span class="menu-text">系统设置</span>
				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="submenu">
				<!-- <li class="">
					<a href="intergrate.php">
						<i class="menu-icon fa fa-caret-right"></i>
						公众号对接设置
					</a>

					<b class="arrow"></b>
				</li> -->
				<li class="">
					<a href="functionswitch.php">
						<i class="menu-icon fa fa-caret-right"></i>
						功能开关
					</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="systemsettings.php">
						<i class="menu-icon fa fa-caret-right"></i>
						系统设置
					</a>
					<b class="arrow"></b>
				</li>
				
			</ul>
		</li>
		<li class="">
			<a href="music.php">
				<i class="menu-icon fa fa-music"></i>
				<span class="menu-text"> 配乐 </span>
			</a>
			<b class="arrow"></b>
		</li>
		<li class="">
			<a href="background.php">
				<i class="menu-icon fa fa-image"></i>
				<span class="menu-text">背景图</span>
			</a>
			<b class="arrow"></b>
		</li>
	</ul><!-- /.nav-list -->
</div><?php }
}
