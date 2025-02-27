<?php
/* Smarty version 3.1.33, created on 2024-06-14 19:04:27
  from '/www/wwwroot/interaction/Modules/Importlottery/templates/admin/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c23bbba4791_17490058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fa114a342b6de7cfd11a942f2a3ee7924d62a08' => 
    array (
      0 => '/www/wwwroot/interaction/Modules/Importlottery/templates/admin/index.html',
      1 => 1557210560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666c23bbba4791_17490058 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['html_header']->value;?>

<style>
.importdatatable img{
	width:60px;
	height:60px;
}
</style>
<!--轮次设置-->
<!-- /section:basics/navbar.layout -->
<div class="main-container ace-save-state" id="main-container">
	<?php echo '<script'; ?>
 type="text/javascript">
		
		try {
			ace.settings.loadState('main-container')
		} catch (e) {} 
		
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

						<div class="widget-box widget-color-blue" id="widget-box-2">
							<div class="widget-header">
								<h5 class="widget-title bigger lighter">
									<i class="ace-icon fa fa-users"></i>
									导入的数据
								</h5>
								<div class="widget-toolbar no-border">
									<label>
										<div class="input-group" style="width:300px;">
											<input type="text" id="searchtxt" class="form-control search-query" placeholder="请输入关键词..." value="<?php echo $_smarty_tpl->tpl_vars['searhtxt']->value;?>
"/>
											<span class="input-group-btn">
												<button type="button" class="btn btn-purple btn-sm btn-search">
													<span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
													搜索
												</button>
											</span>
										</div>
									</label>
									<label>
										<button class="btn btn-xs btn-warning btn_import">导入数据...</button>
									</label>
									<label>
										<button class="btn btn-xs btn-warning btn_add">添加</button>
									</label>
								</div>
							</div>
							<div class="widget-body">
								<div class="widget-main no-padding">
									<table class="table table-striped table-bordered table-hover importdatatable">
										<thead class="thin-border-bottom">
											<tr>
												<th>
													第一列(<?php echo $_smarty_tpl->tpl_vars['columnnames']->value['col_name1'];?>
)
												</th>
												<th>
													第二列(<?php echo $_smarty_tpl->tpl_vars['columnnames']->value['col_name2'];?>
)
												</th>
												<th>
													第三列(<?php echo $_smarty_tpl->tpl_vars['columnnames']->value['col_name3'];?>
)
												</th>
												<th width="80px;">
													图片
												</th>
												<th>操作</th>
											</tr>
										</thead>
										<tbody>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
											<tr id="item_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" >
												<td><?php echo $_smarty_tpl->tpl_vars['item']->value['col1'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['item']->value['col2'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['item']->value['col3'];?>
</td>
												<td><?php if ($_smarty_tpl->tpl_vars['item']->value['imagepath'] != '') {?><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagepath'];?>
" /><?php }?></td>
												<td>
													<button class="btn btn-xs btn-primary btn_edit" data='<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
'>修改</button>
													<button class="btn btn-xs btn-danger btn_del" data='<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
'>删除</button>
												</td>
											</tr>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</tbody>
									</table>
								</div>
								<?php echo $_smarty_tpl->tpl_vars['pagehtml']->value;?>

							</div>
						</div>
						<div class="modal fade" id="importmodal" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
										<h4 class="blue bigger">导入Excel信息</h4>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-sm-12">
												<form class="form-horizontal" id="saveexcelform" role="form" action="/Modules/module.php?m=importlottery&c=admin&a=ajax_act_save_excel"
												 enctype="multipart/form-data" method="post">
													<!-- #section:elements.form -->
													<div class="form-group">
														<label class="col-sm-3 control-label no-padding-right">上传Excel：</label>
														<div class="col-sm-9">
															<input class="form-control" multiple="" name="fileexcel" type="file" value="" />
															<input type="hidden" name="fileid" value="" />
														</div>
													</div>
													<div class="form-group">
														<div class="col-sm-offset-3 col-sm-9">
															<div class="alert alert-danger alert-delete-csv" style="padding:5px;">
																<a href="<?php echo $_smarty_tpl->tpl_vars['module_assets']->value;?>
/others/template.xlsx" target="_blank">
																	<i class="fa fa-download"></i>下载Excel文件模板
																</a>
																<p class="help-block">下载模板后，按照模板内的格式添加数据，再上传数据文件就可以了。</p>
															</div>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button class="btn btn-sm btn-primary btn-saveexcelform">
											<i class="ace-icon fa fa-check"></i>
											保存
										</button>
										<button class="btn btn-sm " data-dismiss="modal" type="button">关闭</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" aria-hidden="true" id="datamodal" class="modal" tabindex="-1">
							<div class="modal-dialog">
								<div class="modal-content">
									
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="blue bigger">填写信息</h4>
										</div>
										<div class="modal-body">
											<form id="savedataform" action="/Modules/module.php?m=importlottery&c=admin&a=ajax_act_save_dataitem" method="post" enctype="multipart/form-data">
											<div class="row">
												<div class="col-md-12">
													<!-- #section:elements.tab -->
													<div class="row">
														<div class="form-group">
															<label for="text3d" class="col-md-3" style="text-align: right;">第一栏：</label>
															<div class="col-md-9">
																<input type="text" class="form-control" name="col1" placeholder="请输入信息" value="" />
															</div>
														</div>
													</div>
													<div class="space-4"></div>
													<div class="row">
														<div class="form-group">
															<label for="text3d" class="col-md-3" style="text-align: right;">第二栏：</label>
															<div class="col-md-9">
																<input type="text" class="form-control" name="col2" placeholder="请输入信息" value="" />
															</div>
														</div>
													</div>
													<div class="space-4"></div>
													<div class="row">
														<div class="form-group">
															<label for="text3d" class="col-md-3" style="text-align: right;">第三栏：</label>
															<div class="col-md-9">
																<input type="text" class="form-control" name="col3" placeholder="请输入信息" value="" />
															</div>
														</div>
													</div>
													<div class="space-4"></div>
													<div class="row">
														<div class="form-group">
															<label for="awardimage" class="col-md-3" style="text-align: right;">图片：</label>
															<div class="col-md-9">
																<input type="file" class="imageuploader" name="imagepath" />
																<input type="hidden" name="imageid" value="0" />
															</div>
														</div>
													</div>
												</div>
											</div>
											<input type="hidden" name="id" value="0" />
										</form>
										</div>
										<div class="modal-footer">
											<button class="btn btn-sm btn-primary btn-save-item">
												<i class="ace-icon fa fa-check"></i>
												保存
											</button>
											<button class="btn btn-sm" data-dismiss="modal">
												<i class="ace-icon fa fa-times"></i>
												取消
											</button>
											<!-- <button class="btn btn-sm btn-primary btn-save-item">
												<i class="ace-icon fa fa-check"></i>
												保存
											</button> -->
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
 type="text/javascript" src="/myadmin/assets/js/jquery.form.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['module_assets']->value;?>
/js/admin_index.js"><?php echo '</script'; ?>
>
	<?php echo $_smarty_tpl->tpl_vars['html_footer']->value;
}
}
