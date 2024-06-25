<?php
/* Smarty version 3.1.33, created on 2024-06-14 18:12:37
  from '/www/wwwroot/interaction/Modules/Importlottery/templates/front/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c17950b58d3_11071522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2968ef9d8bf0fcdfab5a10a7282355a0251f2d98' => 
    array (
      0 => '/www/wwwroot/interaction/Modules/Importlottery/templates/front/index.html',
      1 => 1557210560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666c17950b58d3_11071522 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['module_assets']->value;?>
/css/choujiang.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/fonts/font_864467_uc9k8ie5j6/iconfont.css">
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
</style>
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
                    <span class="icon-lb">抽取人数：</span><span class="icon-ctrol icon-minus">&nbsp;</span><em class="lottery-num">1</em><span class="icon-ctrol icon-plus">&nbsp;</span>
                </div>
                <div class="control-item-btn">
                    <div class="lottery-btn btn-start">&nbsp;</div>
                </div>
            </div>
        </div>
        <div class="lottery-side lottery-middle">
            <ul class="lottery-scroll">

            </ul>
        </div>
        <div class="lottery-side lottery-right">
            <span class="winnernum">已有<span class="winnernum_txt">0</span>个中奖</span>
            <div class="lottery-win-list">
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
 type="text/javascript" src="/assets/js/three.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/CSS3DRenderer.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/wall/themes/meepo/assets/js/jquery.nicescroll.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/wall/themes/meepo/assets/plugs/hotkeys-master/dist/hotkeys.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/wall/themes/meepo/assets/js/bindhotkeys.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    var prizesdata = <?php echo $_smarty_tpl->tpl_vars['prizesjson']->value;?>
;
    var datalist = <?php echo $_smarty_tpl->tpl_vars['datajson']->value;?>
;
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['module_assets']->value;?>
/js/front_index.js"><?php echo '</script'; ?>
><?php }
}
