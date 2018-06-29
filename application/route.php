<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    '__alias__' =>  [
        'intromz'  =>  'index/index/introMZ',
        'culture'  =>  'index/index/culture',
        'history'  =>  'index/index/history',
        'recruit'  =>  'index/index/recruit',
        'partner'  =>  'index/index/partner',
        'welfare'  =>  'index/index/welfare',
        'chairman'  =>  'index/index/chairman',
        'marketdpt'  =>  'index/index/marketdpt',
        'productdpt'  =>  'index/index/productdpt',
        'edudpt'  =>  'index/index/edudpt',
        'financedpt'  =>  'index/index/financedpt',
        'personneldpt'  =>  'index/index/personneldpt',
        'operationdpt'  =>  'index/index/operationdpt',
        'mzhair'  =>  'index/index/mzhair',
        'mzskin'  =>  'index/index/mzskin',
        'introfny'  =>  'index/index/introfny',
        'service'  =>  'index/index/service',
        'store'  =>  'index/index/store',
        'loading'  =>  'index/index/loading',
        'storeindex'  =>  'index/index/storeindex',
    ],

];
