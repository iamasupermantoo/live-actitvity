<?php
/* Smarty version 3.1.33, created on 2024-06-14 17:49:11
  from '/www/wwwroot/interaction/wall/themes/meepo/xysjh.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c1217d799b8_27139786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4defecc182953fb5e2771eaf1fd93cc09823e99e' => 
    array (
      0 => '/www/wwwroot/interaction/wall/themes/meepo/xysjh.html',
      1 => 1557275348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:themes/meepo/top_panel.html' => 1,
  ),
),false)) {
function content_666c1217d799b8_27139786 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" href="themes/meepo/assets/css/screen_lottery_nfree6.css">
<?php echo '<script'; ?>
 src="themes/meepo/assets/js/lotter_free_base.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="themes/meepo/assets/js/screen_lottery_nfree.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<!---->
<?php echo '<script'; ?>
 src="themes/meepo/assets/js/MyTool-nfree6.js" type="text/javascript" type="text/javascript"><?php echo '</script'; ?>
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
              
                <img class="seat-img2" src="themes/meepo/assets/images/xysjh/seat-img2.png">
                <img class="seat-img3" src="themes/meepo/assets/images/xysjh/seat-img3.png">
                 <img class="seat-img4" src="themes/meepo/assets/images/xysjh/seat-img4.png">
                <img class="seat-img1" src="themes/meepo/assets/images/xysjh/seat-img3.png">
               
                <span class="table-num" id="jqDeskText" >0</span>
                <div id="jqAddDeskAni" class="table-move">
                    <span  id="jqDeskText1" class="table-move1">0</span>
                </div>
                <div class="table-button">
                <div class="table-btn display0" style=" display:none">
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['personcount']->value;?>
" id="zhmax" >
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
 		'url':'ajax_act_xysjh.php?action=getoldxysjh',
 		'type':'get',
 		'dataType':'json',
 		'success':function(json){
 			if(json.code>0){
 				var liHtml ='';
 				for(var i=0,l=json.luckphone_arr.length;i<l;i++){
 					liHtml += '<li class="oldnum">' + json.luckphone_arr[i] + '</li>';
 				}
 				$("#jqResultBox").prepend(liHtml);
 			}
 		}
 	});
 })
        var t2='<?php echo $_smarty_tpl->tpl_vars['personJson']->value;?>
';
		var myobj=eval(t2);
		var zam_data = [];
        var timerObj = null;
        var awardData = [];
        var numberData = [];

		//开始抽奖
		function Start() {
			if(timerObj!=null){
				clearInterval(timerObj);
			}
			//当前可以参与抽奖的人数
			var deskNum = parseInt($("#zhmax").val());
			
            //$("#jqResultBox").html("");
            var awardNum = parseInt($("#sltAwardNum").val()) || 0;
            if (deskNum <= 0) {
                MyTool.Alert("录入手机号的用户为0、无法抽取");
                return;
            }
			if(awardNum > deskNum){
				MyTool.Alert('目前手机号码仅仅有'+deskNum+'个、请重新选择抽取个数');
                return;
			}
            if (awardNum <= 0) {
                MyTool.Alert("请选择抽奖数量");
                return;
            }
            $("#jqStart").attr("disabled", true);
            RandomDesk();
            
            $("#jqStart").addClass("hide");
            $("#jqEnd").removeAttr("disabled").removeClass("hide");
        }
		//随机显示数字
        function RandomDesk() {
            timerObj = setInterval(function () {
                var index = Math.floor(Math.random() * myobj.length);
                var n = myobj[index].mobile;
                $("#jqDeskText").text(n);
            }, 300);
        }
		//停止抽奖
        function End() {
            $("#jqAddDeskAni").removeClass("table-moving");
            var awardNum = parseInt($("#sltAwardNum").val()) || 0;
            //var i = 0;
            var func = function () {
            	$.ajax({
            		'url':'ajax_act_xysjh.php?action=getxysjh',
            		'type':'get',
            		'dataType':'json',
            		"success":function(json){
            			if(json.code>0){
            				ShowResult(json.luckphone);
            				awardNum--;
            				if(awardNum>0){
                                setTimeout(function () {
                                    func();
                                }, 1000);
            				}else{
            					 clearInterval(timerObj);	
            					 $("#jqDeskText,#jqDeskText1").text(json.luckphone);
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
            		},
            		error:function(){
            			clearInterval(timerObj);
            			alert('您断网了，请检查网络连接是否正常');
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
