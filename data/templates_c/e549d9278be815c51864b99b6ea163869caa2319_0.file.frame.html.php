<?php
/* Smarty version 3.1.33, created on 2024-06-14 17:46:53
  from '/www/wwwroot/interaction/frame.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c118d8942f7_14531210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e549d9278be815c51864b99b6ea163869caa2319' => 
    array (
      0 => '/www/wwwroot/interaction/frame.html',
      1 => 1559638840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666c118d8942f7_14531210 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>微信上墙首页</title>
    <link rel="stylesheet" href="/assets/css/normalize.css" >
    <link rel="stylesheet" href="/assets/plugs/icon/iconfont.css" type="text/css" />
    <link rel="stylesheet" href="/assets/css/index.css" >
    <!--弹幕样式-->
    <link rel="stylesheet" type="text/css" href="/assets/plugs/jquery.barrager.js/dist/css/barrager.css">
    <link rel="stylesheet" type="text/css" href="/assets/plugs/intro.js-master/minified/introjs.min.css">
    <style>
    
        .icon.iconfont ,.navbar-btn p{
            color: <?php echo $_smarty_tpl->tpl_vars['menucolor']->value;?>
;
        }
    
    </style>
</head>
<body >
        
<?php if ($_smarty_tpl->tpl_vars['showcountsign']->value != 1) {?>
<div class="Panel_Top" style="pointer-events: none;">
    <div class="top_menu">
        <!-- <img class="activity_logo" src="img/logo.png"> -->
        <div class="tp2">
            <div class="tp-1">
                <div class="tp-3" id="counter">参与人数：0人</div>
            </div>
        </div>
    </div>
</div>
<?php }?>
<iframe src="/wall/index.php" class="frames" id="frame-container"></iframe>
<div class="Panel Bottom">
    <div class="navbar clear">
        <div class="nav-items">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugs']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?> <?php if ($_smarty_tpl->tpl_vars['item']->value['ismodule'] == 2) {?>
            <div class="navbar-btn menu-item" data="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" >
                <div class="icon-div">
                    <span class=""></span>
                </div>
                <p><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</p>
            </div>
            <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['item']->value['url'] != '') {?>
            <div class="navbar-btn menu-item" data="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['name'] == 'lottery') {?> data-step='1' data-intro="抽奖包含了以下3个功能:<ol><li>3D抽奖<li>抽奖箱</li></li><li>砸金蛋</li></ol>"<?php }
if ($_smarty_tpl->tpl_vars['item']->value['name'] == 'game') {?> data-step='2' data-intro="摇一摇一共有9种主题，包含了：<ol><li>赛车</li><li>赛跑</li><li>赛艇</li><li>赛马</li><li>龙舟</li><li>小车</li><li>金猪送福</li><li>猴子爬树</li><li>数钱</li></ol>"<?php }?> >
                    <div class="icon-div">
                        <span class=""></span>
                    </div>
                    <p><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</p>
                </div>
            <!-- </a> -->
            <?php }?> <?php }?> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
            
            
        <div class="right">
            <div class="right-item navbar-btn z-s" style="cursor: default;padding-bottom: 1.45rem; ">
                <div >
                    <span class="icon iconfont iconfgf" style="height: 100%;font-size:1rem;padding-top:0.15rem;"></span>
                </div>
            </div>
            <div class="right-item  navbar-btn btn-danmu">
                <div class="icon-div">
                    <span class="icon iconfont icondmkq"></span>
                </div>
                <p>弹幕</p>
            </div>
            <div class="right-item  navbar-btn btn-qrcode">
                <div class="icon-div">
                    <span class="icon iconfont iconewm"></span>
                </div>
                <p>二维码</p>
            </div>
            <div class="right-item  navbar-btn btn-fullscreen">
                <div class="icon-div">
                    <span class="icon iconfont iconqp"></span>
                </div>
                <p>全屏</p>
            </div>
            <div class="right-item  navbar-btn btn-music">
                <div class="icon-div">
                    <span class="icon iconfont iconyinle"></span>
                </div>
                <p>背景音乐</p>
            </div>
            <div class="right-item  navbar-btn btn-admin">
                <div class="icon-div">
                    <span class="icon iconfont iconsz"></span>
                </div>
                <p>后台</p>
            </div>
        </div>
        </div>
            
        <ul class="subnav" style="display: none;">
            <li class="clear"></li>
        </ul>
    </div>
    
</div>
<div class="Panel Bottom">
    <div class="navbar clear navbar-s" style="display: none;" data-step="3" data-intro="鼠标移到这个区域，可以看到开始和重玩游戏的按钮。" >
        <div class="navbar-btn z-s btn-start">
            <div>
                <span title="开始" class="icon iconfont iconks"></span>
            </div>
        </div>
        <div class="navbar-btn z-s btn-reset">
            <div>
                <span title="重玩" class="icon iconfont iconcw"></span>
            </div>
        </div>
    </div>
</div>
<!--页面加载动画-->
<div class="load-container">
    <div class="load4">
        <div class="loader1"></div>
    </div>
</div>
<!--页面加载动画 结束-->
<!--背景音乐-->
<div style="display: none;">
    <audio controls="controls" id="bgmusic" loop="true" <?php if ($_smarty_tpl->tpl_vars['bgmusic']->value['bgmusicstatus'] == 1) {?> autoplay="autoplay" <?php }?>>
        <source src="/wall/themes/meepo/assets/music/Radetzky_Marsch.mp3" type="audio/mpeg" /> 您的浏览器不支持音乐播放，您可以下载这个谷歌浏览器， https://pan.baidu.com/s/1bp0MHFx，效果和性能会好一点哦
    </audio>
</div>
<!--背景音乐 结束-->
<!--登陆窗口-->
<div class="loginformbg">
    <div class="loginform" style="z-index:100">
        <div class="activity_title">微信现场活动系统</div>
        <div>
            <input id="password" class="password" placeholder="请输入活动的管理密码" type="password" autocomplete="new-password">
        </div>
        <div class="submitline">
            <button class="button-login">开启</button>
        </div>
    </div>
</div>
<!--登陆窗口 结束-->
<!--可拖拽二维码-->
<!-- 可以拖拽缩放的二维码 -->
<div id="box" class="box" style="z-index:999;position: absolute;">
    <span><?php echo $_smarty_tpl->tpl_vars['wall_config']->value['qrcodetoptext'];?>
</span>
    <img src="" alt="活动二维码" title="活动二维码" class="qrcode">
    <div id="coor" class="coor coor-right-bottom"></div>
    <div class="coor coor-bottom"></div>
    <div class="coor coor-right"></div>
</div>
<!--可以拖拽缩放的二维码 结束-->
<!--背景视频-->
<div class="bgvideo" style="width: 100%;height: 100%;position: absolute;left:0;top: 0;z-index: -1;">
    <video src="" style="object-fit:fill;" autoplay="autoplay" autobuffer autoloop loop width="100%" height="100%"></video>
</div>
<!--背景视频 结束-->
<div class="audio" style="display: none;">
    <audio controls="controls" id="helperaudio" loop="false" >
        <source src="/assets/sounds/step3.m4a" type="audio/mpeg" /> 您的浏览器不支持音乐播放，您可以下载这个谷歌浏览器， https://pan.baidu.com/s/1bp0MHFx，效果和性能会好一点哦
    </audio>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
var PLUGS = <?php echo $_smarty_tpl->tpl_vars['plugsjson']->value;?>
;
var customqrcode = "<?php echo $_smarty_tpl->tpl_vars['weixin_config']->value['erweima'];?>
";
var MUSIC = <?php echo $_smarty_tpl->tpl_vars['musicjson']->value;?>
;
var CURRENTPLUG = "qdq";
var BACKGROUNDIMAGE = <?php echo $_smarty_tpl->tpl_vars['backgroundimagejson']->value;?>
;
var SHOWCOUNTSIGN = <?php echo $_smarty_tpl->tpl_vars['showcountsign']->value;?>
;
var QRCODEPOS = <?php echo $_smarty_tpl->tpl_vars['qrcodepos']->value;?>
; 
var danmuconfig = <?php echo $_smarty_tpl->tpl_vars['danmuconfig']->value;?>
;
// window.storedata=window.sessionStorage;

var icons={'qdq':'icon iconfont iconqiandao','threedimensionalsign':'icon iconfont icon3dqd','wall':'icon iconfont iconwxsq',
'vote':'icon iconfont icontp','xyh':'icon iconfont iconxyhm','xysjh':'icon iconfont iconxysjh','ddp':'icon iconfont iconduiduipeng',
'xiangce':'icon iconfont iconxc','kaimu':'icon iconfont iconkmq','bimu':'icon iconfont iconbmq','ydj':'icon iconfont iconydj',
'importlottery':'icon iconfont icondrcj','lottery':'icon iconfont iconcj','game':'icon iconfont iconyouxi','redpacket':'icon iconfont iconhby'};

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/require.min.js" data-main="/assets/js/frame.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
