(function($, _, win){

	var centerTheme = {};
	var util= win.runmoney.util;

	$.extend(centerTheme, {

		logined: _logined || false,

		init: function(){
			this.bindEvent();
		},
		bindEvent:function(){

			var _this = this;
			$("body").on("click", "tr.topic_tr a.btn_delete", function(event){
				var $a = $(this), $tr = $a.closest('tr');
				_this.doTopicRemove({
					tid: $tr.data('tid')
				}).then(function(){
					window.location.reload();
				});
				return false;
			});

		},

		doTopicRemove: function(opt){
			var opt = opt || {};
			var promise = util.getJSON({
				url: '/Topic/doremove',
				params: {
					tid: opt.tid
				}
			});
			return promise;
		}

	});

	centerTheme.init();

})(jQuery, _, window);