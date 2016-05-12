<?php

// +----------------------------------------------------------------------
// | ShuipFCMS 评论模块配置
// +----------------------------------------------------------------------
// | Copyright (c) 2012-2014 http://www.shuipfcms.com, All rights reserved.
// +----------------------------------------------------------------------
// | Author: 水平凡 <admin@abc3210.com>
// +----------------------------------------------------------------------
return array(
    //模块名称
    'modulename' => '评论模块',
    //图标
    'icon' => 'http://www.shuipfcms.com/d/file/content/2014/07/53c0ee9ad372e.png',
    //模块简介
    'introduce' => '增加网站互动，用户评论管理。',
    //模块介绍地址
    'address' => 'http://www.shuipfcms.com',
    //模块作者
    'author' => '水平凡',
    //作者地址
    'authorsite' => 'http://www.shuipfcms.com',
    //作者邮箱
    'authoremail' => 'admin@abc3210.com',
    //版本号，请不要带除数字外的其他字符
    'version' => '1.0.1',
    //适配最低ShuipFCMS版本，
    'adaptation' => '2.0.0',
    //签名
    'sign' => '54d4717144d5ed6e415af8249190cc8b',
    //依赖模块
    'depend' => array(),
    //行为注册
    'tags' => array(
        'content_delete_end' => array(
            'title' => '内容删除结束行为标签',
            'type' => 1,
            'remark' => '内容模型行为标签',
            'phpfile:CommentsApi|module:Comments',
        ),
    ),
    //缓存，格式：缓存key=>array('module','model','action')
    'cache' => array(
        'Comments_setting' => array(
            'name' => '评论配置',
            'model' => 'Comments',
            'action' => 'comments_cache',
        ),
        'Emotion' => array(
            'name' => '评论表情',
            'model' => 'Emotion',
            'action' => 'emotion_cache',
        ),
    ),
);
