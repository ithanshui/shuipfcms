<?php if (!defined('SHUIPF_VERSION')) exit(); ?>
<footer class="footer">
		
			<div class="">
				<div class="col-md-3 list-footer col-xs-12 col-sm-12">
					<h3>关于我们</h3>
					<p class="small">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
					<p class="small">Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui.</p>
				</div>
				<div class="col-md-3 list-footer">
					<h3>最新动态</h3>
					<p class="small"><i class="fa fa-twitter"></i>  Sed ut perspiciatis unde omnis iste natus error sit voluptatem
					
						http://twitter.com <br>
						Jan 7, 2013
					</p>
					<p class="small"><i class="fa fa-twitter"></i>  Nemo enim ipsam voluptatem quia voluptas sit aspernatur aliquid :)
					
						http://twitter.com <br>
						Jan 7, 2013						
					</p>
				</div>
				<div class="col-md-3 list-footer col-xs-12 col-sm-12">
					<h3>推荐图文</h3>
					<ul class="list-unstyled">
						<content action="lists" catid="1"  order="id DESC" num="6">
						        <volist name="data" id="vo">
						<li class="col-md-4 col-sm-6 col-xs-6">
							<figure><img src="{$vo.thumb}" alt="{$vo.title}" class="img-responsive img-block"></figure>
						</li>
						</volist>
						</content>
					</ul>
				</div>
				<div class="col-md-3 list-footer col-xs-12 col-sm-12">
					<h3>联系信息</h3>
					<p class="small">103088. Ut wisi enim ad minim veniam, quis nostrud.</p>
					<p class="small">mail@mail.com</p>
					<p class="small">+1 (229) 991-22-11</p>
					<p class="small">Monday-Friday: 9:00 - 18:00 <br>
						Saturday: 10:00 - 17:00<br>
						Sunday: closed
					</p>
					<ul class="social-icons-footer">
						<li><i class="fa fa-twitter"></i></li>
						<li><i class="fa fa-facebook"></i></li>
						<li><i class="fa fa-google-plus"></i></li>
						<li><i class="fa fa-pinterest"></i></li>
						<li><i class="fa fa-linkedin"></i></li>
						<li><i class="fa fa-dribbble"></i></li>
						<li><i class="fa fa-rss"></i></li>
					</ul>
				</div>
			</div>
				<div class="clearfix">
					<a class="disabled btn btn-link">友情链接：</a>
    				<get table="links" termsid="1" visible="1" order="id DESC">
                        <volist name="data" id="vo">
                        <a target="_blank" href="{$vo.url}" title="{$vo.description}" class="btn btn-link">{$vo.name}</a>
                        </volist>
                    </get>
                </div>
				<p class="">{$Config.copyright}</p>
	
	<span class="sr-only">{$Config.sitecnzz}</span>
</footer>
<div><a href="javascript:;" class="gotop"></a></div>