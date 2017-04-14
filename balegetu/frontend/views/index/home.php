</script><script src="http://js.baletoo.cn/static/pc/js/blt_extends.js?3"></script>

<script>
    $(function(){
        //banner 轮播图
        $('.index_top_banner').bltBannerShow({
            images_url:[
                'http://css.baletoo.cn/static/pc/images/shiyou/banner-show11-1.jpg',
                'http://css.baletoo.cn/static/pc/images/banner-show02-1n.jpg',
                'http://css.baletoo.cn/static/pc/images/gy/banner-show06.jpg',
                'http://css.baletoo.cn/static/pc/images/banner-show10.jpg'
            ],
            images_click_url : [
                '/activity/shiyou',
                '/zhaofang',
                '/activity/gy',
                'javascript:void(0)'
            ],
            timer:4000
        });
//        $('#bltBannerShow2').append('<div style="text-align: center;" > <video style="height:300px;margin:45px auto;"  src="http://cdn.baletoo.cn/activity/baletu.mp4" controls="controls" autoplay="autoplay" loop="loop">       </div>');
    });
</script>

<div class="index_top_banner">
    <ul id="banner">
    </ul>
    <ol>
    </ol>
<!--    <i class="left"></i><i class="right"></i>-->
</div>

<div class="main out">
    <!--search-->
    <div class="search-line">
        <div class="search-main">
            <form name="form_search" onsubmit="return searchForm();">
                <input name="prefixUrl" value="/zhaofang/" type="hidden" />
                <ul class="clearfix">
                    <li><input type="text" name="kw" class="search-input" placeholder="输入区域、板块或小区名开始找房" /></li>
                    <li><a id="index_search" mark="首页" class="btn-red btn-search"  href="javascript:void(0);" onclick="javascript:searchForm();" >搜索</a></li>
                    <li><a id="index_map" mark="I6" class="btn-map" href="/map"><span class="icon icon-pos-red"></span> 地图找房</a></li>
                </ul>
            </form>
            <div class="search-bot">
                热门搜索：
                                    <a href="/zhaofang/t5">近地铁</a>
                                    <a href="/zhaofang/t1">月付</a>
                                    <a href="/zhaofang/kw回龙观">回龙观</a>
                                    <a href="/zhaofang/c1">合租</a>
                                    <a href="/zhaofang/kw如果寓公寓">如果寓公寓</a>
                                    <a href="/zhaofang/kw林格">林格</a>
                            </div>
        </div>
    </div>
    <!--search end-->
</div>
<div class="main out">
	    <div class="unit">
        <div class="unit-title"><span>最新推荐</span></div>
        <div class="pic-show clearfix">
            <div class="pic-box pic-show-l">

                <a target="_blank" id="tuijianH1" mark="H1" href="http://bj.baletu.com/zhaofang/changping"><img class="lazy" data-original="//css.baletoo.cn/static/pc/images/pic-b.jpg" />
                <div class="pic-text"><span class="line"></span> 昌平有好房 <span class="line"></span></div>
				</a>
            </div>
            <div class="pic-show-r">
                <div class="pic-show-top clearfix">
                    <div class="pic-box pic-show-s">
						<a target="_blank" id="tuijianH2" mark="H2" href="http://bj.baletu.com/zhaofang/t3"><img class="lazy" data-original="//css.baletoo.cn/static/pc/images/pic-tr.jpg" />
						<div class="pic-text"><span class="line"></span> 朝南阳光房 <span class="line"></span></div>
						</a>
                    </div>
                    <div class="pic-box pic-show-s">
						<a target="_blank" id="tuijianH3" mark="H3" href="http://bj.baletu.com/zhaofang/c2h1"><img class="lazy" data-original="//css.baletoo.cn/static/pc/images/pic-tl.jpg" />
						<div class="pic-text"><span class="line"></span> 整租一室户 <span class="line"></span></div>
						</a>
                    </div>
                </div>
                <div class="pic-box pic-show-bot">
					<a target="_blank" id="tuijianH4" mark="H4" href="http://bj.baletu.com/zhaofang/d2800"><img class="lazy" data-original="//css.baletoo.cn/static/pc/images/pic-rb.jpg" />
					<div class="pic-text"><span class="line"></span> 10号线沿线有好房 <span class="line"></span></div>
					</a>
                </div>
            </div>
        </div>
    </div>
    <div class="unit">
        <div class="unit-title"><span>甄选好房</span></div>
        <div class="unit-pro">
            <div class="pro-title">
                <h2>合租 &bull; <span>独立单间</span></h2>
                <a id="zhenxuanG104" mark="G104" target="_blank" href="/zhaofang/c1" class="more"><span>&bull;</span>更多</a>
            </div>
            <ul class="pro-list clearfix" id="index_hezu">
             
            </ul>
        </div>
        <div class="unit-pro">
            <div class="pro-title">
                <h2>整租 &bull; <span>整套出租</span></h2>
                <a id="zhenxuanG204" mark="G204" target="_blank" href="/zhaofang/c2" class="more"><span>&bull;</span>更多</a>
            </div>
            <ul class="pro-list clearfix"  id="index_zhengzu">
            </ul>
        </div>
        <div class="unit-pro">
            <div class="pro-title">
                <h2>公寓 &bull; <span>品牌公寓</span></h2>
                <a id="zhenxuanG304" mark="G304" target="_blank" href="/zhaofang/c3" class="more"><span>&bull;</span>更多</a>
            </div>
            <ul class="pro-list clearfix"  id="index_department">
            </ul>
        </div>
    </div>

<script>
	$(document).ready(function(){
		function insertHtmlToZhenxuan(objectId,item,mark){
			var html = '<li>\
					<a target="_blank" id="zhenxuan'+ mark +'" mark="'+ mark +'" href="'+item['link']+'">\
					<div class="pro-pic" ><img width="360" src="'+item['main_pic'] +'" /></div>\
					<div class="list-pic-title">\
					<h3>'+item['title'] +'</h3>\
					<span class="price">￥ '+item['month_rent'] +'</span>\
				</div>\
				<p class="list-pic-ps">'+item['area_data'] +'</p>\
					<p class="list-pic-ps">'+item['desc'] +'</p>\
				<div class="pro-lab">';
				for(var i in item['labels']){
					html += '<span>' + item['labels'][i] + '</span>';
				}
				html += '</div>\
					</a>\
					</li>';
			$('#'+objectId).append(html);
		}
		var indexUrl = '/ajax/getIndexData';
		$.getJSON(indexUrl,{},function (data) {
			for( var i in data['hezu']){
				var item = data['hezu'][i];
                var g = (parseInt(i) + 1);
                var mark = 'G10'+g
				insertHtmlToZhenxuan('index_hezu',item,mark);
			}
			for( var i in data['zhengzu']){
				var item = data['zhengzu'][i];
                var g = (parseInt(i) + 1);
                var mark = 'G20'+g
				insertHtmlToZhenxuan('index_zhengzu',item,mark);
			}
			for( var i in data['department']){
				var item = data['department'][i];
                var g = (parseInt(i) + 1);
                var mark = 'G30'+g
				insertHtmlToZhenxuan('index_department',item,mark);
			}
		});
	});

</script>
    <!---->

</div>