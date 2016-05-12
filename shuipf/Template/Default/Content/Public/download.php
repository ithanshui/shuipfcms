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
      <!--文章内容开始-->
      <article id="article">
        <h1 class="title text-center"><if condition="$title">{$title}<else/>{$filename}</if></h1>
        <div class="desc"><span class="time"><i class="fa fa-user text-blue"></i>
          <if condition="$username eq admin">三少爷
            <else/>
            网络</if>
          <i class="fa fa-eye text-blue"></i> <span id="hits text-blue">0</span> 
          <if condition="$info.inputtime">
          	<i class="fa fa-clock-o text-blue"></i> {$info.inputtime|date='m-d',###}
          </if>
          </span></div>
        <div class="article-body">
        <if condition="$info">
            <p><small>软件名称：</small>{$info.title}</p>
            <p><small>收录时间：</small>{$info.inputtime|date='Y-m-d H:i:s',###}</p>   
            <figure>
            	<img src="{$info.thumb}" alt="{$info.title}" class="col-md-7 img-responsive col-xs-12 col-sm-12">
                <figcaption class="col-md-5 col-xs-12 col-sm-12">
                	<p>{$info.description} </p>
                	<p><a href="{$fileurl}" class="btn btn-primary btn-xs" title="{$info.title}">马上下载</a></p>
                </figcaption>
            </figure> 
            <div class="clearfix"></div>  
        <else/>
         <p> <a href="{$fileurl}" class="btn btn-primary btn-xs" title="{$info.title}">马上下载</a></p>
        </if>
        </div>
        <if condition="$info.tags">
        <div class="article-desc" style="margin-top:24px;"> <i class="fa fa-tags"></i> {$info.tags} </div>
        </if>
      </article>
      <div class="well" style="margin-top:20px;">
      </div>
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