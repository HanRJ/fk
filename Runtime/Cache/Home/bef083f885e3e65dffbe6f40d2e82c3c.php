<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>金融炼金术 新建主题</title>
    <link href="/runmoney/Public/V1/css/global.css" rel="stylesheet" media="screen" />
    <link href="/runmoney/Public/V1/css/topic.css" rel="stylesheet" media="screen" />
    <link href="/runmoney/Public/V1/css/uploadify.css" rel="stylesheet" media="screen" />
    <link href="/runmoney/Public/V1/css/jquery-ui.css" rel="stylesheet" media="screen" />
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
                    <a href="##" class="link">首页</a>
                </li>
                <li>
                    <a href="##" class="link link_now"> > 新建主题</a>
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

    <div class="title">
        <h2>新建主题策略</h2>
        <div class="steps">
            <div class="step">
            </div>
					<span class="text">
					简单3步，助你投资
					</span>
        </div>
    </div>

    <div class="new_topic">

        <div class="title_area">
            <span>*</span>
            策略名称
        </div>
        <div class="topic_content">
            <label class="login_info">
                <input type="text" id="topic_title" class="name" placeholder="">
            </label>
            <div class="update">
                <a href="#" id="btn_upload_topic_pic" class="btn btn_gray_2">上传策略图</a>
            </div>
            <div class="update topic_pic" id="upload_queue" style="margin-left:0px;">
                
            </div>
        </div>

        <div class="title_area">
            <span>*</span>
            策略说明
        </div>
        <div class="topic_content">
            <textarea class="textarea" id="topic_desc"></textarea>
        </div>
        <div class="slice">

        </div>
        <div class="title_area">
            <span>*</span>
            策略指标
        </div>
        <div class="topic_content">
            <textarea class="textarea" id="topic_para"></textarea>
        </div>
        <div class="slice">

        </div>

        <div class="title_area">
            <span>*</span>
            添加股票<span class="des">（一个策略最多添加30支股票）</span>
        </div>
        <div class="topic_content">
            <div class="stock_list">
                <input type="text" class="input" id="stock_auto_complete" placeholder="请输入代码/拼音/名称">
                <div class="list_ct">
                    <div class="list_text">
                        <a href="##" class="btn btn_gray_2">比例划分</a>
                        <em id="stock_total_info">股票列表及其特仓（0只占0%）</em>
                    </div>
                    <table id="selected_stock_tb">
                        
                    </table>
                </div>
            </div>

            <div class="hot_stock" id="hot_stock_list">
                <div class="text">
                    一个月内热门策略股票
                </div>
                <div class="hot_stock_item">
                    <a href="##" class="btn btn_gray_2"><span class="ico_plus">+</span>添加</a>
                    500034 中信证券
                </div>
                <div class="hot_stock_item">
                    <a href="##" class="btn btn_gray_2"><span class="ico_plus">+</span>添加</a>
                    500034 中信证券
                </div>
                <div class="hot_stock_item">
                    <a href="##" class="btn btn_gray_2"><span class="ico_plus">+</span>添加</a>
                    500034 中信证券
                </div>
                <div class="hot_stock_item">
                    <a href="##" class="btn btn_gray_2"><span class="ico_plus">+</span>添加</a>
                    500034 中信证券
                </div>
                <div class="hot_stock_item">
                    <a href="##" class="btn btn_gray_2"><span class="ico_plus">+</span>添加</a>
                    500034 中信证券
                </div>
                <div class="hot_stock_item">
                    <a href="##" class="btn btn_gray_2"><span class="ico_plus">+</span>添加</a>
                    500034 中信证券
                </div>
            </div>

        </div>

    </div>

    <div class="mod_recommend clear">
        <div class="title_area">
            添加推荐理由
        </div>
        <textarea class="textarea" id="topic_remark"></textarea>
        <div class="upload" id="topic_pics">
            <div class="update">
                <a href="#" id="btn_upload_pics" class="btn btn_gray_2">上传照片</a>
            </div>
            <!--
            <div class="update">
                <a href="##" class="plus"></a>
            </div>
            <div class="update">
                <a href="##" class="plus"></a>
            </div>
            <div class="update">
                <a href="##" class="plus"></a>
            </div>
            <div class="update last">
                <a href="##" class="plus"></a>
            </div>
            -->
        </div>
    </div>

    <div class="op_area">
        <a href="#" class="btn btn_gray btn_topic_save">保存</a>
        <a href="#" class="btn btn_red btn_topic_preview">预览并发布</a>
    </div>

    </div>
    <!-- 左边 end -->

    <!-- 右边 start -->
    <div class="right_ct">
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



    <script type="text/html" id="topic_create_tmpl">
    <div class="dialog_layer pop_layer label_layer" style="width:450px;left:-1000px;top:-100px;">
        <div class="dialog_layer_main">
            <div class="dialog_layer_title title_white"><h3><a href="#" class="close pop-btn-close"></a></h3></div>
            <div class="dialog_layer_cont">
                <p class="cont_text"><strong>保存成功！</strong>您创建的主题可以在 个人中心>创建发布 下查看、编辑，如果想发布到网站上，请您继续预览并发布主题</p>
            </div>
        </div>
    </div>
    </script>

    <script type="text/html" id="stock_selected_tmpl">
        <colgroup></colgroup>
        <thead>
            <th>&nbsp;</th>
            <th>代码</th>
            <th>名称</th>
            <th>持仓比例(%)</th>
            <th>&nbsp;</th>
        </thead>
        <%if(stocks.length>0){%>
        <tbody>
            <% var percent = (100/stocks.length).toFixed(1);%>
            <%_.each(stocks,function(stock,i){%>
                <tr data-code="<%=stock.code||''%>">
                    <td></td>
                    <td><%=stock.code||''%></td>
                    <td><%=stock.name||''%></td>
                    <td>
                        <span class="mod_count">
                            <a href="#" class="stock btn_minus">-</a>
                                <input type="text" value="<%=percent%>" class="count_num">
                            <a href="#" class="stock btn_plus">+</a>
                        </span>
                    </td>
                    <td>
                        <a data-stockid="<%=stock.id||''%>" href="#" class="stock btn_delete"></a>
                    </td>
                </tr>
            <%})%>
        </tbody>
        <%} else{%>
        <tbody class="blank">
            <tr>
                <td colspan="5">
                    <p>暂无股票，请在上方搜索框中输入</p>
                    <p>“代码/名称/拼音”添加股票</p>
                </td>
            </tr>
        </tbody>
        <%}%>
    </script>


    <script type="text/javascript" src="/runmoney/Public/V1/js/lib/jquery.uploadify.js?ver=<?php echo rand(0,9999);?>"></script>
    <script type="text/javascript" src="/runmoney/Public/V1/js/lib/jquery-ui.js"></script>
    <script type="text/javascript" src="/runmoney/Public/V1/js/topic/create.js"></script>
    <script type="text/javascript">
        $(function(){

            var maxPicsNum = 4,uploadedNum = 0;
            /**
             * [buildUploadify 构建文件上传按钮]
             */
            function buildUploadify(opt){

                $("#"+opt.btnId).uploadify({
                    'formData': {
                        <?php $timestamp = time();?>
                        'timestamp' : '<?php echo $timestamp;?>',
                        'token'     : '<?php echo md5('#$afWE24_=' . $timestamp);?>'
                    },
                    'swf'           : '/runmoney/Public/V1/swf/uploadify.swf',
                    'uploader'      : '<?php echo U('Topic/uploadpic');?>',
                    'width'         : 90,
                    'height'        : 30,
                    'queueID'       : opt.queueId||false,
                    'buttonText'    : opt.buttonText||'上传图片', 
                    'fileExt'       : '*.jpg;*.gif,*.png',
                    'fileDesc'      : 'Web Image Files(.JPG,.GIF,.PNG)',
                    'onCancel'      : opt.uploadCancel || function(){},
                    'onUploadSuccess': opt.uplaodSuccess || function(){},
                    'onUploadError'  : opt.uploadError || function(){},
                    'onUploadStart'  : opt.uploadStart || function(){},
                    'removeCompleted': false,
                    'itemTemplate': opt.itemTemplate || false,
                    'multi': false,
                    'uploadLimit': opt.uploadLimit || 0
                });
            };

            /**
             * 上传策略图
             */
            buildUploadify({
                btnId: 'btn_upload_topic_pic',
                queueId: 'upload_queue',
                buttonText: '上传策略图',
                itemTemplate:'<div></div>',
                uploadStart: function (file){
                    $("#upload_queue").empty();
                },
                uplaodSuccess: function (file, res, response){
                    var res = $.parseJSON(res);
                    if(response == true){
                        if(res.state == 0){
                            var path = res.data.files.Filedata.path;
                            $("#upload_queue").empty().html("<a class='topic_thumb' href='"+path+"' target='_blank'><img style='width:100px;height:100px;' src='"+path+"'></a>");
                        }else{
                            alert(res.message || '图片上传出现错误！');
                        }
                        
                    }else{
                        alert('图片上传出现错误！')
                    }
                }

            });
            /**
             * 上传图片
             */
            buildUploadify({
                btnId: 'btn_upload_pics',
                queueId: 'upload_queue',
                buttonText: '上传图片',
                itemTemplate:'<div></div>',
                uplaodSuccess: function (file, res, response){
                    var res = $.parseJSON(res);
                    if(response == true){
                        if(res.state == 0){
                            ++uploadedNum;
                            var path = res.data.files.Filedata.path;
                            $("#topic_pics").append("<div class='update'><a class='topic_pic' href='"+path+"' target='_blank'><img style='width:100px;height:100px;' src='"+path+"'></a></div>");
                            if(uploadedNum >= maxPicsNum){
                                $("#btn_upload_pics").uploadify('disable',true);
                            }
                        }else{
                            alert(res.message || '图片上传出现错误！');
                        }
                        
                    }else{
                        alert('图片上传出现错误！')
                    }
                }

            });
            
        });
        
    </script>
</body>
</html>