
<div class="main out">
    <!--search-->
    <div class="search-line">
        <div class="search-main search-page">
			<form name="form_search" onsubmit="return searchForm();">
				<input name="prefixUrl" value="/zhaofang/" type="hidden" />
            <ul class="clearfix">
                <li><input type="text" name="kw" value="" placeholder="输入区域、板块或小区名开始找房" class="search-input" /></li>
                <li><a id="zhaofang_search" mark="立即找房" class="btn-red btn-search" href="javascript:void(0);" onclick="javascript:searchForm();" >搜索</a></li>
                <li><a id="zhaofang_map" mark="I7" class="btn-map" href="/map"><span class="icon icon-pos-red"></span> 地图找房</a></li>
            </ul>
			</form>
        </div>
    </div>
    <!--search end-->

	
	<script>

		function showInlineDiv(obj){
			var left = $(obj).position().left;
			var parentLeft = $(obj).parent().position().left;
			//left = left - parentLeft;
			$(obj).find("div").css('display','block');
			var width = $(obj).find(".down-list").width();
			var parentWidth = 1190;
			var boxleft = 0;
			if(width/2 + left > parentWidth){
				boxleft = -(width-parentWidth+left)
			}else if(width/2 - parentLeft >= 0 && width > left){
				boxleft = -(left-parentLeft);
				console.log(boxleft);
			}else if(width< left){
				boxleft = -width/2
			}
			$(obj).find(".down-list").css('left',boxleft + 'px');
		}
		function hidenInlineDiv(obj){
			$(obj).find("div").css('display','none');
		}

	</script>
    <!--筛选条件-->
    <div class="filter">
        <dl class="clearfix">
            <dt>区域:</dt>
            <dd>
                <ul id="PBAarea" class="line-list clearfix">
                    <li><a mark="区域不限" href="/zhaofang/">不限</a></li>
											<li id="li_chaoyang" mark="chaoyang" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a href="/zhaofang/chaoyang/"  class="" >朝阳</a>
							<div class="pos-r pos_inline" style="display: none;" id="div_chaoyang">
								<div class="" style="max-width: 300px; line-height: 20px;display: inline;">
									<i class="icon icon-list-top"></i>
								</div>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="chaoyang"><a id="chaoyang_quanbu" href="/zhaofang/chaoyang/" class="text-specific">全部</a></li>
																					<li mark="chaoyang"><a id="anzhen"  class="" href="<?php echo __URL__; ?>?r=index/show">安贞</a></li>
																					<li mark="chaoyang"><a id="aoyuncun"  class="" href="<?php echo __URL__; ?>?r=index/show">奥运村</a></li>
																					<li mark="chaoyang"><a id="baiziwan"  class="" href="<?php echo __URL__; ?>?r=index/show">百子湾</a></li>
																					<li mark="chaoyang"><a id="balizhuang"  class="" href="<?php echo __URL__; ?>?r=index/show">八里庄</a></li>
																					<li mark="chaoyang"><a id="beiyuan"  class="" href="/zhaofang/beiyuan/">北苑</a></li>
																					<li mark="chaoyang"><a id="cbd"  class="" href="/zhaofang/cbd/">CBD</a></li>
																					<li mark="chaoyang"><a id="changying"  class="" href="/zhaofang/changying/">常营</a></li>
																					<li mark="chaoyang"><a id="chaoyanggongyuan"  class="" href="/zhaofang/chaoyanggongyuan/">朝阳公园</a></li>
																					<li mark="chaoyang"><a id="dashanzi"  class="" href="/zhaofang/dashanzi/">大山子</a></li>
																					<li mark="chaoyang"><a id="dawanglu"  class="" href="/zhaofang/dawanglu/">大望路</a></li>
																					<li mark="chaoyang"><a id="dingfuzhuang"  class="" href="/zhaofang/dingfuzhuang/">定福庄</a></li>
																					<li mark="chaoyang"><a id="dongba"  class="" href="/zhaofang/dongba/">东坝</a></li>
																					<li mark="chaoyang"><a id="dongdaqiao"  class="" href="/zhaofang/dongdaqiao/">东大桥</a></li>
																					<li mark="chaoyang"><a id="dougezhuang"  class="" href="/zhaofang/dougezhuang/">豆各庄</a></li>
																					<li mark="chaoyang"><a id="fatou"  class="" href="/zhaofang/fatou/">垡头</a></li>
																					<li mark="chaoyang"><a id="gaobeidian"  class="" href="/zhaofang/gaobeidian/">高碑店</a></li>
																					<li mark="chaoyang"><a id="gongti"  class="" href="/zhaofang/gongti/">工体</a></li>
																					<li mark="chaoyang"><a id="guangqumen"  class="" href="/zhaofang/guangqumen/">广渠门</a></li>
																					<li mark="chaoyang"><a id="guanzhuang"  class="" href="/zhaofang/guanzhuang/">管庄</a></li>
																					<li mark="chaoyang"><a id="guozhan"  class="" href="/zhaofang/guozhan/">国展</a></li>
																					<li mark="chaoyang"><a id="hepingjie"  class="" href="/zhaofang/hepingjie/">和平街</a></li>
																					<li mark="chaoyang"><a id="hongmiao"  class="" href="/zhaofang/hongmiao/">红庙</a></li>
																					<li mark="chaoyang"><a id="huajiadi"  class="" href="/zhaofang/huajiadi/">花家地</a></li>
																					<li mark="chaoyang"><a id="huixinxijie"  class="" href="/zhaofang/huixinxijie/">惠新西街</a></li>
																					<li mark="chaoyang"><a id="hujialou"  class="" href="/zhaofang/hujialou/">呼家楼</a></li>
																					<li mark="chaoyang"><a id="jianxiangqiao"  class="" href="/zhaofang/jianxiangqiao/">健翔桥</a></li>
																					<li mark="chaoyang"><a id="jinsong"  class="" href="/zhaofang/jinsong/">劲松</a></li>
																					<li mark="chaoyang"><a id="jiuxianqiao"  class="" href="/zhaofang/jiuxianqiao/">酒仙桥</a></li>
																					<li mark="chaoyang"><a id="laiguangying"  class="" href="/zhaofang/laiguangying/">来广营</a></li>
																					<li mark="chaoyang"><a id="maizidian"  class="" href="/zhaofang/maizidian/">麦子店</a></li>
																					<li mark="chaoyang"><a id="nanshatan"  class="" href="/zhaofang/nanshatan/">南沙滩</a></li>
																					<li mark="chaoyang"><a id="panjiayuan"  class="" href="/zhaofang/panjiayuan/">潘家园</a></li>
																					<li mark="chaoyang"><a id="sanlitun"  class="" href="/zhaofang/sanlitun/">三里屯</a></li>
																					<li mark="chaoyang"><a id="sanyuanqiao"  class="" href="/zhaofang/sanyuanqiao/">三元桥</a></li>
																					<li mark="chaoyang"><a id="shaoyaoju"  class="" href="/zhaofang/shaoyaoju/">芍药居</a></li>
																					<li mark="chaoyang"><a id="shibalidian"  class="" href="/zhaofang/shibalidian/">十八里店</a></li>
																					<li mark="chaoyang"><a id="shifoying"  class="" href="/zhaofang/shifoying/">石佛营</a></li>
																					<li mark="chaoyang"><a id="shilibao"  class="" href="/zhaofang/shilibao/">十里堡</a></li>
																					<li mark="chaoyang"><a id="shuangjing"  class="" href="/zhaofang/shuangjing/">双井</a></li>
																					<li mark="chaoyang"><a id="sihui"  class="" href="/zhaofang/sihui/">四惠</a></li>
																					<li mark="chaoyang"><a id="sunhe"  class="" href="/zhaofang/sunhe/">孙河</a></li>
																					<li mark="chaoyang"><a id="taiyanggong"  class="" href="/zhaofang/taiyanggong/">太阳宫</a></li>
																					<li mark="chaoyang"><a id="tianshuiyuan"  class="" href="/zhaofang/tianshuiyuan/">甜水园</a></li>
																					<li mark="chaoyang"><a id="tuanjiehu"  class="" href="/zhaofang/tuanjiehu/">团结湖</a></li>
																					<li mark="chaoyang"><a id="wangjing"  class="" href="/zhaofang/wangjing/">望京</a></li>
																					<li mark="chaoyang"><a id="xiaoguan"  class="" href="/zhaofang/xiaoguan/">小关</a></li>
																					<li mark="chaoyang"><a id="xiaohongmen"  class="" href="/zhaofang/xiaohongmen/">小红门</a></li>
																					<li mark="chaoyang"><a id="yayuncun"  class="" href="/zhaofang/yayuncun/">亚运村</a></li>
																					<li mark="chaoyang"><a id="yayuncunxiaoying"  class="" href="/zhaofang/yayuncunxiaoying/">亚运村小营</a></li>
																					<li mark="chaoyang"><a id="zuojiazhuang"  class="" href="/zhaofang/zuojiazhuang/">左家庄</a></li>
																			</ul>
								</div>
							</div>
						</li>
											<li id="li_haidian" mark="haidian" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a href="/zhaofang/haidian/"  class="" >海淀</a>
							<div class="pos-r pos_inline" style="display: none;" id="div_haidian">
								<div class="" style="max-width: 300px; line-height: 20px;display: inline;">
									<i class="icon icon-list-top"></i>
								</div>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="haidian"><a id="haidian_quanbu" href="/zhaofang/haidian/" class="text-specific">全部</a></li>
																					<li mark="haidian"><a id="baishiqiao"  class="" href="/zhaofang/baishiqiao/">白石桥</a></li>
																					<li mark="haidian"><a id="beitaipingzhuang"  class="" href="/zhaofang/beitaipingzhuang/">北太平庄</a></li>
																					<li mark="haidian"><a id="chedaogou"  class="" href="/zhaofang/chedaogou/">车道沟</a></li>
																					<li mark="haidian"><a id="dinghuisi"  class="" href="/zhaofang/dinghuisi/">定慧寺</a></li>
																					<li mark="haidian"><a id="ganjiakou"  class="" href="/zhaofang/ganjiakou/">甘家口</a></li>
																					<li mark="haidian"><a id="gongzhufen"  class="" href="/zhaofang/gongzhufen/">公主坟</a></li>
																					<li mark="haidian"><a id="hangtianqiao"  class="" href="/zhaofang/hangtianqiao/">航天桥</a></li>
																					<li mark="haidian"><a id="junbo"  class="" href="/zhaofang/junbo/">军博</a></li>
																					<li mark="haidian"><a id="malianwa"  class="" href="/zhaofang/malianwa/">马连洼</a></li>
																					<li mark="haidian"><a id="mudanyuan"  class="" href="/zhaofang/mudanyuan/">牡丹园</a></li>
																					<li mark="haidian"><a id="qinghe"  class="" href="/zhaofang/qinghe/">清河</a></li>
																					<li mark="haidian"><a id="shangdi"  class="" href="/zhaofang/shangdi/">上地</a></li>
																					<li mark="haidian"><a id="shijicheng"  class="" href="/zhaofang/shijicheng/">世纪城</a></li>
																					<li mark="haidian"><a id="shuangyushu"  class="" href="/zhaofang/shuangyushu/">双榆树</a></li>
																					<li mark="haidian"><a id="sijiqing"  class="" href="/zhaofang/sijiqing/">四季青</a></li>
																					<li mark="haidian"><a id="suzhouqiao"  class="" href="/zhaofang/suzhouqiao/">苏州桥</a></li>
																					<li mark="haidian"><a id="tiancun"  class="" href="/zhaofang/tiancun/">田村</a></li>
																					<li mark="haidian"><a id="wanliu"  class="" href="/zhaofang/wanliu/">万柳</a></li>
																					<li mark="haidian"><a id="wanshoulu"  class="" href="/zhaofang/wanshoulu/">万寿路</a></li>
																					<li mark="haidian"><a id="weigongcun"  class="" href="/zhaofang/weigongcun/">魏公村</a></li>
																					<li mark="haidian"><a id="wudaokou"  class="" href="/zhaofang/wudaokou/">五道口</a></li>
																					<li mark="haidian"><a id="wukesong"  class="" href="/zhaofang/wukesong/">五棵松</a></li>
																					<li mark="haidian"><a id="xiangshan"  class="" href="/zhaofang/xiangshan/">香山</a></li>
																					<li mark="haidian"><a id="xiaoxitian"  class="" href="/zhaofang/xiaoxitian/">小西天</a></li>
																					<li mark="haidian"><a id="xibeiwang"  class="" href="/zhaofang/xibeiwang/">西北旺</a></li>
																					<li mark="haidian"><a id="xierqi"  class="" href="/zhaofang/xierqi/">西二旗</a></li>
																					<li mark="haidian"><a id="xisanqi"  class="" href="/zhaofang/xisanqi/">西三旗</a></li>
																					<li mark="haidian"><a id="xiyuan"  class="" href="/zhaofang/xiyuan/">西苑</a></li>
																					<li mark="haidian"><a id="xueyuanlu"  class="" href="/zhaofang/xueyuanlu/">学院路</a></li>
																					<li mark="haidian"><a id="yongdinglu"  class="" href="/zhaofang/yongdinglu/">永定路</a></li>
																					<li mark="haidian"><a id="yuquanlu"  class="" href="/zhaofang/yuquanlu/">玉泉路</a></li>
																					<li mark="haidian"><a id="zaojunmiao"  class="" href="/zhaofang/zaojunmiao/">皂君庙</a></li>
																					<li mark="haidian"><a id="zhichunlu"  class="" href="/zhaofang/zhichunlu/">知春路</a></li>
																					<li mark="haidian"><a id="zhongguancun"  class="" href="/zhaofang/zhongguancun/">中关村</a></li>
																					<li mark="haidian"><a id="zizhuqiao"  class="" href="/zhaofang/zizhuqiao/">紫竹桥</a></li>
																			</ul>
								</div>
							</div>
						</li>
											<li id="li_dongcheng" mark="dongcheng" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a href="/zhaofang/dongcheng/"  class="" >东城</a>
							<div class="pos-r pos_inline" style="display: none;" id="div_dongcheng">
								<div class="" style="max-width: 300px; line-height: 20px;display: inline;">
									<i class="icon icon-list-top"></i>
								</div>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="dongcheng"><a id="dongcheng_quanbu" href="/zhaofang/dongcheng/" class="text-specific">全部</a></li>
																					<li mark="dongcheng"><a id="andingmen"  class="" href="/zhaofang/andingmen/">安定门</a></li>
																					<li mark="dongcheng"><a id="beixinqiao"  class="" href="/zhaofang/beixinqiao/">北新桥</a></li>
																					<li mark="dongcheng"><a id="chaoyangmen"  class="" href="/zhaofang/chaoyangmen/">朝阳门</a></li>
																					<li mark="dongcheng"><a id="dengshikou"  class="" href="/zhaofang/dengshikou/">灯市口</a></li>
																					<li mark="dongcheng"><a id="dongdan"  class="" href="/zhaofang/dongdan/">东单</a></li>
																					<li mark="dongcheng"><a id="dongsi"  class="" href="/zhaofang/dongsi/">东四</a></li>
																					<li mark="dongcheng"><a id="dongzhimen"  class="" href="/zhaofang/dongzhimen/">东直门</a></li>
																					<li mark="dongcheng"><a id="hepingli"  class="" href="/zhaofang/hepingli/">和平里</a></li>
																					<li mark="dongcheng"><a id="jianguomen"  class="" href="/zhaofang/jianguomen/">建国门</a></li>
																					<li mark="dongcheng"><a id="jiaodaokou"  class="" href="/zhaofang/jiaodaokou/">交道口</a></li>
																					<li mark="dongcheng"><a id="wangfujing"  class="" href="/zhaofang/wangfujing/">王府井</a></li>
																					<li mark="dongcheng"><a id="yonghegong"  class="" href="/zhaofang/yonghegong/">雍和宫</a></li>
																			</ul>
								</div>
							</div>
						</li>
											<li id="li_chongwen" mark="chongwen" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a href="/zhaofang/chongwen/"  class="" >崇文</a>
							<div class="pos-r pos_inline" style="display: none;" id="div_chongwen">
								<div class="" style="max-width: 300px; line-height: 20px;display: inline;">
									<i class="icon icon-list-top"></i>
								</div>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="chongwen"><a id="chongwen_quanbu" href="/zhaofang/chongwen/" class="text-specific">全部</a></li>
																					<li mark="chongwen"><a id="chongwenmen"  class="" href="/zhaofang/chongwenmen/">崇文门</a></li>
																					<li mark="chongwen"><a id="donghuashi"  class="" href="/zhaofang/donghuashi/">东花市</a></li>
																					<li mark="chongwen"><a id="guangqumen"  class="" href="/zhaofang/guangqumen/">广渠门</a></li>
																					<li mark="chongwen"><a id="qianmen"  class="" href="/zhaofang/qianmen/">前门</a></li>
																					<li mark="chongwen"><a id="tiantan"  class="" href="/zhaofang/tiantan/">天坛</a></li>
																					<li mark="chongwen"><a id="yongdingmen"  class="" href="/zhaofang/yongdingmen/">永定门</a></li>
																			</ul>
								</div>
							</div>
						</li>
											<li id="li_xicheng" mark="xicheng" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a href="/zhaofang/xicheng/"  class="" >西城</a>
							<div class="pos-r pos_inline" style="display: none;" id="div_xicheng">
								<div class="" style="max-width: 300px; line-height: 20px;display: inline;">
									<i class="icon icon-list-top"></i>
								</div>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="xicheng"><a id="xicheng_quanbu" href="/zhaofang/xicheng/" class="text-specific">全部</a></li>
																					<li mark="xicheng"><a id="chegongzhuang"  class="" href="/zhaofang/chegongzhuang/">车公庄</a></li>
																					<li mark="xicheng"><a id="deshengmen"  class="" href="/zhaofang/deshengmen/">德胜门</a></li>
																					<li mark="xicheng"><a id="fuchengmen"  class="" href="/zhaofang/fuchengmen/">阜成门</a></li>
																					<li mark="xicheng"><a id="guanyuan"  class="" href="/zhaofang/guanyuan/">官园</a></li>
																					<li mark="xicheng"><a id="gulou"  class="" href="/zhaofang/gulou/">鼓楼</a></li>
																					<li mark="xicheng"><a id="jinrongjie"  class="" href="/zhaofang/jinrongjie/">金融街</a></li>
																					<li mark="xicheng"><a id="jishuitan"  class="" href="/zhaofang/jishuitan/">积水潭</a></li>
																					<li mark="xicheng"><a id="madian"  class="" href="/zhaofang/madian/">马甸</a></li>
																					<li mark="xicheng"><a id="shishahai"  class="" href="/zhaofang/shishahai/">什刹海</a></li>
																					<li mark="xicheng"><a id="xidan"  class="" href="/zhaofang/xidan/">西单</a></li>
																					<li mark="xicheng"><a id="xinjiekou"  class="" href="/zhaofang/xinjiekou/">新街口</a></li>
																					<li mark="xicheng"><a id="xisi"  class="" href="/zhaofang/xisi/">西四</a></li>
																					<li mark="xicheng"><a id="xizhimen"  class="" href="/zhaofang/xizhimen/">西直门</a></li>
																					<li mark="xicheng"><a id="yuetan"  class="" href="/zhaofang/yuetan/">月坛</a></li>
																			</ul>
								</div>
							</div>
						</li>
											<li id="li_xuanwu" mark="xuanwu" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a href="/zhaofang/xuanwu/"  class="" >宣武</a>
							<div class="pos-r pos_inline" style="display: none;" id="div_xuanwu">
								<div class="" style="max-width: 300px; line-height: 20px;display: inline;">
									<i class="icon icon-list-top"></i>
								</div>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="xuanwu"><a id="xuanwu_quanbu" href="/zhaofang/xuanwu/" class="text-specific">全部</a></li>
																					<li mark="xuanwu"><a id="baizhifang"  class="" href="/zhaofang/baizhifang/">白纸坊</a></li>
																					<li mark="xuanwu"><a id="changchunjie"  class="" href="/zhaofang/changchunjie/">长椿街</a></li>
																					<li mark="xuanwu"><a id="hepingmen"  class="" href="/zhaofang/hepingmen/">和平门</a></li>
																					<li mark="xuanwu"><a id="maliandao"  class="" href="/zhaofang/maliandao/">马连道</a></li>
																					<li mark="xuanwu"><a id="niujie"  class="" href="/zhaofang/niujie/">牛街</a></li>
																					<li mark="xuanwu"><a id="taoranting"  class="" href="/zhaofang/taoranting/">陶然亭</a></li>
																					<li mark="xuanwu"><a id="tianningsi"  class="" href="/zhaofang/tianningsi/">天宁寺</a></li>
																					<li mark="xuanwu"><a id="tianqiao"  class="" href="/zhaofang/tianqiao/">天桥</a></li>
																					<li mark="xuanwu"><a id="xuanwumen"  class="" href="/zhaofang/xuanwumen/">宣武门</a></li>
																			</ul>
								</div>
							</div>
						</li>
											<li id="li_fengtai" mark="fengtai" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a href="/zhaofang/fengtai/"  class="" >丰台</a>
							<div class="pos-r pos_inline" style="display: none;" id="div_fengtai">
								<div class="" style="max-width: 300px; line-height: 20px;display: inline;">
									<i class="icon icon-list-top"></i>
								</div>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="fengtai"><a id="fengtai_quanbu" href="/zhaofang/fengtai/" class="text-specific">全部</a></li>
																					<li mark="fengtai"><a id="beidadi"  class="" href="/zhaofang/beidadi/">北大地</a></li>
																					<li mark="fengtai"><a id="caihuying"  class="" href="/zhaofang/caihuying/">菜户营</a></li>
																					<li mark="fengtai"><a id="caoqiao"  class="" href="/zhaofang/caoqiao/">草桥</a></li>
																					<li mark="fengtai"><a id="changxindian"  class="" href="/zhaofang/changxindian/">长辛店</a></li>
																					<li mark="fengtai"><a id="chengshousi"  class="" href="/zhaofang/chengshousi/">成寿寺</a></li>
																					<li mark="fengtai"><a id="dahongmen"  class="" href="/zhaofang/dahongmen/">大红门</a></li>
																					<li mark="fengtai"><a id="donggaodi"  class="" href="/zhaofang/donggaodi/">东高地</a></li>
																					<li mark="fengtai"><a id="fangzhuang"  class="" href="/zhaofang/fangzhuang/">方庄</a></li>
																					<li mark="fengtai"><a id="heyi"  class="" href="/zhaofang/heyi/">和义</a></li>
																					<li mark="fengtai"><a id="huaxiang"  class="" href="/zhaofang/huaxiang/">花乡</a></li>
																					<li mark="fengtai"><a id="jiaomen"  class="" href="/zhaofang/jiaomen/">角门</a></li>
																					<li mark="fengtai"><a id="kandanqiao"  class="" href="/zhaofang/kandanqiao/">看丹桥</a></li>
																					<li mark="fengtai"><a id="kejiyuanqu"  class="" href="/zhaofang/kejiyuanqu/">科技园区</a></li>
																					<li mark="fengtai"><a id="liuliqiao"  class="" href="/zhaofang/liuliqiao/">六里桥</a></li>
																					<li mark="fengtai"><a id="lizeqiao"  class="" href="/zhaofang/lizeqiao/">丽泽桥</a></li>
																					<li mark="fengtai"><a id="lugouqiao"  class="" href="/zhaofang/lugouqiao/">卢沟桥</a></li>
																					<li mark="fengtai"><a id="majiabao"  class="" href="/zhaofang/majiabao/">马家堡</a></li>
																					<li mark="fengtai"><a id="muxiyuan"  class="" href="/zhaofang/muxiyuan/">木樨园</a></li>
																					<li mark="fengtai"><a id="nanyuan"  class="" href="/zhaofang/nanyuan/">南苑</a></li>
																					<li mark="fengtai"><a id="puhuangyu"  class="" href="/zhaofang/puhuangyu/">蒲黄榆</a></li>
																					<li mark="fengtai"><a id="qilizhuang"  class="" href="/zhaofang/qilizhuang/">七里庄</a></li>
																					<li mark="fengtai"><a id="qingta"  class="" href="/zhaofang/qingta/">青塔</a></li>
																					<li mark="fengtai"><a id="shiliuzhuang"  class="" href="/zhaofang/shiliuzhuang/">石榴庄</a></li>
																					<li mark="fengtai"><a id="songjiazhuang"  class="" href="/zhaofang/songjiazhuang/">宋家庄</a></li>
																					<li mark="fengtai"><a id="taipingqiao"  class="" href="/zhaofang/taipingqiao/">太平桥</a></li>
																					<li mark="fengtai"><a id="wulidian"  class="" href="/zhaofang/wulidian/">五里店</a></li>
																					<li mark="fengtai"><a id="xiluoyuan"  class="" href="/zhaofang/xiluoyuan/">西罗园</a></li>
																					<li mark="fengtai"><a id="xinfadi"  class="" href="/zhaofang/xinfadi/">新发地</a></li>
																					<li mark="fengtai"><a id="xingong"  class="" href="/zhaofang/xingong/">新宫</a></li>
																					<li mark="fengtai"><a id="yangqiao"  class="" href="/zhaofang/yangqiao/">洋桥</a></li>
																					<li mark="fengtai"><a id="youanmen"  class="" href="/zhaofang/youanmen/">右安门</a></li>
																					<li mark="fengtai"><a id="yuegezhuang"  class="" href="/zhaofang/yuegezhuang/">岳各庄</a></li>
																					<li mark="fengtai"><a id="yungang"  class="" href="/zhaofang/yungang/">云岗</a></li>
																					<li mark="fengtai"><a id="yuquanying"  class="" href="/zhaofang/yuquanying/">玉泉营</a></li>
																					<li mark="fengtai"><a id="zhaogongkou"  class="" href="/zhaofang/zhaogongkou/">赵公口</a></li>
																					<li mark="fengtai"><a id="zuoanmen"  class="" href="/zhaofang/zuoanmen/">左安门</a></li>
																			</ul>
								</div>
							</div>
						</li>
											<li id="li_tongzhou" mark="tongzhou" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a href="/zhaofang/tongzhou/"  class="" >通州</a>
							<div class="pos-r pos_inline" style="display: none;" id="div_tongzhou">
								<div class="" style="max-width: 300px; line-height: 20px;display: inline;">
									<i class="icon icon-list-top"></i>
								</div>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="tongzhou"><a id="tongzhou_quanbu" href="/zhaofang/tongzhou/" class="text-specific">全部</a></li>
																					<li mark="tongzhou"><a id="baliqiao"  class="" href="/zhaofang/baliqiao/">八里桥</a></li>
																					<li mark="tongzhou"><a id="beiguan"  class="" href="/zhaofang/beiguan/">北关</a></li>
																					<li mark="tongzhou"><a id="ciqu"  class="" href="/zhaofang/ciqu/">次渠</a></li>
																					<li mark="tongzhou"><a id="dongguan"  class="" href="/zhaofang/dongguan/">东关</a></li>
																					<li mark="tongzhou"><a id="guoyuan"  class="" href="/zhaofang/guoyuan/">果园</a></li>
																					<li mark="tongzhou"><a id="jiukeshu"  class="" href="/zhaofang/jiukeshu/">九棵树</a></li>
																					<li mark="tongzhou"><a id="linheli"  class="" href="/zhaofang/linheli/">临河里</a></li>
																					<li mark="tongzhou"><a id="liyuan"  class="" href="/zhaofang/liyuan/">梨园</a></li>
																					<li mark="tongzhou"><a id="lucheng"  class="" href="/zhaofang/lucheng/">潞城</a></li>
																					<li mark="tongzhou"><a id="majuqiao"  class="" href="/zhaofang/majuqiao/">马驹桥</a></li>
																					<li mark="tongzhou"><a id="qiaozhuang"  class="" href="/zhaofang/qiaozhuang/">乔庄</a></li>
																					<li mark="tongzhou"><a id="tongzhoubeiyuan"  class="" href="/zhaofang/tongzhoubeiyuan/">通州北苑</a></li>
																					<li mark="tongzhou"><a id="tuqiao"  class="" href="/zhaofang/tuqiao/">土桥</a></li>
																					<li mark="tongzhou"><a id="wuyihuayuan"  class="" href="/zhaofang/wuyihuayuan/">武夷花园</a></li>
																					<li mark="tongzhou"><a id="xian"  class="" href="/zhaofang/xian/">漷县</a></li>
																					<li mark="tongzhou"><a id="xinhuadajie"  class="" href="/zhaofang/xinhuadajie/">新华大街</a></li>
																					<li mark="tongzhou"><a id="yongledian"  class="" href="/zhaofang/yongledian/">永乐店</a></li>
																			</ul>
								</div>
							</div>
						</li>
											<li id="li_shijingshan" mark="shijingshan" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a href="/zhaofang/shijingshan/"  class="" >石景山</a>
							<div class="pos-r pos_inline" style="display: none;" id="div_shijingshan">
								<div class="" style="max-width: 300px; line-height: 20px;display: inline;">
									<i class="icon icon-list-top"></i>
								</div>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="shijingshan"><a id="shijingshan_quanbu" href="/zhaofang/shijingshan/" class="text-specific">全部</a></li>
																					<li mark="shijingshan"><a id="badachu"  class="" href="/zhaofang/badachu/">八大处</a></li>
																					<li mark="shijingshan"><a id="bajiao"  class="" href="/zhaofang/bajiao/">八角</a></li>
																					<li mark="shijingshan"><a id="gucheng"  class="" href="/zhaofang/gucheng/">古城</a></li>
																					<li mark="shijingshan"><a id="jindingjie"  class="" href="/zhaofang/jindingjie/">金顶街</a></li>
																					<li mark="shijingshan"><a id="laoshan"  class="" href="/zhaofang/laoshan/">老山</a></li>
																					<li mark="shijingshan"><a id="lugu"  class="" href="/zhaofang/lugu/">鲁谷</a></li>
																					<li mark="shijingshan"><a id="moshikou"  class="" href="/zhaofang/moshikou/">模式口</a></li>
																					<li mark="shijingshan"><a id="pingguoyuan"  class="" href="/zhaofang/pingguoyuan/">苹果园</a></li>
																					<li mark="shijingshan"><a id="wulituo"  class="" href="/zhaofang/wulituo/">五里坨</a></li>
																					<li mark="shijingshan"><a id="xishan"  class="" href="/zhaofang/xishan/">西山</a></li>
																					<li mark="shijingshan"><a id="yangzhuang"  class="" href="/zhaofang/yangzhuang/">杨庄</a></li>
																					<li mark="shijingshan"><a id="yuquanlu"  class="" href="/zhaofang/yuquanlu/">玉泉路</a></li>
																			</ul>
								</div>
							</div>
						</li>
											<li id="li_fangshan" mark="fangshan" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a href="/zhaofang/fangshan/"  class="" >房山</a>
							<div class="pos-r pos_inline" style="display: none;" id="div_fangshan">
								<div class="" style="max-width: 300px; line-height: 20px;display: inline;">
									<i class="icon icon-list-top"></i>
								</div>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="fangshan"><a id="fangshan_quanbu" href="/zhaofang/fangshan/" class="text-specific">全部</a></li>
																					<li mark="fangshan"><a id="changyang"  class="" href="/zhaofang/changyang/">长阳</a></li>
																					<li mark="fangshan"><a id="doudian"  class="" href="/zhaofang/doudian/">窦店</a></li>
																					<li mark="fangshan"><a id="fangshanchengguan"  class="" href="/zhaofang/fangshanchengguan/">房山城关</a></li>
																					<li mark="fangshan"><a id="hancunhe"  class="" href="/zhaofang/hancunhe/">韩村河</a></li>
																					<li mark="fangshan"><a id="liangxiang"  class="" href="/zhaofang/liangxiang/">良乡</a></li>
																					<li mark="fangshan"><a id="liulihe"  class="" href="/zhaofang/liulihe/">琉璃河</a></li>
																					<li mark="fangshan"><a id="yancun"  class="" href="/zhaofang/yancun/">阎村</a></li>
																					<li mark="fangshan"><a id="yingfeng"  class="" href="/zhaofang/yingfeng/">迎风</a></li>
																					<li mark="fangshan"><a id="zhoukoudian"  class="" href="/zhaofang/zhoukoudian/">周口店</a></li>
																					<li mark="fangshan"><a id="gongchen"  class="" href="/zhaofang/gongchen/">拱辰</a></li>
																			</ul>
								</div>
							</div>
						</li>
											<li id="li_changping" mark="changping" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a href="/zhaofang/changping/"  class="" >昌平</a>
							<div class="pos-r pos_inline" style="display: none;" id="div_changping">
								<div class="" style="max-width: 300px; line-height: 20px;display: inline;">
									<i class="icon icon-list-top"></i>
								</div>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="changping"><a id="changping_quanbu" href="/zhaofang/changping/" class="text-specific">全部</a></li>
																					<li mark="changping"><a id="baishan"  class="" href="/zhaofang/baishan/">百善</a></li>
																					<li mark="changping"><a id="beiqijia"  class="" href="/zhaofang/beiqijia/">北七家</a></li>
																					<li mark="changping"><a id="changpingxiancheng"  class="" href="/zhaofang/changpingxiancheng/">昌平县城</a></li>
																					<li mark="changping"><a id="dongxiaokou"  class="" href="/zhaofang/dongxiaokou/">东小口</a></li>
																					<li mark="changping"><a id="huilongguan"  class="" href="/zhaofang/huilongguan/">回龙观</a></li>
																					<li mark="changping"><a id="huoying"  class="" href="/zhaofang/huoying/">霍营</a></li>
																					<li mark="changping"><a id="lishuiqiao"  class="" href="/zhaofang/lishuiqiao/">立水桥</a></li>
																					<li mark="changping"><a id="longze"  class="" href="/zhaofang/longze/">龙泽</a></li>
																					<li mark="changping"><a id="nankou"  class="" href="/zhaofang/nankou/">南口</a></li>
																					<li mark="changping"><a id="nanshaozhen"  class="" href="/zhaofang/nanshaozhen/">南邵镇</a></li>
																					<li mark="changping"><a id="shahe"  class="" href="/zhaofang/shahe/">沙河</a></li>
																					<li mark="changping"><a id="tiantongyuan"  class="" href="/zhaofang/tiantongyuan/">天通苑</a></li>
																					<li mark="changping"><a id="xiaotangshan"  class="" href="/zhaofang/xiaotangshan/">小汤山</a></li>
																					<li mark="changping"><a id="yangfang"  class="" href="/zhaofang/yangfang/">阳坊</a></li>
																			</ul>
								</div>
							</div>
						</li>
											<li id="li_daxing" mark="daxing" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a href="/zhaofang/daxing/"  class="" >大兴</a>
							<div class="pos-r pos_inline" style="display: none;" id="div_daxing">
								<div class="" style="max-width: 300px; line-height: 20px;display: inline;">
									<i class="icon icon-list-top"></i>
								</div>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="daxing"><a id="daxing_quanbu" href="/zhaofang/daxing/" class="text-specific">全部</a></li>
																					<li mark="daxing"><a id="binhe"  class="" href="/zhaofang/binhe/">滨河</a></li>
																					<li mark="daxing"><a id="gaomidian"  class="" href="/zhaofang/gaomidian/">高米店</a></li>
																					<li mark="daxing"><a id="guanyinsi"  class="" href="/zhaofang/guanyinsi/">观音寺</a></li>
																					<li mark="daxing"><a id="haizijiao"  class="" href="/zhaofang/haizijiao/">海子角</a></li>
																					<li mark="daxing"><a id="huangcun"  class="" href="/zhaofang/huangcun/">黄村</a></li>
																					<li mark="daxing"><a id="jiugong"  class="" href="/zhaofang/jiugong/">旧宫</a></li>
																					<li mark="daxing"><a id="panggezhuang"  class="" href="/zhaofang/panggezhuang/">庞各庄</a></li>
																					<li mark="daxing"><a id="qingyuan"  class="" href="/zhaofang/qingyuan/">清源</a></li>
																					<li mark="daxing"><a id="tongxingyuan"  class="" href="/zhaofang/tongxingyuan/">同兴园</a></li>
																					<li mark="daxing"><a id="xihongmen"  class="" href="/zhaofang/xihongmen/">西红门</a></li>
																					<li mark="daxing"><a id="xingfeng"  class="" href="/zhaofang/xingfeng/">兴丰</a></li>
																					<li mark="daxing"><a id="yinghaizhen"  class="" href="/zhaofang/yinghaizhen/">瀛海镇</a></li>
																					<li mark="daxing"><a id="yizhuang"  class="" href="/zhaofang/yizhuang/">亦庄</a></li>
																					<li mark="daxing"><a id="zaoyuan"  class="" href="/zhaofang/zaoyuan/">枣园</a></li>
																			</ul>
								</div>
							</div>
						</li>
											<li id="li_shunyi" mark="shunyi" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a href="/zhaofang/shunyi/"  class="" >顺义</a>
							<div class="pos-r pos_inline" style="display: none;" id="div_shunyi">
								<div class="" style="max-width: 300px; line-height: 20px;display: inline;">
									<i class="icon icon-list-top"></i>
								</div>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="shunyi"><a id="shunyi_quanbu" href="/zhaofang/shunyi/" class="text-specific">全部</a></li>
																					<li mark="shunyi"><a id="houshayu"  class="" href="/zhaofang/houshayu/">后沙峪</a></li>
																					<li mark="shunyi"><a id="jianxin"  class="" href="/zhaofang/jianxin/">建新</a></li>
																					<li mark="shunyi"><a id="shunyijichang"  class="" href="/zhaofang/shunyijichang/">顺义机场</a></li>
																					<li mark="shunyi"><a id="liqiao"  class="" href="/zhaofang/liqiao/">李桥</a></li>
																					<li mark="shunyi"><a id="mapo"  class="" href="/zhaofang/mapo/">马坡</a></li>
																					<li mark="shunyi"><a id="nancai"  class="" href="/zhaofang/nancai/">南彩</a></li>
																					<li mark="shunyi"><a id="shengli"  class="" href="/zhaofang/shengli/">胜利</a></li>
																					<li mark="shunyi"><a id="shimen"  class="" href="/zhaofang/shimen/">石门</a></li>
																					<li mark="shunyi"><a id="shiyuan"  class="" href="/zhaofang/shiyuan/">石园</a></li>
																					<li mark="shunyi"><a id="shunyichengqu"  class="" href="/zhaofang/shunyichengqu/">顺义城区</a></li>
																					<li mark="shunyi"><a id="tianzhu"  class="" href="/zhaofang/tianzhu/">天竺</a></li>
																					<li mark="shunyi"><a id="yangzhen"  class="" href="/zhaofang/yangzhen/">杨镇</a></li>
																					<li mark="shunyi"><a id="yulong"  class="" href="/zhaofang/yulong/">裕龙</a></li>
																					<li mark="shunyi"><a id="zhongyangbieshuqu"  class="" href="/zhaofang/zhongyangbieshuqu/">中央别墅区</a></li>
																			</ul>
								</div>
							</div>
						</li>
											<li id="li_miyun" mark="miyun" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a href="/zhaofang/miyun/"  class="" >密云</a>
							<div class="pos-r pos_inline" style="display: none;" id="div_miyun">
								<div class="" style="max-width: 300px; line-height: 20px;display: inline;">
									<i class="icon icon-list-top"></i>
								</div>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="miyun"><a id="miyun_quanbu" href="/zhaofang/miyun/" class="text-specific">全部</a></li>
																					<li mark="miyun"><a id="miyunchengqu"  class="" href="/zhaofang/miyunchengqu/">密云城区</a></li>
																					<li mark="miyun"><a id="bulaotun"  class="" href="/zhaofang/bulaotun/">不老屯</a></li>
																					<li mark="miyun"><a id="xiwengzhuang"  class="" href="/zhaofang/xiwengzhuang/">溪翁庄</a></li>
																					<li mark="miyun"><a id="miyunzhoubian"  class="" href="/zhaofang/miyunzhoubian/">密云周边</a></li>
																			</ul>
								</div>
							</div>
						</li>
											<li id="li_huairou" mark="huairou" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a href="/zhaofang/huairou/"  class="" >怀柔</a>
							<div class="pos-r pos_inline" style="display: none;" id="div_huairou">
								<div class="" style="max-width: 300px; line-height: 20px;display: inline;">
									<i class="icon icon-list-top"></i>
								</div>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="huairou"><a id="huairou_quanbu" href="/zhaofang/huairou/" class="text-specific">全部</a></li>
																					<li mark="huairou"><a id="yanqi"  class="" href="/zhaofang/yanqi/">雁栖</a></li>
																					<li mark="huairou"><a id="qiaozi"  class="" href="/zhaofang/qiaozi/">桥梓</a></li>
																					<li mark="huairou"><a id="huairouchengqu"  class="" href="/zhaofang/huairouchengqu/">怀柔城区</a></li>
																					<li mark="huairou"><a id="bohaizhen"  class="" href="/zhaofang/bohaizhen/">渤海镇</a></li>
																					<li mark="huairou"><a id="miaocheng"  class="" href="/zhaofang/miaocheng/">庙城</a></li>
																					<li mark="huairou"><a id="huairouzhoubian"  class="" href="/zhaofang/huairouzhoubian/">怀柔周边</a></li>
																			</ul>
								</div>
							</div>
						</li>
											<li id="li_yanqing" mark="yanqing" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a href="/zhaofang/yanqing/"  class="" >延庆</a>
							<div class="pos-r pos_inline" style="display: none;" id="div_yanqing">
								<div class="" style="max-width: 300px; line-height: 20px;display: inline;">
									<i class="icon icon-list-top"></i>
								</div>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="yanqing"><a id="yanqing_quanbu" href="/zhaofang/yanqing/" class="text-specific">全部</a></li>
																					<li mark="yanqing"><a id="yanqingchengqu"  class="" href="/zhaofang/yanqingchengqu/">延庆城区</a></li>
																					<li mark="yanqing"><a id="dayushu"  class="" href="/zhaofang/dayushu/">大榆树</a></li>
																					<li mark="yanqing"><a id="badaling"  class="" href="/zhaofang/badaling/">八达岭</a></li>
																					<li mark="yanqing"><a id="kangzhuang"  class="" href="/zhaofang/kangzhuang/">康庄</a></li>
																					<li mark="yanqing"><a id="yanqingzhoubian"  class="" href="/zhaofang/yanqingzhoubian/">延庆周边</a></li>
																			</ul>
								</div>
							</div>
						</li>
											<li id="li_pinggu" mark="pinggu" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a href="/zhaofang/pinggu/"  class="" >平谷</a>
							<div class="pos-r pos_inline" style="display: none;" id="div_pinggu">
								<div class="" style="max-width: 300px; line-height: 20px;display: inline;">
									<i class="icon icon-list-top"></i>
								</div>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="pinggu"><a id="pinggu_quanbu" href="/zhaofang/pinggu/" class="text-specific">全部</a></li>
																					<li mark="pinggu"><a id="jinhaihu"  class="" href="/zhaofang/jinhaihu/">金海湖</a></li>
																					<li mark="pinggu"><a id="binhe"  class="" href="/zhaofang/binhe/">滨河</a></li>
																					<li mark="pinggu"><a id="pingguchengqu"  class="" href="/zhaofang/pingguchengqu/">平谷城区</a></li>
																					<li mark="pinggu"><a id="xinggu"  class="" href="/zhaofang/xinggu/">兴谷</a></li>
																					<li mark="pinggu"><a id="yuyang"  class="" href="/zhaofang/yuyang/">渔阳</a></li>
																					<li mark="pinggu"><a id="wangxinzhuang"  class="" href="/zhaofang/wangxinzhuang/">王辛庄</a></li>
																					<li mark="pinggu"><a id="pingguzhoubian"  class="" href="/zhaofang/pingguzhoubian/">平谷周边</a></li>
																			</ul>
								</div>
							</div>
						</li>
											<li id="li_mentougou" mark="mentougou" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a href="/zhaofang/mentougou/"  class="" >门头沟</a>
							<div class="pos-r pos_inline" style="display: none;" id="div_mentougou">
								<div class="" style="max-width: 300px; line-height: 20px;display: inline;">
									<i class="icon icon-list-top"></i>
								</div>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="mentougou"><a id="mentougou_quanbu" href="/zhaofang/mentougou/" class="text-specific">全部</a></li>
																					<li mark="mentougou"><a id="dayu"  class="" href="/zhaofang/dayu/">大峪</a></li>
																					<li mark="mentougou"><a id="dongxinfang"  class="" href="/zhaofang/dongxinfang/">东辛房</a></li>
																					<li mark="mentougou"><a id="longquan"  class="" href="/zhaofang/longquan/">龙泉</a></li>
																					<li mark="mentougou"><a id="chengzijiedao"  class="" href="/zhaofang/chengzijiedao/">城子街道</a></li>
																					<li mark="mentougou"><a id="yongding"  class="" href="/zhaofang/yongding/">永定</a></li>
																					<li mark="mentougou"><a id="tanzhesi"  class="" href="/zhaofang/tanzhesi/">潭柘寺</a></li>
																					<li mark="mentougou"><a id="junzhuang"  class="" href="/zhaofang/junzhuang/">军庄</a></li>
																					<li mark="mentougou"><a id="mentougouzhoubian"  class="" href="/zhaofang/mentougouzhoubian/">门头沟周边</a></li>
																			</ul>
								</div>
							</div>
						</li>
									</ul>
            </dd>
        </dl>
		        <dl class="clearfix">
            <dt>地铁:</dt>
            <dd>
                <ul id="PBAsubway" class="line-list clearfix">
                    <li mark="地铁不限"><a href="/zhaofang/">不限</a></li>
											<li mark="1号线" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a  class=""  href="/zhaofang/d2200">1号线</a>

							<div class="pos-r pos_inline" style="display: none;" id="div_1号线">
								<i class="icon icon-list-top"></i>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="1号线"><a id="1号线_quanbu" href="/zhaofang/d2200" class="text-specific">全部</a></li>
																					<li mark="1号线"><a  class=""  id="苹果园" href="/zhaofang/d2201">苹果园</a></li>
																					<li mark="1号线"><a  class=""  id="古城" href="/zhaofang/d2202">古城</a></li>
																					<li mark="1号线"><a  class=""  id="八角游乐园" href="/zhaofang/d2203">八角游乐园</a></li>
																					<li mark="1号线"><a  class=""  id="八宝山" href="/zhaofang/d2204">八宝山</a></li>
																					<li mark="1号线"><a  class=""  id="玉泉路" href="/zhaofang/d2205">玉泉路</a></li>
																					<li mark="1号线"><a  class=""  id="五棵松" href="/zhaofang/d2206">五棵松</a></li>
																					<li mark="1号线"><a  class=""  id="万寿路" href="/zhaofang/d2207">万寿路</a></li>
																					<li mark="1号线"><a  class=""  id="公主坟" href="/zhaofang/d2208">公主坟</a></li>
																					<li mark="1号线"><a  class=""  id="军事博物馆" href="/zhaofang/d2209">军事博物馆</a></li>
																					<li mark="1号线"><a  class=""  id="木樨地" href="/zhaofang/d2210">木樨地</a></li>
																					<li mark="1号线"><a  class=""  id="南礼士路" href="/zhaofang/d2211">南礼士路</a></li>
																					<li mark="1号线"><a  class=""  id="复兴门" href="/zhaofang/d2212">复兴门</a></li>
																					<li mark="1号线"><a  class=""  id="西单" href="/zhaofang/d2213">西单</a></li>
																					<li mark="1号线"><a  class=""  id="天安门西" href="/zhaofang/d2214">天安门西</a></li>
																					<li mark="1号线"><a  class=""  id="天安门东" href="/zhaofang/d2215">天安门东</a></li>
																					<li mark="1号线"><a  class=""  id="王府井" href="/zhaofang/d2216">王府井</a></li>
																					<li mark="1号线"><a  class=""  id="东单" href="/zhaofang/d2217">东单</a></li>
																					<li mark="1号线"><a  class=""  id="建国门" href="/zhaofang/d2218">建国门</a></li>
																					<li mark="1号线"><a  class=""  id="永安里" href="/zhaofang/d2219">永安里</a></li>
																					<li mark="1号线"><a  class=""  id="国贸" href="/zhaofang/d2220">国贸</a></li>
																					<li mark="1号线"><a  class=""  id="大望路" href="/zhaofang/d2221">大望路</a></li>
																					<li mark="1号线"><a  class=""  id="四惠" href="/zhaofang/d2222">四惠</a></li>
																					<li mark="1号线"><a  class=""  id="四惠东" href="/zhaofang/d2223">四惠东</a></li>
																			</ul>
								</div>
							</div>

						</li>
											<li mark="2号线" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a  class=""  href="/zhaofang/d2300">2号线</a>

							<div class="pos-r pos_inline" style="display: none;" id="div_2号线">
								<i class="icon icon-list-top"></i>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="2号线"><a id="2号线_quanbu" href="/zhaofang/d2300" class="text-specific">全部</a></li>
																					<li mark="2号线"><a  class=""  id="西直门" href="/zhaofang/d2301">西直门</a></li>
																					<li mark="2号线"><a  class=""  id="车公庄" href="/zhaofang/d2302">车公庄</a></li>
																					<li mark="2号线"><a  class=""  id="阜成门" href="/zhaofang/d2303">阜成门</a></li>
																					<li mark="2号线"><a  class=""  id="复兴门" href="/zhaofang/d2304">复兴门</a></li>
																					<li mark="2号线"><a  class=""  id="长椿街" href="/zhaofang/d2305">长椿街</a></li>
																					<li mark="2号线"><a  class=""  id="宣武门" href="/zhaofang/d2306">宣武门</a></li>
																					<li mark="2号线"><a  class=""  id="和平门" href="/zhaofang/d2307">和平门</a></li>
																					<li mark="2号线"><a  class=""  id="前门" href="/zhaofang/d2308">前门</a></li>
																					<li mark="2号线"><a  class=""  id="崇文门" href="/zhaofang/d2309">崇文门</a></li>
																					<li mark="2号线"><a  class=""  id="北京站" href="/zhaofang/d2310">北京站</a></li>
																					<li mark="2号线"><a  class=""  id="建国门" href="/zhaofang/d2311">建国门</a></li>
																					<li mark="2号线"><a  class=""  id="朝阳门" href="/zhaofang/d2312">朝阳门</a></li>
																					<li mark="2号线"><a  class=""  id="东四十条" href="/zhaofang/d2313">东四十条</a></li>
																					<li mark="2号线"><a  class=""  id="东直门" href="/zhaofang/d2314">东直门</a></li>
																					<li mark="2号线"><a  class=""  id="雍和宫" href="/zhaofang/d2315">雍和宫</a></li>
																					<li mark="2号线"><a  class=""  id="安定门" href="/zhaofang/d2316">安定门</a></li>
																					<li mark="2号线"><a  class=""  id="鼓楼大街" href="/zhaofang/d2317">鼓楼大街</a></li>
																					<li mark="2号线"><a  class=""  id="积水潭" href="/zhaofang/d2318">积水潭</a></li>
																			</ul>
								</div>
							</div>

						</li>
											<li mark="4号线大兴线" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a  class=""  href="/zhaofang/d2400">4号线大兴线</a>

							<div class="pos-r pos_inline" style="display: none;" id="div_4号线大兴线">
								<i class="icon icon-list-top"></i>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="4号线大兴线"><a id="4号线大兴线_quanbu" href="/zhaofang/d2400" class="text-specific">全部</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="安河桥北" href="/zhaofang/d2401">安河桥北</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="北宫门" href="/zhaofang/d2402">北宫门</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="西苑" href="/zhaofang/d2403">西苑</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="圆明园" href="/zhaofang/d2404">圆明园</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="北京大学东门" href="/zhaofang/d2405">北京大学东门</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="中关村" href="/zhaofang/d2406">中关村</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="海淀黄庄" href="/zhaofang/d2407">海淀黄庄</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="人民大学" href="/zhaofang/d2408">人民大学</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="魏公村" href="/zhaofang/d2409">魏公村</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="国家图书馆" href="/zhaofang/d2410">国家图书馆</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="动物园" href="/zhaofang/d2411">动物园</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="西直门" href="/zhaofang/d2412">西直门</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="新街口" href="/zhaofang/d2413">新街口</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="平安里" href="/zhaofang/d2414">平安里</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="西四" href="/zhaofang/d2415">西四</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="灵境胡同" href="/zhaofang/d2416">灵境胡同</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="西单" href="/zhaofang/d2417">西单</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="宣武门" href="/zhaofang/d2418">宣武门</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="菜市口" href="/zhaofang/d2419">菜市口</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="陶然亭" href="/zhaofang/d2420">陶然亭</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="北京南站" href="/zhaofang/d2421">北京南站</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="马家堡" href="/zhaofang/d2422">马家堡</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="角门西" href="/zhaofang/d2423">角门西</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="公益西桥" href="/zhaofang/d2424">公益西桥</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="新宫" href="/zhaofang/d2425">新宫</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="西红门" href="/zhaofang/d2426">西红门</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="高米店北" href="/zhaofang/d2427">高米店北</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="高米店南" href="/zhaofang/d2428">高米店南</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="枣园" href="/zhaofang/d2429">枣园</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="清源路" href="/zhaofang/d2430">清源路</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="黄村西大街" href="/zhaofang/d2431">黄村西大街</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="黄村火车站" href="/zhaofang/d2432">黄村火车站</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="义和庄" href="/zhaofang/d2433">义和庄</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="生物医药基地" href="/zhaofang/d2434">生物医药基地</a></li>
																					<li mark="4号线大兴线"><a  class=""  id="天宫院" href="/zhaofang/d2435">天宫院</a></li>
																			</ul>
								</div>
							</div>

						</li>
											<li mark="5号线" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a  class=""  href="/zhaofang/d2500">5号线</a>

							<div class="pos-r pos_inline" style="display: none;" id="div_5号线">
								<i class="icon icon-list-top"></i>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="5号线"><a id="5号线_quanbu" href="/zhaofang/d2500" class="text-specific">全部</a></li>
																					<li mark="5号线"><a  class=""  id="天通苑北" href="/zhaofang/d2501">天通苑北</a></li>
																					<li mark="5号线"><a  class=""  id="天通苑" href="/zhaofang/d2502">天通苑</a></li>
																					<li mark="5号线"><a  class=""  id="天通苑南" href="/zhaofang/d2503">天通苑南</a></li>
																					<li mark="5号线"><a  class=""  id="立水桥" href="/zhaofang/d2504">立水桥</a></li>
																					<li mark="5号线"><a  class=""  id="立水桥南" href="/zhaofang/d2505">立水桥南</a></li>
																					<li mark="5号线"><a  class=""  id="北苑路北" href="/zhaofang/d2506">北苑路北</a></li>
																					<li mark="5号线"><a  class=""  id="大屯路东" href="/zhaofang/d2507">大屯路东</a></li>
																					<li mark="5号线"><a  class=""  id="惠新西街北口" href="/zhaofang/d2508">惠新西街北口</a></li>
																					<li mark="5号线"><a  class=""  id="惠新西街南口" href="/zhaofang/d2509">惠新西街南口</a></li>
																					<li mark="5号线"><a  class=""  id="和平西桥" href="/zhaofang/d2510">和平西桥</a></li>
																					<li mark="5号线"><a  class=""  id="和平里北街" href="/zhaofang/d2511">和平里北街</a></li>
																					<li mark="5号线"><a  class=""  id="雍和宫" href="/zhaofang/d2512">雍和宫</a></li>
																					<li mark="5号线"><a  class=""  id="北新桥" href="/zhaofang/d2513">北新桥</a></li>
																					<li mark="5号线"><a  class=""  id="张自忠路" href="/zhaofang/d2514">张自忠路</a></li>
																					<li mark="5号线"><a  class=""  id="东四" href="/zhaofang/d2515">东四</a></li>
																					<li mark="5号线"><a  class=""  id="灯市口" href="/zhaofang/d2516">灯市口</a></li>
																					<li mark="5号线"><a  class=""  id="东单" href="/zhaofang/d2517">东单</a></li>
																					<li mark="5号线"><a  class=""  id="崇文门" href="/zhaofang/d2518">崇文门</a></li>
																					<li mark="5号线"><a  class=""  id="磁器口" href="/zhaofang/d2519">磁器口</a></li>
																					<li mark="5号线"><a  class=""  id="天坛东门" href="/zhaofang/d2520">天坛东门</a></li>
																					<li mark="5号线"><a  class=""  id="蒲黄榆" href="/zhaofang/d2521">蒲黄榆</a></li>
																					<li mark="5号线"><a  class=""  id="刘家窑" href="/zhaofang/d2522">刘家窑</a></li>
																					<li mark="5号线"><a  class=""  id="宋家庄" href="/zhaofang/d2523">宋家庄</a></li>
																			</ul>
								</div>
							</div>

						</li>
											<li mark="6号线" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a  class=""  href="/zhaofang/d2600">6号线</a>

							<div class="pos-r pos_inline" style="display: none;" id="div_6号线">
								<i class="icon icon-list-top"></i>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="6号线"><a id="6号线_quanbu" href="/zhaofang/d2600" class="text-specific">全部</a></li>
																					<li mark="6号线"><a  class=""  id="海淀五路居" href="/zhaofang/d2601">海淀五路居</a></li>
																					<li mark="6号线"><a  class=""  id="慈寿寺" href="/zhaofang/d2602">慈寿寺</a></li>
																					<li mark="6号线"><a  class=""  id="花园桥" href="/zhaofang/d2603">花园桥</a></li>
																					<li mark="6号线"><a  class=""  id="白石桥南" href="/zhaofang/d2604">白石桥南</a></li>
																					<li mark="6号线"><a  class=""  id="车公庄西" href="/zhaofang/d2605">车公庄西</a></li>
																					<li mark="6号线"><a  class=""  id="车公庄" href="/zhaofang/d2606">车公庄</a></li>
																					<li mark="6号线"><a  class=""  id="平安里" href="/zhaofang/d2607">平安里</a></li>
																					<li mark="6号线"><a  class=""  id="北海北" href="/zhaofang/d2608">北海北</a></li>
																					<li mark="6号线"><a  class=""  id="南锣鼓巷" href="/zhaofang/d2609">南锣鼓巷</a></li>
																					<li mark="6号线"><a  class=""  id="东四" href="/zhaofang/d2610">东四</a></li>
																					<li mark="6号线"><a  class=""  id="朝阳门" href="/zhaofang/d2611">朝阳门</a></li>
																					<li mark="6号线"><a  class=""  id="东大桥" href="/zhaofang/d2612">东大桥</a></li>
																					<li mark="6号线"><a  class=""  id="呼家楼" href="/zhaofang/d2613">呼家楼</a></li>
																					<li mark="6号线"><a  class=""  id="金台路" href="/zhaofang/d2614">金台路</a></li>
																					<li mark="6号线"><a  class=""  id="十里堡" href="/zhaofang/d2615">十里堡</a></li>
																					<li mark="6号线"><a  class=""  id="青年路" href="/zhaofang/d2616">青年路</a></li>
																					<li mark="6号线"><a  class=""  id="褡裢坡" href="/zhaofang/d2617">褡裢坡</a></li>
																					<li mark="6号线"><a  class=""  id="黄渠" href="/zhaofang/d2618">黄渠</a></li>
																					<li mark="6号线"><a  class=""  id="常营" href="/zhaofang/d2619">常营</a></li>
																					<li mark="6号线"><a  class=""  id="草房" href="/zhaofang/d2620">草房</a></li>
																					<li mark="6号线"><a  class=""  id="物资学院路" href="/zhaofang/d2621">物资学院路</a></li>
																					<li mark="6号线"><a  class=""  id="通州北关" href="/zhaofang/d2622">通州北关</a></li>
																					<li mark="6号线"><a  class=""  id="北运河西" href="/zhaofang/d2623">北运河西</a></li>
																					<li mark="6号线"><a  class=""  id="郝家府" href="/zhaofang/d2624">郝家府</a></li>
																					<li mark="6号线"><a  class=""  id="东夏园" href="/zhaofang/d2625">东夏园</a></li>
																					<li mark="6号线"><a  class=""  id="潞城" href="/zhaofang/d2626">潞城</a></li>
																			</ul>
								</div>
							</div>

						</li>
											<li mark="8号线" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a  class=""  href="/zhaofang/d2700">8号线</a>

							<div class="pos-r pos_inline" style="display: none;" id="div_8号线">
								<i class="icon icon-list-top"></i>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="8号线"><a id="8号线_quanbu" href="/zhaofang/d2700" class="text-specific">全部</a></li>
																					<li mark="8号线"><a  class=""  id="朱辛庄" href="/zhaofang/d2701">朱辛庄</a></li>
																					<li mark="8号线"><a  class=""  id="育知路" href="/zhaofang/d2702">育知路</a></li>
																					<li mark="8号线"><a  class=""  id="平西府" href="/zhaofang/d2703">平西府</a></li>
																					<li mark="8号线"><a  class=""  id="回龙观东大街" href="/zhaofang/d2704">回龙观东大街</a></li>
																					<li mark="8号线"><a  class=""  id="霍营" href="/zhaofang/d2705">霍营</a></li>
																					<li mark="8号线"><a  class=""  id="育新" href="/zhaofang/d2706">育新</a></li>
																					<li mark="8号线"><a  class=""  id="西小口" href="/zhaofang/d2707">西小口</a></li>
																					<li mark="8号线"><a  class=""  id="永泰庄" href="/zhaofang/d2708">永泰庄</a></li>
																					<li mark="8号线"><a  class=""  id="林萃桥" href="/zhaofang/d2709">林萃桥</a></li>
																					<li mark="8号线"><a  class=""  id="森林公园南门" href="/zhaofang/d2710">森林公园南门</a></li>
																					<li mark="8号线"><a  class=""  id="奥林匹克公园" href="/zhaofang/d2711">奥林匹克公园</a></li>
																					<li mark="8号线"><a  class=""  id="奥体中心" href="/zhaofang/d2712">奥体中心</a></li>
																					<li mark="8号线"><a  class=""  id="北土城" href="/zhaofang/d2713">北土城</a></li>
																					<li mark="8号线"><a  class=""  id="安华桥" href="/zhaofang/d2714">安华桥</a></li>
																					<li mark="8号线"><a  class=""  id="鼓楼大街" href="/zhaofang/d2715">鼓楼大街</a></li>
																					<li mark="8号线"><a  class=""  id="什刹海" href="/zhaofang/d2716">什刹海</a></li>
																					<li mark="8号线"><a  class=""  id="南锣鼓巷" href="/zhaofang/d2717">南锣鼓巷</a></li>
																			</ul>
								</div>
							</div>

						</li>
											<li mark="10号线" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a  class=""  href="/zhaofang/d2800">10号线</a>

							<div class="pos-r pos_inline" style="display: none;" id="div_10号线">
								<i class="icon icon-list-top"></i>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="10号线"><a id="10号线_quanbu" href="/zhaofang/d2800" class="text-specific">全部</a></li>
																					<li mark="10号线"><a  class=""  id="车道沟" href="/zhaofang/d2801">车道沟</a></li>
																					<li mark="10号线"><a  class=""  id="长春桥" href="/zhaofang/d2802">长春桥</a></li>
																					<li mark="10号线"><a  class=""  id="火器营" href="/zhaofang/d2803">火器营</a></li>
																					<li mark="10号线"><a  class=""  id="巴沟" href="/zhaofang/d2804">巴沟</a></li>
																					<li mark="10号线"><a  class=""  id="苏州街" href="/zhaofang/d2805">苏州街</a></li>
																					<li mark="10号线"><a  class=""  id="海淀黄庄" href="/zhaofang/d2806">海淀黄庄</a></li>
																					<li mark="10号线"><a  class=""  id="知春里" href="/zhaofang/d2807">知春里</a></li>
																					<li mark="10号线"><a  class=""  id="知春路" href="/zhaofang/d2808">知春路</a></li>
																					<li mark="10号线"><a  class=""  id="西土城" href="/zhaofang/d2809">西土城</a></li>
																					<li mark="10号线"><a  class=""  id="牡丹园" href="/zhaofang/d2810">牡丹园</a></li>
																					<li mark="10号线"><a  class=""  id="健德门" href="/zhaofang/d2811">健德门</a></li>
																					<li mark="10号线"><a  class=""  id="北土城" href="/zhaofang/d2812">北土城</a></li>
																					<li mark="10号线"><a  class=""  id="安贞门" href="/zhaofang/d2813">安贞门</a></li>
																					<li mark="10号线"><a  class=""  id="惠新西街南口" href="/zhaofang/d2814">惠新西街南口</a></li>
																					<li mark="10号线"><a  class=""  id="芍药居" href="/zhaofang/d2815">芍药居</a></li>
																					<li mark="10号线"><a  class=""  id="太阳宫" href="/zhaofang/d2816">太阳宫</a></li>
																					<li mark="10号线"><a  class=""  id="三元桥" href="/zhaofang/d2817">三元桥</a></li>
																					<li mark="10号线"><a  class=""  id="亮马桥" href="/zhaofang/d2818">亮马桥</a></li>
																					<li mark="10号线"><a  class=""  id="农业展览馆" href="/zhaofang/d2819">农业展览馆</a></li>
																					<li mark="10号线"><a  class=""  id="团结湖" href="/zhaofang/d2820">团结湖</a></li>
																					<li mark="10号线"><a  class=""  id="呼家楼" href="/zhaofang/d2821">呼家楼</a></li>
																					<li mark="10号线"><a  class=""  id="金台夕照" href="/zhaofang/d2822">金台夕照</a></li>
																					<li mark="10号线"><a  class=""  id="国贸" href="/zhaofang/d2823">国贸</a></li>
																					<li mark="10号线"><a  class=""  id="双井" href="/zhaofang/d2824">双井</a></li>
																					<li mark="10号线"><a  class=""  id="劲松" href="/zhaofang/d2825">劲松</a></li>
																					<li mark="10号线"><a  class=""  id="潘家园" href="/zhaofang/d2826">潘家园</a></li>
																					<li mark="10号线"><a  class=""  id="十里河" href="/zhaofang/d2827">十里河</a></li>
																					<li mark="10号线"><a  class=""  id="分钟寺" href="/zhaofang/d2828">分钟寺</a></li>
																					<li mark="10号线"><a  class=""  id="成寿寺" href="/zhaofang/d2829">成寿寺</a></li>
																					<li mark="10号线"><a  class=""  id="宋家庄" href="/zhaofang/d2830">宋家庄</a></li>
																					<li mark="10号线"><a  class=""  id="石榴庄" href="/zhaofang/d2831">石榴庄</a></li>
																					<li mark="10号线"><a  class=""  id="大红门" href="/zhaofang/d2832">大红门</a></li>
																					<li mark="10号线"><a  class=""  id="角门西" href="/zhaofang/d2833">角门西</a></li>
																					<li mark="10号线"><a  class=""  id="草桥" href="/zhaofang/d2834">草桥</a></li>
																					<li mark="10号线"><a  class=""  id="纪家庙" href="/zhaofang/d2835">纪家庙</a></li>
																					<li mark="10号线"><a  class=""  id="首经贸" href="/zhaofang/d2836">首经贸</a></li>
																					<li mark="10号线"><a  class=""  id="西局" href="/zhaofang/d2837">西局</a></li>
																					<li mark="10号线"><a  class=""  id="六里桥" href="/zhaofang/d2838">六里桥</a></li>
																					<li mark="10号线"><a  class=""  id="莲花桥" href="/zhaofang/d2839">莲花桥</a></li>
																					<li mark="10号线"><a  class=""  id="公主坟" href="/zhaofang/d2840">公主坟</a></li>
																					<li mark="10号线"><a  class=""  id="西钓鱼台" href="/zhaofang/d2841">西钓鱼台</a></li>
																					<li mark="10号线"><a  class=""  id="慈寿寺" href="/zhaofang/d2842">慈寿寺</a></li>
																			</ul>
								</div>
							</div>

						</li>
											<li mark="13号线" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a  class=""  href="/zhaofang/d2900">13号线</a>

							<div class="pos-r pos_inline" style="display: none;" id="div_13号线">
								<i class="icon icon-list-top"></i>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="13号线"><a id="13号线_quanbu" href="/zhaofang/d2900" class="text-specific">全部</a></li>
																					<li mark="13号线"><a  class=""  id="西直门" href="/zhaofang/d2901">西直门</a></li>
																					<li mark="13号线"><a  class=""  id="大钟寺" href="/zhaofang/d2902">大钟寺</a></li>
																					<li mark="13号线"><a  class=""  id="知春路" href="/zhaofang/d2903">知春路</a></li>
																					<li mark="13号线"><a  class=""  id="五道口" href="/zhaofang/d2904">五道口</a></li>
																					<li mark="13号线"><a  class=""  id="上地" href="/zhaofang/d2905">上地</a></li>
																					<li mark="13号线"><a  class=""  id="西二旗" href="/zhaofang/d2906">西二旗</a></li>
																					<li mark="13号线"><a  class=""  id="龙泽" href="/zhaofang/d2907">龙泽</a></li>
																					<li mark="13号线"><a  class=""  id="回龙观" href="/zhaofang/d2908">回龙观</a></li>
																					<li mark="13号线"><a  class=""  id="霍营" href="/zhaofang/d2909">霍营</a></li>
																					<li mark="13号线"><a  class=""  id="立水桥" href="/zhaofang/d2910">立水桥</a></li>
																					<li mark="13号线"><a  class=""  id="北苑" href="/zhaofang/d2911">北苑</a></li>
																					<li mark="13号线"><a  class=""  id="望京西" href="/zhaofang/d2912">望京西</a></li>
																					<li mark="13号线"><a  class=""  id="芍药居" href="/zhaofang/d2913">芍药居</a></li>
																					<li mark="13号线"><a  class=""  id="光熙门" href="/zhaofang/d2914">光熙门</a></li>
																					<li mark="13号线"><a  class=""  id="柳芳" href="/zhaofang/d2915">柳芳</a></li>
																					<li mark="13号线"><a  class=""  id="东直门" href="/zhaofang/d2916">东直门</a></li>
																			</ul>
								</div>
							</div>

						</li>
											<li mark="14号线西段" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a  class=""  href="/zhaofang/d3000">14号线西段</a>

							<div class="pos-r pos_inline" style="display: none;" id="div_14号线西段">
								<i class="icon icon-list-top"></i>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="14号线西段"><a id="14号线西段_quanbu" href="/zhaofang/d3000" class="text-specific">全部</a></li>
																					<li mark="14号线西段"><a  class=""  id="张郭庄" href="/zhaofang/d3001">张郭庄</a></li>
																					<li mark="14号线西段"><a  class=""  id="园博园" href="/zhaofang/d3002">园博园</a></li>
																					<li mark="14号线西段"><a  class=""  id="大瓦窑" href="/zhaofang/d3003">大瓦窑</a></li>
																					<li mark="14号线西段"><a  class=""  id="郭庄子" href="/zhaofang/d3004">郭庄子</a></li>
																					<li mark="14号线西段"><a  class=""  id="大井" href="/zhaofang/d3005">大井</a></li>
																					<li mark="14号线西段"><a  class=""  id="七里庄" href="/zhaofang/d3006">七里庄</a></li>
																					<li mark="14号线西段"><a  class=""  id="西局" href="/zhaofang/d3007">西局</a></li>
																			</ul>
								</div>
							</div>

						</li>
											<li mark="15号线" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a  class=""  href="/zhaofang/d3100">15号线</a>

							<div class="pos-r pos_inline" style="display: none;" id="div_15号线">
								<i class="icon icon-list-top"></i>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="15号线"><a id="15号线_quanbu" href="/zhaofang/d3100" class="text-specific">全部</a></li>
																					<li mark="15号线"><a  class=""  id="俸伯" href="/zhaofang/d3101">俸伯</a></li>
																					<li mark="15号线"><a  class=""  id="顺义" href="/zhaofang/d3102">顺义</a></li>
																					<li mark="15号线"><a  class=""  id="石门" href="/zhaofang/d3103">石门</a></li>
																					<li mark="15号线"><a  class=""  id="南法信" href="/zhaofang/d3104">南法信</a></li>
																					<li mark="15号线"><a  class=""  id="后沙峪" href="/zhaofang/d3105">后沙峪</a></li>
																					<li mark="15号线"><a  class=""  id="花梨坎" href="/zhaofang/d3106">花梨坎</a></li>
																					<li mark="15号线"><a  class=""  id="国展" href="/zhaofang/d3107">国展</a></li>
																					<li mark="15号线"><a  class=""  id="孙河" href="/zhaofang/d3108">孙河</a></li>
																					<li mark="15号线"><a  class=""  id="马泉营" href="/zhaofang/d3109">马泉营</a></li>
																					<li mark="15号线"><a  class=""  id="崔各庄" href="/zhaofang/d3110">崔各庄</a></li>
																					<li mark="15号线"><a  class=""  id="望京" href="/zhaofang/d3111">望京</a></li>
																					<li mark="15号线"><a  class=""  id="望京西" href="/zhaofang/d3112">望京西</a></li>
																					<li mark="15号线"><a  class=""  id="关庄" href="/zhaofang/d3113">关庄</a></li>
																					<li mark="15号线"><a  class=""  id="安立路" href="/zhaofang/d3114">安立路</a></li>
																					<li mark="15号线"><a  class=""  id="奥林匹克公园" href="/zhaofang/d3115">奥林匹克公园</a></li>
																					<li mark="15号线"><a  class=""  id="北沙滩" href="/zhaofang/d3116">北沙滩</a></li>
																					<li mark="15号线"><a  class=""  id="六道口" href="/zhaofang/d3117">六道口</a></li>
																					<li mark="15号线"><a  class=""  id="清华东路西口" href="/zhaofang/d3118">清华东路西口</a></li>
																			</ul>
								</div>
							</div>

						</li>
											<li mark="八通线" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a  class=""  href="/zhaofang/d3200">八通线</a>

							<div class="pos-r pos_inline" style="display: none;" id="div_八通线">
								<i class="icon icon-list-top"></i>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="八通线"><a id="八通线_quanbu" href="/zhaofang/d3200" class="text-specific">全部</a></li>
																					<li mark="八通线"><a  class=""  id="四惠" href="/zhaofang/d3201">四惠</a></li>
																					<li mark="八通线"><a  class=""  id="四惠东" href="/zhaofang/d3202">四惠东</a></li>
																					<li mark="八通线"><a  class=""  id="高碑店" href="/zhaofang/d3203">高碑店</a></li>
																					<li mark="八通线"><a  class=""  id="传媒大学" href="/zhaofang/d3204">传媒大学</a></li>
																					<li mark="八通线"><a  class=""  id="双桥" href="/zhaofang/d3205">双桥</a></li>
																					<li mark="八通线"><a  class=""  id="管庄" href="/zhaofang/d3206">管庄</a></li>
																					<li mark="八通线"><a  class=""  id="八里桥" href="/zhaofang/d3207">八里桥</a></li>
																					<li mark="八通线"><a  class=""  id="通州北苑" href="/zhaofang/d3208">通州北苑</a></li>
																					<li mark="八通线"><a  class=""  id="果园" href="/zhaofang/d3209">果园</a></li>
																					<li mark="八通线"><a  class=""  id="九棵树" href="/zhaofang/d3210">九棵树</a></li>
																					<li mark="八通线"><a  class=""  id="梨园" href="/zhaofang/d3211">梨园</a></li>
																					<li mark="八通线"><a  class=""  id="临河里" href="/zhaofang/d3212">临河里</a></li>
																					<li mark="八通线"><a  class=""  id="土桥" href="/zhaofang/d3213">土桥</a></li>
																			</ul>
								</div>
							</div>

						</li>
											<li mark="机场线" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a  class=""  href="/zhaofang/d3300">机场线</a>

							<div class="pos-r pos_inline" style="display: none;" id="div_机场线">
								<i class="icon icon-list-top"></i>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="机场线"><a id="机场线_quanbu" href="/zhaofang/d3300" class="text-specific">全部</a></li>
																					<li mark="机场线"><a  class=""  id="东直门" href="/zhaofang/d3301">东直门</a></li>
																					<li mark="机场线"><a  class=""  id="三元桥" href="/zhaofang/d3302">三元桥</a></li>
																					<li mark="机场线"><a  class=""  id="T3航站楼" href="/zhaofang/d3303">T3航站楼</a></li>
																					<li mark="机场线"><a  class=""  id="T2航站楼" href="/zhaofang/d3304">T2航站楼</a></li>
																			</ul>
								</div>
							</div>

						</li>
											<li mark="昌平线" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a  class=""  href="/zhaofang/d3400">昌平线</a>

							<div class="pos-r pos_inline" style="display: none;" id="div_昌平线">
								<i class="icon icon-list-top"></i>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="昌平线"><a id="昌平线_quanbu" href="/zhaofang/d3400" class="text-specific">全部</a></li>
																					<li mark="昌平线"><a  class=""  id="南邵" href="/zhaofang/d3401">南邵</a></li>
																					<li mark="昌平线"><a  class=""  id="沙河高教园" href="/zhaofang/d3402">沙河高教园</a></li>
																					<li mark="昌平线"><a  class=""  id="沙河" href="/zhaofang/d3403">沙河</a></li>
																					<li mark="昌平线"><a  class=""  id="巩华城" href="/zhaofang/d3404">巩华城</a></li>
																					<li mark="昌平线"><a  class=""  id="朱辛庄" href="/zhaofang/d3405">朱辛庄</a></li>
																					<li mark="昌平线"><a  class=""  id="生命科学园" href="/zhaofang/d3406">生命科学园</a></li>
																					<li mark="昌平线"><a  class=""  id="西二旗" href="/zhaofang/d3407">西二旗</a></li>
																					<li mark="昌平线"><a  class=""  id="北邵洼" href="/zhaofang/d3408">北邵洼</a></li>
																					<li mark="昌平线"><a  class=""  id="昌平东关" href="/zhaofang/d3409">昌平东关</a></li>
																					<li mark="昌平线"><a  class=""  id="昌平" href="/zhaofang/d3410">昌平</a></li>
																					<li mark="昌平线"><a  class=""  id="十三陵景区" href="/zhaofang/d3411">十三陵景区</a></li>
																					<li mark="昌平线"><a  class=""  id="昌平西山口" href="/zhaofang/d3412">昌平西山口</a></li>
																			</ul>
								</div>
							</div>

						</li>
											<li mark="亦庄线" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a  class=""  href="/zhaofang/d3500">亦庄线</a>

							<div class="pos-r pos_inline" style="display: none;" id="div_亦庄线">
								<i class="icon icon-list-top"></i>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="亦庄线"><a id="亦庄线_quanbu" href="/zhaofang/d3500" class="text-specific">全部</a></li>
																					<li mark="亦庄线"><a  class=""  id="宋家庄" href="/zhaofang/d3501">宋家庄</a></li>
																					<li mark="亦庄线"><a  class=""  id="肖村" href="/zhaofang/d3502">肖村</a></li>
																					<li mark="亦庄线"><a  class=""  id="小红门" href="/zhaofang/d3503">小红门</a></li>
																					<li mark="亦庄线"><a  class=""  id="旧宫" href="/zhaofang/d3504">旧宫</a></li>
																					<li mark="亦庄线"><a  class=""  id="亦庄桥" href="/zhaofang/d3505">亦庄桥</a></li>
																					<li mark="亦庄线"><a  class=""  id="亦庄文化园" href="/zhaofang/d3506">亦庄文化园</a></li>
																					<li mark="亦庄线"><a  class=""  id="万源街" href="/zhaofang/d3507">万源街</a></li>
																					<li mark="亦庄线"><a  class=""  id="荣京东街" href="/zhaofang/d3508">荣京东街</a></li>
																					<li mark="亦庄线"><a  class=""  id="荣昌东街" href="/zhaofang/d3509">荣昌东街</a></li>
																					<li mark="亦庄线"><a  class=""  id="同济南路" href="/zhaofang/d3510">同济南路</a></li>
																					<li mark="亦庄线"><a  class=""  id="经海路" href="/zhaofang/d3511">经海路</a></li>
																					<li mark="亦庄线"><a  class=""  id="次渠南" href="/zhaofang/d3512">次渠南</a></li>
																					<li mark="亦庄线"><a  class=""  id="次渠" href="/zhaofang/d3513">次渠</a></li>
																			</ul>
								</div>
							</div>

						</li>
											<li mark="房山线" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a  class=""  href="/zhaofang/d3600">房山线</a>

							<div class="pos-r pos_inline" style="display: none;" id="div_房山线">
								<i class="icon icon-list-top"></i>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="房山线"><a id="房山线_quanbu" href="/zhaofang/d3600" class="text-specific">全部</a></li>
																					<li mark="房山线"><a  class=""  id="苏庄" href="/zhaofang/d3601">苏庄</a></li>
																					<li mark="房山线"><a  class=""  id="良乡南关" href="/zhaofang/d3602">良乡南关</a></li>
																					<li mark="房山线"><a  class=""  id="良乡大学城西" href="/zhaofang/d3603">良乡大学城西</a></li>
																					<li mark="房山线"><a  class=""  id="良乡大学城" href="/zhaofang/d3604">良乡大学城</a></li>
																					<li mark="房山线"><a  class=""  id="良乡大学城北" href="/zhaofang/d3605">良乡大学城北</a></li>
																					<li mark="房山线"><a  class=""  id="广阳城" href="/zhaofang/d3606">广阳城</a></li>
																					<li mark="房山线"><a  class=""  id="篱笆房" href="/zhaofang/d3607">篱笆房</a></li>
																					<li mark="房山线"><a  class=""  id="长阳" href="/zhaofang/d3608">长阳</a></li>
																					<li mark="房山线"><a  class=""  id="稻田" href="/zhaofang/d3609">稻田</a></li>
																					<li mark="房山线"><a  class=""  id="大葆台" href="/zhaofang/d3610">大葆台</a></li>
																					<li mark="房山线"><a  class=""  id="郭公庄" href="/zhaofang/d3611">郭公庄</a></li>
																			</ul>
								</div>
							</div>

						</li>
											<li mark="14号线东段" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a  class=""  href="/zhaofang/d3700">14号线东段</a>

							<div class="pos-r pos_inline" style="display: none;" id="div_14号线东段">
								<i class="icon icon-list-top"></i>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="14号线东段"><a id="14号线东段_quanbu" href="/zhaofang/d3700" class="text-specific">全部</a></li>
																					<li mark="14号线东段"><a  class=""  id="善各庄" href="/zhaofang/d3701">善各庄</a></li>
																					<li mark="14号线东段"><a  class=""  id="来广营" href="/zhaofang/d3702">来广营</a></li>
																					<li mark="14号线东段"><a  class=""  id="东湖渠" href="/zhaofang/d3703">东湖渠</a></li>
																					<li mark="14号线东段"><a  class=""  id="望京" href="/zhaofang/d3704">望京</a></li>
																					<li mark="14号线东段"><a  class=""  id="阜通" href="/zhaofang/d3705">阜通</a></li>
																					<li mark="14号线东段"><a  class=""  id="望京南" href="/zhaofang/d3706">望京南</a></li>
																					<li mark="14号线东段"><a  class=""  id="将台" href="/zhaofang/d3707">将台</a></li>
																					<li mark="14号线东段"><a  class=""  id="东风北桥" href="/zhaofang/d3708">东风北桥</a></li>
																					<li mark="14号线东段"><a  class=""  id="枣营" href="/zhaofang/d3709">枣营</a></li>
																					<li mark="14号线东段"><a  class=""  id="金台路" href="/zhaofang/d3710">金台路</a></li>
																			</ul>
								</div>
							</div>

						</li>
											<li mark="7号线" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a  class=""  href="/zhaofang/d3800">7号线</a>

							<div class="pos-r pos_inline" style="display: none;" id="div_7号线">
								<i class="icon icon-list-top"></i>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="7号线"><a id="7号线_quanbu" href="/zhaofang/d3800" class="text-specific">全部</a></li>
																					<li mark="7号线"><a  class=""  id="北京西站" href="/zhaofang/d3801">北京西站</a></li>
																					<li mark="7号线"><a  class=""  id="湾子" href="/zhaofang/d3802">湾子</a></li>
																					<li mark="7号线"><a  class=""  id="达官营" href="/zhaofang/d3803">达官营</a></li>
																					<li mark="7号线"><a  class=""  id="广安门内" href="/zhaofang/d3804">广安门内</a></li>
																					<li mark="7号线"><a  class=""  id="菜市口" href="/zhaofang/d3805">菜市口</a></li>
																					<li mark="7号线"><a  class=""  id="虎坊桥" href="/zhaofang/d3806">虎坊桥</a></li>
																					<li mark="7号线"><a  class=""  id="珠市口" href="/zhaofang/d3807">珠市口</a></li>
																					<li mark="7号线"><a  class=""  id="桥湾" href="/zhaofang/d3808">桥湾</a></li>
																					<li mark="7号线"><a  class=""  id="磁器口" href="/zhaofang/d3809">磁器口</a></li>
																					<li mark="7号线"><a  class=""  id="广渠门内" href="/zhaofang/d3810">广渠门内</a></li>
																					<li mark="7号线"><a  class=""  id="广渠门外" href="/zhaofang/d3811">广渠门外</a></li>
																					<li mark="7号线"><a  class=""  id="九龙山" href="/zhaofang/d3812">九龙山</a></li>
																					<li mark="7号线"><a  class=""  id="大郊亭" href="/zhaofang/d3813">大郊亭</a></li>
																					<li mark="7号线"><a  class=""  id="百子湾" href="/zhaofang/d3814">百子湾</a></li>
																					<li mark="7号线"><a  class=""  id="化工" href="/zhaofang/d3815">化工</a></li>
																					<li mark="7号线"><a  class=""  id="南楼梓庄" href="/zhaofang/d3816">南楼梓庄</a></li>
																					<li mark="7号线"><a  class=""  id="欢乐谷景区" href="/zhaofang/d3817">欢乐谷景区</a></li>
																					<li mark="7号线"><a  class=""  id="双合" href="/zhaofang/d3818">双合</a></li>
																					<li mark="7号线"><a  class=""  id="焦化厂" href="/zhaofang/d3819">焦化厂</a></li>
																			</ul>
								</div>
							</div>

						</li>
											<li mark="9号线" onmouseout="javascript:hidenInlineDiv(this);" onmouseover="javascript:showInlineDiv(this);">
							<a  class=""  href="/zhaofang/d3900">9号线</a>

							<div class="pos-r pos_inline" style="display: none;" id="div_9号线">
								<i class="icon icon-list-top"></i>
								<div class="down-list" style="text-align: center;">
									<ul class="pop-list clearfix">
										<li mark="9号线"><a id="9号线_quanbu" href="/zhaofang/d3900" class="text-specific">全部</a></li>
																					<li mark="9号线"><a  class=""  id="国家图书馆" href="/zhaofang/d3901">国家图书馆</a></li>
																					<li mark="9号线"><a  class=""  id="白石桥南" href="/zhaofang/d3902">白石桥南</a></li>
																					<li mark="9号线"><a  class=""  id="白堆子" href="/zhaofang/d3903">白堆子</a></li>
																					<li mark="9号线"><a  class=""  id="军事博物馆" href="/zhaofang/d3904">军事博物馆</a></li>
																					<li mark="9号线"><a  class=""  id="北京西站" href="/zhaofang/d3905">北京西站</a></li>
																					<li mark="9号线"><a  class=""  id="六里桥东" href="/zhaofang/d3906">六里桥东</a></li>
																					<li mark="9号线"><a  class=""  id="六里桥" href="/zhaofang/d3907">六里桥</a></li>
																					<li mark="9号线"><a  class=""  id="七里庄" href="/zhaofang/d3908">七里庄</a></li>
																					<li mark="9号线"><a  class=""  id="丰台东大街" href="/zhaofang/d3909">丰台东大街</a></li>
																					<li mark="9号线"><a  class=""  id="丰台南路" href="/zhaofang/d3910">丰台南路</a></li>
																					<li mark="9号线"><a  class=""  id="科怡路" href="/zhaofang/d3911">科怡路</a></li>
																					<li mark="9号线"><a  class=""  id="丰台科技园" href="/zhaofang/d3912">丰台科技园</a></li>
																					<li mark="9号线"><a  class=""  id="郭公庄" href="/zhaofang/d3913">郭公庄</a></li>
																			</ul>
								</div>
							</div>

						</li>
					                </ul>
            </dd>

        </dl>
        <dl class="clearfix">
            <dt>租金:</dt>
            <dd>
                <ul id="PBArent" class="line-list clearfix">
                    <li mark="租金不限"><a href="/zhaofang/">不限</a></li>
	<li mark="1500元以下"><a  class=""  href="/zhaofang/m1">1500元以下</a></li>
	<li mark="1500-2000元"><a  class=""  href="/zhaofang/m2">1500-2000元</a></li>
	<li mark="2000-3000元"><a  class=""  href="/zhaofang/m3">2000-3000元</a></li>
	<li mark="3000-4000元"><a  class=""  href="/zhaofang/m4">3000-4000元</a></li>
	<li mark="4000-5000元"><a  class=""  href="/zhaofang/m5">4000-5000元</a></li>
	<li mark="5000元以上"><a  class=""  href="/zhaofang/m6">5000元以上</a></li>
					                    <li>
                        <div class="custom clearfix">
							<form name="form_monthrent" mark="租金确定">
								<input type="hidden" name="prefixUrl" value="/zhaofang/" />
                            	<input name="rent_start" value="" type="text"> -
                            	<input name="rent_end" value="" type="text">
                            	<a href="javascript:void(0);" onclick="javascript:searchMonthRent()" class="btn-line-red">确定</a>
							</form>
                        </div>
                    </li>
                </ul>
            </dd>
        </dl>
        <dl class="clearfix">
            <dt>租房类型:</dt>
            <dd>

				<ul id="PBAtype" class="line-list clearfix">
					<li mark="类型不限"><a href="/zhaofang/">不限</a></li>
											<li mark="合租"><a class=""  href="/zhaofang/c1">合租</a></li>
											<li mark="整租"><a class=""  href="/zhaofang/c2">整租</a></li>
											<li mark="公寓"><a class=""  href="/zhaofang/c3">公寓</a></li>
									</ul>
            </dd>
        </dl>
        <dl class="clearfix">
            <dt>户型:</dt>
            <dd>
				<ul id="PBAunit" class="line-list clearfix">

					<li mark="户型不限"><a href="/zhaofang/">不限</a></li>
										<li mark="一室"><a  class=""  href="/zhaofang/h1">一室</a></li>
										<li mark="二室"><a  class=""  href="/zhaofang/h2">二室</a></li>
										<li mark="三室"><a  class=""  href="/zhaofang/h3">三室</a></li>
										<li mark="三室以上"><a  class=""  href="/zhaofang/h4">三室以上</a></li>
									</ul>
            </dd>
        </dl>
        <dl class="clearfix">
            <dt>特色:</dt>
            <dd>
                <ul id="PBAspe" class="line-list-check clearfix">
											<li mark="月付"><a href="/zhaofang/t1"><label><i class="icon icon-checkbox-n"></i>月付</label></a></li>
											<li mark="新上架"><a href="/zhaofang/t7"><label><i class="icon icon-checkbox-n"></i>新上架</label></a></li>
											<li mark="近地铁"><a href="/zhaofang/t5"><label><i class="icon icon-checkbox-n"></i>近地铁</label></a></li>
											<li mark="主卧"><a href="/zhaofang/t8"><label><i class="icon icon-checkbox-n"></i>主卧</label></a></li>
											<li mark="朝南"><a href="/zhaofang/t3"><label><i class="icon icon-checkbox-n"></i>朝南</label></a></li>
											<li mark="独卫"><a href="/zhaofang/t2"><label><i class="icon icon-checkbox-n"></i>独卫</label></a></li>
											<li mark="带阳台"><a href="/zhaofang/t9"><label><i class="icon icon-checkbox-n"></i>带阳台</label></a></li>
											<li mark="精装"><a href="/zhaofang/t10"><label><i class="icon icon-checkbox-n"></i>精装</label></a></li>
											<li mark="独立厨房"><a href="/zhaofang/t11"><label><i class="icon icon-checkbox-n"></i>独立厨房</label></a></li>
											<li mark="智能电表"><a href="/zhaofang/t12"><label><i class="icon icon-checkbox-n"></i>智能电表</label></a></li>
											<li mark="家电全配"><a href="/zhaofang/t13"><label><i class="icon icon-checkbox-n"></i>家电全配</label></a></li>
											<li mark="电梯房"><a href="/zhaofang/t4"><label><i class="icon icon-checkbox-n"></i>电梯房</label></a></li>
											<li mark="非一楼"><a href="/zhaofang/t14"><label><i class="icon icon-checkbox-n"></i>非一楼</label></a></li>
											<li mark="非隔断"><a href="/zhaofang/t15"><label><i class="icon icon-checkbox-n"></i>非隔断</label></a></li>
											<li mark="转租"><a href="/zhaofang/t6"><label><i class="icon icon-checkbox-n"></i>转租</label></a></li>
					                </ul>
            </dd>
        </dl>
    </div>
	    <div class="unit-top">
        <ul id="clearfix" class="clearfix">
							<li mark="sor01" ><a href="/zhaofang/" class="active">综合排序</a></li>
							<li mark="sor02" ><a href="/zhaofang/s1" class="">价格排序 <i class="icon icon-jt-t"></i></a></li>
							<li mark="sor03" ><a href="/zhaofang/s2" class="">价格排序 <i class="icon icon-jt-b"></i></a></li>
			        </ul>
    </div>
    <!--list -->
    <div class="unit unit-page">
        <div class="unit-pro">
            <ul id="zhaofang_list" class="pro-list clearfix">

									<li num="301446"
						name="8号公寓 1室0厅1卫"
						category="新华大街通州"
						variant="公寓"
						price="1980"
					>
						<a target="_blank" href="http://bj.baletu.com/house/301446.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/302/301446/oss_58a808cd53aa1.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>8号公寓</h3>
								<span class="price">￥1980</span>
							</div>
							<p class="list-pic-ps">通州-新华大街</p>
							<p class="list-pic-ps">公寓 1室0厅1卫 22M²</p>
							<div class="pro-lab">
								<span>月付</span><span>新上架</span><span>独卫</span><span>精装</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="592270"
						name="阳明国际公寓 1室0厅1卫"
						category="亚运村小营朝阳"
						variant="合租"
						price="3500"
					>
						<a target="_blank" href="http://bj.baletu.com/house/592270.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/593/592270/oss_582d3403df472.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>阳明国际公寓</h3>
								<span class="price">￥3500</span>
							</div>
							<p class="list-pic-ps">朝阳-亚运村小营</p>
							<p class="list-pic-ps">合租 1室0厅1卫 28M²</p>
							<div class="pro-lab">
								<span>月付</span><span>新上架</span><span>主卧</span><span>朝南</span><span>独卫</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="572527"
						name="顶秀金石家园 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="1900"
					>
						<a target="_blank" href="http://bj.baletu.com/house/572527.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/573/572527/oss_581956cfa57f2.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>顶秀金石家园</h3>
								<span class="price">￥1900</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 19M²</p>
							<div class="pro-lab">
								<span>月付</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="587821"
						name="顶秀金颐家园 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2400"
					>
						<a target="_blank" href="http://bj.baletu.com/house/587821.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/588/587821/oss_582d85d9e3f49.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>顶秀金颐家园</h3>
								<span class="price">￥2400</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 20M²</p>
							<div class="pro-lab">
								<span>月付</span><span>近地铁</span><span>主卧</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="556948"
						name="政馨园3区 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2500"
					>
						<a target="_blank" href="http://bj.baletu.com/house/556948.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/557/556948/580b1b2e3d436.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>政馨园3区</h3>
								<span class="price">￥2500</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 23M²</p>
							<div class="pro-lab">
								<span>月付</span><span>近地铁</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="722037"
						name="顶秀金瑞家园 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2500"
					>
						<a target="_blank" href="http://bj.baletu.com/house/722037.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/723/722037/oss_58b3d109d6b8c.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>顶秀金瑞家园</h3>
								<span class="price">￥2500</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 20M²</p>
							<div class="pro-lab">
								<span>月付</span><span>近地铁</span><span>主卧</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="742291"
						name="怡和世家 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2100"
					>
						<a target="_blank" href="http://bj.baletu.com/house/742291.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/743/742291/oss_58c255cfd127c.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥2100</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 16M²</p>
							<div class="pro-lab">
								<span>月付</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="756465"
						name="瑞海家园三区 1室0厅1卫"
						category="西红门大兴"
						variant="合租"
						price="2280"
					>
						<a target="_blank" href="http://bj.baletu.com/house/756465.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/757/756465/oss_58e8e66f2225a.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>瑞海家园三区</h3>
								<span class="price">￥2280</span>
							</div>
							<p class="list-pic-ps">大兴-西红门</p>
							<p class="list-pic-ps">合租 1室0厅1卫 25M²</p>
							<div class="pro-lab">
								<span>月付</span><span>近地铁</span><span>主卧</span><span>朝南</span><span>独卫</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="587806"
						name="顶秀金石家园 3室1厅1卫"
						category="宋家庄丰台"
						variant="整租"
						price="7000"
					>
						<a target="_blank" href="http://bj.baletu.com/house/587806.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/588/587806/oss_582a68dfef4e1.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>顶秀金石家园</h3>
								<span class="price">￥7000</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">整租 3室1厅1卫 89M²</p>
							<div class="pro-lab">
								<span>月付</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="721940"
						name="顶秀金颐家园 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2000"
					>
						<a target="_blank" href="http://bj.baletu.com/house/721940.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/722/721940/oss_58b3cb3c2d32e.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>顶秀金颐家园</h3>
								<span class="price">￥2000</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 15M²</p>
							<div class="pro-lab">
								<span>月付</span><span>近地铁</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="755611"
						name="怡和世家 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="3000"
					>
						<a target="_blank" href="http://bj.baletu.com/house/755611.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/756/755611/oss_58cb8e403e9eb.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥3000</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 20M²</p>
							<div class="pro-lab">
								<span>月付</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="756470"
						name="瑞海家园三区 1室0厅0卫"
						category="西红门大兴"
						variant="合租"
						price="1450"
					>
						<a target="_blank" href="http://bj.baletu.com/house/756470.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/757/756470/oss_58e8bac5b518e.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>瑞海家园三区</h3>
								<span class="price">￥1450</span>
							</div>
							<p class="list-pic-ps">大兴-西红门</p>
							<p class="list-pic-ps">合租 1室0厅0卫 20M²</p>
							<div class="pro-lab">
								<span>月付</span><span>近地铁</span><span>朝南</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="587856"
						name="顶秀金石家园 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2400"
					>
						<a target="_blank" href="http://bj.baletu.com/house/587856.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/588/587856/oss_58be4ad9bb702.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>顶秀金石家园</h3>
								<span class="price">￥2400</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 23M²</p>
							<div class="pro-lab">
								<span>月付</span><span>主卧</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="755612"
						name="怡和世家 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2600"
					>
						<a target="_blank" href="http://bj.baletu.com/house/755612.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/756/755612/oss_58cb8fb912748.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥2600</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 15M²</p>
							<div class="pro-lab">
								<span>月付</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="756476"
						name="瑞海家园三区 1室0厅0卫"
						category="西红门大兴"
						variant="合租"
						price="2200"
					>
						<a target="_blank" href="http://bj.baletu.com/house/756476.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/757/756476/oss_58e8b545e6bb1.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>瑞海家园三区</h3>
								<span class="price">￥2200</span>
							</div>
							<p class="list-pic-ps">大兴-西红门</p>
							<p class="list-pic-ps">合租 1室0厅0卫 25M²</p>
							<div class="pro-lab">
								<span>月付</span><span>近地铁</span><span>主卧</span><span>朝南</span>							</div>
						</a>
					</li>
									<li num="587846"
						name="顶秀金石家园 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2300"
					>
						<a target="_blank" href="http://bj.baletu.com/house/587846.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/588/587846/oss_582a6845e41dc.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>顶秀金石家园</h3>
								<span class="price">￥2300</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 20M²</p>
							<div class="pro-lab">
								<span>月付</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="755616"
						name="怡和世家 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="3000"
					>
						<a target="_blank" href="http://bj.baletu.com/house/755616.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/756/755616/oss_58cb8b8bd1350.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥3000</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 20M²</p>
							<div class="pro-lab">
								<span>月付</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="794968"
						name="顶秀金石家园 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2900"
					>
						<a target="_blank" href="http://bj.baletu.com/house/794968.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/795/794968/oss_58e7209acb251.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>顶秀金石家园</h3>
								<span class="price">￥2900</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 18M²</p>
							<div class="pro-lab">
								<span>月付</span><span>主卧</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="755679"
						name="怡和世家 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="3000"
					>
						<a target="_blank" href="http://bj.baletu.com/house/755679.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/756/755679/oss_58cb93da39511.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥3000</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 20M²</p>
							<div class="pro-lab">
								<span>月付</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="794973"
						name="顶秀金石家园 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2400"
					>
						<a target="_blank" href="http://bj.baletu.com/house/794973.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/795/794973/oss_58e720e1c3bf1.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>顶秀金石家园</h3>
								<span class="price">￥2400</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 15M²</p>
							<div class="pro-lab">
								<span>月付</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="782497"
						name="怡和世家 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="3500"
					>
						<a target="_blank" href="http://bj.baletu.com/house/782497.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/783/782497/oss_58ddf858080ec.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥3500</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 20M²</p>
							<div class="pro-lab">
								<span>月付</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="794974"
						name="顶秀金石家园 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2500"
					>
						<a target="_blank" href="http://bj.baletu.com/house/794974.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/795/794974/oss_58e721b7ea5f9.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>顶秀金石家园</h3>
								<span class="price">￥2500</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 15M²</p>
							<div class="pro-lab">
								<span>月付</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="782502"
						name="怡和世家 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2500"
					>
						<a target="_blank" href="http://bj.baletu.com/house/782502.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/783/782502/oss_58ddf959d4270.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥2500</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 18M²</p>
							<div class="pro-lab">
								<span>月付</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="795042"
						name="顶秀金石家园 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2400"
					>
						<a target="_blank" href="http://bj.baletu.com/house/795042.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/796/795042/oss_58e72678353eb.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>顶秀金石家园</h3>
								<span class="price">￥2400</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 18M²</p>
							<div class="pro-lab">
								<span>月付</span><span>主卧</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="782620"
						name="怡和世家 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2800"
					>
						<a target="_blank" href="http://bj.baletu.com/house/782620.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/783/782620/oss_58ddfe080c49e.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥2800</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 30M²</p>
							<div class="pro-lab">
								<span>月付</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="795046"
						name="顶秀金石家园 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2100"
					>
						<a target="_blank" href="http://bj.baletu.com/house/795046.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/796/795046/oss_58e727e20af88.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>顶秀金石家园</h3>
								<span class="price">￥2100</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 15M²</p>
							<div class="pro-lab">
								<span>月付</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="782641"
						name="怡和世家 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2500"
					>
						<a target="_blank" href="http://bj.baletu.com/house/782641.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/783/782641/oss_58ddfeea0c54b.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥2500</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 20M²</p>
							<div class="pro-lab">
								<span>月付</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="795493"
						name="顶秀金石家园 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="3200"
					>
						<a target="_blank" href="http://bj.baletu.com/house/795493.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/796/795493/oss_58e7406c39beb.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>顶秀金石家园</h3>
								<span class="price">￥3200</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 15M²</p>
							<div class="pro-lab">
								<span>月付</span><span>主卧</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="782647"
						name="怡和世家 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2200"
					>
						<a target="_blank" href="http://bj.baletu.com/house/782647.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/783/782647/oss_58ddffd97fb06.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥2200</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 20M²</p>
							<div class="pro-lab">
								<span>月付</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="795497"
						name="顶秀金石家园 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="3000"
					>
						<a target="_blank" href="http://bj.baletu.com/house/795497.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/796/795497/oss_58e7417fc12ac.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>顶秀金石家园</h3>
								<span class="price">￥3000</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 18M²</p>
							<div class="pro-lab">
								<span>月付</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="793452"
						name="怡和世家 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2000"
					>
						<a target="_blank" href="http://bj.baletu.com/house/793452.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/794/793452/oss_58e604acae613.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥2000</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 15M²</p>
							<div class="pro-lab">
								<span>月付</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="797215"
						name="顶秀金石家园 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2900"
					>
						<a target="_blank" href="http://bj.baletu.com/house/797215.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/798/797215/oss_58e897912455e.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>顶秀金石家园</h3>
								<span class="price">￥2900</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 15M²</p>
							<div class="pro-lab">
								<span>月付</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="793454"
						name="怡和世家 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2100"
					>
						<a target="_blank" href="http://bj.baletu.com/house/793454.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/794/793454/oss_58e60625c4970.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥2100</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 15M²</p>
							<div class="pro-lab">
								<span>月付</span><span>主卧</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="797220"
						name="顶秀金石家园 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2700"
					>
						<a target="_blank" href="http://bj.baletu.com/house/797220.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/798/797220/oss_58e8989c6f390.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>顶秀金石家园</h3>
								<span class="price">￥2700</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 15M²</p>
							<div class="pro-lab">
								<span>月付</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="793455"
						name="怡和世家 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="1800"
					>
						<a target="_blank" href="http://bj.baletu.com/house/793455.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/794/793455/oss_58e60756c3a1d.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥1800</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 10M²</p>
							<div class="pro-lab">
								<span>月付</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="793536"
						name="怡和世家 1室1厅1卫"
						category="宋家庄丰台"
						variant="整租"
						price="4300"
					>
						<a target="_blank" href="http://bj.baletu.com/house/793536.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/794/793536/oss_58e60c3dd1bae.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥4300</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">整租 1室1厅1卫 60M²</p>
							<div class="pro-lab">
								<span>月付</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="793550"
						name="怡和世家 1室1厅1卫"
						category="宋家庄丰台"
						variant="整租"
						price="4500"
					>
						<a target="_blank" href="http://bj.baletu.com/house/793550.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/794/793550/oss_58e60e0795529.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥4500</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">整租 1室1厅1卫 60M²</p>
							<div class="pro-lab">
								<span>月付</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="793618"
						name="怡和世家 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2600"
					>
						<a target="_blank" href="http://bj.baletu.com/house/793618.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/794/793618/oss_58e6128bbbf04.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥2600</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 18M²</p>
							<div class="pro-lab">
								<span>月付</span><span>主卧</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="793622"
						name="怡和世家 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2300"
					>
						<a target="_blank" href="http://bj.baletu.com/house/793622.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/794/793622/oss_58e61094e1750.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥2300</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 12M²</p>
							<div class="pro-lab">
								<span>月付</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="794811"
						name="怡和世家 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2100"
					>
						<a target="_blank" href="http://bj.baletu.com/house/794811.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/795/794811/oss_58e7122257dea.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥2100</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 18M²</p>
							<div class="pro-lab">
								<span>月付</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="794900"
						name="怡和世家 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2200"
					>
						<a target="_blank" href="http://bj.baletu.com/house/794900.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/795/794900/oss_58e7189fe360f.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥2200</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 15M²</p>
							<div class="pro-lab">
								<span>月付</span><span>主卧</span><span>朝南</span><span>电梯房</span>							</div>
						</a>
					</li>
									<li num="794903"
						name="怡和世家 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2000"
					>
						<a target="_blank" href="http://bj.baletu.com/house/794903.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/795/794903/oss_58e718668fa43.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥2000</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 10M²</p>
							<div class="pro-lab">
								<span>月付</span><span>电梯房</span>							</div>
						</a>
					</li>
									<li num="795669"
						name="怡和世家 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2600"
					>
						<a target="_blank" href="http://bj.baletu.com/house/795669.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/796/795669/oss_58e74b069073c.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥2600</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 15M²</p>
							<div class="pro-lab">
								<span>月付</span><span>主卧</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="795674"
						name="怡和世家 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2500"
					>
						<a target="_blank" href="http://bj.baletu.com/house/795674.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/796/795674/oss_58e749483c978.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥2500</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 15M²</p>
							<div class="pro-lab">
								<span>月付</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="795684"
						name="怡和世家 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2500"
					>
						<a target="_blank" href="http://bj.baletu.com/house/795684.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/796/795684/oss_58e7492022a76.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥2500</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 15M²</p>
							<div class="pro-lab">
								<span>月付</span><span>主卧</span><span>朝南</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="795687"
						name="怡和世家 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2400"
					>
						<a target="_blank" href="http://bj.baletu.com/house/795687.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/796/795687/oss_58e74a14871e0.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥2400</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 15M²</p>
							<div class="pro-lab">
								<span>月付</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="797039"
						name="怡和世家 1室1厅1卫"
						category="宋家庄丰台"
						variant="整租"
						price="4300"
					>
						<a target="_blank" href="http://bj.baletu.com/house/797039.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/798/797039/oss_58e88d1730d27.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥4300</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">整租 1室1厅1卫 50M²</p>
							<div class="pro-lab">
								<span>月付</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
									<li num="797102"
						name="怡和世家 1室0厅0卫"
						category="宋家庄丰台"
						variant="合租"
						price="2200"
					>
						<a target="_blank" href="http://bj.baletu.com/house/797102.html">
							<div class="pro-pic"><img width="360" class="lazy" data-original="https://cdn.baletoo.cn/Uploads/housephoto/798/797102/oss_58e895d95c7ee.jpg@!360_200.png" /></div>
							<div class="list-pic-title">
								<h3>怡和世家</h3>
								<span class="price">￥2200</span>
							</div>
							<p class="list-pic-ps">丰台-宋家庄</p>
							<p class="list-pic-ps">合租 1室0厅0卫 18M²</p>
							<div class="pro-lab">
								<span>月付</span><span>电梯房</span><span>非一楼</span>							</div>
						</a>
					</li>
				            </ul>
        </div>
    </div>
	<form id="zhaofangForm">
		<input name="PVhouse" type="hidden" value="48">
		<input name="PVtitle" type="hidden" value="北京租房">
		<input name="PVurl" type="hidden" value="/zhaofang/">
		<input name="PVdefaulturl" type="hidden" value="/zhaofang/0">
	</form>
	<script type="text/javascript" src="js/kkpager.js"></script>
   <!--page numble-->
	<div id="zhaofangpager" class="page-numble">
	</div>

	<script type="text/javascript">

		//init
		
		var totalPage = 88;
		var totalRecords = 4224;
		var pageNo = 1;
		if(!pageNo){
			pageNo = 1;
		}
		var before = '/zhaofang/';

		$(function(){
			//生成分页
			//有些参数是可选的，比如lang，若不传有默认值
			kkpager.generPageHtml({
				pno : pageNo,
				//总页码
				total : totalPage,
				//总数据条数
				totalRecords : totalRecords,
				//链接前部
				hrefFormer : '',
				//链接尾部
				hrefLatter : '',
				getLink : function(n){
					return before + "?p="+n;
				}
				 ,lang				: {
				 firstPageText			: '首页',
				 firstPageTipText		: '首页',
				 lastPageText			: '尾页',
				 lastPageTipText			: '尾页',
				 prePageText				: '<i class=\'icon icon-jt-l\'></i>',
				 prePageTipText			: '',
				 nextPageText			: '<i class="icon icon-jt-r"></i>',
				 nextPageTipText			: '下一页',
				 totalPageBeforeText		: '共',
				 totalPageAfterText		: '页',
				 currPageBeforeText		: '当前第',
				 currPageAfterText		: '页',
				 totalInfoSplitStr		: '/',
				 totalRecordsBeforeText	: '共',
				 totalRecordsAfterText	: '条数据',
				 gopageBeforeText		: '跳转到',
				 gopageButtonOkText		: 'GO',
				 gopageAfterText			: '',
				 buttonTipBeforeText		: '第',
				 buttonTipAfterText		: '页'
				 },
				isShowFirstPageBtn: false,
				isShowLastPageBtn:true,
				isGoPage:true,
				isWrapedPageBtns: false,
				isWrapedInfoTextAndGoPageBtn:false,
				isShowTotalRecords:false,
				isShowCurrPage:false,

			});
		});

		g_config['model_name'] = 'zhaofang';
		g_config['house_list'] = '[{"data":{"area_name":"\u65b0\u534e\u5927\u8857","text_field":["\u65b0\u534e\u5927\u8857","\u901a\u5dde","\u65b0\u534e\u5357\u8def100\u53f7\uff08\u65b0\u57ce\u4e1c\u91cc127\u53f7\u9662\uff09","xinhuadajie tongzhou tongzhouqu \u901a\u5dde\u533a","8\u53f7\u516c\u5bd3","\u516b\u901a\u7ebf(\u4e5d\u68f5\u6811\u7ad9)\uff0c\u6b65\u884c13\u5206\u949f","8\u53f7\u516c\u5bd3"],"pic_main":"\/Uploads\/housephoto\/318\/317337\/oss_5881c4dc3b8a0.jpg@!blth","is_jingzhuang":1,"hire_way":3,"area_id":424,"is_charter":0,"refresh_time":1461122306,"latlon":"39.898706,116.660362","rank_weight":75020,"id":"301446","walking_time":18,"bathroom":1,"room_detail":"\u4e00\u5ba4\u4e00\u536b\u5f00\u95f422\u5e73\u623f\u578b","fname":"\u901a\u5dde","create_time":1461122306,"lan_co_type":3,"subdistrict_id":24314,"subdistrict_address":"\u65b0\u534e\u5357\u8def100\u53f7\uff08\u65b0\u57ce\u4e1c\u91cc127\u53f7\u9662\uff09","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":3,"virtual_house_id":0,"s_subway_desc":"\u516b\u901a\u7ebf(\u4e5d\u68f5\u6811\u7ad9)\uff0c\u6b65\u884c13\u5206\u949f","miaotui":0,"virtual":1,"auth_level":11,"house_status":0,"modify_time":1491900142,"show":0,"area_latlon":"39.907707,116.657318","lan_co_id":1551,"sub_info":"24314\u001b8\u53f7\u516c\u5bd3\u001b39.898706,116.660362","rent_area":22,"is_elevator":2,"synonym_words":"xinhuadajie tongzhou tongzhouqu \u901a\u5dde\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"2\/6","subdistrict_name":"8\u53f7\u516c\u5bd3","house_source":2,"floor_area":22,"is_yuanfang":0,"subway_desc":["\u516b\u901a\u7ebf(\u4e5d\u68f5\u6811\u7ad9)\uff0c\u6b65\u884c13\u5206\u949f"],"is_appliance_complete":0,"discount_type":0,"hfloor":2,"lan_mobile":"13301350228","bedroom":1,"is_monthly_pay":1,"renter_commission":0,"house_main_image":"oss_58a808cd53aa1.jpg","is_validate":1,"dd_call_id":699,"month_rent":1980,"house_from":1,"area_fid":408,"facilities":"1,3,4,7,15,16,17,119,120","room_type":0,"lan_co_name":"8\u53f7\u516c\u5bd3","_version_":1564371169969176576,"weight":0},"area_name":"\u65b0\u534e\u5927\u8857","text_field":["\u65b0\u534e\u5927\u8857","\u901a\u5dde","\u65b0\u534e\u5357\u8def100\u53f7\uff08\u65b0\u57ce\u4e1c\u91cc127\u53f7\u9662\uff09","xinhuadajie tongzhou tongzhouqu \u901a\u5dde\u533a","8\u53f7\u516c\u5bd3","\u516b\u901a\u7ebf(\u4e5d\u68f5\u6811\u7ad9)\uff0c\u6b65\u884c13\u5206\u949f","8\u53f7\u516c\u5bd3"],"pic_main":"\/Uploads\/housephoto\/318\/317337\/oss_5881c4dc3b8a0.jpg@!blth","is_jingzhuang":1,"hire_way":3,"area_id":424,"is_charter":0,"refresh_time":1461122306,"latlon":"39.898706,116.660362","rank_weight":75020,"id":"301446","walking_time":18,"bathroom":1,"room_detail":"\u4e00\u5ba4\u4e00\u536b\u5f00\u95f422\u5e73\u623f\u578b","fname":"\u901a\u5dde","create_time":1461122306,"lan_co_type":3,"subdistrict_id":24314,"subdistrict_address":"\u65b0\u534e\u5357\u8def100\u53f7\uff08\u65b0\u57ce\u4e1c\u91cc127\u53f7\u9662\uff09","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":3,"virtual_house_id":0,"s_subway_desc":"\u516b\u901a\u7ebf(\u4e5d\u68f5\u6811\u7ad9)\uff0c\u6b65\u884c13\u5206\u949f","miaotui":0,"virtual":1,"auth_level":11,"house_status":0,"modify_time":1491900142,"show":0,"area_latlon":"39.907707,116.657318","lan_co_id":1551,"sub_info":"24314\u001b8\u53f7\u516c\u5bd3\u001b39.898706,116.660362","rent_area":22,"is_elevator":2,"synonym_words":"xinhuadajie tongzhou tongzhouqu \u901a\u5dde\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"2\/6","subdistrict_name":"8\u53f7\u516c\u5bd3","house_source":2,"floor_area":22,"is_yuanfang":0,"subway_desc":["\u516b\u901a\u7ebf(\u4e5d\u68f5\u6811\u7ad9)\uff0c\u6b65\u884c13\u5206\u949f"],"is_appliance_complete":0,"discount_type":0,"hfloor":2,"lan_mobile":"13301350228","bedroom":1,"is_monthly_pay":1,"renter_commission":0,"house_main_image":"oss_58a808cd53aa1.jpg","is_validate":1,"dd_call_id":699,"month_rent":1980,"house_from":1,"area_fid":408,"facilities":"1,3,4,7,15,16,17,119,120","room_type":0,"lan_co_name":"8\u53f7\u516c\u5bd3","_version_":1564371169969176576,"weight":0,"private_bathroom":1},{"data":{"area_name":"\u4e9a\u8fd0\u6751\u5c0f\u8425","text_field":["\u4e9a\u8fd0\u6751\u5c0f\u8425","\u671d\u9633","\u4e9a\u8fd0\u6751\u5c0f\u8425\u8def10\u53f7\u9662","yayuncunxiaoying chaoyang chaoyangqu \u671d\u9633\u533a","\u9633\u660e\u56fd\u9645\u516c\u5bd3","","\u9633\u660e\u5609\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_586231f427f48.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":288,"is_charter":0,"refresh_time":1479115758,"latlon":"39.995162,116.425624","rank_weight":75020,"id":"592270","walking_time":16,"bathroom":1,"room_detail":"A\u53f7\u697c11A\u5ba4","fname":"\u671d\u9633","create_time":1479108860,"lan_co_type":2,"subdistrict_id":26937,"subdistrict_address":"\u4e9a\u8fd0\u6751\u5c0f\u8425\u8def10\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"15\u53f7\u7ebf(\u5173\u5e84\u7ad9)\uff0c\u6b65\u884c10\u5206\u949f|5\u53f7\u7ebf(\u60e0\u65b0\u897f\u8857\u5317\u53e3\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491898274,"show":0,"area_latlon":"39.994659,116.422883","lan_co_id":3037,"sub_info":"26937\u001b\u9633\u660e\u56fd\u9645\u516c\u5bd3\u001b39.995162,116.425624","rent_area":28,"is_elevator":1,"synonym_words":"yayuncunxiaoying chaoyang chaoyangqu \u671d\u9633\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"11\/20","subdistrict_name":"\u9633\u660e\u56fd\u9645\u516c\u5bd3","house_source":2,"floor_area":120,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":11,"lan_mobile":"18910751368","bedroom":1,"is_monthly_pay":1,"renter_commission":0,"house_main_image":"oss_582d3403df472.jpg","is_validate":2,"dd_call_id":579,"month_rent":3500,"house_from":0,"area_fid":239,"facilities":"1,3,4,5,6,7,19,116,117,119","room_type":1,"lan_co_name":"\u9633\u660e\u5609\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371197449207808,"weight":0},"area_name":"\u4e9a\u8fd0\u6751\u5c0f\u8425","text_field":["\u4e9a\u8fd0\u6751\u5c0f\u8425","\u671d\u9633","\u4e9a\u8fd0\u6751\u5c0f\u8425\u8def10\u53f7\u9662","yayuncunxiaoying chaoyang chaoyangqu \u671d\u9633\u533a","\u9633\u660e\u56fd\u9645\u516c\u5bd3","","\u9633\u660e\u5609\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_586231f427f48.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":288,"is_charter":0,"refresh_time":1479115758,"latlon":"39.995162,116.425624","rank_weight":75020,"id":"592270","walking_time":16,"bathroom":1,"room_detail":"A\u53f7\u697c11A\u5ba4","fname":"\u671d\u9633","create_time":1479108860,"lan_co_type":2,"subdistrict_id":26937,"subdistrict_address":"\u4e9a\u8fd0\u6751\u5c0f\u8425\u8def10\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"15\u53f7\u7ebf(\u5173\u5e84\u7ad9)\uff0c\u6b65\u884c10\u5206\u949f|5\u53f7\u7ebf(\u60e0\u65b0\u897f\u8857\u5317\u53e3\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491898274,"show":0,"area_latlon":"39.994659,116.422883","lan_co_id":3037,"sub_info":"26937\u001b\u9633\u660e\u56fd\u9645\u516c\u5bd3\u001b39.995162,116.425624","rent_area":28,"is_elevator":1,"synonym_words":"yayuncunxiaoying chaoyang chaoyangqu \u671d\u9633\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"11\/20","subdistrict_name":"\u9633\u660e\u56fd\u9645\u516c\u5bd3","house_source":2,"floor_area":120,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":11,"lan_mobile":"18910751368","bedroom":1,"is_monthly_pay":1,"renter_commission":0,"house_main_image":"oss_582d3403df472.jpg","is_validate":2,"dd_call_id":579,"month_rent":3500,"house_from":0,"area_fid":239,"facilities":"1,3,4,5,6,7,19,116,117,119","room_type":1,"lan_co_name":"\u9633\u660e\u5609\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371197449207808,"weight":0,"private_bathroom":1},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1478947106,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"572527","walking_time":16,"bathroom":0,"room_detail":"1\u53f7\u697c2\u5355\u5143701\u5ba4","fname":"\u4e30\u53f0","create_time":1478053463,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":12,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3128,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":19,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"7\/22","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":144,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":7,"lan_mobile":"13311162329","bedroom":1,"is_monthly_pay":1,"renter_commission":0,"house_main_image":"oss_581956cfa57f2.jpg","is_validate":1,"dd_call_id":507,"month_rent":1900,"house_from":1,"area_fid":371,"facilities":"1,3,4,19,110,114,115,116,117,118,119","room_type":2,"lan_co_name":"\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193421627392,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1478947106,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"572527","walking_time":16,"bathroom":0,"room_detail":"1\u53f7\u697c2\u5355\u5143701\u5ba4","fname":"\u4e30\u53f0","create_time":1478053463,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":12,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3128,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":19,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"7\/22","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":144,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":7,"lan_mobile":"13311162329","bedroom":1,"is_monthly_pay":1,"renter_commission":0,"house_main_image":"oss_581956cfa57f2.jpg","is_validate":1,"dd_call_id":507,"month_rent":1900,"house_from":1,"area_fid":371,"facilities":"1,3,4,19,110,114,115,116,117,118,119","room_type":2,"lan_co_name":"\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193421627392,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u77f3\u69b4\u5e84\u4e8c\u88571\u53f7","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u9890\u5bb6\u56ed","","\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58537883cb164.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1478852278,"latlon":"39.841492,116.432013","rank_weight":74020,"id":"587821","walking_time":11,"bathroom":0,"room_detail":"1\u53f7\u697c2\u5355\u51431304\u5ba4","fname":"\u4e30\u53f0","create_time":1478852278,"lan_co_type":2,"subdistrict_id":44601,"subdistrict_address":"\u77f3\u69b4\u5e84\u4e8c\u88571\u53f7","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c8\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791292,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3290,"sub_info":"44601\u001b\u9876\u79c0\u91d1\u9890\u5bb6\u56ed\u001b39.841492,116.432013","rent_area":20,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"13\/18","subdistrict_name":"\u9876\u79c0\u91d1\u9890\u5bb6\u56ed","house_source":2,"floor_area":100,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":13,"lan_mobile":"17701243666","bedroom":1,"is_monthly_pay":1,"renter_commission":0,"house_main_image":"oss_582d85d9e3f49.jpg","is_validate":1,"dd_call_id":507,"month_rent":2400,"house_from":1,"area_fid":371,"facilities":"2,3,4,7,19,114,116,117,119","room_type":1,"lan_co_name":"\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193425821696,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u77f3\u69b4\u5e84\u4e8c\u88571\u53f7","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u9890\u5bb6\u56ed","","\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58537883cb164.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1478852278,"latlon":"39.841492,116.432013","rank_weight":74020,"id":"587821","walking_time":11,"bathroom":0,"room_detail":"1\u53f7\u697c2\u5355\u51431304\u5ba4","fname":"\u4e30\u53f0","create_time":1478852278,"lan_co_type":2,"subdistrict_id":44601,"subdistrict_address":"\u77f3\u69b4\u5e84\u4e8c\u88571\u53f7","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c8\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791292,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3290,"sub_info":"44601\u001b\u9876\u79c0\u91d1\u9890\u5bb6\u56ed\u001b39.841492,116.432013","rent_area":20,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"13\/18","subdistrict_name":"\u9876\u79c0\u91d1\u9890\u5bb6\u56ed","house_source":2,"floor_area":100,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":13,"lan_mobile":"17701243666","bedroom":1,"is_monthly_pay":1,"renter_commission":0,"house_main_image":"oss_582d85d9e3f49.jpg","is_validate":1,"dd_call_id":507,"month_rent":2400,"house_from":1,"area_fid":371,"facilities":"2,3,4,7,19,114,116,117,119","room_type":1,"lan_co_name":"\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193425821696,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u653f\u99a8\u56ed3\u533a","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u653f\u99a8\u56ed3\u533a","","\u98de\u9e3f\u57fa\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524cddc2c4a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1477126494,"latlon":"39.844979,116.431653","rank_weight":74020,"id":"556948","walking_time":5,"bathroom":0,"room_detail":"4\u53f7\u697c\u5355\u51431510\u5ba4","fname":"\u4e30\u53f0","create_time":1477122861,"lan_co_type":2,"subdistrict_id":29472,"subdistrict_address":"\u653f\u99a8\u56ed3\u533a","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":4,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c5\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791452,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3032,"sub_info":"29472\u001b\u653f\u99a8\u56ed3\u533a\u001b39.844979,116.431653","rent_area":23,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":1,"livingroom":0,"house_type":2,"floor":"17\/26","subdistrict_name":"\u653f\u99a8\u56ed3\u533a","house_source":2,"floor_area":90,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":17,"lan_mobile":"18910677597","bedroom":1,"is_monthly_pay":1,"house_main_image":"580b1b2e3d436.jpg","is_validate":2,"dd_call_id":507,"month_rent":2500,"house_from":0,"area_fid":371,"facilities":"2,3,18","room_type":0,"lan_co_name":"\u98de\u9e3f\u57fa\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193430016001,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u653f\u99a8\u56ed3\u533a","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u653f\u99a8\u56ed3\u533a","","\u98de\u9e3f\u57fa\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524cddc2c4a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1477126494,"latlon":"39.844979,116.431653","rank_weight":74020,"id":"556948","walking_time":5,"bathroom":0,"room_detail":"4\u53f7\u697c\u5355\u51431510\u5ba4","fname":"\u4e30\u53f0","create_time":1477122861,"lan_co_type":2,"subdistrict_id":29472,"subdistrict_address":"\u653f\u99a8\u56ed3\u533a","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":4,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c5\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791452,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3032,"sub_info":"29472\u001b\u653f\u99a8\u56ed3\u533a\u001b39.844979,116.431653","rent_area":23,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":1,"livingroom":0,"house_type":2,"floor":"17\/26","subdistrict_name":"\u653f\u99a8\u56ed3\u533a","house_source":2,"floor_area":90,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":17,"lan_mobile":"18910677597","bedroom":1,"is_monthly_pay":1,"house_main_image":"580b1b2e3d436.jpg","is_validate":2,"dd_call_id":507,"month_rent":2500,"house_from":0,"area_fid":371,"facilities":"2,3,18","room_type":0,"lan_co_name":"\u98de\u9e3f\u57fa\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193430016001,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u91d1\u745e\u5bb6\u56ed","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u745e\u5bb6\u56ed","","\u4e2d\u5c97\u4f1f\u4e1a \uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_585241ee06744.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1488259725,"latlon":"39.84002,116.43206","rank_weight":74020,"id":"722037","walking_time":12,"bathroom":0,"room_detail":"4\u53f7\u697c1\u5355\u51431502\u5ba4","fname":"\u4e30\u53f0","create_time":1488179462,"lan_co_type":2,"subdistrict_id":29461,"subdistrict_address":"\u9876\u79c0\u91d1\u745e\u5bb6\u56ed","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c10\u5206\u949f","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791399,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":4200,"sub_info":"29461\u001b\u9876\u79c0\u91d1\u745e\u5bb6\u56ed\u001b39.84002,116.43206","rent_area":20,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"15\/18","subdistrict_name":"\u9876\u79c0\u91d1\u745e\u5bb6\u56ed","house_source":2,"floor_area":78,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":15,"lan_mobile":"13311314444","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58b3d109d6b8c.jpg","is_validate":2,"dd_call_id":507,"month_rent":2500,"house_from":0,"area_fid":371,"facilities":"2,3,4,7,109,114,115,116,117","room_type":1,"lan_co_name":"\u4e2d\u5c97\u4f1f\u4e1a \uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193512853504,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u91d1\u745e\u5bb6\u56ed","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u745e\u5bb6\u56ed","","\u4e2d\u5c97\u4f1f\u4e1a \uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_585241ee06744.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1488259725,"latlon":"39.84002,116.43206","rank_weight":74020,"id":"722037","walking_time":12,"bathroom":0,"room_detail":"4\u53f7\u697c1\u5355\u51431502\u5ba4","fname":"\u4e30\u53f0","create_time":1488179462,"lan_co_type":2,"subdistrict_id":29461,"subdistrict_address":"\u9876\u79c0\u91d1\u745e\u5bb6\u56ed","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c10\u5206\u949f","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791399,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":4200,"sub_info":"29461\u001b\u9876\u79c0\u91d1\u745e\u5bb6\u56ed\u001b39.84002,116.43206","rent_area":20,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"15\/18","subdistrict_name":"\u9876\u79c0\u91d1\u745e\u5bb6\u56ed","house_source":2,"floor_area":78,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":15,"lan_mobile":"13311314444","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58b3d109d6b8c.jpg","is_validate":2,"dd_call_id":507,"month_rent":2500,"house_from":0,"area_fid":371,"facilities":"2,3,4,7,109,114,115,116,117","room_type":1,"lan_co_name":"\u4e2d\u5c97\u4f1f\u4e1a \uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193512853504,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u535a\u8fdc\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1489133981,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"742291","walking_time":19,"bathroom":0,"room_detail":"8\u53f7\u697c2\u5355\u51431001\u5ba4","fname":"\u4e30\u53f0","create_time":1489130955,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3266,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":16,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"10\/21","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":76,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":10,"lan_mobile":"13146999920","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58c255cfd127c.jpg","is_validate":2,"dd_call_id":507,"month_rent":2100,"house_from":0,"area_fid":371,"facilities":"2,3,4,7,9,11,12,14,102,103,104,106,109,111,112,114,115,116,117,118,119","room_type":2,"lan_co_name":"\u535a\u8fdc\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193557942272,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u535a\u8fdc\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1489133981,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"742291","walking_time":19,"bathroom":0,"room_detail":"8\u53f7\u697c2\u5355\u51431001\u5ba4","fname":"\u4e30\u53f0","create_time":1489130955,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3266,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":16,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"10\/21","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":76,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":10,"lan_mobile":"13146999920","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58c255cfd127c.jpg","is_validate":2,"dd_call_id":507,"month_rent":2100,"house_from":0,"area_fid":371,"facilities":"2,3,4,7,9,11,12,14,102,103,104,106,109,111,112,114,115,116,117,118,119","room_type":2,"lan_co_name":"\u535a\u8fdc\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193557942272,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u897f\u7ea2\u95e8","text_field":["\u897f\u7ea2\u95e8","\u5927\u5174","\u5927\u5174\u897f\u7ea2\u95e8\u745e\u6d77\u5bb6\u56ed\u4e09\u533a","xihongmen daxing daxingqu \u5927\u5174\u533a","\u745e\u6d77\u5bb6\u56ed\u4e09\u533a","","\u665f\u946b\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5869b0176807d.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":475,"is_charter":0,"refresh_time":1489804178,"latlon":"39.783725,116.332221","rank_weight":74020,"id":"756465","walking_time":11,"bathroom":1,"room_detail":"12\u53f7\u697c1\u5355\u5143501\u5ba4","fname":"\u5927\u5174","create_time":1489760392,"lan_co_type":2,"subdistrict_id":27476,"subdistrict_address":"\u5927\u5174\u897f\u7ea2\u95e8\u745e\u6d77\u5bb6\u56ed\u4e09\u533a","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"4\u53f7\u7ebf\/\u5927\u5174\u7ebf(\u897f\u7ea2\u95e8\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491803922,"show":0,"area_latlon":"39.789800,116.328689","lan_co_id":4465,"sub_info":"27476\u001b\u745e\u6d77\u5bb6\u56ed\u4e09\u533a\u001b39.783725,116.332221","rent_area":25,"is_elevator":2,"synonym_words":"xihongmen daxing daxingqu \u5927\u5174\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"5\/6","subdistrict_name":"\u745e\u6d77\u5bb6\u56ed\u4e09\u533a","house_source":2,"floor_area":94,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":5,"lan_mobile":"15811378681","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e8e66f2225a.jpg","is_validate":2,"dd_call_id":594,"month_rent":2280,"house_from":0,"area_fid":465,"facilities":"2,3,4,5,7","room_type":1,"lan_co_name":"\u665f\u946b\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193597788160,"weight":0},"area_name":"\u897f\u7ea2\u95e8","text_field":["\u897f\u7ea2\u95e8","\u5927\u5174","\u5927\u5174\u897f\u7ea2\u95e8\u745e\u6d77\u5bb6\u56ed\u4e09\u533a","xihongmen daxing daxingqu \u5927\u5174\u533a","\u745e\u6d77\u5bb6\u56ed\u4e09\u533a","","\u665f\u946b\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5869b0176807d.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":475,"is_charter":0,"refresh_time":1489804178,"latlon":"39.783725,116.332221","rank_weight":74020,"id":"756465","walking_time":11,"bathroom":1,"room_detail":"12\u53f7\u697c1\u5355\u5143501\u5ba4","fname":"\u5927\u5174","create_time":1489760392,"lan_co_type":2,"subdistrict_id":27476,"subdistrict_address":"\u5927\u5174\u897f\u7ea2\u95e8\u745e\u6d77\u5bb6\u56ed\u4e09\u533a","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"4\u53f7\u7ebf\/\u5927\u5174\u7ebf(\u897f\u7ea2\u95e8\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491803922,"show":0,"area_latlon":"39.789800,116.328689","lan_co_id":4465,"sub_info":"27476\u001b\u745e\u6d77\u5bb6\u56ed\u4e09\u533a\u001b39.783725,116.332221","rent_area":25,"is_elevator":2,"synonym_words":"xihongmen daxing daxingqu \u5927\u5174\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"5\/6","subdistrict_name":"\u745e\u6d77\u5bb6\u56ed\u4e09\u533a","house_source":2,"floor_area":94,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":5,"lan_mobile":"15811378681","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e8e66f2225a.jpg","is_validate":2,"dd_call_id":594,"month_rent":2280,"house_from":0,"area_fid":465,"facilities":"2,3,4,5,7","room_type":1,"lan_co_name":"\u665f\u946b\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193597788160,"weight":0,"private_bathroom":1},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":1,"area_id":395,"is_charter":0,"refresh_time":1478851471,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"587806","walking_time":16,"bathroom":1,"room_detail":"9\u53f7\u697c1\u5355\u5143301\u5ba4","fname":"\u4e30\u53f0","create_time":1478851470,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":0,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3290,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":89,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":1,"house_type":2,"floor":"15\/20","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":89,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":15,"lan_mobile":"17701243666","bedroom":3,"is_monthly_pay":1,"renter_commission":0,"house_main_image":"oss_582a68dfef4e1.jpg","is_validate":1,"dd_call_id":507,"month_rent":7000,"house_from":1,"area_fid":371,"facilities":"2,3,4,5,7,9,10,14,15,16,17","room_type":0,"lan_co_name":"\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193424773120,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":1,"area_id":395,"is_charter":0,"refresh_time":1478851471,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"587806","walking_time":16,"bathroom":1,"room_detail":"9\u53f7\u697c1\u5355\u5143301\u5ba4","fname":"\u4e30\u53f0","create_time":1478851470,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":0,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3290,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":89,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":1,"house_type":2,"floor":"15\/20","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":89,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":15,"lan_mobile":"17701243666","bedroom":3,"is_monthly_pay":1,"renter_commission":0,"house_main_image":"oss_582a68dfef4e1.jpg","is_validate":1,"dd_call_id":507,"month_rent":7000,"house_from":1,"area_fid":371,"facilities":"2,3,4,5,7,9,10,14,15,16,17","room_type":0,"lan_co_name":"\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193424773120,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u77f3\u69b4\u5e84\u4e8c\u88571\u53f7","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u9890\u5bb6\u56ed","","\u4e2d\u5c97\u4f1f\u4e1a \uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58537883cb164.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1488259255,"latlon":"39.841492,116.432013","rank_weight":74020,"id":"721940","walking_time":11,"bathroom":0,"room_detail":"5\u53f7\u697c1\u5355\u51431502\u5ba4","fname":"\u4e30\u53f0","create_time":1488177974,"lan_co_type":2,"subdistrict_id":44601,"subdistrict_address":"\u77f3\u69b4\u5e84\u4e8c\u88571\u53f7","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c8\u5206\u949f","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791292,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":4200,"sub_info":"44601\u001b\u9876\u79c0\u91d1\u9890\u5bb6\u56ed\u001b39.841492,116.432013","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"15\/27","subdistrict_name":"\u9876\u79c0\u91d1\u9890\u5bb6\u56ed","house_source":2,"floor_area":78,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":15,"lan_mobile":"13311314444","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58b3cb3c2d32e.jpg","is_validate":2,"dd_call_id":507,"month_rent":2000,"house_from":0,"area_fid":371,"facilities":"2,3,4,115,116,117","room_type":2,"lan_co_name":"\u4e2d\u5c97\u4f1f\u4e1a \uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193511804929,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u77f3\u69b4\u5e84\u4e8c\u88571\u53f7","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u9890\u5bb6\u56ed","","\u4e2d\u5c97\u4f1f\u4e1a \uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58537883cb164.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1488259255,"latlon":"39.841492,116.432013","rank_weight":74020,"id":"721940","walking_time":11,"bathroom":0,"room_detail":"5\u53f7\u697c1\u5355\u51431502\u5ba4","fname":"\u4e30\u53f0","create_time":1488177974,"lan_co_type":2,"subdistrict_id":44601,"subdistrict_address":"\u77f3\u69b4\u5e84\u4e8c\u88571\u53f7","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c8\u5206\u949f","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791292,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":4200,"sub_info":"44601\u001b\u9876\u79c0\u91d1\u9890\u5bb6\u56ed\u001b39.841492,116.432013","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"15\/27","subdistrict_name":"\u9876\u79c0\u91d1\u9890\u5bb6\u56ed","house_source":2,"floor_area":78,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":15,"lan_mobile":"13311314444","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58b3cb3c2d32e.jpg","is_validate":2,"dd_call_id":507,"month_rent":2000,"house_from":0,"area_fid":371,"facilities":"2,3,4,115,116,117","room_type":2,"lan_co_name":"\u4e2d\u5c97\u4f1f\u4e1a \uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193511804929,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1489739925,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"755611","walking_time":19,"bathroom":0,"room_detail":"6\u53f7\u697c2\u5355\u5143703\u5ba4","fname":"\u4e30\u53f0","create_time":1489733999,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3290,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":20,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"7\/12","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":68,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":7,"lan_mobile":"17701243666","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58cb8e403e9eb.jpg","is_validate":2,"dd_call_id":507,"month_rent":3000,"house_from":0,"area_fid":371,"facilities":"","room_type":0,"lan_co_name":"\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193592545280,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1489739925,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"755611","walking_time":19,"bathroom":0,"room_detail":"6\u53f7\u697c2\u5355\u5143703\u5ba4","fname":"\u4e30\u53f0","create_time":1489733999,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3290,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":20,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"7\/12","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":68,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":7,"lan_mobile":"17701243666","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58cb8e403e9eb.jpg","is_validate":2,"dd_call_id":507,"month_rent":3000,"house_from":0,"area_fid":371,"facilities":"","room_type":0,"lan_co_name":"\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193592545280,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u897f\u7ea2\u95e8","text_field":["\u897f\u7ea2\u95e8","\u5927\u5174","\u5927\u5174\u897f\u7ea2\u95e8\u745e\u6d77\u5bb6\u56ed\u4e09\u533a","xihongmen daxing daxingqu \u5927\u5174\u533a","\u745e\u6d77\u5bb6\u56ed\u4e09\u533a","","\u665f\u946b\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5869b0176807d.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":475,"is_charter":0,"refresh_time":1489804211,"latlon":"39.783725,116.332221","rank_weight":74020,"id":"756470","walking_time":11,"bathroom":0,"room_detail":"12\u53f7\u697c1\u5355\u5143501\u5ba4","fname":"\u5927\u5174","create_time":1489760474,"lan_co_type":2,"subdistrict_id":27476,"subdistrict_address":"\u5927\u5174\u897f\u7ea2\u95e8\u745e\u6d77\u5bb6\u56ed\u4e09\u533a","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"4\u53f7\u7ebf\/\u5927\u5174\u7ebf(\u897f\u7ea2\u95e8\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491813724,"show":0,"area_latlon":"39.789800,116.328689","lan_co_id":4465,"sub_info":"27476\u001b\u745e\u6d77\u5bb6\u56ed\u4e09\u533a\u001b39.783725,116.332221","rent_area":20,"is_elevator":2,"synonym_words":"xihongmen daxing daxingqu \u5927\u5174\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"5\/6","subdistrict_name":"\u745e\u6d77\u5bb6\u56ed\u4e09\u533a","house_source":2,"floor_area":94,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":5,"lan_mobile":"15811378681","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e8bac5b518e.jpg","is_validate":2,"dd_call_id":594,"month_rent":1450,"house_from":0,"area_fid":465,"facilities":"2,3,4,5,7","room_type":2,"lan_co_name":"\u665f\u946b\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193598836736,"weight":0},"area_name":"\u897f\u7ea2\u95e8","text_field":["\u897f\u7ea2\u95e8","\u5927\u5174","\u5927\u5174\u897f\u7ea2\u95e8\u745e\u6d77\u5bb6\u56ed\u4e09\u533a","xihongmen daxing daxingqu \u5927\u5174\u533a","\u745e\u6d77\u5bb6\u56ed\u4e09\u533a","","\u665f\u946b\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5869b0176807d.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":475,"is_charter":0,"refresh_time":1489804211,"latlon":"39.783725,116.332221","rank_weight":74020,"id":"756470","walking_time":11,"bathroom":0,"room_detail":"12\u53f7\u697c1\u5355\u5143501\u5ba4","fname":"\u5927\u5174","create_time":1489760474,"lan_co_type":2,"subdistrict_id":27476,"subdistrict_address":"\u5927\u5174\u897f\u7ea2\u95e8\u745e\u6d77\u5bb6\u56ed\u4e09\u533a","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"4\u53f7\u7ebf\/\u5927\u5174\u7ebf(\u897f\u7ea2\u95e8\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491813724,"show":0,"area_latlon":"39.789800,116.328689","lan_co_id":4465,"sub_info":"27476\u001b\u745e\u6d77\u5bb6\u56ed\u4e09\u533a\u001b39.783725,116.332221","rent_area":20,"is_elevator":2,"synonym_words":"xihongmen daxing daxingqu \u5927\u5174\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"5\/6","subdistrict_name":"\u745e\u6d77\u5bb6\u56ed\u4e09\u533a","house_source":2,"floor_area":94,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":5,"lan_mobile":"15811378681","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e8bac5b518e.jpg","is_validate":2,"dd_call_id":594,"month_rent":1450,"house_from":0,"area_fid":465,"facilities":"2,3,4,5,7","room_type":2,"lan_co_name":"\u665f\u946b\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193598836736,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1478852993,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"587856","walking_time":16,"bathroom":0,"room_detail":"9\u53f7\u697c1\u5355\u5143301\u5ba4","fname":"\u4e30\u53f0","create_time":1478852993,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":0,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3290,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":23,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"3\/20","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":89,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":3,"lan_mobile":"17701243666","bedroom":1,"is_monthly_pay":1,"renter_commission":0,"house_main_image":"oss_58be4ad9bb702.jpg","is_validate":1,"dd_call_id":507,"month_rent":2400,"house_from":1,"area_fid":371,"facilities":"2,3,4,7,19,109,110,114,115,116,117,119","room_type":1,"lan_co_name":"\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193426870272,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1478852993,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"587856","walking_time":16,"bathroom":0,"room_detail":"9\u53f7\u697c1\u5355\u5143301\u5ba4","fname":"\u4e30\u53f0","create_time":1478852993,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":0,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3290,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":23,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"3\/20","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":89,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":3,"lan_mobile":"17701243666","bedroom":1,"is_monthly_pay":1,"renter_commission":0,"house_main_image":"oss_58be4ad9bb702.jpg","is_validate":1,"dd_call_id":507,"month_rent":2400,"house_from":1,"area_fid":371,"facilities":"2,3,4,7,19,109,110,114,115,116,117,119","room_type":1,"lan_co_name":"\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193426870272,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1489739935,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"755612","walking_time":19,"bathroom":0,"room_detail":"6\u53f7\u697c2\u5355\u5143703\u5ba4","fname":"\u4e30\u53f0","create_time":1489734036,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":1,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3290,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"7\/12","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":68,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":7,"lan_mobile":"17701243666","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58cb8fb912748.jpg","is_validate":2,"dd_call_id":507,"month_rent":2600,"house_from":0,"area_fid":371,"facilities":"","room_type":0,"lan_co_name":"\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193593593856,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1489739935,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"755612","walking_time":19,"bathroom":0,"room_detail":"6\u53f7\u697c2\u5355\u5143703\u5ba4","fname":"\u4e30\u53f0","create_time":1489734036,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":1,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3290,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"7\/12","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":68,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":7,"lan_mobile":"17701243666","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58cb8fb912748.jpg","is_validate":2,"dd_call_id":507,"month_rent":2600,"house_from":0,"area_fid":371,"facilities":"","room_type":0,"lan_co_name":"\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193593593856,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u897f\u7ea2\u95e8","text_field":["\u897f\u7ea2\u95e8","\u5927\u5174","\u5927\u5174\u897f\u7ea2\u95e8\u745e\u6d77\u5bb6\u56ed\u4e09\u533a","xihongmen daxing daxingqu \u5927\u5174\u533a","\u745e\u6d77\u5bb6\u56ed\u4e09\u533a","","\u665f\u946b\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5869b0176807d.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":475,"is_charter":0,"refresh_time":1489804417,"latlon":"39.783725,116.332221","rank_weight":74020,"id":"756476","walking_time":11,"bathroom":0,"room_detail":"25\u53f7\u697c5\u5355\u5143102\u5ba4","fname":"\u5927\u5174","create_time":1489760633,"lan_co_type":2,"subdistrict_id":27476,"subdistrict_address":"\u5927\u5174\u897f\u7ea2\u95e8\u745e\u6d77\u5bb6\u56ed\u4e09\u533a","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"4\u53f7\u7ebf\/\u5927\u5174\u7ebf(\u897f\u7ea2\u95e8\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491813740,"show":0,"area_latlon":"39.789800,116.328689","lan_co_id":4465,"sub_info":"27476\u001b\u745e\u6d77\u5bb6\u56ed\u4e09\u533a\u001b39.783725,116.332221","rent_area":25,"is_elevator":2,"synonym_words":"xihongmen daxing daxingqu \u5927\u5174\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"1\/6","subdistrict_name":"\u745e\u6d77\u5bb6\u56ed\u4e09\u533a","house_source":2,"floor_area":76,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":1,"lan_mobile":"15811378681","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e8b545e6bb1.jpg","is_validate":2,"dd_call_id":594,"month_rent":2200,"house_from":0,"area_fid":465,"facilities":"2,3,4,5,6,7","room_type":1,"lan_co_name":"\u665f\u946b\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193600933888,"weight":0},"area_name":"\u897f\u7ea2\u95e8","text_field":["\u897f\u7ea2\u95e8","\u5927\u5174","\u5927\u5174\u897f\u7ea2\u95e8\u745e\u6d77\u5bb6\u56ed\u4e09\u533a","xihongmen daxing daxingqu \u5927\u5174\u533a","\u745e\u6d77\u5bb6\u56ed\u4e09\u533a","","\u665f\u946b\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5869b0176807d.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":475,"is_charter":0,"refresh_time":1489804417,"latlon":"39.783725,116.332221","rank_weight":74020,"id":"756476","walking_time":11,"bathroom":0,"room_detail":"25\u53f7\u697c5\u5355\u5143102\u5ba4","fname":"\u5927\u5174","create_time":1489760633,"lan_co_type":2,"subdistrict_id":27476,"subdistrict_address":"\u5927\u5174\u897f\u7ea2\u95e8\u745e\u6d77\u5bb6\u56ed\u4e09\u533a","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"4\u53f7\u7ebf\/\u5927\u5174\u7ebf(\u897f\u7ea2\u95e8\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491813740,"show":0,"area_latlon":"39.789800,116.328689","lan_co_id":4465,"sub_info":"27476\u001b\u745e\u6d77\u5bb6\u56ed\u4e09\u533a\u001b39.783725,116.332221","rent_area":25,"is_elevator":2,"synonym_words":"xihongmen daxing daxingqu \u5927\u5174\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"1\/6","subdistrict_name":"\u745e\u6d77\u5bb6\u56ed\u4e09\u533a","house_source":2,"floor_area":76,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":1,"lan_mobile":"15811378681","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e8b545e6bb1.jpg","is_validate":2,"dd_call_id":594,"month_rent":2200,"house_from":0,"area_fid":465,"facilities":"2,3,4,5,6,7","room_type":1,"lan_co_name":"\u665f\u946b\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193600933888,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1478852895,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"587846","walking_time":16,"bathroom":0,"room_detail":"9\u53f7\u697c1\u5355\u5143301\u5ba4","fname":"\u4e30\u53f0","create_time":1478852878,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":0,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3290,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":20,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"3\/20","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":89,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":3,"lan_mobile":"17701243666","bedroom":1,"is_monthly_pay":1,"renter_commission":0,"house_main_image":"oss_582a6845e41dc.jpg","is_validate":1,"dd_call_id":507,"month_rent":2300,"house_from":1,"area_fid":371,"facilities":"2,3,4,5,7,19,109,110,114,115,116,117,119","room_type":2,"lan_co_name":"\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193428967424,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1478852895,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"587846","walking_time":16,"bathroom":0,"room_detail":"9\u53f7\u697c1\u5355\u5143301\u5ba4","fname":"\u4e30\u53f0","create_time":1478852878,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":0,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3290,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":20,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"3\/20","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":89,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":3,"lan_mobile":"17701243666","bedroom":1,"is_monthly_pay":1,"renter_commission":0,"house_main_image":"oss_582a6845e41dc.jpg","is_validate":1,"dd_call_id":507,"month_rent":2300,"house_from":1,"area_fid":371,"facilities":"2,3,4,5,7,19,109,110,114,115,116,117,119","room_type":2,"lan_co_name":"\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193428967424,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1489739867,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"755616","walking_time":19,"bathroom":0,"room_detail":"6\u53f7\u697c2\u5355\u51431103\u5ba4","fname":"\u4e30\u53f0","create_time":1489734136,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3290,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":20,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"11\/12","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":68,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":11,"lan_mobile":"17701243666","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58cb8b8bd1350.jpg","is_validate":2,"dd_call_id":507,"month_rent":3000,"house_from":0,"area_fid":371,"facilities":"","room_type":0,"lan_co_name":"\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193594642432,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1489739867,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"755616","walking_time":19,"bathroom":0,"room_detail":"6\u53f7\u697c2\u5355\u51431103\u5ba4","fname":"\u4e30\u53f0","create_time":1489734136,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3290,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":20,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"11\/12","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":68,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":11,"lan_mobile":"17701243666","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58cb8b8bd1350.jpg","is_validate":2,"dd_call_id":507,"month_rent":3000,"house_from":0,"area_fid":371,"facilities":"","room_type":0,"lan_co_name":"\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193594642432,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u535a\u8fdc\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491542478,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"794968","walking_time":16,"bathroom":0,"room_detail":"6\u53f7\u697c2\u5355\u5143701\u5ba4","fname":"\u4e30\u53f0","create_time":1491541730,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3266,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":18,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"7\/24","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":100,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":7,"lan_mobile":"13146999920","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e7209acb251.jpg","is_validate":2,"dd_call_id":507,"month_rent":2900,"house_from":0,"area_fid":371,"facilities":"","room_type":1,"lan_co_name":"\u535a\u8fdc\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194114736128,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u535a\u8fdc\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491542478,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"794968","walking_time":16,"bathroom":0,"room_detail":"6\u53f7\u697c2\u5355\u5143701\u5ba4","fname":"\u4e30\u53f0","create_time":1491541730,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3266,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":18,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"7\/24","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":100,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":7,"lan_mobile":"13146999920","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e7209acb251.jpg","is_validate":2,"dd_call_id":507,"month_rent":2900,"house_from":0,"area_fid":371,"facilities":"","room_type":1,"lan_co_name":"\u535a\u8fdc\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194114736128,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1489739822,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"755679","walking_time":19,"bathroom":0,"room_detail":"6\u53f7\u697c1\u5355\u51431103\u5ba4","fname":"\u4e30\u53f0","create_time":1489735246,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3290,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":20,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"11\/12","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":68,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":11,"lan_mobile":"17701243666","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58cb93da39511.jpg","is_validate":2,"dd_call_id":507,"month_rent":3000,"house_from":0,"area_fid":371,"facilities":"","room_type":0,"lan_co_name":"\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193595691008,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1489739822,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"755679","walking_time":19,"bathroom":0,"room_detail":"6\u53f7\u697c1\u5355\u51431103\u5ba4","fname":"\u4e30\u53f0","create_time":1489735246,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3290,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":20,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"11\/12","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":68,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":11,"lan_mobile":"17701243666","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58cb93da39511.jpg","is_validate":2,"dd_call_id":507,"month_rent":3000,"house_from":0,"area_fid":371,"facilities":"","room_type":0,"lan_co_name":"\u534e\u4e2d\u4f1f\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193595691008,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u535a\u8fdc\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491542492,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"794973","walking_time":16,"bathroom":0,"room_detail":"6\u53f7\u697c2\u5355\u5143701\u5ba4","fname":"\u4e30\u53f0","create_time":1491541771,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":4,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3266,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"7\/24","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":100,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":7,"lan_mobile":"13146999920","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e720e1c3bf1.jpg","is_validate":2,"dd_call_id":507,"month_rent":2400,"house_from":0,"area_fid":371,"facilities":"","room_type":2,"lan_co_name":"\u535a\u8fdc\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194115784704,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u535a\u8fdc\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491542492,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"794973","walking_time":16,"bathroom":0,"room_detail":"6\u53f7\u697c2\u5355\u5143701\u5ba4","fname":"\u4e30\u53f0","create_time":1491541771,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":4,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3266,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"7\/24","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":100,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":7,"lan_mobile":"13146999920","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e720e1c3bf1.jpg","is_validate":2,"dd_call_id":507,"month_rent":2400,"house_from":0,"area_fid":371,"facilities":"","room_type":2,"lan_co_name":"\u535a\u8fdc\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194115784704,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491015736,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"782497","walking_time":19,"bathroom":0,"room_detail":"16\u53f7\u697c3\u5355\u5143302\u5ba4","fname":"\u4e30\u53f0","create_time":1490941731,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":20,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"3\/9","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":90,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":3,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58ddf858080ec.jpg","is_validate":2,"dd_call_id":507,"month_rent":3500,"house_from":0,"area_fid":371,"facilities":"1,2,3,4,5,6,7","room_type":0,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193857835008,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491015736,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"782497","walking_time":19,"bathroom":0,"room_detail":"16\u53f7\u697c3\u5355\u5143302\u5ba4","fname":"\u4e30\u53f0","create_time":1490941731,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":20,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"3\/9","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":90,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":3,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58ddf858080ec.jpg","is_validate":2,"dd_call_id":507,"month_rent":3500,"house_from":0,"area_fid":371,"facilities":"1,2,3,4,5,6,7","room_type":0,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193857835008,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u535a\u8fdc\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491542504,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"794974","walking_time":16,"bathroom":0,"room_detail":"6\u53f7\u697c2\u5355\u5143701\u5ba4","fname":"\u4e30\u53f0","create_time":1491541784,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":4,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3266,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"7\/24","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":100,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":7,"lan_mobile":"13146999920","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e721b7ea5f9.jpg","is_validate":2,"dd_call_id":507,"month_rent":2500,"house_from":0,"area_fid":371,"facilities":"","room_type":2,"lan_co_name":"\u535a\u8fdc\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194116833280,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u535a\u8fdc\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491542504,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"794974","walking_time":16,"bathroom":0,"room_detail":"6\u53f7\u697c2\u5355\u5143701\u5ba4","fname":"\u4e30\u53f0","create_time":1491541784,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":4,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3266,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"7\/24","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":100,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":7,"lan_mobile":"13146999920","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e721b7ea5f9.jpg","is_validate":2,"dd_call_id":507,"month_rent":2500,"house_from":0,"area_fid":371,"facilities":"","room_type":2,"lan_co_name":"\u535a\u8fdc\u7f6e\u5730\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194116833280,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491015731,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"782502","walking_time":19,"bathroom":0,"room_detail":"16\u53f7\u697c3\u5355\u5143302\u5ba4","fname":"\u4e30\u53f0","create_time":1490941764,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":18,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"3\/9","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":90,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":3,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58ddf959d4270.jpg","is_validate":2,"dd_call_id":507,"month_rent":2500,"house_from":0,"area_fid":371,"facilities":"1,3,4,5,6,7","room_type":0,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193857835009,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491015731,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"782502","walking_time":19,"bathroom":0,"room_detail":"16\u53f7\u697c3\u5355\u5143302\u5ba4","fname":"\u4e30\u53f0","create_time":1490941764,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":18,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"3\/9","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":90,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":3,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58ddf959d4270.jpg","is_validate":2,"dd_call_id":507,"month_rent":2500,"house_from":0,"area_fid":371,"facilities":"1,3,4,5,6,7","room_type":0,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193857835009,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u98de\u9e3f\u57fa\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491544512,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"795042","walking_time":16,"bathroom":0,"room_detail":"4\u53f7\u697c2\u5355\u5143601\u5ba4","fname":"\u4e30\u53f0","create_time":1491543257,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3032,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":18,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":1,"livingroom":0,"house_type":2,"floor":"6\/19","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":100,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":6,"lan_mobile":"18910677597","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e72678353eb.jpg","is_validate":2,"dd_call_id":507,"month_rent":2400,"house_from":0,"area_fid":371,"facilities":"","room_type":1,"lan_co_name":"\u98de\u9e3f\u57fa\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194123124736,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u98de\u9e3f\u57fa\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491544512,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"795042","walking_time":16,"bathroom":0,"room_detail":"4\u53f7\u697c2\u5355\u5143601\u5ba4","fname":"\u4e30\u53f0","create_time":1491543257,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3032,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":18,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":1,"livingroom":0,"house_type":2,"floor":"6\/19","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":100,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":6,"lan_mobile":"18910677597","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e72678353eb.jpg","is_validate":2,"dd_call_id":507,"month_rent":2400,"house_from":0,"area_fid":371,"facilities":"","room_type":1,"lan_co_name":"\u98de\u9e3f\u57fa\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194123124736,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491017945,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"782620","walking_time":19,"bathroom":0,"room_detail":"16\u53f7\u697c3\u5355\u5143901\u5ba4","fname":"\u4e30\u53f0","create_time":1490943491,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":30,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"9\/9","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":120,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":9,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58ddfe080c49e.jpg","is_validate":2,"dd_call_id":507,"month_rent":2800,"house_from":0,"area_fid":371,"facilities":"1,2,3,4,5,6,7,101,102,103,104,105,106,107","room_type":0,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193865175040,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491017945,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"782620","walking_time":19,"bathroom":0,"room_detail":"16\u53f7\u697c3\u5355\u5143901\u5ba4","fname":"\u4e30\u53f0","create_time":1490943491,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":30,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"9\/9","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":120,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":9,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58ddfe080c49e.jpg","is_validate":2,"dd_call_id":507,"month_rent":2800,"house_from":0,"area_fid":371,"facilities":"1,2,3,4,5,6,7,101,102,103,104,105,106,107","room_type":0,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193865175040,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u98de\u9e3f\u57fa\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491544537,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"795046","walking_time":16,"bathroom":0,"room_detail":"4\u53f7\u697c2\u5355\u5143601\u5ba4","fname":"\u4e30\u53f0","create_time":1491543289,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":4,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3032,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":1,"livingroom":0,"house_type":2,"floor":"6\/19","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":100,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":6,"lan_mobile":"18910677597","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e727e20af88.jpg","is_validate":2,"dd_call_id":507,"month_rent":2100,"house_from":0,"area_fid":371,"facilities":"","room_type":2,"lan_co_name":"\u98de\u9e3f\u57fa\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194124173312,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u98de\u9e3f\u57fa\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491544537,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"795046","walking_time":16,"bathroom":0,"room_detail":"4\u53f7\u697c2\u5355\u5143601\u5ba4","fname":"\u4e30\u53f0","create_time":1491543289,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":4,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3032,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":1,"livingroom":0,"house_type":2,"floor":"6\/19","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":100,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":6,"lan_mobile":"18910677597","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e727e20af88.jpg","is_validate":2,"dd_call_id":507,"month_rent":2100,"house_from":0,"area_fid":371,"facilities":"","room_type":2,"lan_co_name":"\u98de\u9e3f\u57fa\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194124173312,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491017955,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"782641","walking_time":19,"bathroom":0,"room_detail":"16\u53f7\u697c3\u5355\u5143901\u5ba4","fname":"\u4e30\u53f0","create_time":1490943717,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":20,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"9\/9","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":120,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":9,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58ddfeea0c54b.jpg","is_validate":2,"dd_call_id":507,"month_rent":2500,"house_from":0,"area_fid":371,"facilities":"1,2,3,4,5,6,7,101,102,103,104,105,106,107","room_type":0,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193867272192,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491017955,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"782641","walking_time":19,"bathroom":0,"room_detail":"16\u53f7\u697c3\u5355\u5143901\u5ba4","fname":"\u4e30\u53f0","create_time":1490943717,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":20,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"9\/9","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":120,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":9,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58ddfeea0c54b.jpg","is_validate":2,"dd_call_id":507,"month_rent":2500,"house_from":0,"area_fid":371,"facilities":"1,2,3,4,5,6,7,101,102,103,104,105,106,107","room_type":0,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193867272192,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491550668,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"795493","walking_time":16,"bathroom":0,"room_detail":"4\u53f7\u697c1\u5355\u51431402\u5ba4","fname":"\u4e30\u53f0","create_time":1491549912,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3128,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"14\/19","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":80,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":14,"lan_mobile":"13311162329","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e7406c39beb.jpg","is_validate":2,"dd_call_id":507,"month_rent":3200,"house_from":0,"area_fid":371,"facilities":"","room_type":1,"lan_co_name":"\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194193379328,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491550668,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"795493","walking_time":16,"bathroom":0,"room_detail":"4\u53f7\u697c1\u5355\u51431402\u5ba4","fname":"\u4e30\u53f0","create_time":1491549912,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3128,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"14\/19","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":80,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":14,"lan_mobile":"13311162329","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e7406c39beb.jpg","is_validate":2,"dd_call_id":507,"month_rent":3200,"house_from":0,"area_fid":371,"facilities":"","room_type":1,"lan_co_name":"\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194193379328,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491017963,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"782647","walking_time":19,"bathroom":0,"room_detail":"16\u53f7\u697c3\u5355\u5143901\u5ba4","fname":"\u4e30\u53f0","create_time":1490943957,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":20,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"9\/9","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":120,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":9,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58ddffd97fb06.jpg","is_validate":2,"dd_call_id":507,"month_rent":2200,"house_from":0,"area_fid":371,"facilities":"1,2,3,4,5,6,7,101,102,103,104,105,106,107","room_type":0,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193868320768,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491017963,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"782647","walking_time":19,"bathroom":0,"room_detail":"16\u53f7\u697c3\u5355\u5143901\u5ba4","fname":"\u4e30\u53f0","create_time":1490943957,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":20,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"9\/9","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":120,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":9,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58ddffd97fb06.jpg","is_validate":2,"dd_call_id":507,"month_rent":2200,"house_from":0,"area_fid":371,"facilities":"1,2,3,4,5,6,7,101,102,103,104,105,106,107","room_type":0,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371193868320768,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491550683,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"795497","walking_time":16,"bathroom":0,"room_detail":"4\u53f7\u697c1\u5355\u51431402\u5ba4","fname":"\u4e30\u53f0","create_time":1491549940,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3128,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":18,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"14\/19","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":80,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":14,"lan_mobile":"13311162329","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e7417fc12ac.jpg","is_validate":2,"dd_call_id":507,"month_rent":3000,"house_from":0,"area_fid":371,"facilities":"","room_type":2,"lan_co_name":"\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194195476480,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491550683,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"795497","walking_time":16,"bathroom":0,"room_detail":"4\u53f7\u697c1\u5355\u51431402\u5ba4","fname":"\u4e30\u53f0","create_time":1491549940,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3128,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":18,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"14\/19","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":80,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":14,"lan_mobile":"13311162329","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e7417fc12ac.jpg","is_validate":2,"dd_call_id":507,"month_rent":3000,"house_from":0,"area_fid":371,"facilities":"","room_type":2,"lan_co_name":"\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194195476480,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u98de\u9e3f\u57fa\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491469160,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"793452","walking_time":19,"bathroom":0,"room_detail":"3\u53f7\u697c2\u5355\u5143703\u5ba4","fname":"\u4e30\u53f0","create_time":1491468934,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3032,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":1,"livingroom":0,"house_type":2,"floor":"7\/18","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":70,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":7,"lan_mobile":"18910677597","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e604acae613.jpg","is_validate":2,"dd_call_id":507,"month_rent":2000,"house_from":0,"area_fid":371,"facilities":"","room_type":2,"lan_co_name":"\u98de\u9e3f\u57fa\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194054967297,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u98de\u9e3f\u57fa\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491469160,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"793452","walking_time":19,"bathroom":0,"room_detail":"3\u53f7\u697c2\u5355\u5143703\u5ba4","fname":"\u4e30\u53f0","create_time":1491468934,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3032,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":1,"livingroom":0,"house_type":2,"floor":"7\/18","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":70,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":7,"lan_mobile":"18910677597","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e604acae613.jpg","is_validate":2,"dd_call_id":507,"month_rent":2000,"house_from":0,"area_fid":371,"facilities":"","room_type":2,"lan_co_name":"\u98de\u9e3f\u57fa\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194054967297,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491646662,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"797215","walking_time":16,"bathroom":0,"room_detail":"3\u53f7\u697c1\u5355\u51431503\u5ba4","fname":"\u4e30\u53f0","create_time":1491637833,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"15\/24","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":80,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":15,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e897912455e.jpg","is_validate":2,"dd_call_id":507,"month_rent":2900,"house_from":0,"area_fid":371,"facilities":"","room_type":0,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194266779648,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491646662,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"797215","walking_time":16,"bathroom":0,"room_detail":"3\u53f7\u697c1\u5355\u51431503\u5ba4","fname":"\u4e30\u53f0","create_time":1491637833,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"15\/24","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":80,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":15,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e897912455e.jpg","is_validate":2,"dd_call_id":507,"month_rent":2900,"house_from":0,"area_fid":371,"facilities":"","room_type":0,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194266779648,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u98de\u9e3f\u57fa\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491469142,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"793454","walking_time":19,"bathroom":0,"room_detail":"3\u53f7\u697c2\u5355\u5143703\u5ba4","fname":"\u4e30\u53f0","create_time":1491468954,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3032,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":1,"livingroom":0,"house_type":2,"floor":"7\/18","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":70,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":7,"lan_mobile":"18910677597","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e60625c4970.jpg","is_validate":2,"dd_call_id":507,"month_rent":2100,"house_from":0,"area_fid":371,"facilities":"","room_type":1,"lan_co_name":"\u98de\u9e3f\u57fa\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194056015872,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u98de\u9e3f\u57fa\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491469142,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"793454","walking_time":19,"bathroom":0,"room_detail":"3\u53f7\u697c2\u5355\u5143703\u5ba4","fname":"\u4e30\u53f0","create_time":1491468954,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3032,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":1,"livingroom":0,"house_type":2,"floor":"7\/18","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":70,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":7,"lan_mobile":"18910677597","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e60625c4970.jpg","is_validate":2,"dd_call_id":507,"month_rent":2100,"house_from":0,"area_fid":371,"facilities":"","room_type":1,"lan_co_name":"\u98de\u9e3f\u57fa\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194056015872,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491646667,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"797220","walking_time":16,"bathroom":0,"room_detail":"3\u53f7\u697c1\u5355\u51431503\u5ba4","fname":"\u4e30\u53f0","create_time":1491637875,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"15\/24","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":80,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":15,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e8989c6f390.jpg","is_validate":2,"dd_call_id":507,"month_rent":2700,"house_from":0,"area_fid":371,"facilities":"","room_type":0,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194266779649,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u91d1\u6865\u4e1c\u88576\u53f7\u9662","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_58524146c36c9.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491646667,"latlon":"39.836355,116.431157","rank_weight":74020,"id":"797220","walking_time":16,"bathroom":0,"room_detail":"3\u53f7\u697c1\u5355\u51431503\u5ba4","fname":"\u4e30\u53f0","create_time":1491637875,"lan_co_type":2,"subdistrict_id":29460,"subdistrict_address":"\u91d1\u6865\u4e1c\u88576\u53f7\u9662","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c14\u5206\u949f","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791360,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"29460\u001b\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed\u001b39.836355,116.431157","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"15\/24","subdistrict_name":"\u9876\u79c0\u91d1\u77f3\u5bb6\u56ed","house_source":2,"floor_area":80,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":15,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e8989c6f390.jpg","is_validate":2,"dd_call_id":507,"month_rent":2700,"house_from":0,"area_fid":371,"facilities":"","room_type":0,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194266779649,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u98de\u9e3f\u57fa\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491469152,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"793455","walking_time":19,"bathroom":0,"room_detail":"3\u53f7\u697c2\u5355\u5143703\u5ba4","fname":"\u4e30\u53f0","create_time":1491468971,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3032,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":10,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":1,"livingroom":0,"house_type":2,"floor":"7\/18","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":70,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":7,"lan_mobile":"18910677597","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e60756c3a1d.jpg","is_validate":2,"dd_call_id":507,"month_rent":1800,"house_from":0,"area_fid":371,"facilities":"","room_type":2,"lan_co_name":"\u98de\u9e3f\u57fa\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194057064448,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u98de\u9e3f\u57fa\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491469152,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"793455","walking_time":19,"bathroom":0,"room_detail":"3\u53f7\u697c2\u5355\u5143703\u5ba4","fname":"\u4e30\u53f0","create_time":1491468971,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3032,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":10,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":1,"livingroom":0,"house_type":2,"floor":"7\/18","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":70,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":7,"lan_mobile":"18910677597","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e60756c3a1d.jpg","is_validate":2,"dd_call_id":507,"month_rent":1800,"house_from":0,"area_fid":371,"facilities":"","room_type":2,"lan_co_name":"\u98de\u9e3f\u57fa\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194057064448,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":1,"area_id":395,"is_charter":0,"refresh_time":1491471647,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"793536","walking_time":19,"bathroom":1,"room_detail":"7\u53f7\u697c1\u5355\u51431804\u5ba4","fname":"\u4e30\u53f0","create_time":1491470697,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":0,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":60,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":1,"house_type":2,"floor":"18\/21","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":60,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":18,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e60c3dd1bae.jpg","is_validate":2,"dd_call_id":507,"month_rent":4300,"house_from":0,"area_fid":371,"facilities":"","room_type":0,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194063355904,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":1,"area_id":395,"is_charter":0,"refresh_time":1491471647,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"793536","walking_time":19,"bathroom":1,"room_detail":"7\u53f7\u697c1\u5355\u51431804\u5ba4","fname":"\u4e30\u53f0","create_time":1491470697,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":0,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":60,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":1,"house_type":2,"floor":"18\/21","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":60,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":18,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e60c3dd1bae.jpg","is_validate":2,"dd_call_id":507,"month_rent":4300,"house_from":0,"area_fid":371,"facilities":"","room_type":0,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194063355904,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":1,"area_id":395,"is_charter":0,"refresh_time":1491471613,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"793550","walking_time":19,"bathroom":1,"room_detail":"5\u53f7\u697c2\u5355\u5143504\u5ba4","fname":"\u4e30\u53f0","create_time":1491470925,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":0,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":60,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":1,"house_type":2,"floor":"5\/21","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":60,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":5,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e60e0795529.jpg","is_validate":2,"dd_call_id":507,"month_rent":4500,"house_from":0,"area_fid":371,"facilities":"","room_type":0,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194064404480,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":1,"area_id":395,"is_charter":0,"refresh_time":1491471613,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"793550","walking_time":19,"bathroom":1,"room_detail":"5\u53f7\u697c2\u5355\u5143504\u5ba4","fname":"\u4e30\u53f0","create_time":1491470925,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":0,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":60,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":1,"house_type":2,"floor":"5\/21","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":60,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":5,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e60e0795529.jpg","is_validate":2,"dd_call_id":507,"month_rent":4500,"house_from":0,"area_fid":371,"facilities":"","room_type":0,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194064404480,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491472418,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"793618","walking_time":19,"bathroom":0,"room_detail":"1\u53f7\u697c2\u5355\u51431604\u5ba4","fname":"\u4e30\u53f0","create_time":1491471863,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":18,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"16\/21","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":70,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":16,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e6128bbbf04.jpg","is_validate":2,"dd_call_id":507,"month_rent":2600,"house_from":0,"area_fid":371,"facilities":"","room_type":1,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194067550208,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491472418,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"793618","walking_time":19,"bathroom":0,"room_detail":"1\u53f7\u697c2\u5355\u51431604\u5ba4","fname":"\u4e30\u53f0","create_time":1491471863,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":18,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"16\/21","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":70,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":16,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e6128bbbf04.jpg","is_validate":2,"dd_call_id":507,"month_rent":2600,"house_from":0,"area_fid":371,"facilities":"","room_type":1,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194067550208,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491472427,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"793622","walking_time":19,"bathroom":0,"room_detail":"1\u53f7\u697c2\u5355\u51431604\u5ba4","fname":"\u4e30\u53f0","create_time":1491471900,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":12,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"16\/21","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":70,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":16,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e61094e1750.jpg","is_validate":2,"dd_call_id":507,"month_rent":2300,"house_from":0,"area_fid":371,"facilities":"","room_type":2,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194067550209,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491472427,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"793622","walking_time":19,"bathroom":0,"room_detail":"1\u53f7\u697c2\u5355\u51431604\u5ba4","fname":"\u4e30\u53f0","create_time":1491471900,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":12,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"16\/21","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":70,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":16,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e61094e1750.jpg","is_validate":2,"dd_call_id":507,"month_rent":2300,"house_from":0,"area_fid":371,"facilities":"","room_type":2,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194067550209,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491542010,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"794811","walking_time":19,"bathroom":0,"room_detail":"5\u53f7\u697c2\u5355\u51432005\u5ba4","fname":"\u4e30\u53f0","create_time":1491537713,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":4,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":18,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"20\/21","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":80,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":20,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e7122257dea.jpg","is_validate":2,"dd_call_id":507,"month_rent":2100,"house_from":0,"area_fid":371,"facilities":"","room_type":2,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194105298944,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491542010,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"794811","walking_time":19,"bathroom":0,"room_detail":"5\u53f7\u697c2\u5355\u51432005\u5ba4","fname":"\u4e30\u53f0","create_time":1491537713,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":4,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":18,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"20\/21","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":80,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":20,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e7122257dea.jpg","is_validate":2,"dd_call_id":507,"month_rent":2100,"house_from":0,"area_fid":371,"facilities":"","room_type":2,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194105298944,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491541733,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"794900","walking_time":19,"bathroom":0,"room_detail":"6\u53f7\u697c1\u5355\u5143103\u5ba4","fname":"\u4e30\u53f0","create_time":1491539690,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"1\/12","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":60,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":1,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e7189fe360f.jpg","is_validate":2,"dd_call_id":507,"month_rent":2200,"house_from":0,"area_fid":371,"facilities":"","room_type":1,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194111590400,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491541733,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"794900","walking_time":19,"bathroom":0,"room_detail":"6\u53f7\u697c1\u5355\u5143103\u5ba4","fname":"\u4e30\u53f0","create_time":1491539690,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"1\/12","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":60,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":1,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e7189fe360f.jpg","is_validate":2,"dd_call_id":507,"month_rent":2200,"house_from":0,"area_fid":371,"facilities":"","room_type":1,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194111590400,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491541746,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"794903","walking_time":19,"bathroom":0,"room_detail":"6\u53f7\u697c1\u5355\u5143103\u5ba4","fname":"\u4e30\u53f0","create_time":1491539719,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":3,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":10,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"1\/12","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":60,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":1,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e718668fa43.jpg","is_validate":2,"dd_call_id":507,"month_rent":2000,"house_from":0,"area_fid":371,"facilities":"","room_type":2,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194112638976,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491541746,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"794903","walking_time":19,"bathroom":0,"room_detail":"6\u53f7\u697c1\u5355\u5143103\u5ba4","fname":"\u4e30\u53f0","create_time":1491539719,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":3,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":11,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3447,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":10,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"1\/12","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":60,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":1,"lan_mobile":"17746569757","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e718668fa43.jpg","is_validate":2,"dd_call_id":507,"month_rent":2000,"house_from":0,"area_fid":371,"facilities":"","room_type":2,"lan_co_name":"\u5609\u4fe1\u5b9d\u4e1a\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194112638976,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491554790,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"795669","walking_time":19,"bathroom":0,"room_detail":"6\u53f7\u697c3\u5355\u5143602\u5ba4","fname":"\u4e30\u53f0","create_time":1491551944,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3128,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"6\/19","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":70,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":6,"lan_mobile":"13311162329","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e74b069073c.jpg","is_validate":2,"dd_call_id":507,"month_rent":2600,"house_from":0,"area_fid":371,"facilities":"","room_type":1,"lan_co_name":"\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194205962241,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491554790,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"795669","walking_time":19,"bathroom":0,"room_detail":"6\u53f7\u697c3\u5355\u5143602\u5ba4","fname":"\u4e30\u53f0","create_time":1491551944,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3128,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"6\/19","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":70,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":6,"lan_mobile":"13311162329","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e74b069073c.jpg","is_validate":2,"dd_call_id":507,"month_rent":2600,"house_from":0,"area_fid":371,"facilities":"","room_type":1,"lan_co_name":"\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194205962241,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491554802,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"795674","walking_time":19,"bathroom":0,"room_detail":"6\u53f7\u697c3\u5355\u5143602\u5ba4","fname":"\u4e30\u53f0","create_time":1491551973,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":1,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3128,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"6\/19","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":70,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":6,"lan_mobile":"13311162329","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e749483c978.jpg","is_validate":2,"dd_call_id":507,"month_rent":2500,"house_from":0,"area_fid":371,"facilities":"","room_type":2,"lan_co_name":"\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194207010816,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491554802,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"795674","walking_time":19,"bathroom":0,"room_detail":"6\u53f7\u697c3\u5355\u5143602\u5ba4","fname":"\u4e30\u53f0","create_time":1491551973,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":1,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3128,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"6\/19","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":70,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":6,"lan_mobile":"13311162329","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e749483c978.jpg","is_validate":2,"dd_call_id":507,"month_rent":2500,"house_from":0,"area_fid":371,"facilities":"","room_type":2,"lan_co_name":"\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194207010816,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491554724,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"795684","walking_time":19,"bathroom":0,"room_detail":"6\u53f7\u697c3\u5355\u5143603\u5ba4","fname":"\u4e30\u53f0","create_time":1491552156,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3128,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"6\/19","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":70,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":6,"lan_mobile":"13311162329","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e7492022a76.jpg","is_validate":2,"dd_call_id":507,"month_rent":2500,"house_from":0,"area_fid":371,"facilities":"","room_type":1,"lan_co_name":"\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194208059392,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491554724,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"795684","walking_time":19,"bathroom":0,"room_detail":"6\u53f7\u697c3\u5355\u5143603\u5ba4","fname":"\u4e30\u53f0","create_time":1491552156,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":2,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3128,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"6\/19","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":70,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":6,"lan_mobile":"13311162329","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e7492022a76.jpg","is_validate":2,"dd_call_id":507,"month_rent":2500,"house_from":0,"area_fid":371,"facilities":"","room_type":1,"lan_co_name":"\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194208059392,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491554734,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"795687","walking_time":19,"bathroom":0,"room_detail":"6\u53f7\u697c3\u5355\u5143603\u5ba4","fname":"\u4e30\u53f0","create_time":1491552169,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":3,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3128,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"6\/19","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":70,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":6,"lan_mobile":"13311162329","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e74a14871e0.jpg","is_validate":2,"dd_call_id":507,"month_rent":2400,"house_from":0,"area_fid":371,"facilities":"","room_type":2,"lan_co_name":"\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194209107968,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491554734,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"795687","walking_time":19,"bathroom":0,"room_detail":"6\u53f7\u697c3\u5355\u5143603\u5ba4","fname":"\u4e30\u53f0","create_time":1491552169,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":3,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3128,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":15,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"6\/19","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":70,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":6,"lan_mobile":"13311162329","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e74a14871e0.jpg","is_validate":2,"dd_call_id":507,"month_rent":2400,"house_from":0,"area_fid":371,"facilities":"","room_type":2,"lan_co_name":"\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194209107968,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":1,"area_id":395,"is_charter":0,"refresh_time":1491646895,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"797039","walking_time":19,"bathroom":1,"room_detail":"13\u53f7\u697c2\u5355\u5143703\u5ba4","fname":"\u4e30\u53f0","create_time":1491634192,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":0,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3128,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":50,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":1,"house_type":2,"floor":"7\/18","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":50,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":7,"lan_mobile":"13311162329","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e88d1730d27.jpg","is_validate":2,"dd_call_id":507,"month_rent":4300,"house_from":0,"area_fid":371,"facilities":"","room_type":0,"lan_co_name":"\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194260488192,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":1,"area_id":395,"is_charter":0,"refresh_time":1491646895,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"797039","walking_time":19,"bathroom":1,"room_detail":"13\u53f7\u697c2\u5355\u5143703\u5ba4","fname":"\u4e30\u53f0","create_time":1491634192,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":0,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3128,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":50,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":1,"house_type":2,"floor":"7\/18","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":50,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":7,"lan_mobile":"13311162329","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e88d1730d27.jpg","is_validate":2,"dd_call_id":507,"month_rent":4300,"house_from":0,"area_fid":371,"facilities":"","room_type":0,"lan_co_name":"\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194260488192,"weight":0,"private_bathroom":0},{"data":{"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491646839,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"797102","walking_time":19,"bathroom":0,"room_detail":"13\u53f7\u697c3\u5355\u5143701\u5ba4","fname":"\u4e30\u53f0","create_time":1491635371,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":4,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3128,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":18,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"7\/19","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":110,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":7,"lan_mobile":"13311162329","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e895d95c7ee.jpg","is_validate":2,"dd_call_id":507,"month_rent":2200,"house_from":0,"area_fid":371,"facilities":"","room_type":0,"lan_co_name":"\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194263633920,"weight":0},"area_name":"\u5b8b\u5bb6\u5e84","text_field":["\u5b8b\u5bb6\u5e84","\u4e30\u53f0","\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","\u6021\u548c\u4e16\u5bb6","","\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09"],"pic_main":"\/Uploads\/housephoto\/0\/0\/oss_5864ccad9461a.png@!blth","is_jingzhuang":0,"hire_way":2,"area_id":395,"is_charter":0,"refresh_time":1491646839,"latlon":"39.837592,116.424302","rank_weight":74020,"id":"797102","walking_time":19,"bathroom":0,"room_detail":"13\u53f7\u697c3\u5355\u5143701\u5ba4","fname":"\u4e30\u53f0","create_time":1491635371,"lan_co_type":2,"subdistrict_id":23953,"subdistrict_address":"\u9876\u79c0\u6b23\u56ed\u897f\u82d1\u897f\u5357\u8fb9","has_yangtai":0,"is_duchu":0,"acstatus":1,"house_device_id":0,"city_id":238,"room_direction":4,"virtual_house_id":0,"s_subway_desc":"5\u53f7\u7ebf;10\u53f7\u7ebf;\u4ea6\u5e84\u7ebf(\u5b8b\u5bb6\u5e84\u7ad9)\uff0c\u6b65\u884c12\u5206\u949f|10\u53f7\u7ebf(\u77f3\u69b4\u5e84\u7ad9)","miaotui":0,"virtual":0,"auth_level":2,"house_status":0,"modify_time":1491791508,"show":0,"area_latlon":"39.845849,116.428368","lan_co_id":3128,"sub_info":"23953\u001b\u6021\u548c\u4e16\u5bb6\u001b39.837592,116.424302","rent_area":18,"is_elevator":1,"synonym_words":"songjiazhuang fengtai fengtaiqu \u4e30\u53f0\u533a","renter_finance":2,"livingroom":0,"house_type":2,"floor":"7\/19","subdistrict_name":"\u6021\u548c\u4e16\u5bb6","house_source":2,"floor_area":110,"is_yuanfang":0,"subway_desc":[""],"is_appliance_complete":0,"discount_type":0,"hfloor":7,"lan_mobile":"13311162329","bedroom":1,"is_monthly_pay":1,"house_main_image":"oss_58e895d95c7ee.jpg","is_validate":2,"dd_call_id":507,"month_rent":2200,"house_from":0,"area_fid":371,"facilities":"","room_type":0,"lan_co_name":"\u5b89\u6cf0\u5b89\u5bb6\uff08\u5206\u6563\u5f0f\uff09","_version_":1564371194263633920,"weight":0,"private_bathroom":0}]';
	</script>

	<!--page numble end-->
	
</div>

<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/search.js"></script>
<script src="js/jquery.lazyload.js"></script>
<div class="slogan">
    <div class="out">
        <ul class="clearfix">
            <li>
                <p><i class="icon icon-zhen"></i></p>
                <h4>房源实拍</h4>
            </li>
            <li>
                <p><i class="icon icon-mian"></i></p>
                <h4>0元佣金</h4>
            </li>
            <li>
                <p><i class="icon icon-yue"></i></p>
                <h4>房租月付</h4>
            </li>
            <li>
                <p><i class="icon icon-yu"></i></p>
                <h4>在线预约</h4>
            </li>
            <li>
                <p><i class="icon icon-zu"></i></p>
                <h4>在线服务</h4>
            </li>

        </ul>
    </div>
</div>
<div class="foot">
    <div class="out clearfix">
        <div class="foot-l about-link">
            <dl>
                <dt>关于我们</dt>
                <dd class="">
                    <a href="/about">关于我们</a>
                    <a href="http://partner.baletu.com">伙伴登录</a>
                </dd>
            </dl>
            <dl>
                <dt>合作公寓</dt>
                <dd>
                    <span>青年汇</span>
                    <span>银桥公寓</span>
                    <span>爱家精品公寓 ...</span>
                </dd>
            </dl>
        </div>
        <div class="foot-l about-link">
            <dl>
                <dt>意见反馈</dt>
                <dd><a href="mailto:service@baletu.com">Mail：service@baletu.com</a></dd>
            </dl>
            <dl>
                <dt><a href = "/contact">联系我们</a></dt>
                <dd class="">
                <a href="/contact">周一～周日   8:00～23:00   400-183-0033</a>
                </dd>
            </dl>
        </div>
        <div class="foot-r clearfix">
            <div class="code-pic" style="display: none;">
                <img id="foot_download_app" mark="底部" src="picture/codepicnew01.png" />
                <p>扫码下载巴乐兔APP</p>
            </div>
            <div class="code-pic">
                <img src="picture/codepic02.jpg" />
                <p>扫码关注微信号</p>
            </div>
        </div>
        <div class="clear"></div>
                </div>
    </div>
</div>
<div class="foot-pc"> ©2015  上海万间信息技术有限公司   &nbsp; &nbsp;     沪ICP备15004537号   &nbsp; &nbsp;     张江高科晨晖路88号1号楼4层</div>
<script>
	$(function() {
		$("img.lazy").lazyload({

			effect : "fadeIn"
		});
	});
</script>

<script>
    seajs.use("monitor",function(mc){
        mc.bindMonitor();
    });

</script>

<noscript>
    <div style="display:none;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/869793451/?guid=ON&amp;script=0"/>
    </div>
</noscript>

