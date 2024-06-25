<?php
/* Smarty version 3.1.33, created on 2024-06-14 19:07:58
  from '/www/wwwroot/interaction/Modules/Menu/templates/admin/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c248e8762b4_89057327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1b23977474ffb7943cdb916267af857ec8b7f6b' => 
    array (
      0 => '/www/wwwroot/interaction/Modules/Menu/templates/admin/index.html',
      1 => 1557210560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666c248e8762b4_89057327 (Smarty_Internal_Template $_smarty_tpl) {
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
                                <div class="tabbable">
									<ul class="nav nav-tabs padding-12 tab-color-blue background-blue"
										id="messagelisttab">
										<li ><a data-toggle="tab" href="###" onclick="window.location.href='/myadmin/mobileqiandao.php';return false;" >手机端签到背景图</a>
										</li>
		
										<li class="active"><a data-toggle="tab" href="###">手机端自定义菜单</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="intergrate" class="tab-pane">
                                            <!-- 对接设置 -->
                                            
                                        </div>
                                        <div id="wxpay" class="tab-pane  in active">
                                        <!-- 微信支付设置 -->
                                        <div class="widget-box widget-color-blue" >
                                            <div class="widget-header">
                                                <h5 class="widget-title bigger lighter">
                                                    <i class="ace-icon fa fa-users"></i>
                                                    手机端自定义菜单
                                                </h5>
                                                <div class="widget-toolbar no-border">
                                                    <label>
                                                    <button class="btn btn-xs btn-warning btn_add">添加</button>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="widget-body">
                                                <div class="widget-main no-padding">
                                                    <table class="table table-striped table-bordered table-hover prizestable">
                                                        <thead class="thin-border-bottom">
                                                            <tr>
                                                                <th >顺序</th>
                                                                <th>
                                                                    菜单名称
                                                                </th>
                                                                <th>图标</th>
                                                                <th>
                                                                    链接
                                                                </th>
                                                                <th>
                                                                    操作
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                                                            <tr >
                                                                <td ><?php echo $_smarty_tpl->tpl_vars['item']->value['ordernum'];?>
</td>
                                                                <td >
                                                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                                                                </td>
                                                                <td><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['iconpath'];?>
" style="width:60px;height:60px;"/></td>
                                                                <td ><?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
</td>
                                                                <td >
                                                                    <button class="btn btn-primary btn-xs btn_edit" data="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">修改</button>
                                                                    <button class="btn btn-danger btn-xs btn_delete" data="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">删除</button>
                                                                </td>
                                                            </tr>
                                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="configmodal" class="modal" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="blue bigger">菜单设置</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form id="savemenuform" action="/Modules/module.php?m=menu&c=admin&a=ajax_act_save_menu" method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                    <div class="space-4"></div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-xs-2 shake-duration" style="text-align: right;">排序：</label>
                                                            <div class="col-xs-10">
                                                                <input type="number"  name="ordernum"  class="form-control" value="" min="1"/>
                                                            </div>
                                                            <div class="col-xs-offset-2 col-xs-10"><span class="help-block"><i class="fa fa-info-circle"></i>排序，从小到大的顺序显示在手机上。</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="space-4"></div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-xs-2" style="text-align: right;">标题：</label>
                                                            <div class="col-xs-10">
                                                                <input type="text"  name="title"  class="form-control" value="" />
                                                            </div>
                                                            <div class="col-xs-offset-2 col-xs-10"><span class="help-block"><i class="fa fa-info-circle"></i>不要超过4个汉字</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="space-4"></div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-xs-2" style="text-align: right;">图标：</label>
                                                            <div class="col-xs-10">
                                                                <input multiple="" type="file"  class="imageuploader" name="iconpath"/>
                                                                <input type="hidden" name="icon" value=""/>
                                                            </div>
                                                            <div class="col-xs-offset-2 col-xs-10"><span class="help-block"><i class="fa fa-info-circle"></i>60px*60px，500k以内，文件越小越好</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="space-4"></div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-xs-2" style="text-align: right;">链接：</label>
                                                            <div class="col-xs-10">
                                                                <input type="text"  name="link"  class="form-control" value="" />
                                                            </div>
                                                            <div class="col-xs-offset-2 col-xs-10"><span class="help-block"><i class="fa fa-info-circle"></i>可以用{openid}标签，系统个会自动替换成用户的openid</span></div>
                                                        </div>
                                                    </div>

                                                    <div class="space-4"></div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <input name="id" type="hidden" value="0"/>
                                                <button type="button" class="btn btn-sm" data-dismiss="modal" >
                                                    <i class="ace-icon fa fa-times"></i>
                                                    取消
                                                </button>
                                                <button type="button" class="btn btn-sm btn-primary btn_save">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    保存
                                                </button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
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
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/js/jquery.form.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['module_assets']->value;?>
/js/admin_index.js"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['html_footer']->value;
}
}
