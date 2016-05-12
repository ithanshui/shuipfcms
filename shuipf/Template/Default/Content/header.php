<?php if (!defined('SHUIPF_VERSION')) exit(); ?>
<header>
<div class="hidden-xs header">
<!--超小屏幕不显示-->
  <h1 class="logo"> <a href="{$config_siteurl}" title="{$Config.sitename}"></a> </h1>
  <ul class="nav hidden-xs-nav">
    <li class="active"><a href="{$config_siteurl}"><span class="fa fa-home"></span>网站首页</a></li>

    <content action="category" catid="0"  order="listorder ASC" >
    <volist name="data" id="vo">
    <if condition=" $vo['child'] ">

      <li><a href="{$vo.url}" title="{$vo.description}" class="dropdown" data-toggle="dropdown"><span class="{$vo.caticon}"></span>{$vo.catname} <i class="caret"></i></a>
        <ul class="dropdown-menu pull-right">
            <content action="category" catid="$vo['catid']"  order="listorder ASC" >
            <volist name="data" id="r">

              <li><a href="{$r.url}" title="{$r.catname}"><span class="{$r.caticon}"></span>{$r.catname}</a></li>

            </volist>
            </content>
        </ul>
      </li>
    <else />
      <li><a href="{$vo.url}" title="{$vo.description}"><span class="{$vo.caticon}"></span>{$vo.catname}</a></li>

    </if>
    </volist>
    </content>

  </ul>
  <div class="feeds"> <a class="feed feed-xlweibo" href="index.html" target="_blank"><i class="fa fa-weibo"></i> 新浪微博</a> <a class="feed feed-txweibo" href="index.html" target="_blank"><i class="fa fa-qq"></i> 腾讯微博</a> <a class="feed feed-rss" href="index.html" target="_blank"><i class="fa fa-tags"></i> 订阅本站</a> <a class="feed feed-weixin" data-toggle="popover" data-trigger="hover" title="微信扫一扫" data-html="true" data-content="<img src='/d/160428/weixin.jpg' alt=''>" href="javascript:;" target="_blank"><i class="fa fa-weixin"></i> 关注微信</a> </div>
  <div class="wall"><a href="readerWall.html" target="_blank">读者墙</a> | <a href="tags.html" target="_blank">标签云</a></div>
</div>
<!--/超小屏幕不显示-->
<div class="visible-xs header-xs">
<!--超小屏幕可见-->
  <div class="navbar-header header-xs-logo">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-xs-menu" aria-expanded="false" aria-controls="navbar"><span class="glyphicon glyphicon-menu-hamburger"></span></button>
  </div>
  <div id="header-xs-menu" class="navbar-collapse collapse">
    <ul class="nav navbar-nav header-xs-nav">
      <li class="active"><a href="{$config_siteurl}" title="{$Config.sitename}"><span class="glyphicon glyphicon-home"></span>网站首页</a></li>
      
      <content action="category" catid="0"  order="listorder ASC" >
      <volist name="data" id="vo">

        <li><a href="{$vo.url}"><span class="{$vo.caticon}"></span>{$vo.catname}</a></li>

      </volist>
      </content>    
     
    </ul>
    <form class="navbar-form" action="{:U('Search/Index/index')}" method="post" style="padding:0 25px;">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="请输入关键字" name="q">
        <span class="input-group-btn">
        <button class="btn btn-default btn-search" type="submit">搜索</button>
        </span> </div>
    </form>
  </div>
</div>
</header>
<!--/超小屏幕可见-->