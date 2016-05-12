<?php

// +----------------------------------------------------------------------
// | ShuipFCMS 评论卸载脚本
// +----------------------------------------------------------------------
// | Copyright (c) 2012-2014 http://www.shuipfcms.com, All rights reserved.
// +----------------------------------------------------------------------
// | Author: 水平凡 <admin@abc3210.com>
// +----------------------------------------------------------------------

namespace Comments\Uninstall;

use Libs\System\UninstallBase;

class Uninstall extends UninstallBase {

    public function run() {
        $db = M('CommentsSetting');
        $info = $db->find();
        if (!empty($info)) {
            for ($i = 1; $i <= $info['stbsum']; $i++) {
                $db->execute('DROP TABLE IF EXISTS `' . C("DB_PREFIX") . 'comments_data_' . $i . '`;');
            }
        }
        return true;
    }

}
