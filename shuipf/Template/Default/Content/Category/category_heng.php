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
<template file="Content/header.php"/>
<div class="map"><span class="home_ico">1当前位置：<a href="{$config_siteurl}">{$Config.sitename}</a> &gt; <navigate catid="$catid" space=" &gt; " /></span>
  <p style="float:right;padding-right:15px;"></p>
</div>
<div class="w972">
  <content action="category" catid="$catid"  order="listorder ASC" >
  <volist name="data" id="vo">
  <div class="list_image">
    <h2><span class="more right"><a href="{$vo.url}" target="_blank">更多>></a></span><span class="h2_text">{$vo.catname}</span></h2>
    <div style="clear:both"></div>
    <ul>
    <content action="lists" catid="$vo['catid']"  order="id DESC" num="8">
    <volist name="data" id="vo">
      <li><a href="{$vo.url}" title="{$vo.title}" target="_blank"><img src="<if condition="$vo['thumb']">{$vo.thumb}<else />{$config_siteurl}statics/default/images/defaultpic.gif</if>" alt="{$vo.title}"/><span>{$vo.title|str_cut=###,40}</span></a></li>
    </volist>
    </content>
    </ul>
    <div style="clear:both"></div>
  </div>
  </volist>
  </content>
</div>
<template file="Content/footer.php"/>
<script type="text/javascript">$(function (){$(window).toTop({showHeight : 100,});});</script>
</body>
</html>