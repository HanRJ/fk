<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>金融炼金术 个人中心 我的私信</title>
    <link href="/runmoney/Public/V1/css/global.css" rel="stylesheet" media="screen" />
    <link href="/runmoney/Public/V1/css/space.css" rel="stylesheet" media="screen" />
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
<div class="aside">
    <div class="mod_user">
        <a href="<?php echo U('Center/setting');?>" class="photo"><img src="/runmoney/Public/V1/image/photo_default.png"></a>
        <div class="user_info">
            <p class="user_name"><a href="##" class="link link_edit">编辑</a><span href="##" class="name"><?php echo session('user_auth.username');?></span></p>
            <p class="user_status">炼金大师</p>
        </div>
        <div class="user_cert">
            <label>认证：</label>
            <ul>
                <li class="item item_autonym item_selected">实名认证</li>
                <li class="item item_phone">手机认证</li>
                <li class="item item_card item_selected">行用卡认证</li>
                <li class="item item_email">邮箱认证</li>
            </ul>
        </div>
    </div>
    <div class="mod_user_detail">
        <ul>
            <li class="item item_secure">安全等级：<i>低</i></li>
            <li class="item item_prize"><i>邀请有礼</i></li>
            <li class="item item_dollar">金币：<i>20</i><a href="##" class="btn btn_red">充值</a></li>
        </ul>
    </div>
    <div class="mod_menu">
        <ul class="menu_group">
            <li><a href="<?php echo U('Center/index');?>" class="menu_item <?php if(ACTION_NAME == 'index'): ?>menu_item_selected<?php endif; ?>">我的账户</a></li>
            <li><a href="<?php echo U('Center/cart');?>" class="menu_item menu_item_cart <?php if(ACTION_NAME == 'cart'): ?>menu_item_selected<?php endif; ?>">我的购物车 <span class="count">（<i><?=session('cart_cnt')?session('cart_cnt'):'0' ?></i>）</span></a></li>
            <li><a href="<?php echo U('Center/bill');?>" class="menu_item <?php if(ACTION_NAME == 'bill'): ?>menu_item_selected<?php endif; ?>">我的订单 <span class="count">（<i>1</i>）</span></a></li>
            <li><a href="<?php echo U('Center/collect');?>" class="menu_item <?php if(ACTION_NAME == 'collect'): ?>menu_item_selected<?php endif; ?>">我的收藏 <span class="count">（<i><?=session('collect_cnt')?session('collect_cnt'):'0' ?></i>）</span></a></li>
            <li><a href="<?php echo U('Center/invest');?>" class="menu_item <?php if(ACTION_NAME == 'invest'): ?>menu_item_selected<?php endif; ?>">我投资的主题 <span class="count">（<i>4</i>）</span></a></li>
            <li><a href="<?php echo U('Center/theme');?>" class="menu_item <?php if(ACTION_NAME == 'theme'): ?>menu_item_selected<?php endif; ?>">创建或发布 <span class="count">（<i>1</i>）</span></a></li>
        </ul>
        <ul>
            <li><a href="<?php echo U('Center/setting');?>" class="menu_item <?php if(ACTION_NAME == 'setting'): ?>menu_item_selected<?php endif; ?>">账户设置</a></li>
            <li><a href="<?php echo U('Center/message');?>" class="menu_item <?php if(ACTION_NAME == 'message'): ?>menu_item_selected<?php endif; ?>">我的私信</a></li>
        </ul>
    </div>
</div>
<!-- 左边 end -->
            <!-- 右边 start -->
            <div class="main">
                <div class="mod_detail">
                    <div class="detail_message">
                        <div class="mod_title">
                            <div class="mod_page">
                                <?php echo ($_page); ?>
                            </div>
                            <h3>我的私信</h3>
                            <a href="##" class="btn btn_gray_2 btn_message">全部置为已读</a>
                            <a href="##" class="btn btn_gray_2 btn_message">清空所有私信</a>
                        </div>
                        <table class="mod_table table_message">
                            <tbody>
                            <tr>
                                <td width="80">
                                    <div class="user_photo">
                                        <img src="/runmoney/Public/V1/image/img-4.png"/>
                                    </div>
                                </td>
                                <td>
                                    <p class="user_name">中国新闻周刊</p>
                                    <p class="user_message">世间最好的“报复”</p>
                                </td>
                                <td width="100">
                                    <p class="message_time">1月2日 15:51</p>
                                    <p>&nbsp;</p>
                                </td>
                                <td width="100">
                                    <div class="opt opt_selected">
                                        <a href="##" class="ico ico_arrow_down"></a>
                                        <div class="layover" style="display: ;">
                                            <div class="SA">
                                                <em>◆</em>
                                                <span>◆</span>
                                            </div>
                                            <ul>
                                                <li><a href="##">删除对话</a></li>
                                                <li><a href="##">屏蔽私信</a></li>
                                                <li><a href="##">加入黑名单</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>
                                        <a href="##" class="ico ico_message">4</a>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="80">
                                    <div class="user_photo">
                                        <img src="/runmoney/Public/V1/image/img-4.png"/>
                                    </div>
                                </td>
                                <td>
                                    <p class="user_name">中国新闻周刊</p>
                                    <p class="user_message">世间最好的“报复”</p>
                                </td>
                                <td width="100">
                                    <p class="message_time">1月2日 15:51</p>
                                    <p>&nbsp;</p>
                                </td>
                                <td width="100">
                                    <div class="opt">
                                        <a href="##" class="ico ico_arrow_down"></a>
                                        <div class="layover" style="display: none;">
                                            <div class="SA">
                                                <em>◆</em>
                                                <span>◆</span>
                                            </div>
                                            <ul>
                                                <li><a href="##">删除对话</a></li>
                                                <li><a href="##">屏蔽私信</a></li>
                                                <li><a href="##">加入黑名单</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>
                                        <a href="##" class="ico ico_message">4</a>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="80">
                                    <div class="user_photo">
                                        <img src="/runmoney/Public/V1/image/img-4.png"/>
                                    </div>
                                </td>
                                <td>
                                    <p class="user_name">中国新闻周刊</p>
                                    <p class="user_message">世间最好的“报复”</p>
                                </td>
                                <td width="100">
                                    <p class="message_time">1月2日 15:51</p>
                                    <p>&nbsp;</p>
                                </td>
                                <td width="100">
                                    <div class="opt">
                                        <a href="##" class="ico ico_arrow_down"></a>
                                        <div class="layover" style="display: none;">
                                            <div class="SA">
                                                <em>◆</em>
                                                <span>◆</span>
                                            </div>
                                            <ul>
                                                <li><a href="##">删除对话</a></li>
                                                <li><a href="##">屏蔽私信</a></li>
                                                <li><a href="##">加入黑名单</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>
                                        <a href="##" class="ico ico_message">4</a>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="80">
                                    <div class="user_photo">
                                        <img src="/runmoney/Public/V1/image/img-4.png"/>
                                    </div>
                                </td>
                                <td>
                                    <p class="user_name">中国新闻周刊</p>
                                    <p class="user_message">世间最好的“报复”</p>
                                </td>
                                <td width="100">
                                    <p class="message_time">1月2日 15:51</p>
                                    <p>&nbsp;</p>
                                </td>
                                <td width="100">
                                    <div class="opt opt_selected">
                                        <a href="##" class="ico ico_arrow_down selected"></a>
                                        <div class="layover">
                                            <div class="SA">
                                                <em>◆</em>
                                                <span>◆</span>
                                            </div>
                                            <ul>
                                                <li><a href="##">删除对话</a></li>
                                                <li><a href="##">屏蔽私信</a></li>
                                                <li><a href="##">加入黑名单</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>
                                        <a href="##" class="ico ico_message">4</a>
                                    </p>
                                </td>
                            </tr>
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