(function($, _, win){
	var cleanerRegister = {};
	var util= win.runmoney.util;
	$.extend(cleanerRegister, {
		init: function(){
			this.bindEvent();
		},
		bindEvent: function(){
			var _this = this;
			//用户名、手机、邮箱验证
			$("input[data-feild]").focusin(function(event){
				var $input = $(this);
				$input.closest('label').removeClass('login_info_error')
					  .siblings('span.tip_red').remove();
				$input.data('validate',0);
			}).focusout(function(event){
				var $input = $(this),
					feild = $input.data('feild'),
					val = $input.val();
				if($.trim(val) == ''){
					$input.data('validate',0);
					return;
				}
				if(feild == 'mobile'){
					if(!/\d{11}/.test(val)){
						$input.siblings('span.ico').removeClass('ico_confirm').addClass($input.closest('label').data('ico'));
						$input.closest('label').after('<span class="tip_red">'+'请输入正确的手机号'+'</span>');
						$input.data('validate',0);
						return;
					}
				}
				if(feild == "email"){
					var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
					if(!re.test(val)){
						$input.siblings('span.ico').removeClass('ico_confirm').addClass($input.closest('label').data('ico'));
						$input.closest('label').after('<span class="tip_red">'+'请输入正确的邮箱'+'</span>');
						return;
					}
				}
				_this.validateFeild({
					type: feild,
					val: val,
					elem: $input
				})

			});
			//密码验证
			$("input.pwd").focusin(function(event){
				var $input = $(this);
				var $sp = $input.closest('label').removeClass('login_info_error')
					  .siblings('span.tip_sp');
				$sp.removeClass('tip_red').addClass('tip_gray').text($input.closest('label').data('graytip'));
				$input.data('validate',0);
			}).focusout(function(event){
				var $input = $(this),
					val = $.trim($input.val());
				if(val == ''){
					$input.data('validate',0);
					return;
				}
				var $sp = $input.closest('label').siblings('span.tip_sp');
				if($input.hasClass('pwd_confirm')){
					var first = $.trim($("input.pwd_first").val()), confirm = $.trim($("input.pwd_confirm").val());
					if(!first){
						$("input.pwd_first").data('validate', 0);
						return;
					}
					if(!confirm){
						$("input.pwd_confirm").data('validate', 0);
						return;
					}
					if(first == confirm){
						$input.siblings('span.ico').removeClass($input.closest('label').data('ico')).addClass('ico_confirm');
						$input.data('validate',1);
					}else{
						$input.siblings('span.ico').removeClass('ico_confirm').addClass($input.closest('label').data('ico'));
						$sp.removeClass('tip_gray').addClass('tip_red').text($input.closest('label').data('redtip'));
						$input.data('validate',0);
					}
				}else{
					if(val.length < 6 || val.length > 16){	
						$sp.removeClass('tip_gray').addClass('tip_red').text($input.closest('label').data('redtip'))
						$input.data('validate',0);
					}
					var reg = /([0-9].*([a-zA-Z].*[a-zA-Z])|[a-zA-Z].*([0-9].*[0-9])|([0-9].*[a-zA-Z]|[a-zA-Z].*[0-9]))/;
					if(reg.test(val)){
						$input.siblings('span.ico').removeClass($input.closest('label').data('ico')).addClass('ico_confirm');
						$input.data('validate',1);
					}else{
						$input.siblings('span.ico').removeClass('ico_confirm').addClass($input.closest('label').data('ico'));
						$sp.removeClass('tip_gray').addClass('tip_red').text($input.closest('label').data('redtip'));
						$input.data('validate',0);
					}
				}
				
			});
			
			/**
			 * [获取短信验证码]
			 */
			$("a.btn_security_code").on("click", function(event){

				var $mobile = $("input[data-feild='mobile']"),
					validate = $mobile.data('validate'),
					mobileNum = $mobile.val();

				if(validate == '1'){
					_this.getMobileCode({
						mobile: mobileNum
					});
				}

				return false;

			});

			/**
			 * [注册]
			 */
			$("a.btn_register").on("click", function(event){
				var isValidate = true;
				$.each($("input[data-validate]"), function(i, input){
					if($(input).data('validate') == '0'){
						isValidate = false;
					}
				});
				if(!$("#chk_agreement").is(":checked")){
					isValidate = false;
				}
				if(isValidate){
					_this.registUser({
						username: $("input[data-feild='username']").val(),
						password: $("input.pwd_first").val(),
						repassword: $("input.pwd_confirm").val(),
						email: $("input[data-feild='email']").val(),
						mobile: $("input[data-feild='mobile']").val(),
						code: $("label.security_code input").val()
					});
				}
			});
		},

		registUser: function(opt){
			var opt = opt || {};
			var promise = util.postJSON({
				url: '/User/doregister',
				params: {
					username: opt.username || '',
					password: opt.password || '',
					repassword: opt.repassword || '',
					email: opt.email || '',
					mobile: opt.mobile,
					code: opt.code
				}
			});
			promise.then(function(res){
				var data = res.data;
				window.location.href = '/index.php';
			}, function(res){
				alert(res.message);
			});
		},

		getMobileCode: function(opt){
			var opt = opt || {};
			var promise = util.getJSON({
				url: '/User/mobilecode',
				params: {
					mobile: opt.mobile
				}
			});
			promise.then(function(res){
				var data = res.data;
				$("label.security_code input").data('validate', 1).val(data.code||'');
			}, function(res){
				$("label.security_code input").data('validate', 0).val('');
			});
		},

		validateFeild: function(opt){
			var opt = opt || {},
				$input = opt.elem;
			var promise = util.getJSON({
				url: '/User/validate',
				params: {
					type: opt.type || '',
					val: opt.val||''
				}
			});
			promise.then(function(res){
				$input.siblings('span.ico').removeClass($input.closest('label').data('ico')).addClass('ico_confirm');
				$input.data('validate',1);
			},function(res){
				$input.siblings('span.ico').removeClass('ico_confirm').addClass($input.closest('label').data('ico'));
				$input.closest('label').after('<span class="tip_red">'+(res.message||'输入有误')+'</span>');
				$input.data('validate',0);
			});
		}
	});
	cleanerRegister.init();
})(jQuery, _, window);