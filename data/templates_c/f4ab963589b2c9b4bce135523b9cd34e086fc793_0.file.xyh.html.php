<?php
/* Smarty version 3.1.33, created on 2024-06-14 19:02:43
  from '/www/wwwroot/interaction/wall/themes/meepo/xyh.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c23537ad007_57285801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4ab963589b2c9b4bce135523b9cd34e086fc793' => 
    array (
      0 => '/www/wwwroot/interaction/wall/themes/meepo/xyh.html',
      1 => 1557275348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:themes/meepo/top_panel.html' => 1,
  ),
),false)) {
function content_666c23537ad007_57285801 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" href="themes/meepo/assets/css/screen_lottery_nfree5.css">
<style>

.display1{ display:none;}

</style>
<?php echo '<script'; ?>
 src="themes/meepo/assets/js/lotter_free_base.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="themes/meepo/assets/js/screen_lottery_nfree.js?t=1" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<!---->
<?php echo '<script'; ?>
 src="themes/meepo/assets/js/MyTool-nfree5.js" type="text/javascript" type="text/javascript"><?php echo '</script'; ?>
>  
</head>
<body class="FUN LOTTERY_FREE" >
<audio id="Audio_Running" src="" loop preload="preload"></audio>
<audio id="Audio_Result" src="" preload="preload"></audio>
<?php $_smarty_tpl->_subTemplateRender("file:themes/meepo/top_panel.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="Panel Lottery"  >
<div class="table-box">
            <div class="table">
                <img class="seat-img1" src="themes/meepo/assets/images/xyh/seat-img1.png">
                <img class="seat-img2" src="themes/meepo/assets/images/xyh/seat-img2.png">
                 <img class="seat-img4" src="themes/meepo/assets/images/xyh/seat-img4.png">
                <img class="seat-img3" src="themes/meepo/assets/images/xyh/seat-img3.png">
               
                <span class="table-num" id="jqDeskText" >0</span>
                <div id="jqAddDeskAni" class="table-move">
                    <span  id="jqDeskText1" class="table-move1">0</span>
                </div>
                <div class="table-button">
                <div class="table-btn display0">
                <p>幸运号范围：<?php echo $_smarty_tpl->tpl_vars['xingyunhaomaconfig']->value['minnum'];?>
-<?php echo $_smarty_tpl->tpl_vars['xingyunhaomaconfig']->value['maxnum'];?>
</p>
                <input type="hidden" name="minnum" value="<?php echo $_smarty_tpl->tpl_vars['xingyunhaomaconfig']->value['minnum'];?>
"/>
                <input type="hidden" name="maxnum" value="<?php echo $_smarty_tpl->tpl_vars['xingyunhaomaconfig']->value['maxnum'];?>
"/>
                </div>
                    <div class="table-btn">
                        <p>抽奖数量：</p>
                        <select id="sltAwardNum" >
                            <option value="请选择" selected="selected" style="display: none;">请选择</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="30">30</option>
							<option value="40">40</option>
							<option value="50">50</option>
							<option value="60">60</option>
							<option value="70">70</option>
							<option value="80">80</option>
							<option value="90">90</option>
							<option value="100">100</option>
                        </select>
                    </div>
                    <button id="jqStart" onclick="Start();">开始抽奖</button>
                    <button id="jqEnd" class="hide" onclick="End();">停止抽奖</button>
                    <div class="clear"></div>
                </div>
            </div>
            <style>
            
            #jqResultBox .oldnum{
            	color:#505050;
            }
            
            </style>
            <div class="table-win">
                    <ul class="table-list" id="jqResultBox" >
                </ul>
            </div>
        </div>
</div>
<?php echo '<script'; ?>
 src="themes/meepo/assets/plugs/hotkeys-master/dist/hotkeys.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="themes/meepo/assets/js/bindhotkeys.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 type="text/javascript">
        
        jQuery(function($){
        	$.ajax({
        		'url':'ajax_act_xyh.php?action=getoldlucknum',
        		'type':'get',
        		'dataType':'json',
        		'success':function(json){
        			if(json.code>0){
        				var liHtml ='';
        				for(var i=0,l=json.lucknum_arr.length;i<l;i++){
        					liHtml += '<li class="oldnum">' + json.lucknum_arr[i] + '</li>';
        				}
        				$("#jqResultBox").prepend(liHtml);
        			}
        		}
        	});
        })
        var timerObj=null
        function Start() {
            var awardNum = parseInt($("#sltAwardNum").val()) || 0;
            var minnum=$('input[name=minnum]').val();
        	minnum=parseInt(minnum);
        	var maxnum=$('input[name=maxnum]').val();
        	maxnum=parseInt(maxnum);
        	if(awardNum>(maxnum-minnum+1)){
        		MyTool.Alert("抽奖数量,不能大于奖池号码总数");
        		return false;
        	}
            clearInterval(timerObj);
            if (awardNum <= 0) {
                MyTool.Alert("请选择抽奖数量");
                return;
            }
            $("#jqStart").attr("disabled", true);
            RandomDesk();
            $("#jqStart").addClass("hide");
            $("#jqEnd").removeAttr("disabled").removeClass("hide");

        }
        function RandomDesk() {
        	var minnum=$('input[name=minnum]').val();
        	minnum=parseInt(minnum);
        	var maxnum=$('input[name=maxnum]').val();
        	maxnum=parseInt(maxnum);
            timerObj = setInterval(function () {
                n=minnum+Math.floor(Math.random() * maxnum);
                $("#jqDeskText").text(n);
            }, 100);
        }
        
        function End() {
            $("#jqAddDeskAni").removeClass("table-moving");
            var awardNum = parseInt($("#sltAwardNum").val()) || 0;
            var func=function(){
            	$.ajax({
            		'url':'ajax_act_xyh.php?action=getlucknum',
            		'type':'get',
            		'dataType':'json',
            		'success':function(json){
            			if(json.code>0){
            				console.log(json);
            				ShowResult(json.lucknum);
            				awardNum--;
            				if(awardNum>0){
                                setTimeout(function () {
                                    func();
                                }, 1000);
            				}else{
            					 clearInterval(timerObj);	
            					 $("#jqDeskText,#jqDeskText1").text(json.lucknum);
            					 $("#jqEnd").addClass("hide");
                                 $("#jqStart").removeAttr("disabled").removeClass("hide");
            				}
            			}else{
            				clearInterval(timerObj);
                            MyTool.Alert("号码已经抽完！", function () {
                                $("#jqDeskText,#jqDeskText1").text(0);
                                $("#jqEnd").addClass("hide");
                                $("#jqStart").removeAttr("disabled").removeClass("hide");
                            });
            			}
            		}
            	});
            }
            $("#jqEnd").attr("disabled", true);
            func();
        }
        function ShowResult(num) {
            $("#jqAddDeskAni").addClass("table-moving");
            $("#jqDeskText,#jqDeskText1").text(num);
            var liHtml = '<li>' + num + '</li>';
            setTimeout(function () {
                $("#jqAddDeskAni").removeClass("table-moving");
                $("#jqResultBox").prepend(liHtml);
            }, 900);
        }
        
    <?php echo '</script'; ?>
><?php }
}
