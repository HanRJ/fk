(function($, _, win){

	var cleanerIndex = {};
	var util= win.runmoney.util;

	$.extend(cleanerIndex, {

		logined: _logined || false,

		init: function(){
			this.bindEvent();
			this.getTopics();
			this.getSimulations({
				type: 'all'
			});
		},
		bindEvent:function(){
			
			var _this = this;
			
			var el = $("div.side_nav");
			var elpos_original = el.offset().top;
			$(window).scroll(function(){
			    setTimeout(function scrollFollow(){
			    	var elpos = el.offset().top,
			    		windowpos = $(window).scrollTop(),
			    		max = $("div.mod_activities").height()-$("div.side_nav").height()-200;
			    	var finaldestination = windowpos > max ? max : windowpos;
			    	if(windowpos<elpos_original) {
				        finaldestination = elpos_original;
				        el.stop().animate({'top':100}, 600);
				    } else {
				        el.stop().animate({'top':finaldestination-elpos_original+100},1000);
				    }
			    },10);
			});

			//加载更多事件
			$(".op_more").on("click", 'a', function(event){
				var lastid = $(this).data('lastid');
				_this.getTopics({
					type:'',
					lastid: lastid
				});
				return false;
			});

			//右边主题类型切换
			$("#side_nav_ul").on("click", "li.topic_type a", function(event){
				event.preventDefault();
				var $a = $(this), $li = $a.closest('li'), topicType = $a.data('topic');
				if($li.hasClass('side_nav_item_selected')){
					return;
				}
				$("#side_nav_ul li").removeClass('side_nav_item_selected');
				$li.addClass("side_nav_item_selected");
				_this.getTopics({
					type: topic_type||''
				});
			});

			//关注
			$("#side_nav_ul").on("click", "a.btn_care", function(event){
				event.preventDefault();
				var $a = $(this), offset = $a.offset();
				offset = {
					left: offset.left+76,
					top: offset.top
				};

				var tmpl = _.template($("#label_dialog_tmpl").html(), {});
				$('body').append(tmpl);
				$("div.label_layer").css(offset);
			});

			//点击评论事件
			$(".topic_list").on("click", ".news_slide  a.comment", function(event){
				var $a = $(this), offset = $a.offset();
				offset = {
					left: offset.left - 385,
					top: offset.top + 25
				};
				var tid = $a.closest('div.news_slide').data('tid')||'';
				_this.getComments({
					tid: tid
				}).then(function(res){
					var data = res.data||{};
					var tmpl = _.template($("#comment_dialog_tmpl").html(), {topics: data.comments,isLogined:_this.logined,tid:tid});
					$('body').append(tmpl);
					$("div.comment_layer").css(offset);
				});
				return false;
			});

			//点击主题赞成事件
			$(".topic_list").on("click", ".news_slide  a.praise", function(event){
				var $a = $(this);
				_this.doRate({
					id: $a.closest('div.news_slide').data('tid')||'',
					type:'topic',
					val:'good'
				}).then(function(res){
					var num = parseInt($a.data('num'))+1;
					$a.data('num', num);
					var str = '<i class="ico ico_praise"></i>'+num;
					$a.html(str);
				});
				return false;
			});

			//点击主题反对事件
			$(".topic_list").on("click", ".news_slide  a.disagree", function(event){
				var $a = $(this);
				_this.doRate({
					id: $a.closest('div.news_slide').data('tid')||'',
					type:'topic',
					val:'bad'
				}).then(function(res){
					var num = parseInt($a.data('num'))+1;
					$a.data('num', num);
					var str = '<i class="ico ico_disagree"></i>' + num;
					$a.html(str);
				});
				return false;
			});

			//点击评论赞成事件
			$("body").on("click", "div.comment_layer .news_slide  a.praise", function(event){
				var $a = $(this);
				_this.doRate({
					id: $a.closest('div.news_slide').data('tid')||'',
					type:'comment',
					val:'good'
				}).then(function(res){
					var num = parseInt($a.data('num'))+1;
					$a.data('num', num);
					var str = '<i class="ico ico_praise"></i>'+num;
					$a.html(str);
				});
				return false;
			});

			//模拟排行切换事件
			$("#simulation_rank_type").on("click", "li a", function(event){
				var $a = $(this);
				if($a.hasClass('tab_selected')){
					return ;
				}
				$("#simulation_rank_type li a").removeClass('tab_selected');
				$a.addClass('tab_selected');
				var tp = $a.data('tp');
				_this.getSimulations({
					type: tp
				});
				return false;
			});

			//点击评论反对事件
			$("body").on("click", "div.comment_layer .news_slide  a.disagree", function(event){
				var $a = $(this);
				_this.doRate({
					id: $a.closest('div.news_slide').data('tid')||'',
					type:'comment',
					val:'bad'
				}).then(function(res){
					var num = parseInt($a.data('num'))+1;
					$a.data('num', num);
					var str = '<i class="ico ico_disagree"></i>' + num;
					$a.html(str);
				});
				return false;
			});

			//点击评论发表事件
			$("body").on("click", "a.btn_send_comment", function(event){
				//event.preventDefault();
				var $a = $(this), tid = $a.data('tid');
				var content = $.trim($("input.comment.topic_comment").val());
				if(!content){
					return;
				}
				_this.doComment({
					type: 'topic',
					id: tid,
					val: util.htmlEncode(content)
				}).then(function(res){
					$("input.comment.topic_comment").val('');
					_this.getComments({
						tid: tid
					}).then(function(res){
						var data = res.data||{};
						var tmpl = _.template($("#comment_tmpl").html(), {topics: data.comments});
						$("div.comment_layer div.comment_list").html(tmpl);
					})
				});
				return false;
			});

		},
		doComment: function(opt){
			var opt = opt || {};
			var promise = util.getJSON({
				url: '/Index/addcomment',
				params: {
					type: opt.type || 'topic',
					id:opt.id||0,
					val:opt.val||''
				}
			});
			return promise;
		},
		getTopics: function(opt){
			var opt = opt || {};
			var promise = util.getJSON({
				url: '/Index/topic',
				params: {
					type: opt.type || '',
					lastid:opt.lastid||0
				}
			});
			promise.then(function(res){
				var data = res.data;
				var tmpl = _.template($("#topic_tmpl").html(),{topics: data.topics});
				$(tmpl).insertBefore('.op_more');
				$(".op_more a").data('lastid', data.lastid);
			});
		},
		doRate: function(opt){
			var opt = opt || {};
			var promise = util.getJSON({
				url: '/Index/rate',
				params: {
					id: opt.id,
					type: opt.type,
					val:opt.val
				}
			});
			return promise;
		},
		getSimulations: function(opt){
			var opt = opt || {};
			var promise = util.getJSON({
				url: '/Index/ranklist',
				params: {
					type: opt.type || ''
				}
			});
			promise.then(function(res){
				var data = res.data;
				var str = _.template($("#simulation_rank_tmpl").html(), {list: (data.list||[])});
				$("#simulation_rank_list").html(str);
			});
			return promise;
		},
		getComments: function(opt){
			var opt = opt || {};
			var promise = util.getJSON({
				url: '/Index/comment',
				params: {
					tid: opt.tid || ''
				}
			});
			return promise;
		}


	});

	cleanerIndex.init();

})(jQuery, _, window);