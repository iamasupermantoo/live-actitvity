<?php
/**
 * 模块前台页面
 * PHP version 5.4+
 * 
 * @category Modules
 * 
 * @package Ydj
 * 
 * @author fy <jhfangying@qq.com>
 * 
 * @license Copyright (c) 2017 某某源码网有限公司 版权所有
 * Copyright (c) 2017 某某源码网有限公司 版权所有
 * 未经许可，任何单位及个人不得做营利性使用
 * 
 * @link link('演示地址','http://renrenscene.com');
 * */
require_once MODULE_PATH.DIRECTORY_SEPARATOR.'Frontbase.php';
require_once BASEPATH.DIRECTORY_SEPARATOR."common".DIRECTORY_SEPARATOR."function.php";
/**
 *  模块前台页面
 *  PHP version 5.4+
 * 
 * @category Modules
 * 
 * @package Ydj
 * 
 * @author fy <jhfangying@qq.com>
 * 
 * @license Copyright (c) 2017 某某源码网有限公司 版权所有
 * Copyright (c) 2017 某某源码网有限公司 版权所有
 * 未经许可，任何单位及个人不得做营利性使用
 * 
 * @link link('演示地址','http://renrenscene.com');
 * */
require_once BASEPATH .DIRECTORY_SEPARATOR. 'common'.DIRECTORY_SEPARATOR.'function.php';
use \Modules\Importlottery\Models\Importlottery_model;
use \Modules\Prize\Controllers\Api;

class Front extends Frontbase
{
    var $_importlottery_model=null;
    public function __construct(){
        parent::__construct();
        $this->_importlottery_model=new Importlottery_model();
    }
    /**
     * 摇大奖界面
     * 
     * @return void
     */
    public function index()
    {   
        $data=$this->_importlottery_model->getRandData(20);
        $prize_api=new Api();
        $prizes=$prize_api->getprizes('importlottery',1);
        $prizesdata=[];
        if($prizes['code']>0){
            foreach($prizes['data'] as $v){
                $prizesdata[]=$v;
            }
        }
        $winners = $this->_importlottery_model->getWinners($prizesdata[0]['id']);
        $this->assign('prizesjson',json_encode($prizesdata));
        $this->assign('datajson',json_encode($data));
        $this->assign('title', '导入抽奖');
        $this->show('index.html');
    }

    public function ajax_act_get_ready(){
        $prizeid=isset($_GET['prizeid'])?intval($_GET['prizeid']):0;
        if($prizeid<=0){
            $returndata=array('code'=>-1,'message'=>'信息错误');
            echo json_encode($returndata);
            return;
        }
        $count=$this->_importlottery_model->getLeftDataCount($prizeid);
        $prize_api=new Api();
        $prizeinfo=$prize_api->getprizeinfo($prizeid);
        $winners=$this->_importlottery_model->getWinners( $prizeid);
        $returndata=array('code'=>1,'message'=>'','data'=>array('count'=>$count,'prizenum'=>$prizeinfo['data']['freezenum']+$prizeinfo['data']['leftnum'],'winners'=>$winners));
        echo json_encode($returndata);
        return;
    }

    public function ajax_act_get_result(){
        $num=isset($_GET['num'])?intval($_GET['num']):0;
        $prizeid=isset($_GET['prizeid'])?intval($_GET['prizeid']):0;
        if($num<=0){
            $returndata=array('code'=>-1,'message'=>'信息错误');
            echo json_encode($returndata);
            return;
        }
        if($prizeid<=0){
            $returndata=array('code'=>-2,'message'=>'信息错误');
            echo json_encode($returndata);
            return;
        }
        
        $prize_api=new Api();
        $prizeinfo=$prize_api->getprizeinfo($prizeid);
        if($prizeinfo['code']<0){
            $returndata=['code'=>-2,'message'=>'奖品信息有误'];
            echo json_encode($returndata);
            return;
        }else{
            $left=$prizeinfo['data']['freezenum']+$prizeinfo['data']['leftnum'];
            if($num>$left){
                $returndata=['code'=>-3,'message'=>'奖品数量不足'];
                echo json_encode($returndata);
                return;
            }
        }
        
        $data=$this->_importlottery_model->getRandZjlist($num,$prizeid);
        $result=$prize_api->winprizebatch('importlottery',1,$data,$prizeid,'导入抽奖');
        $returndata=['code'=>-1,'message'=>'失败'];
        if($result['code']>0){
            $returndata=['code'=>1,'message'=>'','data'=>$data];
        }
        echo json_encode($returndata);
        return;
    } 
    
}