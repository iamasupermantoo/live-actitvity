<?php
/* Smarty version 3.1.33, created on 2024-06-14 18:12:27
  from '/www/wwwroot/interaction/Modules/Game/templates/front/monkey/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c178b3c4611_50098629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76d7a40937df4b9dba2c9dc93225fb5a77c011d4' => 
    array (
      0 => '/www/wwwroot/interaction/Modules/Game/templates/front/monkey/index.html',
      1 => 1559706320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666c178b3c4611_50098629 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
	<meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
	<meta name="copyright" content="人人互动">
    <title>猴子爬树</title>
    <link rel="stylesheet" type="text/css" href="/Modules/Game/templates/front/monkey/assets/css/front_index.css?t=20190114">
    <link rel="stylesheet" href="/Modules/Game/templates/front/monkey/assets/css/animate.min.css?v=1.1.0">
 </head> 
 <body> 

<audio src="/Modules/Game/templates/front/monkey/assets/music/slz.mp3" preload="preload" id="carrun" loop="loop"></audio>
<audio id="Audio_count" src="/Modules/Game/templates/front/monkey/assets/music/shake_cutdown.mp3" preload="preload"></audio>
<audio id="Audio_NewPlayer" src="/Modules/Game/templates/front/monkey/assets/music/shake_new.mp3" preload="preload"></audio>
<audio id="Audio_Gameover" src="/Modules/Game/templates/front/monkey/assets/music/shake_gameover.wav" preload="preload"></audio>

<div class="pashuMain">
		<div class="houzik">
			<div class="houzi1 houzi_user">
				<div class="guozik"><img class="img-responsive" src="/Modules/Game/templates/front/monkey/assets/images/mshake_yezi.png" alt="图片"/></div>
				<div class="topk">
					<span></span>
					<img src="/Modules/Game/templates/front/monkey/assets/images/default.png" class="mshakeuser_img" />
				</div>
				<div class="bottomhz"><img src="/Modules/Game/templates/front/monkey/assets/images/hz.png" alt="图片"/></div>
			</div>
			<div class="houzi2 houzi_user">
				<div class="guozik"><img class="img-responsive" src="/Modules/Game/templates/front/monkey/assets/images/mshake_yezi.png" alt="图片"/></div>
				<div class="topk">
					<span></span>
					<img src="/Modules/Game/templates/front/monkey/assets/images/default.png" class="mshakeuser_img" />
				</div>
				<div class="bottomhz"><img src="/Modules/Game/templates/front/monkey/assets/images/hz.png" alt="图片"/></div>
			</div>
			<div class="houzi3 houzi_user">
				<div class="guozik"><img class="img-responsive" src="/Modules/Game/templates/front/monkey/assets/images/mshake_yezi.png" alt="图片"/></div>
				<div class="topk">
					<span></span>
					<img src="/Modules/Game/templates/front/monkey/assets/images/default.png" class="mshakeuser_img" />
				</div>
				<div class="bottomhz"><img src="/Modules/Game/templates/front/monkey/assets/images/hz.png" alt="图片"/></div>
			</div>
			<div class="houzi4 houzi_user">
				<div class="guozik"><img class="img-responsive" src="/Modules/Game/templates/front/monkey/assets/images/mshake_yezi.png" alt="图片"/></div>
				<div class="topk">
					<span></span>
					<img src="/Modules/Game/templates/front/monkey/assets/images/default.png" class="mshakeuser_img" />
				</div>
				<div class="bottomhz"><img src="/Modules/Game/templates/front/monkey/assets/images/hz.png" alt="图片"/></div>
			</div>
			<div class="houzi5 houzi_user">
				<div class="guozik"><img class="img-responsive" src="/Modules/Game/templates/front/monkey/assets/images/mshake_yezi.png" alt="图片"/></div>
				<div class="topk">
					<span></span>
					<img src="/Modules/Game/templates/front/monkey/assets/images/default.png" class="mshakeuser_img" />
				</div>
				<div class="bottomhz"><img src="/Modules/Game/templates/front/monkey/assets/images/hz.png" alt="图片"/></div>
			</div>
			<div class="houzi6 houzi_user">
				<div class="guozik"><img class="img-responsive" src="/Modules/Game/templates/front/monkey/assets/images/mshake_yezi.png" alt="图片"/></div>
				<div class="topk">
					<span></span>
					<img src="/Modules/Game/templates/front/monkey/assets/images/default.png" class="mshakeuser_img" />
				</div>
				<div class="bottomhz"><img src="/Modules/Game/templates/front/monkey/assets/images/hz.png" alt="图片"/></div>
			</div>
			<div class="houzi7 houzi_user">
				<div class="guozik"><img class="img-responsive" src="/Modules/Game/templates/front/monkey/assets/images/mshake_yezi.png" alt="图片"/></div>
				<div class="topk">
					<span></span>
					<img src="/Modules/Game/templates/front/monkey/assets/images/default.png" class="mshakeuser_img" />
				</div>
				<div class="bottomhz"><img src="/Modules/Game/templates/front/monkey/assets/images/hz.png" alt="图片"/></div>
			</div>
			<div class="houzi8 houzi_user">
			<div class="guozik"><img class="img-responsive" src="/Modules/Game/templates/front/monkey/assets/images/mshake_yezi.png" alt="图片"/></div>
				<div class="topk">
					<span></span>
					<img src="/Modules/Game/templates/front/monkey/assets/images/default.png" class="mshakeuser_img" />
				</div>
				<div class="bottomhz"><img src="/Modules/Game/templates/front/monkey/assets/images/hz.png" alt="图片"/></div>
			</div>
			<div class="houzi9 houzi_user">
			<div class="guozik"><img class="img-responsive" src="/Modules/Game/templates/front/monkey/assets/images/mshake_yezi.png" alt="图片"/></div>
				<div class="topk">
					<span></span>
					<img src="/Modules/Game/templates/front/monkey/assets/images/default.png" class="mshakeuser_img" />
				</div>
				<div class="bottomhz"><img  src="/Modules/Game/templates/front/monkey/assets/images/hz.png" alt="图片"/></div>
			</div>
			<div class="houzi10 houzi_user">
				<div class="guozik"><img class="img-responsive" src="/Modules/Game/templates/front/monkey/assets/images/mshake_yezi.png" alt="图片"/></div>
				<div class="topk">
					<span></span>
					<img src="/Modules/Game/templates/front/monkey/assets/images/default.png" class="mshakeuser_img" />
				</div>
				<div class="bottomhz"><img src="/Modules/Game/templates/front/monkey/assets/images/hz.png" alt="图片"/></div>
			</div>
		</div>
</div>
  <!--yyy3d box -->
  <!--wellcome -->
	<div class="welcome_box">
			<h3 class="welcome_title">猴子爬树比赛</h3> 
			<div class="main_box"> 
				<div class="main_left"> 
					<!--这个可以自定义上传-->
					<img src="/Modules/Game/templates/front/monkey/assets/images/logo.png" class="adv_img" style=" margin-top: -53px;"> 
				</div> 
				<div class="main_right">  
					<p class="qr_tips">扫码参与猴子爬树互动</p> 
					<img src="" class="qrimg"> 
					<h4>参与人数：<span class="joinNum">0人</span></h4> 
					<div class="list">
						<img class="avatar default" src="/Modules/Game/templates/front/monkey/assets/images/default.png">
						<img class="avatar default" src="/Modules/Game/templates/front/monkey/assets/images/default.png">
						<img class="avatar default" src="/Modules/Game/templates/front/monkey/assets/images/default.png">
						<img class="avatar default" src="/Modules/Game/templates/front/monkey/assets/images/default.png">
						<img class="avatar default" src="/Modules/Game/templates/front/monkey/assets/images/default.png">
						<img class="avatar default" src="/Modules/Game/templates/front/monkey/assets/images/default.png">
						<img class="avatar default" src="/Modules/Game/templates/front/monkey/assets/images/default.png">
						<img class="avatar default" src="/Modules/Game/templates/front/monkey/assets/images/default.png">
						<img class="avatar default" src="/Modules/Game/templates/front/monkey/assets/images/default.png">
						<img class="avatar default" src="/Modules/Game/templates/front/monkey/assets/images/default.png">
					</div> 
				</div> 
			</div>
	</div>
  <!--wellcome -->
  <!--rank box--->
  <div class="rank_box" style="display:none">
		<div class="rank_main">
			<div class="rankfirst">
				<div class="item rank1"> 
					<div class="avarta">
						<img src="/Modules/Game/templates/front/monkey/assets/images/default.png">
					</div> 
					<p>虚位以待</p> 
				</div>   
				<div class="item rank2"> 
					<div class="avarta">
						<img src="/Modules/Game/templates/front/monkey/assets/images/default.png">
					</div> 
					<p>虚位以待</p> 
				</div>   
				<div class="item rank3"> 
					<div class="avarta">
						<img src="/Modules/Game/templates/front/monkey/assets/images/default.png">
					</div> 
					<p>虚位以待</p> 
				</div>   
			</div>
			<!--rank 4-10-->
			<ul class="rank_others">    
				<li>
					<img class="avarta" src="/Modules/Game/templates/front/monkey/assets/images/default.png">
					<p>虚位以待</p>
				</li>
				<li>
					<img class="avarta" src="/Modules/Game/templates/front/monkey/assets/images/default.png">
					<p>虚位以待</p>
				</li>
				<li>
					<img class="avarta" src="/Modules/Game/templates/front/monkey/assets/images/default.png">
					<p>虚位以待</p>
				</li>
				<li>
					<img class="avarta" src="/Modules/Game/templates/front/monkey/assets/images/default.png">
					<p>虚位以待</p>
				</li>
				<li>
					<img class="avarta" src="/Modules/Game/templates/front/monkey/assets/images/default.png">
					<p>虚位以待</p>
				</li>
				<li>
					<img class="avarta" src="/Modules/Game/templates/front/monkey/assets/images/default.png">
					<p>虚位以待</p>
				</li>
				<li>
					<img class="avarta" src="/Modules/Game/templates/front/monkey/assets/images/default.png">
					<p>虚位以待</p>
				</li>
			</ul>
			<div class="yyy3d_btns">
				<!-- <a class="paiming" href="javascript:;" title="全部排名"><img src="http://shangqiang.wxousai.com/addons/meepo_xianchang/template/mobile/app/pm.png" alt=""></a>
				<a class="nextbtn" href="javascript:;" title="下一轮"><img src="/Modules/Game/templates/front/monkey/assets/images/next.png" alt=""></a> 
				<a class="resetbtn" href="javascript:;" title="重玩"><img src="/Modules/Game/templates/front/monkey/assets/images/reset.png" alt=""></a>  -->
			</div>
		</div>
</div>
<!--rank box--->
<div class="cutdown-start"></div>
<?php echo '<script'; ?>
 type="text/javascript">
var GAMECONFIG=<?php echo json_encode($_smarty_tpl->tpl_vars['config']->value);?>
;
var CONFIGS=<?php echo $_smarty_tpl->tpl_vars['configs']->value;?>
;
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/require.min.js" data-main="/Modules/Game/templates/front/monkey/assets/js/front_index.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
