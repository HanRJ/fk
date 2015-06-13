(function($, _, win){

	var topicDetail = {};
	var util= win.runmoney.util;

	$.extend(topicDetail, {

		logined: _logined || false,

		tid: _tid||'',

		pageNum: 10,

		init: function(){
			this.bindEvent();
			this.getComments({
				type:0,
				p:1,
				cnt:this.pageNum
			});
		},
		bindEvent:function(){

			var _this = this;
			$("body").on("click", "ul.pages.pagination a[data-prev]", function(event){
				var $a = $(this), prev = parseInt($a.data('prev'));
				_this.getComments({
					type:parseInt($("input[data-comtype]:checked").data('comtype')),
					p:prev,
					cnt:_this.pageNum
				});
				return false;
			});
			$("body").on("click", "ul.pages.pagination a[data-next]", function(event){
				var $a = $(this), next = parseInt($a.data('next'));
				_this.getComments({
					type:parseInt($("input[data-comtype]:checked").data('comtype')),
					p:next,
					cnt:_this.pageNum
				});
				return false;
			});
			$("body").on("click", "ul.pages.pagination a[data-page]", function(){
				var $a = $(this), page = parseInt($a.data('page'));
				_this.getComments({
					type:parseInt($("input[data-comtype]:checked").data('comtype')),
					p:page,
					cnt:_this.pageNum
				});
				return false;
			});

			$("body").on("click", "input[data-comtype]", function(){
				var page = 1, $input = $(this);
				$("input[data-comtype]:checked").attr("checked",false);
				if($input.is(":checked")){
					return;
				}
				_this.getComments({
					type:parseInt($input.data('comtype')),
					p:page,
					cnt:_this.pageNum
				});
				return false;
			});

			//点击主题赞成事件
			$("div.share").on("click", "a.praise", function(event){
				var $a = $(this),$em = $a.find('em');
				if($a.hasClass('done')){
					return false;
				}
				_this.doRate({
					tid: _this.tid,
					val:'good'
				}).then(function(res){
					$em.text(parseInt($em.text())+1);
					$a.addClass('done');
				});
				return false;
			});

			//点击主题反对事件
			$("div.share").on("click", "a.disagree", function(event){
				var $a = $(this),$em = $a.find('em');
				if($a.hasClass('done')){
					return false;
				}
				_this.doRate({
					tid: _this.tid,
					val:'bad'
				}).then(function(res){
					$em.text(parseInt($em.text())+1);
					$a.addClass('done');
				});
				return false;
			});

			//点击主题收藏事件
			$("div.share").on("click", "a.collect", function(event){
				var $a = $(this);
				if($a.hasClass('done')){
					return false;
				}
				_this.doCollect({
					tid: _this.tid
				}).then(function(res){
					var data = res.data || {};
					$a.addClass('done');
					$("#collect_cnt").text(data.count||'');
				});
				return false;
			});

			//加入购物车
			$("a.btn_buy").on("click", function(event){
				var $a = $(this);
				if($a.hasClass('done')){
					return false;
				}
				_this.addCart({
					tid: _this.tid
				}).then(function(res){
					var data = res.data || {};
					$a.addClass('done');
					$("#cart_cnt").text(data.count||'');
				});
				return false;
			});

		},

		doRate: function(opt){
			var opt = opt || {};
			var promise = util.getJSON({
				url: '/Topic/rate',
				params: {
					tid: opt.tid,
					val:opt.val
				}
			});
			return promise;
		},

		doCollect: function(opt){
			var opt = opt || {};
			var promise = util.getJSON({
				url: '/Topic/collect',
				params: {
					tid: opt.tid
				}
			});
			return promise;
		},

		addCart: function(opt){
			var opt = opt || {};
			var promise = util.getJSON({
				url: '/Topic/addcart',
				params: {
					tid: opt.tid
				}
			});
			return promise;
		},

		getComments: function(opt){
			var _this = this;
			var promise = util.getJSON({
				'url':'/Topic/comment',
				params:{
					tid: _this.tid,
					type: opt.type,
					p: opt.p,
					cnt: opt.cnt,	
				}
			});
			promise.then(function(res){
				var data = res.data;
				data = $.extend(res.data, opt, {logined: _this.logined});
				var tmpl = _.template($("#topic_comment_tmpl").html(),{stats:data});
				$('div.mod_comment').html(tmpl);
			});
		}

	});

	topicDetail.init();

})(jQuery, _, window);