<?php
@header("Content-type: text/html; charset=utf-8");
require_once(dirname(__FILE__) . '/../smarty/Smarty.class.php');
require_once(dirname(__FILE__) . '/../common/db.class.php');
require_once(dirname(__FILE__) . '/../common/session_helper.php');
require_once(dirname(__FILE__) . '/../common/function.php');
$style='meepo';
$load->model('Wall_model');
$wall_config=$load->wall_model->getConfig();
$load->model('Weixin_model');
$weixin_config=$load->weixin_model->getConfig();
$qd_maxid=0;
$load->model("Flag_model");
$flag=$load->flag_model->getRecentSignedUsers(30);

$flag=array_reverse($flag);
include("../wall/biaoqing.php");
foreach($flag as $k=>$v){
	$v['nickname']=pack('H*', $v['nickname']);
	$v['content']=pack('H*', $v['content']);
	$v= emoji_unified_to_html(emoji_softbank_to_unified($v));
	$v['content']=biaoqing($v['content']);
	$flag[$k]=$v;
}

$qd_nums=count($flag);
$qd_maxid=$qd_nums>0?$flag[$qd_nums-1]['signorder']:0;
$threedimensional_m=new M('threedimensional');
$threedimensional=$threedimensional_m->find('1');

$smarty = new Smarty;
$smarty->caching = false;
$apppath=str_replace(DIRECTORY_SEPARATOR.'wall', '', dirname(__FILE__));
$smarty->compile_dir = $apppath.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'templates_c'.DIRECTORY_SEPARATOR;
$smarty->assign('from','qiandao');
$smarty->assign('wall_config',$wall_config);
$smarty->assign('qd_maxid',$qd_maxid);
$smarty->assign('personJson',json_encode($flag));
$smarty->assign('erweima',$weixin_config['erweima']);
$smarty->assign('threedimensional_config',$threedimensional);
$smarty->assign('title',"");
$smarty->display('themes/'.$style.'/header.html');
$smarty->display('themes/'.$style.'/3dsign.html');
$smarty->display('themes/'.$style.'/footer.html');