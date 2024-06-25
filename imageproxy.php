<?php
/**
 * 微信现场活动系统图片代理
 * PHP version 5.4+
 * 
 * @category Image
 * 
 * @package Image
 * 
 * @author fy <jhfangying@qq.com>
 * 
 * @license Copyright (c) 2017 某某源码网有限公司 版权所有
 * Copyright (c) 2017 某某源码网有限公司 版权所有
 * 未经许可，任何单位及个人不得做营利性使用
 * 
 * @link link('演示地址','http://renrenscene.com');
 * */
require_once dirname(__FILE__) . '/common/db.class.php';
require_once dirname(__FILE__) . '/common/File_helper.php';
$imageid=$_GET['id'];
$load->model('Attachment_model');
$fileinfo=$load->attachment_model->getById($imageid);

switch ($fileinfo['type']){
case 1:
    showlocalfile($fileinfo['filepath']);
    break;
case 2:
    showremotefile($fileinfo['filepath']);
    break;
default:
    break;
}
/**
 * 显示本地图片
 * 
 * @param text $path 图片路径
 * 
 * @return image 图片内容
 */
function showlocalfile($path)
{
    $imagepath=dirname(__FILE__).$path;
    $mime= get_mime_by_extension($imagepath); 
    $image = file_get_contents($imagepath);
    header('Content-type: '.$mime);
    echo $image;
}
/**
 * 显示远程图片
 * 
 * @param text $path 图片路径
 * 
 * @return image 图片内容
 */
function showremotefile($path)
{
	header('Location: '.$path);return;
    if (SAVEFILEMODE=='aliyunoss') {
        include_once 'library/aliyunosssdk/sdk.class.php';
        $oss_sdk_service = new ALIOSS();
        $path_arr = explode(OBJECT_PATH, $path);
        $oss_sdk_service->set_host_name(
            defined('ENDPOINT')?ENDPOINT:'oss-cn-hangzhou-internal.aliyuncs.com'
        );
        $object_obj=$oss_sdk_service->get_object(
            BUCKET_NAME, OBJECT_PATH.$path_arr[1]
        );
        $mime= get_mime_by_extension($path);
        header('Content-type: '.$mime);
        echo $object_obj->body;
        return;
    }
    echo '';
    return;
}