<?php if (!defined('SHUIPF_VERSION')) exit(); ?>
<!doctype html>
<html lang="zh-cn">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="favicon.ico" rel="shortcut icon" />
<link rel="canonical" href="{$config_siteurl}" />
<title>
<if condition=" isset($SEO['title']) && !empty($SEO['title']) ">{$SEO['title']}</if>
{$SEO['site_title']}</title>
<meta name="description" content="{$SEO['description']}" />
<meta name="keywords" content="{$SEO['keyword']}" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet"
	href="{$config_siteurl}statics/css/bootstrap.min.css">
<link rel="stylesheet"
	href="{$config_siteurl}statics/css/font-awesome.min.css">
<link rel="stylesheet" href="{$config_siteurl}statics/css/animate.css">
<link rel="stylesheet" href="{$config_siteurl}statics/css/style.css">
<link type="text/css" href="{$config_siteurl}statics/css/nprogress.css"
	rel="stylesheet">
<link rel="apple-touch-icon-precomposed"
	href="{$config_siteurl}statics/images/icon/icon.png">
<!--[if lt IE 9]>
    <script src="{$config_siteurl}statics/js/html5shiv.min.js" type="text/javascript"></script>
    <script src="{$config_siteurl}statics/js/respond.min.js" type="text/javascript"></script>
    <script src="{$config_siteurl}statics/js/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->
</head>
<body>
<section class="container user-select">
  <template file="Content/header.php" />
  <div class="content-wrap"> 
    <!--内容-->
    <div class="content"> 
    	<!--广告推送-->	
        <div id="carousel" class="carousel slide"
					data-ride="carousel"> 
        <!--banner-->
        <ol class="carousel-indicators">
        <position action="position" posid="1" num="3">
            <volist name="data" id="vo">
          		<li data-target="#carousel" data-slide-to="{$i}"></li>          
            </volist>
          </position>
        </ol>
        <div class="carousel-inner" role="listbox">
          <position action="position" posid="1" num="3">
            <volist name="data"
							id="vo">
              <div class="item"> <a href="{$vo.data.url}" target="_blank" title="{$vo.data.title}"> <img src="{$vo.data.thumb}" alt="{$vo.data.title}" /> </a>
                <div class="carousel-caption">{$vo.data.title}</div>
                <span class="carousel-bg"></span> </div>
            </volist>
          </position>
        </div>
        <a class="left carousel-control" href="#carousel"
						role="button" data-slide="prev"> <span
						class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control"
						href="#carousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
        <!--位置-->
      <ul class="breadcrumb position">
        <li class="hidden-xs hidden-sm">当前位置：<a href="{$config_siteurl}" class="disable"><i class="fa fa-home"></i>首页</a></li>
        <navigate catid="$catid" space=" " />
      </ul>
      <!--推荐图片位-->        
      <ul class="list-unstyled list-img">
        <content action="lists" catid="$catid"  order="id DESC" num="3" thumb="1">
          <volist name="data" id="vo">
            <li class="col-md-4 list-goods col-sm-12 col-xs-12">
              <figure class="row"> <a href="{$vo.url}" class="dingwei"> <img src='<if condition="$vo['thumb']">{$vo.thumb}
                <else />
                {$config_siteurl}statics/default/images/defaultpic.gif
                </if>
                ' alt="{$vo.title}" class="img-responsive img-block"> <span class="goods-place">{$vo.title}</span> <span></span> </a>
                <figcaption>
                  <h3><a href="{$vo.url}" title="{$vo.title}">{$vo.title}</a></h3>
                  <p class="goods-info"> <span class="pull-left price"><i class="fa fa-eye text-muted"></i> {$vo.views}</span> <span class="pull-right number"><i class="fa fa-calendar"></i> {$vo.updatetime|date="m-d",###}</span> </p>
                </figcaption>
              </figure>
            </li>
          </volist>
        </content>
        <div class="clearfix"></div>
      </ul>
      <!--栏目内容开始-->
      <content action="category" catid="$catid"  order="listorder ASC" >
        <volist name="data" id="vo">
        
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2 class="panel-title">{$vo.catname} <a class="pull-right" href="{$vo.url}">更多&gt;&gt;</a></h2>
            </div>
                <ul class="panel-body">    
                        
                <content action="lists" catid="$vo['catid']"  order="id DESC" num="2" thumb="1">
                <volist name="data" id="vod">
                  <li class="list-blog">
                    <h2 class="title"><a href="{$vod.url}">{$vod.title}</a></h2>
                    <p class="flag"> <span class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> {$vod.updatetime|date="m-d H:i:s",###}</span> <span><i class="fa fa-eye"></i>：{$vod.views}</span> <span class="pull-right text-pink hidden-xs hidden-sm"> <i class="{$vo.caticon}"></i> <a href="{$vo.url}" class="btn btn-xs text-pink">{$vo.catname}</a> </span> </p>
                    <article class="clearfix">
                      <div class="thumbnail col-md-3 col-sm-4 col-xs-12"><img src='<if condition="$vod['thumb']">{$vod.thumb}
                        <else />
                        {$config_siteurl}statics/default/images/defaultpic.gif
                        </if>
                        ' alt='{$vod.title}' class="img-responsive img-block"></div>
                      <div class="col-md-9 col-sm-8 col-xs-12">
                        <p class="desc">{$vod.description}...</p>
                        <p class="text-right"><a href="{$vod.url}" class="btn btn-yellow">详细信息&gt;&gt;</a></p>
                      </div>
                    </article>
                  </li>
                </volist>
                </content>
                  
                </ul>
          </div>
          
        </volist>
      </content>
      
    </div>
  </div>
  <!--/内容-->
  <aside class="sidebar visible-lg"> 
    <!--右侧>992px显示-->
    <div class="sentence"> <strong>每日一句</strong>
      <h2>2015年11月1日 星期日</h2>
      <p>成长，就是一个不断觉得以前的自己是个傻逼的过程！。</p>
    </div>
    <div id="search" class="sidebar-block search" role="search">
      <h2 class="title"> <strong>搜索</strong> </h2>
      <form class="navbar-form" action="{:U('Search/Index/index')}"
					method="post">
        <div class="input-group">
          <input type="text" class="form-control" size="35"
							placeholder="请输入关键字">
          <span class="input-group-btn">
          <button class="btn btn-default btn-search" type="submit">搜索</button>
          </span> </div>
      </form>
    </div>
    <div class="sidebar-block recommend">
      <h2 class="title"> <strong>热门推荐</strong> </h2>
      <ul>
        <li><a target="_blank" href="index.html"> <span class="thumb"><img
								src="/d/160428/icon.png" alt=""></span> <span class="text">异清轩技术博客的SHORTCUT和ICON图标
          ...</span> <span class="text-muted">阅读(2165)</span></a></li>
        <li><a target="_blank" href="index.html"> <span class="thumb"><img
								src="/d/160428/icon.png" alt=""></span> <span class="text">异清轩技术博客的SHORTCUT和ICON图标
          ...</span> <span class="text-muted">阅读(2165)</span></a></li>
        <li><a target="_blank" href="index.html"> <span class="thumb"><img
								src="/d/160428/icon.png" alt=""></span> <span class="text">异清轩技术博客的SHORTCUT和ICON图标
          ...</span> <span class="text-muted">阅读(2165)</span></a></li>
        <li><a target="_blank" href="index.html"> <span class="thumb"><img
								src="/d/160428/icon.png" alt=""></span> <span class="text">异清轩技术博客的SHORTCUT和ICON图标
          ...</span> <span class="text-muted">阅读(2165)</span></a></li>
        <li><a target="_blank" href="index.html"> <span class="thumb"><img
								src="/d/160428/icon.png" alt=""></span> <span class="text">异清轩技术博客的SHORTCUT和ICON图标
          ...</span> <span class="text-muted">阅读(2165)</span></a></li>
      </ul>
    </div>
    <div class="sidebar-block comment">
      <h2 class="title"> <strong>热门点击</strong> </h2>
      <ul>
        <content action="hits" modelid="1" order="weekviews DESC" num="10">
          <volist name="data" id="vo">
            <li data-toggle="tooltip" data-placement="top"
						title="{$vo.description}"><a target="_blank" href="{$vo.url}"
						title="{$vo.title}"> <span class="face"> <img src="{$vo.thumb}"
								alt=""> </span> <span class="text"> <strong>{:getCategory($vo['catid'],'catname')}</strong> ({$vo.inputtime|date='Y-m-d',###})<br />
              {$vo.title|str_cut=###,15}... </span> </a></li>
          </volist>
        </content>
      </ul>
    </div>
  </aside>
  <template file="Content/footer.php" />
</section>
<script src="{$config_siteurl}statics/js/jquery-1.11.2.min.js"
		type="text/javascript"></script> 
<script src="{$config_siteurl}statics/js/bootstrap.min.js"
		type="text/javascript"></script> 
<script src="{$config_siteurl}statics/js/nprogress.js"
		type="text/javascript"></script> 
<script src="{$config_siteurl}statics/js/jquery.SuperSlide.js"
		type="text/javascript"></script> 
<script src="{$config_siteurl}statics/js/site.min.js"
		type="text/javascript"></script>
</body>
</html>