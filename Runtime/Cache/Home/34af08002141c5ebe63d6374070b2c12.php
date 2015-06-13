<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>金融炼金术 主题排名</title>
    <link href="/runmoney/Public/V1/css/global.css" rel="stylesheet" media="screen" />
    <link href="/runmoney/Public/V1/css/theme.css" rel="stylesheet" media="screen" />
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
    <!-- 内容 start -->
    <div class="main_content">
        <div class="wrap clear">
            <!-- 左边 start -->
            <div class="left_ct">
                <div class="mod_search">
                    <div class="search_title"><h3>炼金场</h3><span class="tip">发现你的投资兴趣</span></div>
                    <div class="search_cnt">
                        <form class="search_form">
                            <input type="text" class="search_input" />
                            <input type="submit" class="search_submit" value=""/>
                        </form>
                    </div>
                </div>
                <div class="mod_category">
                    <div class="category_component">
                        <h3 class="category_title">投资类型</h3>
                        <ul>
                            <li><a href="##" class="category_item selected">全部</a></li>
                            <li><a href="##" class="category_item">委员会推荐</a></li>
                            <li><a href="##" class="category_item">限时免费</a></li>
                            <li><a href="##" class="category_item">概念</a></li>
                            <li><a href="##" class="category_item">地域</a></li>
                        </ul>
                    </div>
                    <div class="category_component">
                        <h3 class="category_title">投资金额</h3>
                        <ul>
                            <li><a href="##" class="category_item selected">全部</a></li>
                            <li><a href="##" class="category_item">1万以下</a></li>
                            <li><a href="##" class="category_item">1-5万</a></li>
                            <li><a href="##" class="category_item">5-10万</a></li>
                            <li><a href="##" class="category_item">10万以上</a></li>
                        </ul>
                    </div>
                    <div class="category_component last">
                        <h3 class="category_title">投资风格</h3>
                        <ul>
                            <li><a href="##" class="category_item selected">全部</a></li>
                            <li><a href="##" class="category_item">金</a></li>
                            <li><a href="##" class="category_item">木</a></li>
                            <li><a href="##" class="category_item">水</a></li>
                            <li><a href="##" class="category_item">火</a></li>
                            <li><a href="##" class="category_item">风</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- 左边 end -->
            <!-- 右边 start -->
            <div class="right_ct">
                <div class="mod_detail">
                    <div class="detail_theme">
                        <div class="mod_title">
                            <div class="mod_page">
                                <?php echo ($_page); ?>
                            </div>
                            <h3>所有主题（<?php echo ($_total); ?>）</h3>
                            <ul class="filter">
                                <li><a href="##">最新</a></li> |
                                <li><a href="##">最热</a></li>
                            </ul>
                        </div>
                        <table class="mod_table table_theme_rank">
                            <thead>
                            <tr>
                                <th class="col_theme">主题名称 </th>
                                <th class="col_profit"><a href="##" class="ico ico_arrow_down_active">当月收益率</a></th>
                                <th class="col_profit"><a href="##" class="ico ico_arrow_down">实盘收益率</a></th>
                                <th class="col_profit"><a href="##" class="ico ico_arrow_up_active">昨日收益率</a></th>
                                <th class="col_price">策略价格</th>
                                <th class="col_history">历史业绩</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($topics)): foreach($topics as $key=>$topic): ?><tr>
                                <td>
                                    <a href="<?php echo U('Topic/index', array(id=>$topic['id']));?>" target="_blank" class="theme_photo">
                                        <img style="" src="/runmoney<?php echo ($topic['thumb']); ?>">
                                    </a>
                                    <div class="theme_info">
                                        <a href="<?php echo U('Topic/index', array(id=>$topic['id']));?>" target="_blank" class="theme_title"><?php echo ($topic['title']); ?></a>
                                        <p class="theme_pub">
                                            发布：<?php echo get_nickname($topic['author_id']);?><br />2万人购买
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <strong>10.29％</strong>
                                </td>
                                <td>50.29％</td>
                                <td>2.29％</td>
                                <td><?php echo ($topic['gold_price']); ?>金币</td>
                                <td><img src="/runmoney/Public/V1/image/theme_chart.png"/></td>
                            </tr><?php endforeach; endif; ?>
                            </tbody>
                        </table>

                        <div class="mod_page">
                            <?php echo ($_page); ?>
                        </div>
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

</body>
</html>