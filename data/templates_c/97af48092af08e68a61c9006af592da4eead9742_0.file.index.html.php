<?php
/* Smarty version 3.1.33, created on 2024-06-14 18:12:29
  from '/www/wwwroot/interaction/Modules/Lottery/templates/front/threedimensional/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c178d753366_18884992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97af48092af08e68a61c9006af592da4eead9742' => 
    array (
      0 => '/www/wwwroot/interaction/Modules/Lottery/templates/front/threedimensional/index.html',
      1 => 1557210560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666c178d753366_18884992 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>3D抽奖</title>
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/css/basic.css"> -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['module_front_path']->value;?>
/<?php echo strtolower($_smarty_tpl->tpl_vars['config']->value['themepath']);?>
/assets/css/lottery.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/fonts/font_864467_uc9k8ie5j6/iconfont.css">
<link rel="stylesheet" type="text/css" href="/assets/plugs/perfect-scrollbar/perfect-scrollbar.css"><?php echo '</script'; ?>
>
<style>
    body {
        margin: 0;
        padding: 0;
    }
    .btn-left,
    .btn-right {
        font-size: 1em;
        cursor: pointer;
    }
    .element {
        width: 150px;
        height: 150px;
        overflow: hidden;
        box-shadow: 0px 0px 12px rgba(243, 241, 137, 0.5);
        border: 1px solid rgba(240, 11, 11, 0.25);
        text-align: center;
        cursor: default;
        position: relative;
        background-color: rgba(240, 11, 11, 0.6);
    }
    
    .element .lottery-item {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        transform: translateY(-50%);
        color:rgb(243, 241, 137);
        font-weight: bolder;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    
    .element img {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
    }
    
    .lottery-scroll li {
        box-shadow: 0px 0px 12px rgba(243, 241, 137, 0.5);
        border: 1px solid rgba(240, 11, 11, 0.25);
        background-color: rgba(240, 11, 11, 0.6);
    }
    .lottery-scroll .lottery-item{
        color:rgb(243, 241, 137);
    }
.winner-group-pop,.winner-single-pop {
	width: 90%;
	height: calc(100% - 200px);
	position: fixed;
	top: 110px;
	left: 5%;
	display: none;
	z-index: 100;
}
.winner-group-pop:before,winner-single-pop:before{
	content: '';
	display: block;
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	/* background-color: rgba(0,0,0,0.8) */
}
.bg-shine {
	width: 100%;
	height: 100%;
	background-image: url('<?php echo $_smarty_tpl->tpl_vars['module_front_path']->value;?>
/<?php echo strtolower($_smarty_tpl->tpl_vars['config']->value['themepath']);?>
/assets/images/light-bg.png');
	background-repeat: no-repeat;
	background-size: cover;
	transform-origin: center center;
	animation: boxround 10s linear infinite;
	position: absolute;
	top: 0;
	left: 0;
	z-index: 0;
}
.winner-contain {
	width: 880px;
	height: 880px;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	margin: auto;
	-webkit-transform-origin: center center;
	transform-origin: center center;
	-webkit-transform: scale(0.6);
	transform: scale(0.6);
	-webkit-animation-iteration-count: 1;
	animation-iteration-count: 1
}

.winner-contain.show {
	-webkit-animation: flip 1s linear 1 forwards;
	animation: flip 1s linear 1 forwards
}

.winner-contain .winner-avatar {
	width: 512px;
	height: 512px;
	background: url("<?php echo $_smarty_tpl->tpl_vars['module_front_path']->value;?>
/<?php echo strtolower($_smarty_tpl->tpl_vars['config']->value['themepath']);?>
/assets/images/avatar-round.png") no-repeat 0 0;
	background-size: cover;
	position: absolute;
	top: 50%;
	left: 50%;
	-webkit-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%)
}

.winner-contain .winner-avatar:before {
	content: '';
	display: block;
	width: 171px;
	height: 126px;
	background-image: url("<?php echo $_smarty_tpl->tpl_vars['module_front_path']->value;?>
/<?php echo strtolower($_smarty_tpl->tpl_vars['config']->value['themepath']);?>
/assets/images/icon-crown.png");
	background-repeat: no-repeat;
	background-size: contain;
	position: absolute;
	top: -71px;
	left: 75px
}

.winner-contain .winner-avatar:after {
	content: '';
	display: block;
	width: 570px;
	height: 158px;
	background-image: url("<?php echo $_smarty_tpl->tpl_vars['module_front_path']->value;?>
/<?php echo strtolower($_smarty_tpl->tpl_vars['config']->value['themepath']);?>
/assets/images/tag-single-win.png");
	background-repeat: no-repeat;
	background-size: contain;
	position: absolute;
	left: 50%;
	bottom: -40px;
	-webkit-transform: translateX(-50%);
	transform: translateX(-50%)
}

.winner-contain .winner-avatar .avatar-box {
	width: 100%;
	height: 100%;
	padding: 21px;
	-webkit-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
	overflow: hidden;
	position: relative;
	border-radius: 50%
}

.winner-contain .winner-avatar .avatar-box .avatar-contain {
	width: 100%;
	height: 100%;
	border-radius: 50%;
	overflow: hidden;
	position: relative
}

.winner-contain .winner-avatar .avatar-box .avatar-contain .winer-name {
	width: 100%;
	font-size: 30px;
	padding: 10px 0;
	text-align: center;
	background-color: rgba(255,255,255,0.4);
	position: absolute;
	bottom: 90px;
	left: 0;
	color: #000;
	display: block;
	overflow: hidden;
	white-space: nowrap;
	text-overflow: ellipsis;
	font-weight: bold;
}

.winner-contain .winner-avatar .avatar-box .avatar-contain img {
	width: 100%;
	height: 100%;
	border-radius: 50%
}

.winner-group-main {
	width: 80%;
	height: 90%;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	margin: auto;
	padding: 20px;
	background-color: rgba(0,0,0,0.9);
	border-radius: 20px;
	-webkit-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
	color: #fff
}

.winner-group-main ul {
	width: 100%;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
	-ms-flex-wrap: wrap;
	flex-wrap: wrap
}

.winner-group-main li {
	width: 230px;
	padding: 15px 20px;
	-webkit-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
	text-align: center
}

.winner-group-main li .winner-avatar {
	width: 100%;
	padding-top: 100%;
	position: relative;
	background-image: url("<?php echo $_smarty_tpl->tpl_vars['module_front_path']->value;?>
/<?php echo strtolower($_smarty_tpl->tpl_vars['config']->value['themepath']);?>
/assets/images/avatar-round.png");
	background-repeat: no-repeat;
	background-size: contain
}

.winner-group-main li .winner-avatar .avatar-box {
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	padding: 12px;
	-webkit-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box
}

.winner-group-main li .winner-avatar .avatar-box img {
	display: block;
	width: 100%;
	height: 100%;
	overflow: hidden;
	border-radius: 50%
}

.winner-group-main li .winner-name {
	display: block;
	width: 100%;
	height: 31px;
	background-image: url("<?php echo $_smarty_tpl->tpl_vars['module_front_path']->value;?>
/<?php echo strtolower($_smarty_tpl->tpl_vars['config']->value['themepath']);?>
/assets/images/name-bg2.png");
	background-repeat: no-repeat;
	background-position: 50% 0;
	line-height: 31px;
	font-size: 20px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis
}

.winner-group-main .group-bar {
	position: relative;
	overflow: hidden;
	width: 100%;
	height: 100%
}

.btn-pop-close {
	display: block;
	width: 36px;
	height: 36px;
	background: url("<?php echo $_smarty_tpl->tpl_vars['module_front_path']->value;?>
/<?php echo strtolower($_smarty_tpl->tpl_vars['config']->value['themepath']);?>
/assets/images/icon-close.png") no-repeat 0 0;
	position: absolute;
	top: 53px;
	right: 11%;
	cursor: pointer;
	-webkit-background-size: contain;
	background-size: contain;
	z-index: 10;
	
	
}
@-webkit-keyframes boxround {
	0% {
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg)
	}

	25% {
		-webkit-transform: rotate(90deg);
		transform: rotate(90deg)
	}

	50% {
		-webkit-transform: rotate(180deg);
		transform: rotate(180deg)
	}

	75% {
		-webkit-transform: rotate(270deg);
		transform: rotate(270deg)
	}

	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg)
	}
}
@-webkit-keyframes flip {
	0% {
		-webkit-transform: rotateY(0deg) scale(0);
		transform: rotateY(0deg) scale(0)
	}

	to {
		-webkit-transform: rotateY(720deg) scale(1);
		transform: rotateY(720deg) scale(1)
	}
}

@keyframes flip {
	0% {
		-webkit-transform: rotateY(0deg) scale(0);
		transform: rotateY(0deg) scale(0)
	}

	to {
		-webkit-transform: rotateY(720deg) scale(1);
		transform: rotateY(720deg) scale(1)
	}
}
</style>
</head>
<body>
<div class="winner-group-pop">
	<span class="btn-pop-close"></span>
	<div class="winner-group-main">
		<div class="group-bar">
			<ul>
				<li>
					<div class="winner-avatar">
						<div class="avatar-box"><img src="<?php echo $_smarty_tpl->tpl_vars['module_front_path']->value;?>
/<?php echo strtolower($_smarty_tpl->tpl_vars['config']->value['themepath']);?>
/assets/images/avatar-primary.png" alt=""></div>
					</div>
					<span class="winner-name">测试</span>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- 单人中奖 -->
<div class="winner-single-pop">
	<!-- <span class="btn-pop-close"></span> -->
	<div class="winner-contain">
		<!-- 默认隐藏激活 show -->
		<div class="bg-shine"></div>
		<div class="winner-avatar">
			<div class="avatar-box">
				<div class="avatar-contain">
					<img src="<?php echo $_smarty_tpl->tpl_vars['module_front_path']->value;?>
/<?php echo strtolower($_smarty_tpl->tpl_vars['config']->value['themepath']);?>
/assets/images/avatar-primary.png" alt="">
					<div class="winer-name">阿萨斯大所萨芬的</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="container">
    <div id='lottery_main'></div>
    <div id="lottery-panel">
        <div class="lottery-side lottery-left">
            <span class="prizename"><i class="icon iconfont icon-9 btn-left"></i><span id="prizedata" class="prizename_txt" data='0'>幸运大奖</span><i class="icon iconfont icon-10 btn-right"></i></span>
            <div class="lottery-img">
                <img src="/wall/themes/meepo/assets/images/defaultaward.jpg" alt="">
            </div>
            <div class="lottery-control">
                <div class="control-item">
                    抽取人数：<span class="icon-ctrol icon-minus"></span><em class="lottery-num">1</em><span class="icon-ctrol icon-plus"></span>
                </div>
                <div class="control-item-btn">
                    <div class="lottery-btn btn-start">&nbsp;</div>
                </div>
            </div>
        </div>
        <div class="lottery-side lottery-right">
            <span class="winnernum">已有<span class="winnernum_txt">0</span>个中奖</span>
            <div class="lottery-win-list lottery-horizontal">
                <div class="lottery-winner" id="lottery-winner">
                    <ul class="lottery-win-scroll">
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/assets/plugs/perfect-scrollbar/perfect-scrollbar.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/plugs/hotkeys-master/dist/hotkeys.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/js/bindhotkeys.js"><?php echo '</script'; ?>
>
<!--3d抽奖基础库-->
<?php echo '<script'; ?>
 src="/assets/js/three.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/js/tween.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/CSS3DRenderer.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['module_front_path']->value;?>
/<?php echo strtolower($_smarty_tpl->tpl_vars['config']->value['themepath']);?>
/assets/js/3dlottery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
var prizesdata=<?php echo $_smarty_tpl->tpl_vars['prizes']->value;?>
;
var configid=<?php echo $_smarty_tpl->tpl_vars['config']->value['id'];?>
;
var lotteryconfig=<?php echo json_encode($_smarty_tpl->tpl_vars['config']->value);?>
;
var lotteryconfigs=<?php echo $_smarty_tpl->tpl_vars['configs']->value;?>
;
new PerfectScrollbar('.lottery-winner');
new PerfectScrollbar('.winner-group-main .group-bar');
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['module_front_path']->value;?>
/<?php echo strtolower($_smarty_tpl->tpl_vars['config']->value['themepath']);?>
/assets/js/front_index.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
