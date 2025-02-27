<?php
/* Smarty version 3.1.33, created on 2024-06-14 17:49:32
  from '/www/wwwroot/interaction/myadmin/templates/danmusettings.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c122c3f4d42_54482944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f276fee2209630f366858766adcc95f3d5878a22' => 
    array (
      0 => '/www/wwwroot/interaction/myadmin/templates/danmusettings.html',
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
function content_666c122c3f4d42_54482944 (Smarty_Internal_Template $_smarty_tpl) {
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
										弹幕设置
										<small>配置是否循环播放、消息循环时间，条数隔等</small>
									</h3>
						
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
									<form class="form-horizontal" role="form">
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">弹幕位置</label>
										<div class="col-sm-9">
											
											<div class="radio-inline">
					 								<label>
														<input name="positionmode" type="radio" class="ace" value="1" <?php if ($_smarty_tpl->tpl_vars['danmu_config']->value['positionmode'] == 1) {?>checked<?php }?> />
														<span class="lbl">上部</span>
													</label>
												</div>

												<div class="radio-inline">
													<label>
														<input name="positionmode" type="radio" class="ace" value="2" <?php if ($_smarty_tpl->tpl_vars['danmu_config']->value['positionmode'] == 2) {?>checked<?php }?> />
														<span class="lbl">中部</span>
													</label>
												</div>
												<div class="radio-inline">
													<label>
														<input name="positionmode" type="radio" class="ace" value="3" <?php if ($_smarty_tpl->tpl_vars['danmu_config']->value['positionmode'] == 3) {?>checked<?php }?> />
														<span class="lbl">下部</span>
													</label>
												</div>
												<div class="radio-inline">
													<label>
														<input name="positionmode" type="radio" class="ace" value="4" <?php if ($_smarty_tpl->tpl_vars['danmu_config']->value['positionmode'] == 4) {?>checked<?php }?> />
														<span class="lbl">全屏</span>
													</label>
												</div>
											
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">是否显示昵称</label>
										<div class="col-sm-9">
											<label style="padding-top:9px">
												<input name="showname" class="ace ace-switch ace-switch-3" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['danmu_config']->value['showname'] == 2) {?>checked<?php }?> />
												<span class="lbl" onclick="switchshowname()"></span>
											</label>
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">循环播放</label>
										<div class="col-sm-9">
											<label style="padding-top:9px">
												<input name="isloop" class="ace ace-switch ace-switch-3" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['danmu_config']->value['isloop'] == 2) {?>checked<?php }?> />
												<span class="lbl" onclick="switchisloop()"></span>
											</label>
										</div>
									</div>
									
									<div class="space-4 " ></div>
									<div class="form-group " >
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">循环历史消息数量</label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="historynum" placeholder="循环历史消息数量" class="col-xs-10 col-sm-5" value=<?php echo $_smarty_tpl->tpl_vars['danmu_config']->value['historynum'];?>
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
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">弹幕消息颜色：</label>
										<div class="col-sm-9">
											<input type="text"  name="textcolor" placeholder="弹幕消息颜色，16进制值" class="col-xs-10 col-sm-5" value="<?php echo $_smarty_tpl->tpl_vars['danmu_config']->value['textcolor'];?>
" />
											<span class="input-group-btn">
												<button type="button" class="btn btn-purple btn-sm " onclick="setmsgcolor()">
													修改
												</button>
											</span>
										</div>
									</div>
									
									
									
								
									
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">消息显示间隔</label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="looptime" placeholder="弹幕消息的显示频率，单位秒" class="col-xs-10 col-sm-5" value=<?php echo $_smarty_tpl->tpl_vars['danmu_config']->value['looptime'];?>
 />
											<span class="input-group-btn">
												<button type="button" class="btn btn-purple btn-sm " onclick="setlooptime()">
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

//是否显示昵称
function switchshowname(){
	var showname=$('input[name=showname]').get(0).checked?1:2;
	jQuery.ajax({
		"url":'dodanmusettings.php?action=switchshowname',
		"data":{"showname":showname},
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
function switchisloop(){
	var isloop=$('input[name=isloop]').get(0).checked?1:2;
	jQuery.ajax({
		"url":'dodanmusettings.php?action=switchisloop',
		"data":{"isloop":isloop},
		"type":'post',
		"dataType":"json",
		"success":function(json){
			
			if(json.code<0)
				alert(json.message);
			return false;
		}
	});
}
//循环播放的历史消息数量
function set_msg_historynum(){
	var historynum=$('input[name=historynum]').val();
	jQuery.ajax({
		"url":'dodanmusettings.php?action=sethistorynum',
		"data":{"historynum":historynum},
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
	var textcolor=$('input[name=textcolor]').val();
	jQuery.ajax({
		"url":'dodanmusettings.php?action=set_msg_color',
		"data":{"textcolor":textcolor},
		"type":'post',
		"dataType":"json",
		"success":function(json){
			//if(json.code<0)
			alert(json.message);
			return false;
		}
	});
}
//设置弹幕显示位置
$(function(){
	$('input[name=positionmode]').bind('click',function(){
		//console.log('test');
		var positionmode=$('input[name=positionmode]:checked').val();
		setpositionmode(positionmode);
	})
})
function setpositionmode(positionmode){
	jQuery.ajax({
		"url":'dodanmusettings.php?action=setpositionmode',
		"data":{"positionmode":positionmode},
		"type":'post',
		"dataType":"json",
		"success":function(json){
			if(json.code<0)
				alert(json.message);
			return false;
		}
	});
}



//弹幕显示消息的频率
function setlooptime(){
	var looptime=$('input[name=looptime]').val();
	jQuery.ajax({
		"url":'dodanmusettings.php?action=setlooptime',
		"data":{"looptime":looptime},
		"type":'post',
		"dataType":"json",
		"success":function(json){
			alert(json.message);
			return false;
		}
	});
}

$(function(){
	$('input[name=textcolor]').colorpicker({format : "hex"});
})



<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:templates/html_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
