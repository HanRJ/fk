<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>金融炼金术 首页</title>
    <link href="/ys/Public/V1/css/global.css" rel="stylesheet" media="screen" />
    <link href="/ys/Public/V1/css/index.css" rel="stylesheet" media="screen" />
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
                    <a href="<?php echo U('Center/setting');?>" class="photo"><img src="/ys/Public/V1/image/img-4.png"></a>
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
                    <img src="/ys/Public/V1/image/chart.png">
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
    <!-- 广告 start -->
    <div class="mod_ad">
        <div class="wrap">
            <a href="##" class="ico ico_left ico_left_disable"></a>
            <a href="##" class="ico ico_right ico_right_disable"></a>
            <div class="ad_list">
                <div class="ad_item">
                    <div class="ad_img">
                        <div class="label">赢家送福利</div>
                        <img src="/ys/Public/V1/image/img-1.jpg">
                        <div class="title_text">
                            <span class="text">赢家送福利</span><span class="profit"><i>280%</i>每月</span>
                        </div>
                    </div>                  
                    <div class="ad_text">
                        <p>【本周投资金额突破10亿！】广发基金高级证券师主力推荐[体育强国]，投资了今年就可以安心睡觉了！</p>
                        <div class="op_action">
                            <div class="price"><span class="unit">￥</span>0</div>
                            <div class="old_price">
                                <span class="label">限时免费</span>
                                <span class="num">￥88</span>
                            </div>
                            <div class="ico ico_cart"></div>
                            <a href="##" class="btn btn_yellow">立即投资</a>
                        </div>
                        <div class="people"><span class="people_num">39924</span>人已投资</div>
                    </div>
                </div>
                <div class="ad_item right_item">
                    <div class="ad_img">
                        <div class="label">赢家送福利</div>
                        <img src="/ys/Public/V1/image/img-1.jpg">
                        <div class="title_text">
                            <span class="text">赢家送福利</span><span class="profit"><i>280%</i>每月</span>
                        </div>
                    </div>                  
                    <div class="ad_text">
                        <p>【本周投资金额突破10亿！】广发基金高级证券师主力推荐[体育强国]，投资了今年就可以安心睡觉了！</p>
                        <div class="op_action">
                            <div class="price"><span class="unit">￥</span>0</div>
                            <div class="old_price">
                                <span class="label">限时免费</span>
                                <span class="num">￥88</span>
                            </div>
                            <div class="ico ico_cart"></div>
                            <a href="##" class="btn btn_yellow">立即投资</a>
                        </div>
                        <div class="people"><span class="people_num">39924</span>人已投资</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 广告 end -->
    <!-- 最新动态 小赢家训练营 start -->
    <div class="mod_activities">
        <div class="wrap">
            <!-- 侧栏导航 start -->
            <div class="side_nav">
                <ul id="side_nav_ul">
                    <li class="side_nav_item side_nav_item_selected topic_type">
                        <a href="#">我的关注</a>
                    </li>
                    <li class="side_nav_item topic_type">
                        <a href="#" data-topic="">赢家推荐</a>
                    </li>
                    <li class="side_nav_item topic_type">
                        <a href="#" data-topic="">1月最热</a>
                    </li>
                    <li class="side_nav_item topic_type">
                        <a href="#" data-topic="">1月最冷</a>
                    </li>
                    <li class="side_nav_item topic_type">
                        <a href="#" data-topic="">环 保</a>
                    </li>
                    <li class="side_nav_item topic_type">
                        <a href="#" data-topic="">体 育</a>
                    </li>
                    <li class="side_nav_item topic_type">
                        <a href="#" data-topic="">云计算</a>
                    </li>
                    <li class="side_nav_item side_nav_last">
                        <a href="#" class="btn btn_care"><i>+</i>关注</a>
                    </li>
                </ul>
                <div class="mod_side">
                    <div class="title">
                        我访问过的主题
                    </div>
                    <div class="topics">
                        <a href="##">新能源</a>
                        <a href="##">新闻</a>
                        <a href="##">环保</a>
                        <a href="##">新能源</a>
                        <a href="##">新闻</a>
                        <a href="##">环保</a>
                    </div>
                </div>
                <div class="mod_side">
                    <div class="title">
                        媒体报道
                    </div>
                    <div class="media">
                        <a href="##" class="media_1"><img src="/ys/Public/V1/image/case_1.jpg"></a>
                        <p class="media_text">1万个金融机构专业分析师入驻跑赢家</p>
                        <a href="##" class="media_2"><img src="/ys/Public/V1/image/case_2.jpg"></a>
                        <p class="media_text">1万个金融机构专业分析师入驻跑赢家</p>
                        <a href="##" class="media_3"><img src="/ys/Public/V1/image/case_3.jpg"></a>
                        <p class="media_text">1万个金融机构专业分析师入驻跑赢家</p>
                        <a href="##" class="media_4"><img src="/ys/Public/V1/image/case_4.jpg"></a>
                        <p class="media_text">1万个金融机构专业分析师入驻跑赢家</p>
                    </div>
                </div>
            </div>
            <!-- 侧栏导航 end -->
            <div class="mod_title">
                <span class="title_text">1月17日 最新动态</span>
                <div class="line"></div>
            </div>
            <div class="content clearfix">
                <div class="content_right">
                    <div class="rank_item">
                        <div class="rank_title">
                            <span class="ico ico_price"></span><span class="text">投资收益</span><span class="rank">月度冠军</span>
                            <div class="label"></div>
                        </div>
                        <div class="rank_name">
                            <a href="##"><img src="/ys/Public/V1/image/img-3.jpg"></a>
                            <div class="name_info">
                                <p class="name">李四用户 · 中国工商银行</p>
                                <p class="name_title">高级分析师</p>
                            </div>
                        </div>
                        <div class="rank_content">
                            <div class="category"><span class="name">体育强国</span><span class="num"><i>36万</i>人已投资<i>208%</i></span></div>
                            <div class="category"><span class="name">军工概念</span><span class="num"><i>2万</i>人已投资<i>126%</i></span></div>
                        </div>
                    </div>

                    <div class="rank_item">
                        <div class="rank_title">
                            <span class="ico ico_price"></span><span class="text">投资收益</span><span class="rank">季度冠军</span>
                            <div class="label"></div>
                        </div>
                        <div class="rank_name">
                            <a href="##"><img src="/ys/Public/V1/image/img-3.jpg"></a>
                            <div class="name_info">
                                <p class="name">李四用户 · 中国工商银行</p>
                                <p class="name_title">高级分析师</p>
                            </div>
                        </div>
                        <div class="rank_content">
                            <div class="category"><span class="name">体育强国</span><span class="num"><i>36万</i>人已投资<i>208%</i></span></div>
                            <div class="category"><span class="name">军工概念</span><span class="num"><i>2万</i>人已投资<i>126%</i></span></div>
                        </div>
                    </div>

                    <div class="rank_item">
                        <div class="rank_title">
                            <span class="ico ico_price"></span><span class="text">投资收益</span><span class="rank">年度冠军</span>
                            <div class="label"></div>
                        </div>
                        <div class="rank_name">
                            <a href="##"><img src="/ys/Public/V1/image/img-3.jpg"></a>
                            <div class="name_info">
                                <p class="name">李四用户 · 中国工商银行</p>
                                <p class="name_title">高级分析师</p>
                            </div>
                        </div>
                        <div class="rank_content">
                            <div class="category"><span class="name">体育强国</span><span class="num"><i>36万</i>人已投资<i>208%</i></span></div>
                            <div class="category"><span class="name">军工概念</span><span class="num"><i>2万</i>人已投资<i>126%</i></span></div>
                        </div>
                    </div>

                    <div class="top_rank">
                        <div class="top_rank_title">
                            <span class="text_1">TOP5</span>
                            <span class="text_2">实盘交易周收益率</span>
                        </div>
                        <div class="top_rank_bar">
                            <ul>
                                <li>
                                    <a href="##" class="bar_link">排名</a>
                                </li>
                                <li>
                                    <a href="##" class="bar_link">用户</a>
                                </li>
                                <li>
                                    <a href="##" class="bar_link">主张主题</a>
                                </li>   
                                <li>
                                    <a href="##" class="bar_link last">周收益率</a>
                                </li>
                            </ul>
                        </div>

                        <div class="top_item">
                            <div class="label">1</div>
                            <div class="top_item_info">
                                <a href="##" class="avatar">
                                    <img src="/ys/Public/V1/image/img-3.jpg">
                                    <span class="name textoverflow">赢家委员会赢家委员会</span>
                                </a>
                                <div class="ct"><span class="ct_name">体育强国</span><span class="pt">208%</span></div>
                            </div>
                        </div>

                        <div class="top_item">
                            <div class="label">2</div>
                            <div class="top_item_info">
                                <a href="##" class="avatar">
                                    <img src="/ys/Public/V1/image/img-3.jpg">
                                    <span class="name textoverflow">赢家委员会赢家委员会</span>
                                </a>
                                <div class="ct"><span class="ct_name">体育强国</span><span class="pt">208%</span></div>
                            </div>
                        </div>

                        <div class="top_item">
                            <div class="label">3</div>
                            <div class="top_item_info">
                                <a href="##" class="avatar">
                                    <img src="/ys/Public/V1/image/img-3.jpg">
                                    <span class="name textoverflow">赢家委员会赢家委员会</span>
                                </a>
                                <div class="ct"><span class="ct_name">体育强国</span><span class="pt">208%</span></div>
                            </div>
                        </div>

                        <div class="top_item">
                            <div class="label_2">4</div>
                            <div class="top_item_info">
                                <a href="##" class="avatar">
                                    <img src="/ys/Public/V1/image/img-3.jpg">
                                    <span class="name textoverflow">赢家委员会赢家委员会</span>
                                </a>
                                <div class="ct"><span class="ct_name">体育强国</span><span class="pt">208%</span></div>
                            </div>
                        </div>

                        <div class="top_item">
                            <div class="label_2">5</div>
                            <div class="top_item_info">
                                <a href="##" class="avatar">
                                    <img src="/ys/Public/V1/image/img-3.jpg">
                                    <span class="name textoverflow">赢家委员会赢家委员会</span>
                                </a>
                                <div class="ct"><span class="ct_name">体育强国</span><span class="pt">208%</span></div>
                            </div>
                        </div>

                        <div class="top_item">
                            <div class="label_2">6</div>
                            <div class="top_item_info">
                                <a href="##" class="avatar">
                                    <img src="/ys/Public/V1/image/img-3.jpg">
                                    <span class="name textoverflow">赢家委员会赢家委员会</span>
                                </a>
                                <div class="ct"><span class="ct_name">体育强国</span><span class="pt">208%</span></div>
                            </div>
                        </div>

                        <div class="top_item">
                            <div class="label_2">7</div>
                            <div class="top_item_info">
                                <a href="##" class="avatar">
                                    <img src="/ys/Public/V1/image/img-3.jpg">
                                    <span class="name textoverflow">赢家委员会赢家委员会</span>
                                </a>
                                <div class="ct"><span class="ct_name">体育强国</span><span class="pt">208%</span></div>
                            </div>
                        </div>

                        <div class="top_item last_item">
                            <div class="label_2">8</div>
                            <div class="top_item_info">
                                <a href="##" class="avatar">
                                    <img src="/ys/Public/V1/image/img-3.jpg">
                                    <span class="name textoverflow">赢家委员会赢家委员会</span>
                                </a>
                                <div class="ct"><span class="ct_name">体育强国</span><span class="pt">208%</span></div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="content_main topic_list">
                    <!--
                    <div class="news_slide">
                        <a href="##"><img src="image/img-2.jpg"></a>
                        <div class="news_content">
                            <div class="name">赢家委员会<span class="name_title">高级分析师</span><span class="time">33分钟前</span></div>
                            <div class="news_title">发布主题组织【体育强国<em>288%</em>】</div>
                            <p class="news_text">
                                市场响应习大大指导方针，市场响应习大大指导方针，市场响应习大大指导方针，市场响应习大大指导方针，市场响应习大大指导方针，市场响应习大大指导方针
                            </p>
                            <div class="news_feed">
                                <a href="##" class="label">环保</a>
                                <a href="##" class="label">新能量</a>
                                <ul>
                                    <li><a href="##"><i class="ico ico_praise"></i>890</a></li>
                                    <li><a href="##"><i class="ico ico_disagree"></i>890</a></li>
                                    <li><a href="##"><i class="ico ico_comment"></i>890</a></li>
                                    <li><a href="##"><i class="ico ico_share"></i>890</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="news_slide">
                        <a href="##"><img src="image/img-2.jpg"></a>
                        <div class="news_content">
                            <div class="name">赢家委员会<span class="name_title">高级分析师</span><span class="time">33分钟前</span></div>
                            <div class="news_title">发布主题组织【体育强国<em>288%</em>】</div>
                            <p class="news_text">
                                市场响应习大大指导方针，市场响应习大大指导方针，市场响应习大大指导方针，市场响应习大大指导方针，市场响应习大大指导方针，市场响应习大大指导方针
                            </p>
                            <div class="news_feed">
                                <a href="##" class="label">环保</a>
                                <a href="##" class="label">新能量</a>
                                <ul>
                                    <li><a href="##"><i class="ico ico_praise"></i>890</a></li>
                                    <li><a href="##"><i class="ico ico_disagree"></i>890</a></li>
                                    <li><a href="##"><i class="ico ico_comment"></i>890</a></li>
                                    <li><a href="##"><i class="ico ico_share"></i>890</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="news_slide">
                        <a href="##"><img src="image/img-2.jpg"></a>
                        <div class="news_content">
                            <div class="name">赢家委员会<span class="name_title">高级分析师</span><span class="time">33分钟前</span></div>
                            <div class="news_title">发布主题组织【体育强国<em>288%</em>】</div>
                            <p class="news_text">
                                市场响应习大大指导方针，市场响应习大大指导方针，市场响应习大大指导方针，市场响应习大大指导方针，市场响应习大大指导方针，市场响应习大大指导方针
                            </p>
                            <div class="news_feed">
                                <a href="##" class="label">环保</a>
                                <a href="##" class="label">新能量</a>
                                <ul>
                                    <li><a href="##"><i class="ico ico_praise"></i>890</a></li>
                                    <li><a href="##"><i class="ico ico_disagree"></i>890</a></li>
                                    <li><a href="##"><i class="ico ico_comment"></i>890</a></li>
                                    <li><a href="##"><i class="ico ico_share"></i>890</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="news_slide last">
                        <a href="##"><img src="image/img-2.jpg"></a>
                        <div class="news_content">
                            <div class="name">赢家委员会<span class="name_title">高级分析师</span><span class="time">33分钟前</span></div>
                            <div class="news_title">发布主题组织【体育强国<em>288%</em>】</div>
                            <p class="news_text">
                                市场响应习大大指导方针，市场响应习大大指导方针，市场响应习大大指导方针，市场响应习大大指导方针，市场响应习大大指导方针，市场响应习大大指导方针
                            </p>
                            <div class="news_feed">
                                <a href="##" class="label">环保</a>
                                <a href="##" class="label">新能量</a>
                                <ul>
                                    <li><a href="##"><i class="ico ico_praise"></i>890</a></li>
                                    <li><a href="##"><i class="ico ico_disagree"></i>890</a></li>
                                    <li><a href="##"><i class="ico ico_comment"></i>890</a></li>
                                    <li><a href="##"><i class="ico ico_share"></i>890</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    -->
                    <div class="op_more">
                        <a href="#">查看更多<i class="ico ico_tr_down"></i></a>
                    </div>
                </div>
            </div>
            <div class="mod_title">
                <span class="title_text">小赢家训练营</span>
                <a href="##" class="btn btn_red">体验模拟交易</a>
                <div class="line"></div>
            </div>
            <div class="content train_content_main">
                <div class="content_right">

                    <div class="top_rank">
                        <div class="top_rank_title">
                            <span class="text_1">TOP5</span>
                            <span class="text_2">模拟交易月收益率</span>
                        </div>
                        <div class="top_rank_item">
                            <ul>
                                <li>
                                    <a href="##" class="bar_item bar_item_first bar_selected">2万以下</a>
                                    <a href="##" class="bar_item">2-5万</a>
                                    <a href="##" class="bar_item">5-10万</a>
                                    <a href="##" class="bar_item last">10万以上</a>
                                </li>
                            </ul>
                        </div>
                        <div class="top_rank_bar">
                            <ul>
                                <li>
                                    <a href="##" class="bar_link">排名</a>
                                    <a href="##" class="bar_link bar_selected">用户</a>
                                    <a href="##" class="bar_link">主张主题</a>
                                    <a href="##" class="bar_link last">周收益率</a>
                                </li>
                            </ul>
                        </div>
                        <div class="top_item">
                            <div class="label">1</div>
                            <div class="top_item_info">
                                <div class="avatar">
                                    <a href="##"><img src="/ys/Public/V1/image/img-3.jpg"></a>
                                    <p class="name">赢家委员会</p>
                                </div>
                                <div class="ct"><span class="ct_name">体育强国</span><span class="pt">208%</span></div>
                            </div>
                        </div>

                        <div class="top_item">
                            <div class="label">2</div>
                            <div class="top_item_info">
                                <div class="avatar">
                                    <a href="##"><img src="/ys/Public/V1/image/img-3.jpg"></a>
                                    <p class="name">赢家委员会</p>
                                </div>
                                <div class="ct"><span class="ct_name">体育强国</span><span class="pt">208%</span></div>
                            </div>
                        </div>

                        <div class="top_item">
                            <div class="label">3</div>
                            <div class="top_item_info">
                                <div class="avatar">
                                    <a href="##"><img src="/ys/Public/V1/image/img-3.jpg"></a>
                                    <p class="name">赢家委员会</p>
                                </div>
                                <div class="ct"><span class="ct_name">体育强国</span><span class="pt">208%</span></div>
                            </div>
                        </div>

                        <div class="top_item last_item">
                            <div class="label_2">4</div>
                            <div class="top_item_info">
                                <div class="avatar">
                                    <a href="##"><img src="/ys/Public/V1/image/img-3.jpg"></a>
                                    <p class="name">赢家委员会</p>
                                </div>
                                <div class="ct"><span class="ct_name">体育强国</span><span class="pt">208%</span></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="content_main">
                    <div class="content_title">
                        <span class="title_text">模拟盘排行<i></i></span>
                        <ul class="tab_list" id="simulation_rank_type">
                            <li>
                                <a href="#" data-tp="all" class="tab tab_selected">总收益榜</a>
                                <a href="#" data-tp="week" class="tab">周收益榜</a>
                                <a href="#" data-tp="month" class="tab">日收益榜</a>
                            </li>
                        </ul>
                        <div class="date">
                            <span class="date_text">更新：2014-11-29 21:34</span>
                            <a href="##" class="link">更多>></a>
                        </div>
                    </div>
                    <table class="rank_table">
                        <col></col>
                        <thead>
                            <tr>
                                <th>排名</th>
                                <th>选手</th>
                                <th>总收益率</th>
                                <th>日收益率</th>
                                <th>仓位</th>
                                <th>重仓股</th>
                                <th>主张主题</th>
                            </tr>
                        </thead>
                        <tbody id="simulation_rank_list">
                            <!--
                            <tr>
                                <td>
                                    <span class="ico ico_label">1</span>
                                </td>
                                <td>
                                    <span class="name">夏火烧云</span>
                                </td>
                                <td>
                                    <span class="red">24.53%</span>
                                </td>
                                <td>
                                    <span class="red">4.53%</span>
                                </td>
                                <td>
                                    <span class="">24.53%</span>
                                </td>
                                <td>
                                    <span class="">兰石重装</span>
                                </td>
                                <td>
                                    <a href="##" class="link">政府项目</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="ico ico_label">2</span>
                                </td>
                                <td>
                                    <span class="name">夏火烧云</span>
                                </td>
                                <td>
                                    <span class="red">24.53%</span>
                                </td>
                                <td>
                                    <span class="red">4.53%</span>
                                </td>
                                <td>
                                    <span class="">24.53%</span>
                                </td>
                                <td>
                                    <span class="">兰石重装</span>
                                </td>
                                <td>
                                    <a href="##" class="link">政府项目</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="ico ico_label">3</span>
                                </td>
                                <td>
                                    <span class="name">夏火烧云</span>
                                </td>
                                <td>
                                    <span class="red">24.53%</span>
                                </td>
                                <td>
                                    <span class="red">4.53%</span>
                                </td>
                                <td>
                                    <span class="">24.53%</span>
                                </td>
                                <td>
                                    <span class="">兰石重装</span>
                                </td>
                                <td>
                                    <a href="##" class="link">政府项目</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="ico ico_label_2">4</span>
                                </td>
                                <td>
                                    <span class="name">夏火烧云</span>
                                </td>
                                <td>
                                    <span class="red">24.53%</span>
                                </td>
                                <td>
                                    <span class="red">4.53%</span>
                                </td>
                                <td>
                                    <span class="">24.53%</span>
                                </td>
                                <td>
                                    <span class="">兰石重装</span>
                                </td>
                                <td>
                                    <a href="##" class="link">政府项目</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="ico ico_label_2">5</span>
                                </td>
                                <td>
                                    <span class="name">夏火烧云</span>
                                </td>
                                <td>
                                    <span class="red">24.53%</span>
                                </td>
                                <td>
                                    <span class="red">4.53%</span>
                                </td>
                                <td>
                                    <span class="">24.53%</span>
                                </td>
                                <td>
                                    <span class="">兰石重装</span>
                                </td>
                                <td>
                                    <a href="##" class="link">政府项目</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="ico ico_label_2">6</span>
                                </td>
                                <td>
                                    <span class="name">夏火烧云</span>
                                </td>
                                <td>
                                    <span class="red">24.53%</span>
                                </td>
                                <td>
                                    <span class="red">4.53%</span>
                                </td>
                                <td>
                                    <span class="">24.53%</span>
                                </td>
                                <td>
                                    <span class="">兰石重装</span>
                                </td>
                                <td>
                                    <a href="##" class="link">政府项目</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="ico ico_label_2">7</span>
                                </td>
                                <td>
                                    <span class="name">夏火烧云</span>
                                </td>
                                <td>
                                    <span class="red">24.53%</span>
                                </td>
                                <td>
                                    <span class="red">4.53%</span>
                                </td>
                                <td>
                                    <span class="">24.53%</span>
                                </td>
                                <td>
                                    <span class="">兰石重装</span>
                                </td>
                                <td>
                                    <a href="##" class="link">政府项目</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="ico ico_label_2">8</span>
                                </td>
                                <td>
                                    <span class="name">夏火烧云</span>
                                </td>
                                <td>
                                    <span class="red">24.53%</span>
                                </td>
                                <td>
                                    <span class="red">4.53%</span>
                                </td>
                                <td>
                                    <span class="">24.53%</span>
                                </td>
                                <td>
                                    <span class="">兰石重装</span>
                                </td>
                                <td>
                                    <a href="##" class="link">政府项目</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="ico ico_label_2">9</span>
                                </td>
                                <td>
                                    <span class="name">夏火烧云</span>
                                </td>
                                <td>
                                    <span class="red">24.53%</span>
                                </td>
                                <td>
                                    <span class="red">4.53%</span>
                                </td>
                                <td>
                                    <span class="">24.53%</span>
                                </td>
                                <td>
                                    <span class="">兰石重装</span>
                                </td>
                                <td>
                                    <a href="##" class="link">政府项目</a>
                                </td>
                            </tr>
                            <tr class="last_line">
                                <td>
                                    <span class="ico ico_label_2">10</span>
                                </td>
                                <td>
                                    <span class="name">夏火烧云</span>
                                </td>
                                <td>
                                    <span class="red">24.53%</span>
                                </td>
                                <td>
                                    <span class="red">4.53%</span>
                                </td>
                                <td>
                                    <span class="">24.53%</span>
                                </td>
                                <td>
                                    <span class="">兰石重装</span>
                                </td>
                                <td>
                                    <a href="##" class="link">政府项目</a>
                                </td>
                            </tr>
                            -->
                        </tbody>
                    </table>
                </div>              
            </div>
        </div>
    </div>
    <!-- 最新动态 小赢家训练营 end -->
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
		"ROOT"   : "/ys", //当前网站地址
		"APP"    : "/ys", //当前项目地址
		"PUBLIC" : "/ys/Public", //项目公共目录地址
		"DEPR"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
		"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
	}
})(window);
</script>
<script type="text/javascript" src="/ys/Public/V1/js/lib/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/ys/Public/V1/js/lib/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="/ys/Public/V1/js/lib/underscore-min.js"></script>
<script type="text/javascript" src="/ys/Public/V1/js/common/util.js"></script>

    <!-- dialog start -->
    <script type="text/html" id="label_dialog_tmpl">
    <div class="dialog_layer label_layer" style="width:530px;left:-1000px;top:-100px;;">
        <div class="dialog_layer_main">
         <div class="dialog_layer_title title_white"><h3><a href="##" class="close"></a></h3></div>
            <div class="dialog_layer_cont">
                <div class="label_list">
                    <p class="text">选择您喜欢的投资方向或关键词</p>
                    <div class="labels">
                        <a href="##" class="label_item item_1">达人推荐</a><a href="##" class="label_item item_1 item_1_selected">达人推荐</a><a href="##" class="label_item item_1">达人推荐</a><a href="##" class="label_item item_1">达人推荐</a><a href="##" class="label_item item_1">达人推荐</a><a href="##" class="label_item item_1 last">达人推荐</a><a href="##" class="label_item item_1">达人推荐</a><a href="##" class="label_item item_1">达人推荐</a><a href="##" class="label_item item_1">达人推荐</a><a href="##" class="label_item item_1">达人推荐</a><a href="##" class="label_item item_1 ">达人推荐</a><a href="##" class="label_item item_1 last">达人推荐</a>
                    </div>
                </div>
                <div class="line"></div>
                <div class="label_list">
                    <p class="text">大家都在关注</p>
                    <div class="labels">
                        <a href="##" class="label_item item_2">达人推荐</a><a href="##" class="label_item item_2 item_2_selected">达人推荐</a><a href="##" class="label_item item_2">达人推荐</a><a href="##" class="label_item item_2">达人推荐</a><a href="##" class="label_item item_2">达人推荐</a><a href="##" class="label_item item_2 last">达人推荐</a>
                    </div>
                </div>
            </div>
            <div class="dialog_layer_ft">           
                    <a class="btn btn_red" title="确定" href="##">确定</a><a class="btn btn_gray_2" title="取消" href="##">取消</a>
            </div>
        </div>
    </div>
    </script>
    <!-- dialog end -->
    <!-- dialog start -->

    <script type="text/html" id="comment_dialog_tmpl">
    <div class="dialog_layer comment_layer" data-tid="<%=tid%>" style="width:715px;left:-1000px;top:-100px;">
        <div class="trangle_outer"><div class="trangle_inner"></div></div>
        <div class="dialog_layer_main">
            <div class="dialog_layer_title title_white"><h3><a href="#" class="close"></a></h3></div>    
            <div class="dialog_layer_cont">
                <div class="publish bf">

                <%if(!isLogined){%>
                    <div class="bf_login">
                        有观点有看法？<a href="#" class="link login_btn">登陆点评</a>一下吧……
                    </div>
                <%}else{ %>
                    <div class="af_login" style="display:block;">
                        <input type="text" class="comment topic_comment" placeholder="请输入评论内容..."><a href="#" data-tid="<%=tid%>" class="btn btn_gray btn_send_comment">发&nbsp;表</a>
                    </div>
                <% } %>
                    
                </div>
                <!-- 评论 -->
                <div class="comment_list">
    
                    <%var topics = topics || [],len = topics.length;%>
                    <%_.each(topics,function(topic,k){%>
                    <% var t = runmoney.util.formatDate(topic.time*1000,'yyyy-MM-dd HH:mm:ss')%>
                    <div class="news_slide bordernone" data-tid="<%=topic.id%>">
                        <a href="#"><img src="<%=topic.thumb%>"></a>
                        <div class="news_content">
                            <div class="name"><%=topic.author||''%>
                                <span class="name_title"><%=topic.atitle||''%></span>
                                <span class="time"><%=t||''%></span>
                            </div>
                            <span class="news_text textoverflow">
                                <%=topic.abstract||''%>
                            </span>
                            <div class="news_feed">
                                <ul>
                                    <li><a href="#" class="praise" data-num="<%=topic.praise||0%>"><i class="ico ico_praise"></i><%=topic.praise||0%></a></li>
                                    <li><a href="#" class="disagree" data-num="<%=topic.disagree||0%>"><i class="ico ico_disagree"></i><%=topic.disagree||0%></a></li>
                                    <li><a href="#" class="comment" data-num="<%=topic.comment||0%>"><i class="ico ico_comment"></i><%=topic.comment||0%></a></li>
                                    <li><a href="#" class="share" data-num="<%=topic.share||0%>"><i class="ico ico_share"></i><%=topic.share||0%></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <%})%>
                </div>
                
                <!-- 评论 -->
            </div>
        </div>
    </div>
    </script>
    <!-- dialog end -->

    <script type="text/html" id="comment_tmpl">
        <%var topics = topics || [],len = topics.length;%>
        <%_.each(topics,function(topic,k){%>
        <% var t = runmoney.util.formatDate(topic.time*1000,'yyyy-MM-dd HH:mm:ss')%>
        <div class="news_slide bordernone" data-tid="<%=topic.id%>">
            <a href="#"><img src="<%=topic.thumb%>"></a>
            <div class="news_content">
                <div class="name"><%=topic.author||''%>
                    <span class="name_title"><%=topic.atitle||''%></span>
                    <span class="time"><%=t||''%></span>
                </div>
                <span class="news_text textoverflow">
                    <%=topic.abstract||''%>
                </span>
                <div class="news_feed">
                    <ul>
                        <li><a href="#" class="praise" data-num="<%=topic.praise||0%>"><i class="ico ico_praise"></i><%=topic.praise||0%></a></li>
                        <li><a href="#" class="disagree" data-num="<%=topic.disagree||0%>"><i class="ico ico_disagree"></i><%=topic.disagree||0%></a></li>
                        <li><a href="#" class="comment" data-num="<%=topic.comment||0%>"><i class="ico ico_comment"></i><%=topic.comment||0%></a></li>
                        <li><a href="#" class="share" data-num="<%=topic.share||0%>"><i class="ico ico_share"></i><%=topic.share||0%></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <%})%>
    </script>
    
    <script type="text/html" id="topic_tmpl">
        <%var topics = topics || [],len = topics.length;%>
        <%var util = runmoney.util;%>
        <%_.each(topics,function(topic,k){%>
        <% var t = util.formatDate(topic.time*1000,'yyyy-MM-dd HH:mm:ss')%>
        <div class="news_slide" data-tid="<%=topic.id%>">
            <a href="##"><img src="<%=topic.thumb%>"></a>
            <div class="news_content">
                <div class="name"><%=topic.author||''%><span class="name_title"><%=topic.atitle||''%></span><span class="time"><%=t||''%></span></div>
                <div class="news_title"><%=topic.action||''%>【<%=topic.title||''%><em><%=topic.subtitle%></em>】</div>
                <p class="news_text">
                    <%=topic.abstract||''%>
                </p>
                <div class="news_feed">
                    <%_.each(topic.tags, function(tag){%>
                        <a href="##" class="label"><%=tag%></a>
                    <%})%>
                    <ul>
                        <li><a href="#" class="praise" data-num="<%=topic.praise||0%>"><i class="ico ico_praise"></i><%=topic.praise||0%></a></li>
                        <li><a href="#" class="disagree" data-num="<%=topic.disagree||0%>"><i class="ico ico_disagree"></i><%=topic.disagree||0%></a></li>
                        <li><a href="#" class="comment" data-num="<%=topic.comment||0%>"><i class="ico ico_comment"></i><%=topic.comment||0%></a></li>
                        <li><a href="#" class="share" data-num="<%=topic.share||0%>"><i class="ico ico_share"></i><%=topic.share||0%></a></li>
                    </ul>
                </div>
                    
            </div>
        </div>
        <%})%>
    </script>

    <script type="text/html" id="comment_list_tmpl">
        <div class="comment_list">
            <div class="trangle_outer"><div class="trangle_inner"></div></div>
            <%var topics = topics || [],len = topics.length;%>
            <%_.each(topics,function(topic,k){%>
            <div class="news_slide" data-tid="<%=topic.id%>">
                <a href="##"><img src="<%=topic.thumb%>"></a>
                <div class="news_content">
                    <div class="name"><%=topic.author||''%><span class="name_title"><%=topic.atitle||''%></span><span class="time"><%=topic.time||''%></span></div>
                    <div class="news_title"><%=topic.action||''%>【<%=topic.title||''%><em><%=topic.subtitle%></em>】</div>
                    <p class="news_text">
                        <%=topic.abstract||''%>
                    </p>
                    <div class="news_feed">
                        <%_.each(topic.tags, function(tag){%>
                            <a href="##" class="label"><%=tag%></a>
                        <%})%>
                        <ul>
                            <li><a href="##"><i class="ico ico_praise"></i><%=topic.praise||0%></a></li>
                            <li><a href="##"><i class="ico ico_disagree"></i><%=topic.disagree||0%></a></li>
                            <li><a href="##"><i class="ico ico_comment"></i><%=topic.comment||0%></a></li>
                            <li><a href="##"><i class="ico ico_share"></i><%=topic.share||0%></a></li>
                        </ul>
                    </div>
                        
                </div>
            </div>
            <%})%>
        </div> 
    </script>

    <script type="text/html" id="simulation_rank_tmpl">
        <%_.each(list,function(rank,k){%>
        <tr>
            <td>
                <span class="ico <%=(rank.order < 4 ? 'ico_label':'ico_label_2')%>"><%=rank.order%></span>
            </td>
            <td>
                <span class="name"><%=rank.username%></span>
            </td>
            <td>
                <span class="red"><%=rank.allrate%></span>
            </td>
            <td>
                <span class="red"><%=rank.dayrate%></span>
            </td>
            <td>
                <span class=""><%=rank.sspace%></span>
            </td>
            <td>
                <span class=""><%=rank.msspace%></span>
            </td>
            <td>
                <a href="##" class="link" data-id="<%=rank.mtopicid%>"><%=rank.mtopic%></a>
            </td>
        </tr>
        <%})%>
    </script>
    <script type="text/javascript" src="/ys/Public/V1/js/index.js"></script>
</body>
</html>