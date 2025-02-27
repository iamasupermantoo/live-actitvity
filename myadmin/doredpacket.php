<?php
@header("Content-type: text/html; charset=utf-8");
require_once(dirname(__FILE__) . '/../common/db.class.php');
require_once(dirname(__FILE__) . '/../common/function.php');
require_once(dirname(__FILE__) . '/../common/session_helper.php');
if (!isset($_SESSION['admin']) || $_SESSION['admin'] != true) {
	$_SESSION['admin'] = false;
	$returndata = array('code'=>-100,"message"=>"您的登录已经过期，请重新登录");
	echo json_encode($returndata);
	exit();
}
$action=$_GET['action'];
switch ($action){
	case 'saveredpacketround':
		saveredpacketround();
		break;
	case 'getredpacketround':
		getredpacketround();
		break;
	case 'delredpacketround':
		delredpacketround();
		break;
}
//删除一个红包轮次数据
function delredpacketround(){
	$id=isset($_POST['id'])?intval($_POST['id']):0;
	//已经有人中奖的活动，无法被删除
	$load=Loader::getInstance();
	$load->model('Redpacket_model');
	//统计本轮活动中被领取的红包数量
	$count=$load->redpacket_model->getSendRedpackettimes($id);
	if($count>0){
		echo returnmsg(-2,'有人中奖的活动不能被删除。您可以另外再开一轮红包雨活动。');
		return;
	}
	//删除这一轮的红包数据
	$result=$load->redpacket_model->deleteRound($id);
	if($result){
		echo returnmsg(1,'删除成功');
		return;
	}else{
		echo returnmsg(-1,'删除失败');
		return;
	}
}

//保存一个红包轮次数据
function saveredpacketround(){
	$id=isset($_POST['id'])?intval($_POST['id']):0;
	$status=isset($_POST['status'])?intval($_POST['status']):1;
	$type=isset($_POST['type'])?intval($_POST['type']):1;
	$amount=isset($_POST['amount'])?intval($_POST['amount']*100):0;
	$num=isset($_POST['num'])?intval($_POST['num']):0;
	$numperperson=isset($_POST['numperperson'])?intval($_POST['numperperson']):1;
	$chance=isset($_POST['chance'])?intval($_POST['chance']*1000):0;
	$lefttime=isset($_POST['lefttime'])?intval($_POST['lefttime']):0;
	$minamount=isset($_POST['minamount'])?intval($_POST['minamount']*100):0;
	$maxamount=isset($_POST['maxamount'])?intval($_POST['maxamount']*100):0;

	$data=array('status'=>$status,'type'=>$type,'amount'=>$amount,'num'=>$num,
			'numperperson'=>$numperperson,'chance'=>$chance,'lefttime'=>$lefttime,
			'minamount'=>$minamount,'maxamount'=>$maxamount
	);
	if($chance<1){
		echo returnmsg(-10,'获奖概率不能小于千分之一哦。');
		return;
	}
	if($type==1){//普通红包
		if($amount<100){
			echo returnmsg(-4,'红包金额不能小于1元');
			return;
		}
		if($amount>20000){
			echo returnmsg(-5,'红包金额不能大于200元');
			return;
		}
	}else{
		if($amount<100 || $amount<$num*$minamount){
			echo returnmsg(-6,'红包总金额太小，不够分哦');
			return;
		}
		if($amount>$num*$maxamount){
			echo returnmsg(-9,'红包总金额太大了，每个红包都是最大金额，还有多余哦');
			return;
		}
		if($minamount<100 || $maxamount<100){
			echo returnmsg(-7,'红包金额不能小于1元');
			return;
		}
		if($minamount>200000 || $maxamount>20000){
			echo returnmsg(-8,'红包金额不能大于200元');
			return;
		}
	}
	$load=Loader::getInstance();
	$load->model('Redpacket_model');
	if($id>0){
		//修改数据，如果已经有人中奖，那么这轮数据除了可以修改活动状态以外不能修改其他信息
		$count=$load->redpacket_model->getSendRedpackettimes($id);
		if($count>0){
			$roundinfo=array('id'=>$id,'status'=>$data['status']);
			$result=$load->redpacket_model->updateRound($roundinfo);
			echo returnmsg(-11,'您修改活动状态已经成功，其他数据无法修改，因为已经有人中奖了。');
			return;
		}else{
			//删除这一轮的红包数据
			$load->redpacket_model->deleteRedpacketUsersByRoundid($id);
			$load->redpacket_model->initRedpacketUsers($amount,$num,$id,$minamount,$maxamount);
			$data['id']=$id;
			$result=$load->redpacket_model->updateRound($data);
			
		}
	}else{
		$result=$load->redpacket_model->addRound($data);
		if($result>0){
			$load->redpacket_model->initRedpacketUsers($amount,$num,$result,$minamount,$maxamount);
		}
	}
	if($result){
		echo returnmsg(1,'保存成功');
		return;
	}else{
		echo returnmsg(-2,'保存失败');
		return;
	}
}

//按id获取红包轮次数据
function getredpacketround(){
	$id=isset($_POST['id'])?intval($_POST['id']):0;
	if($id==0){
		echo returnmsg(-1,'ID错误');
		return;
	}
	$load=Loader::getInstance();
	$load->model('Redpacket_model');
	$redpacket_round=$load->redpacket_model->getRoundById($id);
	if(!empty($redpacket_round)){
		$redpacket_round['amount']=$redpacket_round['amount']/100;
		$redpacket_round['minamount']=$redpacket_round['minamount']/100;
		$redpacket_round['maxamount']=$redpacket_round['maxamount']/100;
		$redpacket_round['chance']=$redpacket_round['chance']/1000;
		echo returnmsg(1,'获取数据成功',$redpacket_round);
		return;
	}else{
		echo returnmsg(-2,'数据不存在');
		return;
	}
}
