<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>金融炼金术 新建主题</title>
    <link href="/runmoney/Public/V1/css/global.css" rel="stylesheet" media="screen" />
    <link href="/runmoney/Public/V1/css/topic.css" rel="stylesheet" media="screen" />
</head>
<body>
    <!-- 导航 start -->
<div class="mod_navigation_1">
    <div class="wrap">
        <div class="logo">
            <div class="logo_img">
                <span class="hidden">金融炼金术</span>
            </div>

            <?php if($logined == 'false'): ?><!-- 登陆前 start -->
                <div class="login" style="">
                    <a href="#" class="btn btn_red login_btn">立即登录</a>
                    <div class="links">
                        <p>没有账号？<a href="<?php echo U('User/register');?>" class="link">立即注册</a></p>
                    </div>
                </div>
                <?php else: ?>
                <!-- 登录前 end -->
                <div class="login login_success">
                    <!-- 登陆后 start -->
                    <a href="<?php echo U('Center/setting');?>" class="photo"><img src="/runmoney/Public/V1/image/img-4.png"></a>
                    <div class="user_info">
                        <p class="user_name">
                            <a href="<?php echo U('Center/index');?>" class="name"><?php echo session('user_auth.id'); echo session('user_auth.username');?>，</a>
                            <a href="javascript:void(0)" class="link logout_btn">退出</a>
                            <a href="javascript:void(0)" class="ico ico_dollar"></a>
                        </p>
                        <p class="user_date"><?php echo now1();?> <span>交易中</span></p>
                    </div>
                    <!-- 登录后 end -->
                </div><?php endif; ?>
        </div>
        <div class="mod_1">
            <div class="total_text">
                <span class="ico ico_dollar"></span><span class="text_1">1.5亿</span><span class="text_2">资金冶炼中</span><a href="##" class="btn btn_yellow">立即开户</a>
            </div>
            <div class="state">
                <div class="chart">
                    <img src="/runmoney/Public/V1/image/chart.png">
                </div>
                <ul>
                    <li><a href="##" class="title"><span class="label">金</span><span class="news_title textoverflow">金融</span><span class="news_data"><i>28%</i>/日</span></a><a href="##" class="kudos"></a><span class="progress_out"><span class="progress_in" style="width:20%;"></span></span></li>
                    <li><a href="##" class="title"><span class="label">木</span><span class="news_title textoverflow">上市公司并购定增上市公司并购定增</span><span class="news_data"><i>21%</i>/日</span></a><a href="##" class="kudos"></a><span class="progress_out"><span class="progress_in" style="width:50%;"></span></span></li>
                    <li><a href="##" class="title"><span class="label">水</span><span class="news_title textoverflow">科学技术驱动</span><span class="news_data"><i>98%</i>/日</span></a><a href="##" class="kudos"></a><span class="progress_out"><span class="progress_in" style="width:70%;"></span></span></li>
                    <li><a href="##" class="title"><span class="label">火</span><span class="news_title textoverflow">军工等政策驱动</span><span class="news_data"><i>128%</i>/日</span></a><a href="##" class="kudos"></a><span class="progress_out"><span class="progress_in" style="width:20%;"></span></span></li>
                    <li><a href="##" class="title"><span class="label">风</span><span class="news_title textoverflow">科学技术驱动类</span><span class="news_data"><i>35%</i>/日</span></a><a href="##" class="kudos"></a><span class="progress_out"><span class="progress_in" style="width:30%;"></span></span></li>
                </ul>
            </div>
        </div>
        <div class="mod_2">
            <div class="total_text">
                <span class="ico ico_rank"></span><span class="text_1">899位</span><span class="text_2">炼金师扎堆休息侃大山</span>
            </div>
            <div class="state">
                <ul>
                    <li><a href="##" class="title textoverflow">新浪财经资讯 12月15日消息 沪深消息</a><span class="text_time">10分钟前</span></li>
                    <li><a href="##" class="title textoverflow">深成指开低后探底回升翻红消息文字文字文字</a><span class="text_time">10分钟前</span></li>
                    <li><a href="##" class="title textoverflow">深成指开低后探底回升翻红消息文字文字文字</a><span class="text_time">1分钟前</span></li><li><a href="##" class="title textoverflow">深成指开低后探底回升翻红消息文字文字文字</a><span class="text_time">10分钟前</span></li><li><a href="##" class="title textoverflow">深成指开低后探底回升翻红消息文字文字文字</a><span class="text_time">10分钟前</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="mod_navigation_2">
    <div class="wrap">
        <ul class="nav">
            <li class="nav_item <?php if(CONTROLLER_NAME == 'Index'): ?>nav_item_selected<?php endif; ?>"><a href="<?php echo U('/');?>">首页</a></li>
            <li class="nav_item <?php if(CONTROLLER_NAME == 'Topic' AND ACTION_NAME == 'listAction'): ?>nav_item_selected<?php endif; ?>"><a href="<?php echo U('Topic/list');?>">主题排名</a></li>
            <!--<li class="nav_item"><a href="#">社区</a></li>-->
            <li class="nav_item <?php if(CONTROLLER_NAME == 'Center'): ?>nav_item_selected<?php endif; ?>"><a href="<?php echo U('Center/index');?>">个人中心</a></li>
            <li class="nav_item <?php if(CONTROLLER_NAME == 'Topic' AND ACTION_NAME == 'create'): ?>nav_item_selected<?php endif; ?>"><a href="<?php echo U('Topic/create');?>"><span class="plus">+</span>新建主题</a></li>
        </ul>
        <div class="op_area">
            <a href="<?php echo U('Center/collect');?>" class="op_btn"><span class="ico ico_heart"></span><em id="collect_cnt"><?=session('collect_cnt')?session('collect_cnt'):'0' ?></i></em></a>
            <a href="<?php echo U('Center/cart');?>" class="op_btn"><span class="ico ico_cart"></span><em id="cart_cnt"><?=session('cart_cnt')?session('cart_cnt'):'0' ?></em></a>
        </div>
        <div class="btn_area">
            <a href="##" class="btn btn_gray">体验模拟交易</a>
            <a href="##" class="btn btn_gray">关联实盘账户</a>
        </div>

    </div>
</div>
<!-- 导航 end -->
	<!-- 面包屑 start -->
	<div class="breadcrumb">
		<div class="wrap">
			<ul>
			<li>
				<a href="##" class="link">策略排名</a>
			</li>
			<li>
				<a href="##" class="link"> > 电子相关主题</a>
			</li>
			<li>
				<a href="##" class="link link_now"> > <?php echo ($topic['title']); ?></a>
			</li>
			</ul>
		</div>		
	</div>
	<!-- 面包屑 end -->
	<!-- 内容 start -->
	<div class="main_content">
		<div class="wrap clear">
			<!-- 左边 start -->
		<div class="left_ct">
			<div class="mod_ad">
				<a href="##" class="ad_img"><img style="width:270px;height:274px;" src="/runmoney<?php echo ($topic['thumb']); ?>"></a>
				<div class="ad_content">
					<div class="title">
                        <?php echo ($topic['title']); ?>
					</div>
					<div class="profit">
						<div class="profit_item">
							<div class="text">年华收益播报</div>
							<div class="num">81.78<em>%</em></div>
						</div>
						<div class="profit_item last">
							<div class="text">是银行活期的</div>
							<div class="num">260<em>倍</em></div>
						</div>
					</div>
					<div class="op_action">
                        <a href="#" class="btn btn_white btn_go">立即投资</a>
                        <a href="#" class="btn btn_buy"><i class="ico_cart"></i>加入购物车</a>
                        <div class="price"><span class="unit">￥</span><?php echo ((isset($topic['gold_price']) && ($topic['gold_price'] !== ""))?($topic['gold_price']):0); ?></div>
                        <div class="old_price">
                            <span class="label"></span>
                            <span class="num">￥<?php echo ($topic['gold_price']?$topic['gold_price']*2:10); ?></span>
                        </div>
					</div>
					<div class="other_text">
                        <div class="share">
                            <a href="#" class="praise"><i class="ico ico_praise"></i><em>890</em></a>
                            <a href="#" class="disagree"><i class="ico ico_disagree"></i><em>890</em></a>
                            <a href="#" class="collect"><i class="ico ico_focus"></i>加入关注</a>
                            <a href="#"><i class="ico ico_share_2"></i>分享</a>
                        </div>
						<span class="text"><strong>3999</strong>人已投资</span> <span class="text"><strong>8万</strong>人已投资</span>
					</div>
				</div>
			</div>
			<div class="mod_detail">
				<div class="detail_title">
					<ul class="tab_list">
						<li>
							<a href="##" class="tab tab_selected">主题详情</a>
						</li>
						<li>
							<a href="##" class="tab">用户评论<strong>（57）</strong></a>
						</li>
						<li>	
							<a href="##" class="tab">投资记录<strong>（24455）</strong></a>
						</li>
					</ul>
				</div>
				<div class="detail_rate">
					<div class="rate_item">
						<p class="text">年收益率<i class="ico ico_question"></i></p>
						<p class="rate rate_red"><strong>81.78</strong>%</p>
					</div>
					<div class="rate_item">
						<p class="text">年化波动率<i class="ico ico_question"></i></p>
						<p class="rate rate_red"><strong>21.78</strong>%</p>
					</div>
					<div class="rate_item">
						<p class="text">夏普比<i class="ico ico_question"></i></p>
						<p class="rate rate_red"><strong>1.78</strong>%</p>
					</div>
					<div class="rate_item">
						<p class="text">实盘天数<i class="ico ico_question"></i></p>
						<p class="rate rate_gray"><strong>81</strong></p>
					</div>
					<div class="rate_item">
						<p class="text">建议最低配置资金</p>
						<p class="rate rate_gray"><strong>100000</strong>元</p>
					</div>
				</div>
				<div class="detail_text">
					<p>
                        <?php echo nl2br($topic['description']);?>
					</p>
				</div>
				<div class="detail_text">
                    <?php
 if($topic['parameter']){ $out = ''; while(count($topic['parameter']) > 0){ $arr = array_splice($topic['parameter'], 0,3); $out .= "<dl><dt>"; $out .= implode("</dt><dd>&nbsp;&nbsp;&nbsp;&nbsp;</dd><dt>", $arr); $out .= "</dt><dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</dd></dl>"; } echo $out; } ?>
				</div>
				<div class="mod_history">
					<div class="history_title">
                        <ul class="tab_list">
                            <li>
                                <a href="##" class="tab tab_selected">净值走势</a>
                            </li>
                            <li>
                                <a href="##" class="tab">回撤走势</a>
                            </li>
                            <li>
                                <a href="##" class="tab">日收益分布</a>
                            </li>
                        </ul>
						<span class="title_text">历史业绩</span>
					</div>
					<div class="chart">
						<img src="/runmoney/Public/V1/image/topic_detail_2.png">
					</div>
					<div class="op">
						<a href="##" class="btn btn_gray_2">策略组合</a>
					</div>
				</div>

				<div class="mod_history">
					<div class="history_title">
						<span class="title_text">详细持仓股票列表</span>
					</div>
					<div class="chart">
						<!--
						<a href="##" class="chart_list"><img src="/runmoney/Public/V1/image/topic_detail_3.png"></a>
						-->
						<a href="##" class="chart_list img_cover">
							<span class="text">立即查看</span><span class="price"><strong>28</strong>金币</span>
						</a>
						
						<div class="chart_list" style="display:none;">
							<table class="table_bill">
	                            <thead>
	                            <tr>
	                                <th>仓位</th>
	                                <th>标的</th>
	                                <th>买入时间</th>
	                                <th>买入价格</th>
	                                <th>现价（涨幅）</th>
	                                <th>持仓盈亏</th>
	                            </tr>
	                            </thead>
                            </table>
                            <div class="table_mask">
                            <table class="table_bill" >                    
                            <tbody>
                            <tr>
                                <td>10%</td>
                                <td>飞乐股份<a href="##" class="share_id">[600654]</a></td>
                                <td>2013/7/12</td>
                                <td>5.09</td>
                                <td><span class="increase">10.29 [0.56%]</span></td>
                                <td><span class="up">103%</span></td>
                            </tr>
                            <tr class="even">
                                <td>10%</td>
                                <td>飞乐股份<a href="##" class="share_id">[600654]</a></td>
                                <td>2013/7/12</td>
                                <td>5.09</td>
                                <td><span class="decrease">10.29 [0.56%]</span></td>
                                <td><span class="up">103%</span></td>
                            </tr>
                            <tr class="stop">
                                <td>10%</td>
                                <td>飞乐股份<a href="##" class="share_id">[600654]</a></td>
                                <td>2013/7/12</td>
                                <td>9.08</td>
                                <td>停牌</td>
                                <td>停牌</td>
                            </tr>
                            <tr class="even">
                                <td>10%</td>
                                <td>飞乐股份<a href="##" class="share_id">[600654]</a></td>
                                <td>2013/7/12</td>
                                <td>5.09</td>
                                <td><span class="decrease">10.29 [0.56%]</span></td>
                                <td><span class="up">103%</span></td>
                            </tr>
                            <tr>
                                <td>10%</td>
                                <td>飞乐股份<a href="##" class="share_id">[600654]</a></td>
                                <td>2013/7/12</td>
                                <td>5.09</td>
                                <td><span class="increase">10.29 [0.56%]</span></td>
                                <td><span class="up">103%</span></td>
                            </tr>
                            <tr class="even">
                                <td>10%</td>
                                <td>飞乐股份<a href="##" class="share_id">[600654]</a></td>
                                <td>2013/7/12</td>
                                <td>5.09</td>
                                <td><span class="decrease">10.29 [0.56%]</span></td>
                                <td><span class="up">103%</span></td>
                            </tr>
                            <tr>
                                <td>10%</td>
                                <td>飞乐股份<a href="##" class="share_id">[600654]</a></td>
                                <td>2013/7/12</td>
                                <td>5.09</td>
                                <td><span class="increase">10.29 [0.56%]</span></td>
                                <td><span class="up">103%</span></td>
                            </tr>
                            <tr class="even">
                                <td>10%</td>
                                <td>飞乐股份<a href="##" class="share_id">[600654]</a></td>
                                <td>2013/7/12</td>
                                <td>5.09</td>
                                <td><span class="decrease">10.29 [0.56%]</span></td>
                                <td><span class="up">103%</span></td>
                            </tr>
                            </tbody>
                        	</table>
                            </div>

						</div>


                        <?php if(is_array($topic["pictures"])): foreach($topic["pictures"] as $key=>$pic): ?><img style="width:680px;" src="/runmoney<?php echo ($pic); ?>"><br /><?php endforeach; endif; ?>
					</div>
					
				</div>

			</div>

			<div class="mod_comment">
				
			</div>
			
		</div>
		<!-- 左边 end -->

		<!-- 右边 start -->
		<div class="right_ct">
            <div class="mod_committee">
                <div class="committee_head">
                    <a class="photo">
                        <img src="/runmoney/Public/V1/image/photo_default.png"/>
                    </a>
                    <div class="user_info">
                        <a class="user_name"><?php echo ((isset($topic['author_nick']) && ($topic['author_nick'] !== ""))?($topic['author_nick']):'赢家委员会'); ?></a>
                        <div class="tag">发布者</div>
                    </div>
                    <div class="fold"></div>
                </div>
                <div class="committee_body">
                    <p class="user_name"><?php echo ((isset($topic['author_nick']) && ($topic['author_nick'] !== ""))?($topic['author_nick']):'赢家委员会'); ?></p>
                    <p class="user_status">赢家委员会特级分析师</p>
                    <p><a href="##" class="btn btn_gray_2">发私信（1金币）</a></p>
                </div>
            </div>
            <div class="mod_hot">
                <div class="title">
                    <h2>热门主题</h2>
                </div>
                <div class="list_item">
                    <a href="##" class="news_img"><img src="/runmoney/Public/V1/image/top_list_news1.jpg"></a>
                    <p class="news_text">银河证券特级分析师推荐主题，持续两个季度收益率超过45%</p>
                </div>
                <div class="list_item">
                    <a href="##" class="news_img"><img src="/runmoney/Public/V1/image/top_list_news2.jpg"></a>
                    <p class="news_text">银河证券特级分析师推荐主题，持续两个季度收益率超过45%</p>
                </div>
                <div class="list_item">
                    <a href="##" class="news_img"><img src="/runmoney/Public/V1/image/top_list_news3.jpg"></a>
                    <p class="news_text">银河证券特级分析师推荐主题，持续两个季度收益率超过45%</p>
                </div>
                <div class="list_item">
                    <a href="##" class="news_img"><img src="/runmoney/Public/V1/image/top_list_news4.jpg"></a>
                    <p class="news_text">银河证券特级分析师推荐主题，持续两个季度收益率超过45%</p>
                </div>
            </div>
		</div>
		<!-- 右边 end -->
		</div>
		
	</div>
	<!-- 内容 end -->

    <!-- footer start -->
<div class="mod_footer_1">
    <div class="wrap">
        <div class="ft">
            <div class="ico ico_safe"></div>
            <div class="ft_info">
                <p class="title">安全放心</p>
                <p class="text">资金运作监管机构全程监督，财产有效保障</p>
            </div>
        </div>
        <div class="ft">
            <div class="ico ico_time"></div>
            <div class="ft_info">
                <p class="title">节省时间</p>
                <p class="text">精心设计主题结合，无需奔波挑选</p>
            </div>
        </div>
    </div>
</div>
<div class="mod_footer_2">
    <div class="wrap">
        <p class="text_1">准备开始高收益理财人生了么？</p>
        <p class="text_2">各路赢家带你投资，轻松跑赢理财！</p>
        <div class="op_btns">
            <a href="<?php echo U('User/register');?>" class="btn btn_gray">我要注册</a>
            <a href="##" class="btn btn_red">我要开户</a>
        </div>
        <div class="logo">
            <span class="hidden">金融炼金术</span>
        </div>
        <a href="##" class="btn btn_follow"><i>+</i>关注</a>
        <div class="links">
            <a href="##" class="link">关于跑赢家</a>
            <a href="##" class="link">联系我们</a>
            <a href="##" class="link link_last">市场有风险，投资需谨慎</a>
        </div>
    </div>
</div>
<div class="copyright">
    Copyright©2015 RunMoney. All Rights Reserved.
</div>
<!-- footer end -->

<!-- dialog start -->
<script type="text/tmpl" id="login_dialog_tmpl">
<div class="dialog_layer pop_layer pop_login_layer" style="width:400px;left:-1000px;top:-100px;">
    <div class="dialog_layer_main">
        <div class="dialog_layer_title"><h3><span class="logo"><i class="hidden">金融炼金术</i></span>登陆<a href="#" class="close pop-btn-close"></a></h3></div>
        <div class="dialog_layer_cont">
            <table class="ui_formTable">
                <tr>
                    <td>                            
                        <label class="login_info">
                            <input type="text" class="name" data-field="username" placeholder="手机/邮箱/用户名">
                            <span type="submit" class="ico ico_name" ><i class="hidden">用户名</i></span>
                        </label>            
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="login_info">
                            <input type="password" class="name" data-field="pwd" placeholder="密码">
                            <span type="submit" class="ico ico_pw" ><i class="hidden">密码</i></span>
                        </label>                           
                    </td>
                </tr>
            </table>
            <div class="login">
                <a href="#" class="text"><input type="checkbox" id="chk_auto_login" checked/>下次自动登录</span>
                <a href="#" class="link">忘记密码?</a>
            </div>
            <div class="op_area">
                <a class="btn btn_red pop-btn-save" href="#"><span>登陆</span></a>
            </div>
            <p class="des">还没有赢家账号，<a href="<?php echo U('User/register');?>" class="link">立即注册>></a></p>
        </div>
    </div>
</div>
</script>
<!-- dialog end -->

<script type="text/javascript">
var _logined = <?php echo ($logined); ?>;
</script>
<script type="text/javascript">
(function(window){
	window.G = {
		"ROOT"   : "/runmoney", //当前网站地址
		"APP"    : "/runmoney", //当前项目地址
		"PUBLIC" : "/runmoney/Public", //项目公共目录地址
		"DEPR"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
		"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
	}
})(window);
</script>
<script type="text/javascript" src="/runmoney/Public/V1/js/lib/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/runmoney/Public/V1/js/lib/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="/runmoney/Public/V1/js/lib/underscore-min.js"></script>
<script type="text/javascript" src="/runmoney/Public/V1/js/common/util.js"></script>


    <script type="text/html" id="topic_push_tmpl">
        <div class="dialog_layer pop_layer label_layer" style="width:450px;left:-1000px;top:-100px;">
            <div class="dialog_layer_main">
                <div class="dialog_layer_title title_white"><h3><a href="##" class="close"></a></h3></div>
                <div class="dialog_layer_cont">
                    <p class="cont_text"><strong>保存成功！</strong>您创建的主题可以在 个人中心>创建发布 下查看、编辑，如果想发布到网站上，请您继续预览并发布主题</p>
                </div>
            </div>
        </div>
    </script>

    <script type="text/html" id="topic_comment_tmpl">
    	<%
    		var typeInfo = {
    			1: '满意',
    			2: '一般',
    			3: '不满意'
    		};
    	%>
    	<div class="detail_title">
			<span class="tab">用户评论</span>
			<a href="#" class="link">我要点评>></a>
		</div>
		<div class="evaluate">
			<label><input type="radio" data-comtype="0" <%=(stats.type == 0 ? 'checked':'')%>/>全部<span class="num">(<%=stats.type0cnt||0%>)</span></label>
			<label><input type="radio" data-comtype="1" <%=(stats.type == 1 ? 'checked':'')%>/>满意<span class="num">(<%=stats.type1cnt||0%>)</span></label>
			<label><input type="radio" data-comtype="2" <%=(stats.type == 2 ? 'checked':'')%>/>一般<span class="num">(<%=stats.type2cnt||0%>)</span></label>
			<label><input type="radio" data-comtype="3" <%=(stats.type == 3 ? 'checked':'')%>/>不满意<span class="num">(<%=stats.type3cnt||0%>)</span></label>
		</div>
		<div class="comment_list">
			<%_.each(stats.clist,function(comment, i){%>
			<div class="comment_item" data-commentid="<%=comment.id||''%>">
				<img src="<%=comment.head%>" style="background: #eee;">
				<div class="cm_ct">
					<div class="point">
						<div class="stars">
							<%for(var j=1,len=6;j<len;j++){%>
							<span class="star <%=(j<=comment.star?'star_on':'')%>"></span>
							<%}%>							
						</div>
						<span class="text">
							<%=comment.star||0%>分
						</span>
						<span class="text">
							<%=typeInfo[comment.type||1]%>
						</span>
						<span class="date">
							2014-03-12 13:40
						</span>
					</div>
					<div class="cm_text">
						<%=comment.content||''%>
					</div>
				</div>
			</div>
			<%})%>


			<div class="mod_page">
				<ul class="pages pagination">
					<li>
						<%var prev = (stats.p-1)>0 ? (stats.p-1):1;%>
						<a href="#" data-prev="<%=prev%>"><<上一页</a>
					</li>
					<%var maxPage = Math.ceil(stats['type'+stats.type+'cnt']/stats.cnt);%>
					<%for(var p =1;p<=maxPage;p++){%>
					<li>
						<a href="#" data-page="<%=p%>" class="<%=(stats.p == p?'current':'')%>"><%=p%></a>
					</li>
					<%}%>
					<%var next = (stats.p+1)>maxPage ? maxPage:(stats.p+1);%>
					<li>
						<a href="#" data-next="<%=next%>">下一页>></a>
					</li>
				</ul>
			</div>

		</div>
		<div class="log_text">
			有观点有看法？<a href="##">登录</a>点评一下吧……
		</div>
    </script>
    <script>
	    var _tid = <?php echo ($topic["id"]); ?>;
	</script>
    <script type="text/javascript" src="/runmoney/Public/V1/js/topic/detail.js"></script>
</body>
</html>