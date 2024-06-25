<?php
/* Smarty version 3.1.33, created on 2024-06-14 20:40:47
  from '/www/wwwroot/interaction/Modules/Importlottery/templates/admin/designated.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c3a4faa8003_88853782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '343952c1a8e528611cb622c3201c33ddeff44e53' => 
    array (
      0 => '/www/wwwroot/interaction/Modules/Importlottery/templates/admin/designated.html',
      1 => 1557210560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666c3a4faa8003_88853782 (Smarty_Internal_Template $_smarty_tpl) {
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
								<div class="widget-box widget-color-blue" >
									<div class="widget-header">
										<h5 class="widget-title bigger lighter">
											<i class="ace-icon fa fa-users"></i>
											导入抽奖内定名单
										</h5>
										<div class="widget-toolbar no-border">
											<label>
											<button class="btn btn-xs btn-warning " id="btn_designated">添加内定</button>
											</label>
										</div>
									</div>
									<div class="widget-body">
										<div class="widget-main no-padding">
											<style>
											.prizestable tbody img{
												width:60px;
												height:60px;
											}
											.prizestable .userinfo div{
												float:left;
											}
											</style>
											<table class="table table-striped table-bordered table-hover prizestable">
												<thead class="thin-border-bottom">
													<tr>
														<th style="width:5%;">序号</th>
														<th>
															奖品
														</th>
														<th>
															获奖人
														</th>
														<th>
															内定状态
														</th>
														<th>
															状态
														</th>
														<th >操作</th>
													</tr>
												</thead>
												<tbody>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
													<tr >
														<td ><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
														<td >
															<?php echo $_smarty_tpl->tpl_vars['item']->value['prize']['formatedtext']['html'];?>

															<?php echo $_smarty_tpl->tpl_vars['item']->value['prize']['prizename'];?>

														</td>
														<td class="userinfo">
															<!-- <div style="width:60px;">
																<img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['avatar'];?>
"/>
															</div> -->
															<div >
																<p>第一列：<?php echo $_smarty_tpl->tpl_vars['item']->value['importinfo']['col1'];?>
</p>
																<p>第二列：<?php echo $_smarty_tpl->tpl_vars['item']->value['importinfo']['col2'];?>
</p>
																<p>第三列：<?php echo $_smarty_tpl->tpl_vars['item']->value['importinfo']['col3'];?>
</p>
															</div>
														</td>
														<td ><?php echo $_smarty_tpl->tpl_vars['item']->value['designatedtext'];?>
</td>
														<td ><?php echo $_smarty_tpl->tpl_vars['item']->value['statustext'];?>
</td>
														<td >
															<button class="btn btn-primary btn-xs btn_cancel" data="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">取消内定</button>
															
														</td>
													</tr>
												<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</tbody>
											</table>
											<?php echo $_smarty_tpl->tpl_vars['pagehtml']->value;?>

										</div>
									</div>
								</div>
								<div id="formmodal" class="modal" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="blue bigger">内定设置</h4>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-sm-12 columnitems">
															<div class="row">
																<div class="input-group">
																	<span class="input-group-addon">
																		<i class="ace-icon fa fa-search"></i>
																		搜人：
																	</span>
																	<input type="text" class="form-control search-query" placeholder="输入昵称，姓名或者手机号" />
																	<span class="input-group-btn">
																		<button type="button" class="btn btn-purple btn-sm btn_search">
																			开始搜
																		</button>
																	</span>
																</div>
															</div>
															<div class="space-4"></div>
															<div class="row">
																<div class="form-group">
																	<label >搜索结果</label>
																	<select class="form-control" name="userid">
																		<option value="0">无数据</option>
																	</select>
																	<div class="help-block" id="userid-help-block" ><i class="ace-icon fa fa-exclamation-triangle red"></i>只能搜索到最接近的20个人信息哦，所以输入的信息尽量输入的准确一些</div>
																</div>
															</div>
															<div class="space-4"></div>
															<div class="row">
																<div class="form-group">
																	<label >奖品</label>
																	<select class="form-control" name="prizeid">
																		<option value="0">请选择</option>
																		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prizes']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
																		<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['prizename'];?>
</option>
																		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																	</select>
																</div>
															</div>
															<div class="space-4"></div>
															<div class="row">
																<div class="form-group">
																	<label >内定状态</label>
																	<select class="form-control" name="designated">
																		<option value="2">必中</option>
																		<option value="3">不会中</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<input name="activityid" type="hidden" value="1"/>
													<input name="plugname" type="hidden" value="importlottery"/>
													<button class="btn btn-sm" data-dismiss="modal" >
														<i class="ace-icon fa fa-times"></i>
														取消
													</button>
													<button class="btn btn-sm btn-primary btn_save">
														<i class="ace-icon fa fa-check "></i>
														保存
													</button>
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
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['module_assets']->value;?>
/js/admin_designated.js"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['html_footer']->value;
}
}
