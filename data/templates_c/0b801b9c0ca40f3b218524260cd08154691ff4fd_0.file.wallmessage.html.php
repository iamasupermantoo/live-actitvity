<?php
/* Smarty version 3.1.33, created on 2024-06-14 17:49:35
  from '/www/wwwroot/interaction/myadmin/templates/wallmessage.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c122f5ebab0_70177082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b801b9c0ca40f3b218524260cd08154691ff4fd' => 
    array (
      0 => '/www/wwwroot/interaction/myadmin/templates/wallmessage.html',
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
function content_666c122f5ebab0_70177082 (Smarty_Internal_Template $_smarty_tpl) {
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
					<li><i class="ace-icon fa fa-home home-icon"></i> <a
						href="index.php">首页</a></li>
					<li class="active"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
				</ul>
				<!-- /.breadcrumb -->
				<!-- /section:basics/content.searchbox -->
			</div>

			<!-- /section:basics/content.breadcrumbs -->
			<div class="page-content">
				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<div class="tabbable">
							<ul class="nav nav-tabs padding-12 tab-color-blue background-blue"
								id="messagelisttab">
								<li class="active"><a data-toggle="tab" href="#pending" data="pendinggrid" ret="0">待审核</a>
								</li>

								<li><a data-toggle="tab" href="#accept"  data="acceptedgrid"  ret="1">审核通过</a></li>

								<li><a data-toggle="tab" href="#refuse"  data="refusedgrid"  ret="2">审核不通过</a></li>
							</ul>

							<div class="tab-content">
								<div id="pending" class="tab-pane in active">
									<div class="row pendinggrid">
									
									</div>
									
									<div class="row"></div>
									
									<hr />
									<div class="row">
									<button class="col-sm-10 btn-primary col-sm-offset-1" onclick="getmore(0);">获取更多</button>
									</div>
								</div>
									<div id="accept" class="tab-pane">
										<div class="row acceptedgrid">
											
										</div>
										<div class="row"></div>
									
									<hr />
									
									<div class="row">
									<button class="col-sm-10 btn-primary col-sm-offset-1" onclick="getmore(1);">获取更多</button>
									</div>	
									</div>

									<div id="refuse" class="tab-pane">
										<div class="row refusedgrid">
										
										</div>
									<div class="row"></div>
									
									<hr />
									<div class="row">
									<button class="col-sm-10 btn-primary col-sm-offset-1" onclick="getmore(2);">获取更多</button>
									</div>
									</div>
								</div>
							</div>

							
							<!-- PAGE CONTENT ENDS -->
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.page-content -->
			</div>
		</div>
		<!-- /.main-content -->
		<?php $_smarty_tpl->_subTemplateRender("file:templates/html_footercontent.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<!-- 写每个页面自定的js -->
		<?php echo '<script'; ?>
 type="text/javascript" src="assets/js/masonry/masonry.pkgd.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
		
		jQuery(function($){
			getmore(0);
		});
		String.prototype.replaceAll = function(s1,s2){
		　　return this.replace(new RegExp(s1,"gm"),s2);
	　　}
		$('#messagelisttab a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			getmore($(this).attr('ret'));
			$('.'+$(this).attr('data')).masonry({});
		})
		function refuse(id){
			jQuery.ajax({
				'url':'dowallmessage.php?action=refuse',
				'data':{"id":id},
				'type':"get",
				'dataType':'json',
				'success':function(json){
					if(json.code<0){
						alert(json.message);
					}else{
						$('#item'+id).remove();
					}
				}
			})
			//console.log(id);
		}
		function accept(id){
			jQuery.ajax({
				'url':'dowallmessage.php?action=accept',
				'data':{"id":id},
				'type':"get",
				'dataType':'json',
				'success':function(json){
					if(json.code<0){
						alert(json.message);
					}else{
						$('#item'+id).remove();
					}
				}
			})
		}
		function getmore(action){
			//var lastid=0;
			var type=''
			var typeclass='';
			if(action==0){
				typeclass='pendinggrid';
				type='lastpendingmessageid';
			}
			if(action==1){
				typeclass='acceptedgrid';
				type='lastacceptedmessageid';
			}
			if(action==2){
				typeclass='refusedgrid';
				type='lastrefusedmessageid';
			}
			//lastid=$('input[name='+type+']').val();
			var acceptbutton=action==1?'':'<button class="btn btn-xs btn-success pull-right" onclick="accept({id})">'+
			'<span class="bigger-110">通过</span> <i'+
			'class="ace-icon fa fa-arrow-right icon-on-right"></i>'+
	'</button>';
			var refusebutton=action==2?'':'<button class="btn btn-xs btn-danger pull-left" onclick="refuse({id})">'+
			'<i class="ace-icon fa fa-times"></i> <span'+
			'class="bigger-110">拒绝</span>'+
	'</button>';
			var htmltemplate='<div class="grid-item col-sm-3" id="item{id}">'+
				'<div class="widget-box widget-color-pink" id="widget-box-9" data="{id}">'+
			'<div class="widget-header">'+
				'<h5 class="widget-title">'+
					'<img src="{avatar}" style="height:30px;" />{nickname}'+
				'</h5>'+
			'</div>'+
			'<div class="widget-body">'+
				'<div class="widget-main">{content}</div>'+
				'<div class="widget-toolbox padding-8 clearfix">'+
				refusebutton+
				acceptbutton+
				'</div>'+
			'</div>'+
		'</div>'+
	'</div>';
			jQuery.ajax({
				'url':'dowallmessage.php?action=getmore',
				'data':{"ret":action},
				'type':"get",
				'dataType':'json',
				'success':function(json){
					var html='';
					if(json.lastid>0){
						$('input[name='+type+']').val(json.lastid);
						for(var i=json.data.length-1,l=0;i>=l;i--){
							var temp=htmltemplate;
							temp=temp.replaceAll('{id}',json.data[i].id);
							temp=temp.replaceAll('{avatar}',json.data[i].avatar);
							temp=temp.replaceAll('{nickname}',json.data[i].nickname);
							if(json.data[i].type==2){
								temp=temp.replaceAll('{content}','<img src="'+json.data[i].content+'" style="width:90%;"/>');
							}else{
								temp=temp.replaceAll('{content}',json.data[i].content);
							}
							
							html+=temp;
						}
						//$('.'+typeclass).html(html);
					}
					$('.'+typeclass).html(html);
				}
			})
		}
		
<?php echo '</script'; ?>
>

		<?php $_smarty_tpl->_subTemplateRender("file:templates/html_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
