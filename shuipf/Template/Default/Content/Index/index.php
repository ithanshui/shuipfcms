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
      <!--/banner-->
      <div class="content-block hot-content hidden-xs">
        <h2 class="title"> <strong>本周热门排行</strong> </h2>
        <ul>
          <!-- 1栏大图推荐 -->
          <position action="position" posid="2" num="1">
            <volist name="data"
							id="vo">
              <li class="large"><a href="{$vo.data.url}" target="_blank"> <img
								src="{$vo.data.thumb}" alt="{$vo.data.title}">
                <h3>{$vo.data.title}</h3>
                </a></li>
            </volist>
          </position>
          <!-- 4栏图片推荐 -->
          <position action="position" posid="3" num="4">
            <volist name="data"
							id="vo">
              <li><a href="{$vo.data.url}" target="_blank"> <img
								src="{$vo.data.thumb}" alt="{$vo.data.title}">
                <h3>{$vo.data.title}</h3>
                </a></li>
            </volist>
          </position>
        </ul>
      </div>
      <div class="content-block new-content"> 
        <!-- 最新文章 -->
        <section id="news-article">
          <h2 class="title"> <strong>最新文章</strong> </h2>
          <div class="row">
          
          
            <ul class="list-article">
            <get sql="SELECT * FROM shuipfcms_article  WHERE status=99 ORDER BY inputtime DESC"
							num="5">
            	<volist name="data" id="vo">
                    <li class="list-blog">
						<h3 class="title"><a href="{$vo.url}">{$vo.title}</a></h3>
						<p class="flag">
						<span class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> {$vo.updatetime|date="m-d H:i:s",###}</span>
						<span><i class="fa fa-eye"></i>：{$vo.views}</span>
						<span class="pull-right text-pink hidden-xs hidden-sm">
						<i class="{:getCategory($catid,'caticon')}"></i> <a href="{:getCategory($catid,'url')}" class="btn btn-xs text-pink">{:getCategory($catid,'catname')}</a>
						</span>
						</p>
						<article class="clearfix">
							<div class="thumbnail col-md-3 col-sm-4 col-xs-12"><img src='<if condition="$vo['thumb']">{$vo.thumb}<else />{$config_siteurl}statics/default/images/defaultpic.gif</if>' alt='{$vo.title}' class="img-responsive img-block"></div>
							<div class="col-md-9 col-sm-8 col-xs-12">
								<p class="desc">{$vo.description}...</p>
								<p class="text-right"><a href="{$vo.url}" class="btn btn-yellow">详细信息&gt;&gt;</a></p>							
							</div>
						</article>
                    </li>
                </volist>
                </get>
            </ul>
          </div>
        </section>
        <!-- 栏目推荐 -->
        <section class="cagetory">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tg" data-toggle="tab">{:getCategory(1,'catname')}</a></li>
            <li><a href="#tg1" data-toggle="tab">{:getCategory(10,'catname')}</a></li>
            <li><a href="#tg2" data-toggle="tab">{:getCategory(11,'catname')}</a></li>
          </ul>
          <div class="tab-content">
            <div id="tg" class="active tab-pane in fade">
              <ul>
                <content action="lists" catid="1"  order="id DESC" num="10">
                  <volist name="data" id="vo">
                    <li class="title"><a href="{$vo.url}" title="{$vo.title}">{$vo.title}</a></li>
                  </volist>
                </content>
              </ul>
            </div>
            <div id="tg1" class="tab-pane fade">
              <ul>
                <content action="lists" catid="10"  order="id DESC" num="10">
                  <volist name="data" id="vo">
                    <li class="title"><a href="{$vo.url}" title="{$vo.title}">{$vo.title}</a></li>
                  </volist>
                </content>
              </ul>
            </div>
            <div id="tg2" class="tab-pane fade">
              <ul>
                <content action="lists" catid="11"  order="id DESC" num="10">
                  <volist name="data" id="vo">
                    <li class="title"><a href="{$vo.url}" title="{$vo.title}">{$vo.title}</a></li>
                  </volist>
                </content>
              </ul>
            </div>
          </div>
        </section>
        <!-- 其他栏目 -->
        <section>
          <div class="panel panel-default scroll">
            <div class="panel-heading">
              <h4 class="panel-title">{:getCategory(1,'catname')} <a data-dismiss=".scroll" class="close">&times;</a> </h4>
            </div>
            <div class="panel-body bd">
              <ul>
                <content action="lists" catid="1"  order="id DESC" num="4">
                  <volist name="data" id="vo">
                    <li class="col-md-3">
                      <figure><img src="{$vo.thumb}" alt="{$vo.title}" class="img-responsive">
                        <figcaption>{$vo.title|str_cut=###,15}</figcaption>
                      </figure>
                    </li>
                  </volist>
                </content>
              </ul>
            </div>
          </div>
        </section>
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