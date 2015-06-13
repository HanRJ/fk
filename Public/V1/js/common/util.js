(function($, win){
	var util = util ||{};
	$.extend(util, {
		init: function(){
			this.bindEvent();
		},
		bindEvent:function(){
			var _this = this;
			//关闭弹窗事件
			$("body").on("click", "div.comment_layer a.close", function(event){
				$("div.comment_layer").remove();
			});

			//登录事件
			$("body").on("click", "a.login_btn", function(event){
				$("div.comment_layer").remove();
				util.showDialog({
					tmpl:$("#login_dialog_tmpl").html(),
					confirmCb:function(){
						var username = $("div.pop_login_layer input[data-field='username']").val(),
							password = $("div.pop_login_layer input[data-field='pwd']").val();
						if(!username || !password){
							return;
						}
						_this.login({
							username: username,
							password: password
						})
					},
					closeCb:function(){

					}
				});	
			});

			//退出事件
			$("body").on("click", "a.logout_btn", function(event){
				
				var promise = _this.getJSON({
					url: '/User/dologout',
					params: {

					}
				});
				promise.then(function(res){
					window.location.href = window.location.pathname;
				},function(res){
					alert(res.message || '退出错误，刷新试试');
				})
			});

			//keydown-回车登录事件
			$("body").on("keydown", function(event){
				if(event.keyCode == 13){
					$("div.pop_login_layer:visible a.pop-btn-save").trigger("click");
				}
			});

		},

		login: function(opt){
			var _this = this;
			var promise = _this.postJSON({
				url: '/User/dologin',
				params: {
					username: opt.username || '',
					password: opt.password || ''
				}
			});
			promise.then(function(res){
				window.location.href = window.location.pathname;
			},function(res){
				alert(res.message || '登录错误，请重新登录');
			})
		},

		getJSON: function(opt){
			var promise = $.Deferred();
			$.ajax({
                data: $.extend({},opt.params || {}),
                url: G.APP + opt.url ||'',
                type: 'get',
                dataType: "jsonp",
                jsonp: 'callback',
                jsonpCallback: 'rm_callback_'+ Math.floor(Math.random()*(100000-1)+1)+'_' + (+new Date), //make sure reqs are not conflict
                success: function(res) {
    				if(res.state == 0){
    					promise.resolve(res);
    				}else{
    					//alert(res.message||'拉取数据异常，请刷新页面。');
    					promise.reject(res);
    				}
                },
                error: function(res) {
                	alert('拉取数据异常，请刷新页面。');
                }
            });

            return promise;
		},
		
		postJSON: function(opt){
			var promise = $.Deferred();
			$.ajax({
                data: $.extend({},opt.params || {}),
                url: G.APP+opt.url ||'',
                type: 'post',
                dataType: "jsonp",
                jsonp: 'callback',
                jsonpCallback: 'rm_callback_'+ Math.floor(Math.random()*(100000-1)+1)+'_' + (+new Date), //make sure reqs are not conflict
                success: function(res) {
    				if(res.state == 0){
    					promise.resolve(res);
    				}else{
    					//alert(res.message||'拉取数据异常，请刷新页面。');
    					promise.reject(res);
    				}
                },
                error: function(res) {
                	alert('拉取数据异常，请刷新页面。');
                }
            });

            return promise;
		},

		htmlEncode:function(text){
			var t = $("<div></div>").text(text);
			return t.html();
		},

		htmlDecode: function(text){
			var t = $("<div></div>").html(text);
			return t.text();
		},

		formatDate:function(t,fmt){
			var d = new Date(t);
			var o = {
		        "M+": d.getMonth() + 1, //月份 
		        "d+": d.getDate(), //日 
		        "H+": d.getHours(), //小时 
		        "m+": d.getMinutes(), //分 
		        "s+": d.getSeconds(), //秒 
		        "q+": Math.floor((d.getMonth() + 3) / 3), //季度 
		        "S": d.getMilliseconds() //毫秒 
		    };
		    if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (d.getFullYear() + "").substr(4 - RegExp.$1.length));
		    for (var k in o)
		    if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
		    return fmt;
		},

		showDialog:function(opt){
			opt=$.extend({
				container:'div.pop_layer',
				showOverlay:true,
				confirmCb:function(){},
				closeCb:function(){}
			},opt);

			$('body').append(opt.tmpl);

			var container=opt.container;

			function getBrowserHeight() {
		        if ($.browser.msie)
		            return document.compatMode ==
		            "CSS1Compat" ? document.documentElement.clientHeight : document.body.clientHeight;
		        else
		            return self.innerHeight
		    }
		    function getBrowserWidth() {
		        if ($.browser.msie)
		            return document.compatMode == "CSS1Compat" ? document.documentElement.clientWidth : document.body.clientWidth;
		        else
		            return self.innerWidth
		    }
		    var windowWidth = getBrowserWidth();
            var windowHeight = getBrowserHeight();
            var l = Math.floor(windowWidth / 2 - $(container).width() / 2 + $(document).scrollLeft());
            var t = Math.floor(windowHeight / 2 - $(container).height() / 2 + $(document).scrollTop());
            $(container).css({
				top: t+'px',
				left: l+'px',
				'z-index':'9999'
			});

			$(container).on("click",".pop-btn-close,.pop-btn-cancel",function(){
				opt.closeCb && opt.closeCb($(container));
				$(container).off('click',".pop-btn-close,.pop-btn-cancel");
				$(container).off('click',".pop-btn-save").remove();
				$("#mask_div").length > 0 && $("#mask_div").remove();
			})
			$(container).on("click",".pop-btn-save",function(){
				opt.confirmCb && opt.confirmCb($(container));
			})

			$("#mask_div").length > 0 && $("#mask_div").remove();
            $("body").append("<div id='mask_div' class='ui_mask'></div>");
            $("body").find("#mask_div").width($(window).width()).height($(window).height() >$(document).height() ? $(window).height() : $(document).height()).css({position: "fixed",_position: "absolute",top: "0px",left: "0px",display: "block",background: "#000",filter: "alpha(opacity=50)",opacity: "0.6",zIndex: 9998});
            var resizeFun = function() {
	            var l = 0, t = 0, windowWidth = getBrowserWidth(), windowHeight = getBrowserHeight();
	            l = Math.floor(windowWidth / 2 - $(container).width() / 2 + $(document).scrollLeft());
	            t = Math.floor(windowHeight / 2 - $(container).height() / 2 + $(document).scrollTop());
	            loc = {left: l + "px",top: t + "px", 'z-index':'9999'};
	            $(container).css(loc);
	            $("#mask_div").length > 0 && $("#mask_div").width($(window).width()).height($(window).height() > $(document).height() ? $(window).height() : $(document).height()).css({opacity: "0.6",
	                top: "0px",left: "0px",position: "absolute",zIndex: 999})
	        };
	        var resizer1, resizer2;
	        $(window).resize(function() {
				clearTimeout(resizer1);
	            resizer1 = setTimeout(resizeFun, 10)
	        });
	        $(window).scroll(function() {
                clearTimeout(resizer2);
                resizer2 = setTimeout(resizeFun, 10);
	        })
		}


	});

	win.runmoney = win.runmoney || {};
	win.runmoney.util = util;
	util.init();
})(jQuery, window);