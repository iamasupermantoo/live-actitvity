<?php
/* Smarty version 3.1.33, created on 2024-06-14 18:13:45
  from '/www/wwwroot/interaction/myadmin/templates/systemsettings.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c17d97cc899_22273277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58b91d48dd0197c30a01edf61579d253913e3d23' => 
    array (
      0 => '/www/wwwroot/interaction/myadmin/templates/systemsettings.html',
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
function content_666c17d97cc899_22273277 (Smarty_Internal_Template $_smarty_tpl) {
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

						<small>设置系统背景图，logo等</small>
					</h3>
						<div class="row">
							<div class="col-xs-6">
								<div class="widget-box">
									<div class="widget-header">
										<h4 class="smaller">
											大屏幕基本设置
										</h4>
									</div>
									<div class="widget-body">
										<div class="widget-main">
											
										
											<div class="row">
												<div class="col-sm-12">
												<div class="form-group">
											<div class="input-group">
															<span class="input-group-addon">
																大二维码顶部文字
															</span>

															<input type="text" name="qrcodetoptext" class="form-control" placeholder="大二维码顶部文字" value="<?php echo $_smarty_tpl->tpl_vars['wall_config']->value['qrcodetoptext'];?>
"/>
															<span class="input-group-btn">
																<button type="button" class="btn btn-purple btn-sm btn-qrcodetoptext">
																	修改
																</button>
															</span>
														</div>
														<p class="help-block">右上角二维码点击2次最大后顶上显示的文字</p>
											</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group">
														<div class="input-group">
															<span class="input-group-addon">
																底部菜单颜色
															</span>
															<input type="text" name="menucolor" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['menucolor']->value;?>
"/>
															<span class="input-group-btn">
																<button type="button" class="btn btn-purple btn-sm btn-menucolor">
																	修改
																</button>
															</span>
														</div>
														<p class="help-block">大屏幕页面底部菜单的颜色</p>
													</div>
												</div>
											</div>
											<div class="row">
													<div class="col-sm-12">
														<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" >显示签到人数</label>
																<div class="col-sm-9">
																	<label>
																		<input name="showcountsign_switch" class="ace ace-switch ace-switch-3" type="checkbox" value="2" <?php if ($_smarty_tpl->tpl_vars['showcountsign']->value == 2) {?>checked<?php }?> />
																		<span class="lbl showcountsign_switch_lb" ></span>
																	</label>
																</div>
														</div>
													</div>
												</div>
										</div>
									</div>
								</div>
								
							</div>
							<div  class="col-xs-6">
							
										
										<div class="widget-box">
											<div class="widget-header">
												<h4 class="smaller">
													版权信息
												</h4>
											</div>
											<div class="widget-body">
												<div class="widget-main">
													<div class="form-group">
													<div class="input-group">
																	<span class="input-group-addon">
																		文字
																	</span>

																	<input type="text" name="copyright" class="form-control" placeholder="输入版权文字" value="<?php echo $_smarty_tpl->tpl_vars['wall_config']->value['copyright'];?>
"/>
																	<span class="input-group-btn">
																		<button type="button" class="btn btn-purple btn-sm btn-copyright">
																			修改
																		</button>
																	</span>
																</div>

													</div>
													<div class="form-group">
													<div class="input-group">
																	<span class="input-group-addon">
																		链接
																	</span>
																	<input type="text" name="copyrightlink" class="form-control" placeholder="输入版权链接" value="<?php echo $_smarty_tpl->tpl_vars['wall_config']->value['copyrightlink'];?>
"/>
																	<span class="input-group-btn">
																		<button type="button" class="btn btn-purple btn-sm btn-copyrightlink">
																			修改
																		</button>
																	</span>
																</div>

													</div>
												</div>
											</div>
										</div>
							</div>
							<!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<?php $_smarty_tpl->_subTemplateRender("file:templates/html_footercontent.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- 写每个页面自定的js -->
<?php echo '<script'; ?>
 type="text/javascript">

jQuery(function($){
	$('input[name=menucolor]').colorpicker({format : "hex"});
	$('.btn-copyright').bind('click',function(){
		var val=$('input[name=copyright]').val();
		$.ajax({
			'url':'doindex.php?action=copyright',
			'data':{'copyright':val},
			'type':'post',
			'dataType':'json',
			'success':function(json){
				alert(json.message);
				return false;
			}
		})
	});
	$('.btn-copyrightlink').bind('click',function(){
		var val=$('input[name=copyrightlink]').val();
		$.ajax({
			'url':'doindex.php?action=copyrightlink',
			'data':{'copyrightlink':val},
			'type':'post',
			'dataType':'json',
			'success':function(json){
				alert(json.message);
				return false;
			}
		})
	});
	$('.btn-menucolor').on('click',function(){
		var text=$('input[name=menucolor]').val();
		$.ajax({
			'url':'dosystemsettings.php?action=menucolor',
			'type':'get',
			'dataType':'json',
			'data':{'menucolor':text},
			'success':function(json){
				alert(json.message);
				return false;
			}
		});
	})
	$('.showcountsign_switch_lb').bind('click',function(){
		// console.log('test');
		// var text=$('input[name=menucolor]').val();
		var showcountsign=$('input[name=showcountsign_switch]:checked').val();
		// console.log(showcountsign);
		showcountsign=showcountsign==undefined?2:1;
		
		$.ajax({
			'url':'dosystemsettings.php?action=showcountsign',
			'type':'get',
			'dataType':'json',
			'data':{'showcountsign':showcountsign},
			'success':function(json){
				console.log("显示签到人数:"+json.message);
				// alert(json.message);
				// return false;
			}
		});
	})
	$('.btn-welcometext1').bind('click',function(){
		var text=$('input[name=welcometext1]').val();
		$.ajax({
			'url':'dosystemsettings.php?action=setwelcometext1',
			'type':'post',
			'dataType':'json',
			'data':{'welcometext1':text},
			'success':function(json){
				alert(json.message);
				return false;
			}
		});
	});
	
	$('.btn-welcometext2').bind('click',function(){
		var text=$('input[name=welcometext2]').val();
		$.ajax({
			'url':'dosystemsettings.php?action=setwelcometext2',
			'type':'post',
			'dataType':'json',
			'data':{'welcometext2':text},
			'success':function(json){
				alert(json.message);
				return false;
			}
		});
	});
	$('.btn-qrcodetoptext').bind('click',function(){
		var text=$('input[name=qrcodetoptext]').val();
		$.ajax({
			'url':'dosystemsettings.php?action=qrcodetoptext',
			'type':'post',
			'dataType':'json',
			'data':{'qrcodetoptext':text},
			'success':function(json){
				alert(json.message);
				return false;
			}
		});
	});
	$('.imageuploader').ace_file_input({
		style: 'well',
		btn_choose: '点击此处选择图片',
		btn_change: null,
		no_icon: 'ace-icon fa fa-cloud-upload',
		droppable: true,
		maxSize: 550000,
		//previewHeight:200,
		allowExt: ["jpeg", "jpg", "png", "gif"],
		allowMime: ["image/jpg", "image/jpeg", "image/png", "image/gif"],
		thumbnail: 'large'//large | fit
		//,icon_remove:null//set null, to hide remove/reset button
		/**,before_change:function(files, dropped) {
			//Check an example below
			//or examples/file-upload.html
			return true;
		}*/
		/**,before_remove : function() {
			return true;
		}*/
		,
		//previewSize:400,
		previewHeight:200,
		preview_error : function(filename, error_code) {
			//name of the file that failed
			//error_code values
			//1 = 'FILE_LOAD_FAILED',
			//2 = 'IMAGE_LOAD_FAILED',
			//3 = 'THUMBNAIL_FAILED'
			//alert(error_code);
		}

	}).on('change', function(){
	});
	

	
	<?php if ($_smarty_tpl->tpl_vars['wall_config']->value['logoimg'] != '') {?>
	
	$('#logo')
	.ace_file_input('show_file_list', [
		{type: 'image', name: 'logo', path: '<?php echo $_smarty_tpl->tpl_vars['wall_config']->value['logoimg'];?>
'},
	]);
	
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['wall_config']->value['bottom_logoimg'] != '') {?>
		
		$('#bottomlogo')
		.ace_file_input('show_file_list', [
			{type: 'image', name: 'bottomlogo', path: '<?php echo $_smarty_tpl->tpl_vars['wall_config']->value['bottom_logoimg'];?>
'},
		]);
		
	<?php }?>
			
	
	
})

<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:templates/html_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
