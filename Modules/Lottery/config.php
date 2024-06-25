<?php
/**
 * 摇大奖模块配置
 * PHP version 5.5+
 * 
 * @category Lottery
 * 
 * @package Lottery
 * 
 * @author fy <jhfangying@qq.com>
 * 
 * @license Copyright (c) 2017 某某源码网有限公司 版权所有
 * Copyright (c) 2017 某某源码网有限公司 版权所有
 * 未经许可，任何单位及个人不得做营利性使用
 * 
 * @link link('演示地址','http://renrenscene.com');
 * */

$config=[
    "admin"=>[
        'menu'=>[
            "name"=>"抽奖管理",
            "link"=>"/Modules/module.php?m=lottery&c=admin&a=index"
        ]
    ],
    "front"=>[
        "menu"=>[
            "name"=>"抽奖",
            "link"=>"/Modules/module.php?m=lottery&c=front&a=index","icon"=>"/wall/themes/meepo/assets/images/icon/lottery.png","shortcut"=>"ctrl+l"
        ]
    ]
];