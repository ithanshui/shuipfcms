<?php

// +----------------------------------------------------------------------
// | ShuipFCMS 配置
// +----------------------------------------------------------------------
// | Copyright (c) 2012-2014 http://www.shuipfcms.com, All rights reserved.
// +----------------------------------------------------------------------
// | Author: 水平凡 <admin@abc3210.com>
// +----------------------------------------------------------------------
return array(
    'AUTOLOAD_NAMESPACE' => array_merge(C('AUTOLOAD_NAMESPACE'), array(
        'Addon' => PROJECT_PATH . 'Addon',
    )),
);
