<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>金融炼金术 注册</title>
    <link href="/runmoney/Public/V1/css/global.css" rel="stylesheet" media="screen" />
    <link href="/runmoney/Public/V1/css/regist.css" rel="stylesheet" media="screen" />
</head>
<body>
<!-- 导航 start -->
<div class="mod_navigation_3">
    <div class="wrap">
        <div class="logo">
				<span class="logo_img">
					<i class="hidden">金融炼金术</i>
				</span>
            <a href="##" class="link">免费注册</a>
        </div>
        <div class="slogan">
            <div class="text">
                让赢家带你一起跑赢理财！
            </div>
            <div class="profit">
                上周跑赢家<strong>6万</strong>用户平均收益率<strong>12%</strong>
            </div>

        </div>
    </div>
</div>
<!-- 导航 end -->
<div class="body">
    <div class="mod_wrap">
        <div class="right_side">
            <div class="login_text">
                已有账号，<a href="#" class="btn btn_gray login_btn">直接登录</a>
            </div>
        </div>
        <div class="mod_content">
            <!--账号信息 开始-->
            <table class="ui_form">
                <colgroup>
                    <!-- 请指定各个列合适的宽度 -->
                    <col style="width:150px">
                    <col style="width:auto">
                </colgroup>
                <tr>
                    <th><span class="need">*</span>用户名：</th>
                    <td>
                        <label class="login_info _login_info_error" data-ico="ico_name">
                            <input type="text" class="name" data-feild="username" data-validate="0" placeholder="用户名">
                            <span type="submit" class="ico ico_name" ><i class="hidden">用户名</i></span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th><span class="need">*</span>设置密码：</th>
                    <td>
                        <label class="login_info" data-graytip="请输入6-16位的数字和字母" data-redtip="密码必须由6-16位的数字和密码组成" data-ico="ico_pw">
                            <input type="password" class="name pwd pwd_first" data-validate="0" placeholder="密码">
                            <span type="submit" class="ico ico_pw" ><i class="hidden">设置密码</i></span>
                        </label>
                        <span class="tip_sp tip_gray">请输入6-16位的数字和字母</span>
                    </td>
                </tr>
                <tr>
                    <th><span class="need">*</span>确认密码：</th>
                    <td>
                        <label class="login_info _login_info_right" data-graytip="请再次输入密码" data-redtip="请确认两次密码输入一样" data-ico="ico_pw">
                            <input type="password" class="name pwd pwd_confirm" data-validate="0" placeholder="确认密码">
                            <span type="submit" class="ico ico_pw" ><i class="hidden">密码</i></span>
                        </label>
                        <span class="tip_sp tip_gray">请再次输入密码</span>
                    </td>
                </tr>
                <tr>
                    <th><span class="need">*</span>手机号码：</th>
                    <td>
                        <label class="login_info" data-ico="ico_phone">
                            <input type="text" class="name" data-feild="mobile" data-validate="0" placeholder="手机号">
                            <span type="submit" class="ico ico_phone" ><i class="hidden">密码</i></span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th>常用邮箱：</th>
                    <td>
                        <label class="login_info" data-ico="ico_mail">
                            <input type="text" class="name" data-feild="email" placeholder="邮箱">
                            <span type="submit" class="ico ico_mail" ><i class="hidden">邮箱</i></span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th><span class="need">*</span>我是：</th>
                    <td id="radio_group_identity">
                        <label class="label"><input type="radio" data-identity="pro" name="rd_test" checked />金融从业专业人士</label>&nbsp;&nbsp;&nbsp;
                        <label class="label"><input type="radio"  data-identity="normal" name="rd_test"/>普通小股民</label>
                    </td>
                </tr>
                <tr>
                    <th><span class="title">我感兴趣的&nbsp;&nbsp;<br />投资方向&nbsp;&nbsp;<br />关键词是</span>：</th>
                    <td>
                        <p class="check_area">
                            <input type="checkbox" id="rd20" name="rd_test"/><label class="label" for="rd20">达人推荐</label>
                            <input type="checkbox" id="rd21" name="rd_test"/><label class="label" for="rd21">1月最热</label>
                            <input type="checkbox" id="rd22" name="rd_test"/><label class="label" for="rd22">1月最冷</label>
                            <input type="checkbox"  id="rd22" name="rd_test"/><label class="label" for="rd22">1月最冷</label>
                            <input type="checkbox" id="rd22" name="rd_test"/><label class="label" for="rd22">1月最冷</label>
                            <input type="checkbox" id="rd22" name="rd_test"/><label class="label" for="rd22">1月最冷</label>
                            <input type="checkbox" id="rd22" name="rd_test"/><label class="label" for="rd22">1月最冷</label>
                            <input type="checkbox" id="rd22" name="rd_test"/><label class="label" for="rd22">1月最冷</label>
                            <input type="checkbox" id="rd22" name="rd_test"/><label class="label" for="rd22">1月最冷</label>
                            <input type="checkbox" id="rd22" name="rd_test"/><label class="label" for="rd22">1月最冷</label>
                            <input type="checkbox" id="rd22" name="rd_test"/><label class="label" for="rd22">1月最冷</label>
                            <input type="checkbox" id="rd22" name="rd_test"/><label class="label" for="rd22">1月最冷</label>
                            <input type="checkbox" id="rd22" name="rd_test"/><label class="label" for="rd22">1月最冷</label>
                            <input type="checkbox" id="rd22" name="rd_test"/><label class="label" for="rd22">1月最冷</label>
                            <input type="checkbox" id="rd22" name="rd_test"/><label class="label" for="rd22">1月最冷</label>
                            <input type="checkbox" id="rd22" name="rd_test"/><label class="label" for="rd22">1月最冷</label>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="need">*</span>验证码：</th>
                    <td>
                        <label class="login_info security_code">
                            <input type="text" class="name" data-validate="0" placeholder="">
                        </label>
                        <a href="#" class="btn btn_gray_2 btn_security_code">获取短信验证码</a></td>
                </tr>
            </table>
            <div class="mod_confirm">
                <div class="text">
                    <input type="checkbox" id="chk_agreement" checked>我已阅读并同意<a href="#" class="link">《跑赢家服务使用协议》</a>
                </div>
            </div>
            <div class="op_btn">
                <a href="#" class="btn btn_red btn_register">立即注册</a>
            </div>
            <!--账号信息 结束-->
        </div>

    </div>
</div>

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

<script type="text/javascript" src="/runmoney/Public/V1/js/register.js"></script>
</body>
</html>