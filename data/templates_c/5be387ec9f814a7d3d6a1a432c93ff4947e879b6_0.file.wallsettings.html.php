<?php
/* Smarty version 3.1.33, created on 2024-06-14 17:49:28
  from '/www/wwwroot/interaction/myadmin/templates/wallsettings.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c1228e353d7_90652147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5be387ec9f814a7d3d6a1a432c93ff4947e879b6' => 
    array (
      0 => '/www/wwwroot/interaction/myadmin/templates/wallsettings.html',
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
function content_666c1228e353d7_90652147 (Smarty_Internal_Template $_smarty_tpl) {
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
										上墙设置
										<small>配置是否循环播放、自动审核、刷新时间间隔等</small>
									</h3>
						
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
									<form class="form-horizontal" role="form">
									
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">消息显示方式</label>
										<div class="col-sm-9">
											
											<div class="radio-inline">
					 								<label>
														<input name="msg_showstyle" type="radio" class="ace" value="0" <?php if ($_smarty_tpl->tpl_vars['wall_config']->value['msg_showstyle'] == 0) {?>checked<?php }?> />
														<span class="lbl">滚动</span>
													</label>
												</div>

												<div class="radio-inline">
													<label>
														<input name="msg_showstyle" type="radio" class="ace" value="1" <?php if ($_smarty_tpl->tpl_vars['wall_config']->value['msg_showstyle'] == 1) {?>checked<?php }?> />
														<span class="lbl">翻转</span>
													</label>
												</div>
											
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">自动审核</label>
										<div class="col-sm-9">
											<label style="padding-top:9px">
												<input name="shenghe" class="ace ace-switch ace-switch-3" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['wall_config']->value['shenghe'] != 1) {?>checked<?php }?> />
												<span class="lbl" onclick="switchautoaudit()"></span>
											</label>
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">循环播放</label>
										<div class="col-sm-9">
											<label style="padding-top:9px">
												<input name="circulation" class="ace ace-switch ace-switch-3" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['wall_config']->value['circulation'] == 1) {?>checked<?php }?> />
												<span class="lbl" onclick="switchloopplay()"></span>
											</label>
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">每屏显示条数</label>
										<div class="col-sm-9">
											<label style="padding-top:9px">
												<select class="form-control" name="msg_num" >
													<option value="3" <?php if ($_smarty_tpl->tpl_vars['wall_config']->value['msg_num'] == 3) {?>selected<?php }?>>3</option>
													<option value="4" <?php if ($_smarty_tpl->tpl_vars['wall_config']->value['msg_num'] == 4) {?>selected<?php }?>>4</option>
													<option value="5" <?php if ($_smarty_tpl->tpl_vars['wall_config']->value['msg_num'] == 5) {?>selected<?php }?>>5</option>
													<option value="6" <?php if ($_smarty_tpl->tpl_vars['wall_config']->value['msg_num'] == 6) {?>selected<?php }?>>6</option>
												</select>
											</label>
										</div>
									</div>

									<div class="space-4 msg_historynum_item" <?php if ($_smarty_tpl->tpl_vars['wall_config']->value['circulation'] == 0) {?>style="display:none;"<?php }?>></div>
									<div class="form-group msg_historynum_item" <?php if ($_smarty_tpl->tpl_vars['wall_config']->value['circulation'] == 0) {?>style="display:none;"<?php }?>>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">循环历史消息数量</label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="msg_historynum" placeholder="循环历史消息数量" class="col-xs-10 col-sm-5" value=<?php echo $_smarty_tpl->tpl_vars['wall_config']->value['msg_historynum'];?>
 />
											<span class="input-group-btn">
												<button type="button" class="btn btn-purple btn-sm " onclick="set_msg_historynum()">
													修改
												</button>
											</span>
										</div>
									</div>
									
									
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">图片消息放大显示</label>
										<div class="col-sm-9">
											<label style="padding-top:9px">
												<input name="msg_showbig" class="ace ace-switch ace-switch-3" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['wall_config']->value['msg_showbig'] == 1) {?>checked<?php }?> />
												<span class="lbl" onclick="set_msg_showbig()"></span>
											</label>
										</div>
									</div>
									<div class="space-4 msg_showbigtime_item" <?php if ($_smarty_tpl->tpl_vars['wall_config']->value['msg_showbig'] == 0) {?>style="display:none;"<?php }?>></div>
									<div class="form-group msg_showbigtime_item" <?php if ($_smarty_tpl->tpl_vars['wall_config']->value['msg_showbig'] == 0) {?>style="display:none;"<?php }?>>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">图片消息放大显示时间</label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="msg_showbigtime" placeholder="图片消息放大显示时间，单位秒" class="col-xs-10 col-sm-5" value=<?php echo $_smarty_tpl->tpl_vars['wall_config']->value['msg_showbigtime'];?>
 />
											<span class="input-group-btn">
												<button type="button" class="btn btn-purple btn-sm " onclick="set_msg_showbigtime()">
													修改
												</button>
											</span>
										</div>
									</div>
									
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">上墙消息颜色：</label>
										<div class="col-sm-9">
											<input type="text"  name="msg_color" placeholder="上墙消息颜色，16进制值" class="col-xs-10 col-sm-5" value="<?php echo $_smarty_tpl->tpl_vars['wall_config']->value['msg_color'];?>
" />
											<span class="input-group-btn">
												<button type="button" class="btn btn-purple btn-sm " onclick="setmsgcolor()">
													修改
												</button>
											</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">上墙名称显示</label>
										<div class="col-sm-9">
											
											<div class="radio-inline">
					 								<label>
														<input name="wallnameshowstyle" type="radio" class="ace" value="1" <?php if ($_smarty_tpl->tpl_vars['wallnameshowstyle']->value == 1) {?>checked<?php }?> />
														<span class="lbl">昵称</span>
													</label>
												</div>

												<div class="radio-inline">
													<label>
														<input name="wallnameshowstyle" type="radio" class="ace" value="2" <?php if ($_smarty_tpl->tpl_vars['wallnameshowstyle']->value == 2) {?>checked<?php }?> />
														<span class="lbl">姓名</span>
													</label>
												</div>
												<div class="radio-inline">
													<label>
														<input name="wallnameshowstyle" type="radio" class="ace" value="3" <?php if ($_smarty_tpl->tpl_vars['wallnameshowstyle']->value == 3) {?>checked<?php }?> />
														<span class="lbl">手机号</span>
													</label>
												</div>
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">昵称颜色：</label>
										<div class="col-sm-9">
											<input type="text"  name="nickname_color" placeholder="昵称颜色，16进制值" class="col-xs-10 col-sm-5" value="<?php echo $_smarty_tpl->tpl_vars['wall_config']->value['nickname_color'];?>
" />
											<span class="input-group-btn">
												<button type="button" class="btn btn-purple btn-sm " onclick="setnicknamecolor()">
													修改
												</button>
											</span>
										</div>
									</div>
									
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">前台刷新时间</label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="refreshtime" placeholder="前台刷新时间，单位秒" class="col-xs-10 col-sm-5" value=<?php echo $_smarty_tpl->tpl_vars['wall_config']->value['refreshtime'];?>
 />
											<span class="input-group-btn">
												<button type="button" class="btn btn-purple btn-sm " onclick="playrate()">
													修改
												</button>
											</span>
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">消息发送频率</label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="timeinterval" placeholder="观众发送消息的频率，单位秒" class="col-xs-10 col-sm-5" value=<?php echo $_smarty_tpl->tpl_vars['wall_config']->value['timeinterval'];?>
 />
											<span class="input-group-btn">
												<button type="button" class="btn btn-purple btn-sm " onclick="setsendrate()">
													修改
												</button>
											</span>
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">屏蔽关键字（,隔开）</label>
										<div class="col-sm-9">
											<textarea class="form-control" id="form-field-8" name="black_word" placeholder="屏蔽关键字（,隔开）"><?php echo $_smarty_tpl->tpl_vars['wall_config']->value['black_word'];?>
</textarea>
											<span class="input-group-btn">
												<button type="button" class="btn btn-purple btn-sm " onclick="setblacklist()">
													修改
												</button>
											</span>
										</div>
									</div>
								</form>
									
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<?php $_smarty_tpl->_subTemplateRender("file:templates/html_footercontent.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- 写每个页面自定的js -->
<?php echo '<script'; ?>
 type="text/javascript">

//自动审核开关
function switchautoaudit(){
	var shenghe=$('input[name=shenghe]').get(0).checked?1:0;
	jQuery.ajax({
		"url":'dowallsettings.php?action=switchautoaudit',
		"data":{"shenghe":shenghe},
		"type":'post',
		"dataType":"json",
		"success":function(json){
			if(json.code<0)
				alert(json.message);
			return false;
		}
	});
}
//循环播放开关
function switchloopplay(){
	var circulation=$('input[name=circulation]').get(0).checked?0:1;
	jQuery.ajax({
		"url":'dowallsettings.php?action=switchloopplay',
		"data":{"circulation":circulation},
		"type":'post',
		"dataType":"json",
		"success":function(json){
			if(circulation==1){
				$('.msg_historynum_item').slideDown();
			}else{
				$('.msg_historynum_item').slideUp();
			}
			if(json.code<0)
				alert(json.message);
			return false;
		}
	});
}

function set_msg_historynum(){
	var historynum=$('input[name=msg_historynum]').val();
	jQuery.ajax({
		"url":'dowallsettings.php?action=set_msg_historynum',
		"data":{"msg_historynum":historynum},
		"type":'post',
		"dataType":"json",
		"success":function(json){
			//if(json.code<0)
			alert(json.message);
			return false;
		}
	});
}
//设置上墙字体颜色值
function setmsgcolor(){
	var msg_color=$('input[name=msg_color]').val();
	jQuery.ajax({
		"url":'dowallsettings.php?action=set_msg_color',
		"data":{"msg_color":msg_color},
		"type":'post',
		"dataType":"json",
		"success":function(json){
			//if(json.code<0)
			alert(json.message);
			return false;
		}
	});
}
//设置上墙字体颜色值
function setnicknamecolor(){
	var nickname_color=$('input[name=nickname_color]').val();
	jQuery.ajax({
		"url":'dowallsettings.php?action=set_nickname_color',
		"data":{"nickname_color":nickname_color},
		"type":'post',
		"dataType":"json",
		"success":function(json){
			//if(json.code<0)
			alert(json.message);
			return false;
		}
	});
}
$(function(){
	$('input[name=msg_showstyle]').bind('click',function(){
		//console.log('test');
		var msg_showstyle=$('input[name=msg_showstyle]:checked').val();
		set_msg_showstyle(msg_showstyle);
	});
	$('select[name=msg_num]').change(function(){
		var msg_num=$(this).val();
		$.ajax({
			"url":'dowallsettings.php?action=set_msg_num',
			"data":{"msg_num":msg_num},
			"type":'post',
			"dataType":"json",
			"success":function(json){
				if(json.code<0)
					alert(json.message);
				return false;
			}
		});
	});
	$('input[name=wallnameshowstyle]').bind('click',function(){
		var wallnameshowstyle=$('input[name=wallnameshowstyle]:checked').val();
		set_wallnameshowstyle('wallnameshowstyle',wallnameshowstyle);
	});
});

function set_wallnameshowstyle(key,val){
	jQuery.ajax({
		"url":'dowallsettings.php?action=set_showstyle',
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

function set_msg_showstyle(style){
	jQuery.ajax({
		"url":'dowallsettings.php?action=set_msg_showstyle',
		"data":{"msg_showstyle":style},
		"type":'post',
		"dataType":"json",
		"success":function(json){
			if(json.code<0)
				alert(json.message);
			return false;
		}
	});
}

function set_msg_showbig(){
	var msg_showbig=$('input[name=msg_showbig]').get(0).checked?0:1;
	jQuery.ajax({
		"url":'dowallsettings.php?action=set_msg_showbig',
		"data":{"msg_showbig":msg_showbig},
		"type":'post',
		"dataType":"json",
		"success":function(json){
			if(msg_showbig==1){
				$('.msg_showbigtime_item').slideDown();
			}else{
				$('.msg_showbigtime_item').slideUp();
			}
			if(json.code<0)
				alert(json.message);
			return false;
		}
	});
}
function set_msg_showbigtime(){
	var msg_showbigtime=$('input[name=msg_showbigtime]').val();
	jQuery.ajax({
		"url":'dowallsettings.php?action=set_msg_showbigtime',
		"data":{"msg_showbigtime":msg_showbigtime},
		"type":'post',
		"dataType":"json",
		"success":function(json){
			//if(json.code<0)
			alert(json.message);
			return false;
		}
	});
}
//播放频率
function playrate(){
	var refreshtime=$('input[name=refreshtime]').val();
	jQuery.ajax({
		"url":'dowallsettings.php?action=playrate',
		"data":{"refreshtime":refreshtime},
		"type":'post',
		"dataType":"json",
		"success":function(json){
			alert(json.message);
			return false;
		}
	});
}
//发送上墙消息的频率
function setsendrate(){
	var timeinterval=$('input[name=timeinterval]').val();
	jQuery.ajax({
		"url":'dowallsettings.php?action=setsendrate',
		"data":{"timeinterval":timeinterval},
		"type":'post',
		"dataType":"json",
		"success":function(json){
			alert(json.message);
			return false;
		}
	});
}
//屏蔽的关键字清单
function setblacklist(){
	var black_word=$('textarea[name=black_word]').val();
	jQuery.ajax({
		"url":'dowallsettings.php?action=setblacklist',
		"data":{"black_word":black_word},
		"type":'post',
		"dataType":"json",
		"success":function(json){
			alert(json.message);
			window.location.reload();
			//return false;
		}
	});
}
$(function(){
	$('input[name=msg_color]').colorpicker({format : "hex"});
	$('input[name=nickname_color]').colorpicker({format : "hex"});
})

<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:templates/html_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
