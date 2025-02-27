<?php
/* Smarty version 3.1.33, created on 2024-06-14 17:48:52
  from '/www/wwwroot/interaction/myadmin/templates/qiandaosettings.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c120414f947_76289742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0072f96eeea1080636905ce3084c17da84061bf1' => 
    array (
      0 => '/www/wwwroot/interaction/myadmin/templates/qiandaosettings.html',
      1 => 1557210574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/html_header.html' => 1,
    'file:templates/html_sidebar.html' => 1,
    'file:templates/html_footercontent.html' => 1,
    'file:templates/html_footer.html' => 1,
  ),
),false)) {
function content_666c120414f947_76289742 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/html_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<!-- /section:basics/navbar.layout -->
		<div class="main-container ace-save-state" id="main-container">
			<?php echo '<script'; ?>
 type="text/javascript">
			
				try{ace.settings.loadState('main-container')}catch(e){}
			
			<?php echo '</script'; ?>
>
			<!-- #section:basics/sidebar -->
			<?php $_smarty_tpl->_subTemplateRender("file:templates/html_sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<!-- /section:basics/sidebar -->
			<div class="main-content">
				<div class="main-content-inner">
					<!-- #section:basics/content.breadcrumbs -->
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php">首页</a>
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

						<small>签到相关的一些设置</small>
					</h3>
						<div class="row">
							<div class="col-lg-12">
								<div class="tabbable">
											
									<ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
										<li class="active">
											<a data-toggle="tab" href="#basic">基本设置</a>
										</li>
										<li>
											<a data-toggle="tab" href="#custom">自定义字段</a>
										</li>
										<li>
											<a data-toggle="tab" href="#import">导入信息</a>
										</li>
									</ul>
									<div class="tab-content">
										<div id="basic" class="tab-pane in active">
											<div class="row">
												<div class="col-sm-12 col-md-6">
													<div class="widget-box">
														<div class="widget-header">
															<h4 class="smaller">
																签到信息设置
															</h4>
														</div>
														<div class="widget-body">
															<div class="widget-main">
																<div class="row">
																	<div class="col-sm-12">
																	<div class="form-group">
																		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">手动审核</label>
																			<div class="col-sm-9">
																				<label>
																					<input name="shenhe_switch" class="ace ace-switch ace-switch-3" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['qiandaoshenhe']->value == 2) {?>checked<?php }?> />
																	<span class="lbl" onclick="switchshenhe('qiandaoshenhe')"></span>
																				</label>
																			</div>
																		</div>
																	<div class="form-group">
																		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">要求填写姓名</label>
																			<div class="col-sm-9">
																				<label>
																					<input name="name_switch" class="ace ace-switch ace-switch-3" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['qiandaosignname']->value == 1) {?>checked<?php }?> />
																	<span class="lbl" onclick="switchname()"></span>
																				</label>
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-sm-3 control-label no-padding-right" for="form-field-1">要求填写手机号</label>
																			<div class="col-sm-9">
																				<label>
																					<input name="phone_switch" class="ace ace-switch ace-switch-3" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['qiandaophone']->value == 1) {?>checked<?php }?> />
																	<span class="lbl" onclick="switchphone()"></span>
																				</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-6">
													<div class="widget-box">
														<div class="widget-header">
															<h4 class="smaller">
																签到墙显示设置
															</h4>
														</div>
														<div class="widget-body">
															<div class="widget-main">
																<div class="row">
																	<div class="col-sm-12">
																		<form class="form-horizontal" role="form">
																		<!-- #section:elements.form -->
																			<div class="form-group">
																				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">签到墙显示</label>
																				<div class="col-sm-9">
																					<div class="radio-inline">
															 								<label>
																								<input name="signnameshowstyle" type="radio" class="ace" value="1" <?php if ($_smarty_tpl->tpl_vars['signnameshowstyle']->value == 1) {?>checked<?php }?> />
																								<span class="lbl">昵称</span>
																							</label>
																						</div>
																						<div class="radio-inline">
																							<label>
																								<input name="signnameshowstyle" type="radio" class="ace" value="2" <?php if ($_smarty_tpl->tpl_vars['signnameshowstyle']->value == 2) {?>checked<?php }?> />
																								<span class="lbl">姓名</span>
																							</label>
																						</div>
																						<div class="radio-inline">
																							<label>
																								<input name="signnameshowstyle" type="radio" class="ace" value="3" <?php if ($_smarty_tpl->tpl_vars['signnameshowstyle']->value == 3) {?>checked<?php }?> />
																								<span class="lbl">手机号</span>
																							</label>
																						</div>
																				</div>
																			</div>
																		</form>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
										</div>

										<div id="custom" class="tab-pane">
											<!--自定义签到字段 row-->
											<div class="row">
												<div class="col-sm-12">
													<div class="widget-box">
														<div class="widget-header">
															<h4 class="widget-title smaller">
																自定义签到字段
															</h4>
															<div class="widget-toolbar no-border">
																<label>
																	<button class="btn btn-xs btn-warning btn_add">添加</button>
																</label>
															</div>
														</div>
														<div class="widget-body">
															<div class="widget-main">
																<div class="row">
																	<div class="col-sm-12">
																		<table class="table table-striped table-bordered table-hover">
																				<thead class="thin-border-bottom">
																					<tr>
																						<th>
																						排序
																						</th>
																						<th>
																							字段名称
																						</th>
																						<th>
																							类型
																						</th>
																						<th>
																							占位内容
																						</th>
																						<th>选项</th>
																						<th >默认值</th>
																						<th >必填</th>
																						<th >操作</th>
																					</tr>
																				</thead>
																				<tbody>
																				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extentioncolumns']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
																				<tr>
																					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['ordernum'];?>
</td>
																					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
																					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['coltypetext'];?>
</td>
																					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['placeholder'];?>
</td>
																					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['optionstext'];?>
</td>
																					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['defaultvalue'];?>
</td>
																					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['ismusttext'];?>
</td>
																					<td>
																						<a href="###" onclick="javascript:openedtidiycolform(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);">修改</a>
																						<a href="###" onclick="javascript:deleteextentioncolumn(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);">删除</a></td>
																				</tr>
																				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																				</tbody>
																			</table>

																		<div id="diycolmodal" class="modal" tabindex="-1">
																			<div class="modal-dialog">
																				<div class="modal-content">
																					<div class="modal-header">
																						<button type="button" class="close" data-dismiss="modal">&times;</button>
																						<h4 class="blue bigger">字段自定义</h4>
																					</div>
																					<div class="modal-body">
																						<div class="row">
																							<div class="col-sm-12">
																								<form class="form-horizontal">
																								<div class="form-group">
																									<label class="col-md-3 control-label">排序：</label>
																									<div class="col-md-9">
																										<input type="number" class="form-control" name="ordernum" value="" placeholder="必须是数字,默认为1" />
																									</div>
																								</div>
								
																								<div class="form-group">
																									<label class="col-md-3 control-label">字段标题：</label>
																									<div class="col-md-9">
																										<input type="text" class="form-control" name="title" value="" placeholder="比如公司名称等"/>
																									</div>
																								</div>
																								<div class="form-group">
																									<label class="col-md-3 control-label">类型：</label>
																									<div class="col-md-9">
																										<select class="chosen-select" name="coltype" onchange="changecoltype()" >
																											<option value="text">文本</option>
																											<option value="select" class="form-control">选择框</option>
																										</select>
																									</div>
																								</div>
																								<div class="form-group">
																									<label class="col-md-3 control-label">占位内容：</label>
																									<div class="col-md-9">
																										<input type="text" class="form-control" name="placeholder" value="" placeholder='比如"请填写公司名称"等'/>
																									</div>
																								</div>
																								<div class="form-group column-options" style="display: none;">
																									<label class="col-md-3 control-label">选项：</label>
																									<div class="col-md-9">
																										<textarea class="form-control" style="height: 100px;" name="options" placeholder='每行代表一个选项'></textarea>
																									</div>
																								</div>
																								<div class="form-group">
																									<label class="col-md-3 control-label">默认值：</label>
																									<div class="col-md-9">
																										<input type="text" class="form-control" name="defaultvalue" value="" placeholder='填写默认的内容'/>
																									</div>
																								</div>
																								<div class="form-group">
																									<label class="col-md-3"></label>
																									<div class="col-md-9">
																										<label>
																											<input name="ismust"  type="checkbox" <?php if ($_smarty_tpl->tpl_vars['ismust']->value == 2) {?>checked<?php }?> value='2'/>是必填项
																										</label>
																									</div>
																								</div>
																								<input type="hidden" name="coltypeid" value="0"/>
																								</form>
																							</div>
																						</div>
																					</div>

																					<div class="modal-footer">
																						<button class="btn btn-sm" data-dismiss="modal" >
																							<i class="ace-icon fa fa-times"></i>
																							取消
																						</button>
																						<button class="btn btn-sm btn-primary" onclick="submitdiycolform();">
																							<i class="ace-icon fa fa-check"></i>
																							保存
																						</button>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div id="import" class="tab-pane">
											<div class="row">
							<div class="col-sm-6">
								<div class="widget-box">
									<div class="widget-header">
										<h4 class="smaller">
											预留信息导入（如座位号）
										</h4>
									</div>
									<div class="widget-body">
										<div class="widget-main">
											<div class="row">
												<div class="col-sm-12">
												<form class="form-horizontal" id="saveflagconfigform" role="form" action="doqiandaosettings.php?action=saveflagconfig" enctype="multipart/form-data" method="post">
													<!-- #section:elements.form -->
													<div class="form-group">
														<label class="col-sm-3 control-label no-padding-right" >匹配规则：</label>
														<div class="col-sm-9">
															<div class="radio-inline">
								 								<label>
																	<input name="reserved_infomation_match" type="radio" class="ace" value="1" <?php if ($_smarty_tpl->tpl_vars['flagconfig']->value['reserved_infomation_match'] == 1) {?>checked<?php }?> />
																	<span class="lbl">不完全匹配</span>
																</label>
															</div>

															<div class="radio-inline">
																<label>
																	<input name="reserved_infomation_match" type="radio" class="ace" value="2" <?php if ($_smarty_tpl->tpl_vars['flagconfig']->value['reserved_infomation_match'] == 2) {?>checked<?php }?> />
																	<span class="lbl">完全匹配</span>
																</label>
															</div>
															<p class="help-block">不完全匹配表示只要姓名或手机号和签到的人对应就可以，完全匹配表示必须姓名和手机号都对应才可以。</p>
														</div>

													</div>

													<div class="form-group">
														<label class="col-sm-3 control-label no-padding-right" >审核要求：</label>
														<div class="col-sm-9">
															<div class="radio-inline">
								 								<label>
																	<input name="reserved_infomation_verify" type="radio" class="ace" value="1" <?php if ($_smarty_tpl->tpl_vars['flagconfig']->value['reserved_infomation_verify'] == 1) {?>checked<?php }?> />
																	<span class="lbl">通过审核</span>
																</label>
															</div>

															<div class="radio-inline">
																<label>
																	<input name="reserved_infomation_verify" type="radio" class="ace" value="2" <?php if ($_smarty_tpl->tpl_vars['flagconfig']->value['reserved_infomation_verify'] == 2) {?>checked<?php }?> />

																	<span class="lbl">不通过审核</span>
																</label>
															</div>
															<p class="help-block">通过审核表示，匹配到的人自动通过审核，没匹配到的不通过审核。</p>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label no-padding-right" >上传EXCEL：</label>
														<div class="col-sm-9">
															<input class="form-control" multiple="" name="filecsv" type="file" value=""/>
															<input type="hidden" name="reserved_infomation_csv_attachmentid" value="<?php echo $_smarty_tpl->tpl_vars['flagconfig']->value['reserved_infomation_csv_attachmentid'];?>
"/>
															
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label no-padding-right" ></label>
														<div class="col-sm-9">
															<button class="btn btn-sm btn-primary btn-save-flag-config" type="button">
                                保存
	                            </button>
                              <button class="btn btn-sm " type="reset">
                                取消
							  </button>
							  <button  type="button" class="btn btn-sm btn-danger btn-delete-csv" >
									删除名单
							</button>
							<p>
								<a href="./assets/others/reserved_infomation.xlsx" target="_blank">
									<i class="fa fa-download"></i>下载Excel模板文件
								</a>
							</p>
                              
							<p class="help-block">下载模板后，按照模板内的格式添加数据，再上传数据文件就可以了。</p>
														</div>
													</div>
												</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
									<table class="table table-striped table-bordered table-hover">
											<thead class="thin-border-bottom">
												<tr>
													<th>姓名</th>
													<th>手机号</th>
													<th>预留信息</th>
												</tr>
											</thead>
											<tbody>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reservedinfomation']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
													<tr>
														<td><?php echo $_smarty_tpl->tpl_vars['item']->value['realname'];?>
</td>
														<td><?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>
</td>
														<td><?php echo $_smarty_tpl->tpl_vars['item']->value['info'];?>
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
						</div>
						
						
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<?php $_smarty_tpl->_subTemplateRender("file:templates/html_footercontent.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="assets/js/jquery.form.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

$(function(){
	$('.btn-save-flag-config').bind('click',function(){
		$('#saveflagconfigform').ajaxSubmit({
			dataType: 'json',
			success:function(json){
				alert(json.message);
				if(json.code>0){
					window.location.reload();
				}
				return false;
				
			}
		});
		return false;
	});

	$('.btn-delete-csv').bind('click',function(){
		$.ajax({
			"url":"/myadmin/doqiandaosettings.php?action=clearreservedinfomation",
			'type':'get',
			'dataType':'json',
			'success':function(json){
				alert(json.message);
				window.location.reload();
			}
		});
	})
});

//自动审核开关
$(function(){
	$('input[name=signnameshowstyle]').bind('click',function(){
		var signnameshowstyle=$('input[name=signnameshowstyle]:checked').val();
		set_showstyle('signnameshowstyle',signnameshowstyle);
	});
})
//设置显示方式
function set_showstyle(key,val){
	setconfig(key,val);
}
//设置是否手动审核
function switchshenhe(key){
	var shenhewitch=$('input[name=shenhe_switch]:checked').val();
	shenhewitch=shenhewitch==undefined?2:1;
	setconfig(key,shenhewitch);
}

function setconfig(key,val){
	jQuery.ajax({
		"url":'doqiandaosettings.php?action=setconfig',
		"data":{"key":key,"val":val},
		"type":'get',
		"dataType":"json",
		"success":function(json){
			if(json.code<0)
				alert(json.message);
			return false;
		}
	});
}
//设置需要填写姓名
function switchname(){
	var nameswitch=$('input[name=name_switch]:checked').val();
	nameswitch=nameswitch==undefined?1:2;
	jQuery.ajax({
		'url':'doqiandaosettings.php?action=switchname',
		'type':'post',
		'dataType':'json',
		'data':{'status':nameswitch},
		'success':function(json){
			if(json.code<0)
				alert(json.message);
			return false;
			
		}
	});
}
//设置需要填写手机号
function switchphone(){
	var phoneswitch=$('input[name=phone_switch]:checked').val();
	phoneswitch=phoneswitch==undefined?1:2;
	jQuery.ajax({
		'url':'doqiandaosettings.php?action=switchphone',
		'type':'post',
		'data':{'status':phoneswitch},
		'dataType':'json',
		'success':function(json){
			if(json.code<0)
				alert(json.message);
			return false;
			
		}
	});
}
$(function(){
	$('.btn_add').bind('click',function(){
		resetdiycolform();
		$('#diycolmodal').modal('show');
	});
});

function changecoltype(){
	$coltype=$('select[name=coltype]').val();
	if($coltype=='select'){
		$('.column-options').slideDown();
	}else{
		$('.column-options').slideUp();
	}
}
function openedtidiycolform(id){
	resetdiycolform();
	$('input[name=coltypeid]').val(id);
	getextentioncolumn(id);
	$('#diycolmodal').modal('show');
}

function resetdiycolform(){
	$('input[name=coltypeid]').val(0);
	$('input[name=ordernum]').val('');
	$('input[name=title]').val('');
	$('select[name=coltype]').val('text');
	$('input[name=placeholder]').val('');
	$('textarea[name=options]').val('');
	$('input[name=defaultvalue]').val('');
	$('input[name=ismust]').removeAttr('checked');
}
function setdiycolform(columninfo){
	$('input[name=coltypeid]').val(columninfo.id);
	$('input[name=ordernum]').val(columninfo.ordernum);
	$('input[name=title]').val(columninfo.title);
	$('select[name=coltype]').val(columninfo.coltype);
	$('input[name=placeholder]').val(columninfo.placeholder);
	if (columninfo.coltype=='select') {
		$('textarea[name=options]').val(columninfo.optionstext);
		$('.column-options').slideDown();

	}
	$('input[name=defaultvalue]').val(columninfo.defaultvalue);
	if(columninfo.ismust==2){
		$('input[name=ismust]').prop({checked:true})
	}
}
function getextentioncolumn(id){
	$.ajax({
		"url":"doqiandaosettings.php?action=getextentioncolumn&id="+id,
		"type":"get",
		"dataType":"json",
		"success":function(json){
				if(json.code<0){
					alert(json.message);
					return false;
				}
				setdiycolform(json.data);
		}
	});
}
function deleteextentioncolumn(id){
	if(!confirm('确认要删除这个字段吗？'))return false;
	$.ajax({
		"url":"doqiandaosettings.php?action=delextentioncolumn&id="+id,
		"type":"get",
		"dataType":"json",
		"success":function(json){
				alert(json.message);
				if(json.code>0){
					window.location.reload();
				}
				return false;
		}
	});
}
//保存字段内容
function submitdiycolform(){
	var data={};
	data['id']=$('input[name=coltypeid]').val();
	data['ordernum']=$('input[name=ordernum]').val();
	data['title']=$('input[name=title]').val();
	data['coltype']=$('select[name=coltype]').val();
	data['placeholder']=$('input[name=placeholder]').val();
	data['options']=$('textarea[name=options]').val();
	data['defaultvalue']=$('input[name=defaultvalue]').val();
	data['ismust']=$('input[name=ismust]:checked').val();
	data['ismust']=data['ismust']==undefined?1:2;
	$.ajax({
		"url":"doqiandaosettings.php?action=saveextentioncolumn",
		"data":data,
		"type":'post',
		"dataType":"json",
		"success":function(json){
			if(json.code<0){
				alert(json.message);
			}
			else{
				window.location.reload();
			}
			return false;
		}
	});
}

<?php echo '</script'; ?>
>
<!-- 写每个页面自定的js -->
<?php $_smarty_tpl->_subTemplateRender("file:templates/html_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
