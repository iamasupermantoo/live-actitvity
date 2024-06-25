<?php

include_once '../data/configs/renren01.renrenscene.com.php';
include_once '../common/FileUploadFactory.php';

$allowtypes='image/jpg,image/jpeg,image/png,image/gif';
$file = 'https://renren01.renrenscene.com/data/pic/pic_1559532581.jpg';


$fuf=new FileUploadFactory(SAVEFILEMODE);
var_dump($fuf);
$fuf->setAllowMimeTypes(explode(',', $allowtypes));
$savedfilepath=$fuf->SaveRemotePic($file);
var_dump($savedfilepath);
