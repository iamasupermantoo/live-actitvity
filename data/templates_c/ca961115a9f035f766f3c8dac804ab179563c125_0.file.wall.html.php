<?php
/* Smarty version 3.1.33, created on 2024-06-14 18:19:32
  from '/www/wwwroot/interaction/wall/themes/meepo/wall.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c193480f891_26544547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca961115a9f035f766f3c8dac804ab179563c125' => 
    array (
      0 => '/www/wwwroot/interaction/wall/themes/meepo/wall.html',
      1 => 1557275372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:themes/meepo/top_panel.html' => 1,
  ),
),false)) {
function content_666c193480f891_26544547 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="themes/meepo/assets/css/normalize.css">


<link rel="stylesheet" type="text/css" href="themes/meepo/assets/css/screen_wall.css">
<style>
</style> 
<?php echo '<script'; ?>
 src="themes/meepo/assets/js/basic2.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
</head>
<style>

.jbshow{position: fixed; opacity:0; display:none;
top: 0;
left: 0;
bottom: 0;
right: 0;
background-color: rgba(0, 0, 0, 0.8);
z-index: 2;font-size:32px;box-sizing: border-box;padding:0;}
.jbshow p{ padding:0; margin:0 auto;}
.jbshow .jbleft{ width:100%; height:100%; text-align:center;
border-radius: 10px;overflow: hidden; position:relative; opacity:0}
.jbshow .jbmz{ padding: 25px;
position: absolute;
bottom: 0;
left: 0;
right: 0;
background-color: rgba(0, 0, 0, 0.45);
color: #fff;opacity:0}
.jbshow .closeico{
position: absolute;
display: block;
width: 40px;
height: 40px;
right: 6px;
top: 6px;
background: rgba(0, 0, 0,0.8);
border-radius: 100%;
text-indent: -9999px;
z-index: 3;cursor:pointer;
}
.jbshow .closeico:hover{
background: rgba(0, 177, 7, 1);
}
.jbshow .closeico:before {
position: absolute;
top: 6px;
left: 19px;
content: "";
display: block;
width: 2px;
height: 30px;
background: #FFFFFF;-webkit-transform: rotate(45deg);
}
.jbshow .closeico:after {
position: absolute;
top: 20px;
left: 5px;
content: "";
display: block;
width: 30px;
height: 2px;
background: #FFFFFF;-webkit-transform: rotate(45deg);
}

.jbshow .fxtx{
position: absolute;
top: 10px;
left: 10px;
height: 60px;
overflow: hidden;
border-radius: 100px;
background-color: rgba(255, 255, 255, 0.95);
text-align: left;z-index: 10; opacity:0;box-shadow: 0 2px 6px rgba(0, 0, 0, 0.5);
}
.jbshow .fxtx img{
width: 50px;
height: 50px;
border-radius: 100%;
margin: 5px;
float: left;
}
.jbshow .fxtx .fsmz{
overflow: hidden;
white-space: nowrap;
text-overflow: ellipsis;
line-height: 60px;
color: #000;
font-size: 24px;
display: block;
text-align: left;
margin-left:60px;padding: 0 15px 0 10px;
}
.u-head{float: left;border-radius: 50%;border: 2px solid #fff;-webkit-box-sizing: border-box;
   -moz-box-sizing: border-box;
        box-sizing: border-box;overflow: hidden;position: relative;}
        .u-head img{height: 100%;width: auto;}
.nickname-bg{color: #fff;font-weight: bold;position: absolute;text-align: center;white-space: nowrap;overflow: hidden;text-overflow:ellipsis;background: rgba(0,0,0,.5);left:0;bottom: 0;}
.u-nickname{position: absolute;top: 50%;left: 50%;-webkit-transform: translate(-50%,-50%);
   -moz-transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
     -o-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);}
.msg-contain{position: relative;height: 100%;}
.u-msgword{color: #666;margin: 0;padding: 0;overflow: hidden;position: absolute;left: 0;top: 50%; -webkit-transform: translateY(-50%);
   -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
     -o-transform: translateY(-50%);
        transform: translateY(-50%);height:100%;}
.u-msgword > img{height: 95%;width: auto;vertical-align: middle}
.u-msgword .msg-pic img {height: 100%;width: auto; }
.msg-pic{width: 100%;height: 100%;}
.MsgItem dl{position: absolute; top: 50%;transform:translateY(-50%);margin: 0;}
dt,dd{margin: 0;}
.MsgItem dl dt{margin-bottom: 5px;}
.jbshow.view {-webkit-animation:nn 1.5s 0s ease forwards; -moz-animation:1.5s 0s ease forwards ; display: block}
.jbshow.view .jbleft{-webkit-animation:bb 2s 0.5s ease forwards; -moz-animation:2s 0.5s ease forwards ; display: block}
.jbshow.view .jbmz{-webkit-animation:nn 2s 1.5s ease forwards; -moz-animation:2s 1.5s ease forwards ; display: block}
.jbshow.view .fxtx{-webkit-animation:nn 2s 1.5s ease forwards; -moz-animation:2s 1.5s ease forwards ; display: block}
@-webkit-keyframes nn{
0%{ opacity:0; }
50%{opacity:1;}
100%{opacity:1;}
}
@-webkit-keyframes bb{
0%{ -webkit-transform: scale(0);opacity:0; }
50%{-webkit-transform: scale(1);opacity:1;}
100%{-webkit-transform:  scale(1);opacity:1;}
}
.jbshow.view2 {-webkit-animation:mm 1.5s 0s ease forwards; -moz-animation:1.5s 0s ease forwards ; display:block}
.jbshow.view2 .jbleft{opacity:1}
@-webkit-keyframes mm{
0%{ opacity:1;}
100%{opacity:0;}
}

</style>
<body class="FUN WALL" >
<div class="jbshow  ">
   <b class="closeico" onClick="closeit()">关闭</b><div class="fxtx"><img id="hdimg" src=""><span  id="zsmc" class="fsmz"></span></div>
   <div class="jbleft" style=""><p class="jbmz"></p></div>
</div>   
<?php $_smarty_tpl->_subTemplateRender("file:themes/meepo/top_panel.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<style>

.MsgList .MsgItem .u-msgword{
	color:<?php echo $_smarty_tpl->tpl_vars['wall_config']->value['msg_color'];?>
;
	text-shadow: none;
}
.MsgList .MsgItem .u-nickname{
	color:<?php echo $_smarty_tpl->tpl_vars['wall_config']->value['nickname_color'];?>
;
	text-shadow: none;
}
.msg-box .header .nickname {
    color:<?php echo $_smarty_tpl->tpl_vars['wall_config']->value['msg_color'];?>
;
}

.msg-box .content {
    color:<?php echo $_smarty_tpl->tpl_vars['wall_config']->value['msg_color'];?>
;
}

</style>
<div class="Panel MsgList"  >
    <?php
$_smarty_tpl->tpl_vars['var'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? $_smarty_tpl->tpl_vars['wall_config']->value['msg_num']+1 - (1) : 1-($_smarty_tpl->tpl_vars['wall_config']->value['msg_num'])+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 1, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration === 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration === $_smarty_tpl->tpl_vars['var']->total;?>
    <div class="MsgItem cf" msg_id="12345" style="display: block;">
        <div class="u-head">
            <img src="">
            <div class="nickname-bg"><span class="u-nickname">ITEM</span></div>
        </div>
        <div class="msg-contain">
            <div  class="u-msgword">
                <div class="msg-pic"><img src=""></div>
            </div>
        </div>
        
    </div>
    <?php }
}
?>
</div>
<!-- 放大的消息框 -->
<div class="msg-box">
</div>




<?php echo '<script'; ?>
 src="themes/meepo/assets/js/screen_wall.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="themes/meepo/assets/plugs/hotkeys-master/dist/hotkeys.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="themes/meepo/assets/js/bindhotkeys.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

var MSG_NUM=<?php echo $_smarty_tpl->tpl_vars['wall_config']->value['msg_num'];?>
;

<?php echo '</script'; ?>
><?php }
}
