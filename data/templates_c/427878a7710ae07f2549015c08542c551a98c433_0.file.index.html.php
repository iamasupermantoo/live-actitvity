<?php
/* Smarty version 3.1.33, created on 2024-06-14 18:12:33
  from '/www/wwwroot/interaction/Modules/Lottery/templates/front/zjd/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c17917e8365_99533255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '427878a7710ae07f2549015c08542c551a98c433' => 
    array (
      0 => '/www/wwwroot/interaction/Modules/Lottery/templates/front/zjd/index.html',
      1 => 1557210560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666c17917e8365_99533255 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>抽奖箱</title>
    <link rel="stylesheet" type="text/css" href="/Modules/Lottery/templates/front/zjd/assets/css/style.css">
    <style>
        .control-item {
            display: inline-block;
            height: 50px;
            line-height: 50px;
            position: relative;
            font-size: 16px;
            color: #fff;
            padding: 0 0 0 10px;
            box-sizing: border-box;
        }
        
        .control-item em {
            font-size: 20px;
            font-weight: bold;
            color: #ffde00;
            vertical-align: middle;
            font-style: normal;
        }
        
        .icon-ctrol {
            display: inline-block;
            width: 24px;
            height: 24px;
            background-repeat: no-repeat;
            cursor: pointer;
            background-size: contain;
            vertical-align: middle;
            position: relative;
            top: -5px;
        }
        
        .icon-minus {
            background-image: url('/Modules/Lottery/templates/front/zjd/assets/images/icon-minus.png');
            vertical-align: -12px;
        }
        
        .icon-plus {
            background-image: url('/Modules/Lottery/templates/front/zjd/assets/images/icon-plus.png');
            vertical-align: -12px;
        }
        
        .lottery-num {
            display: inline-block;
            width: 46px;
            text-align: center;
            background: rgba(0, 0, 0, .8);
            border-radius: 5px;
            margin: 0 10px;
            line-height: 35px;
        }
    </style>
</head>
<body class="FUN LOTTERY_FREE">
    <audio id="Audio_Running" src="/Modules/Lottery/templates/front/zjd/assets/music/lottery_running.mp3" loop preload="preload"></audio>
    <audio id="Audio_Result" src="/Modules/Lottery/templates/front/zjd/assets/music/smashegg.mp3" preload="preload"></audio>
    <div class="Panel Lottery">
        <div class="lottery-left"><img class="boxFront" src="/Modules/Lottery/templates/front/zjd/assets/images/box2.png">
            <div class="lottery-run">
                <div class="outBox">
                    <div class="box">
                        <img class="boxImg" src="/Modules/Lottery/templates/front/zjd/assets/images/box.png">
                        <img class="boxLeft" src="/Modules/Lottery/templates/front/zjd/assets/images/boxLeft.png">
                        <img class="boxRight" src="/Modules/Lottery/templates/front/zjd/assets/images/boxRight.png">
                    </div>
                    <div class="hand">
                        <div class="hand1"></div>
                        <div class="hand2"></div>
                        <div class="user toux3">
                            <p class="nick-name"></p>
                            <p class="mobile"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lottery-bottom">
                <div class="control btn-start" >开始砸蛋</div>
            </div>
        </div>
        <div class="lottery-right" style="z-index:999;">
            <div class="result-line">
                <div class="result-num">1</div>
            </div>
        </div>
        <div class="lottery-side">
            <div class="setting-border">
                <span class="prizename"><i class="icon iconfont icon-9 btn-left"></i><span id="prizedata" class="prizename_txt" data="1">一等奖</span><i class="icon iconfont icon-10 btn-right"></i></span>
                <div class="lottery-img">
                    <img src="/wall/themes/meepo/assets/images/defaultaward.jpg" alt="">
                </div>
            </div>

            <div class="lottery-control">
                <div class="control-item">
                    抽取人数：<span class="icon-ctrol icon-minus"></span><em class="lottery-num">1</em><span class="icon-ctrol icon-plus"></span>
                </div>
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/plugs/hotkeys-master/dist/hotkeys.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/js/bindhotkeys.js"><?php echo '</script'; ?>
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
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/Modules/Lottery/templates/front/zjd/assets/js/front_index.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
