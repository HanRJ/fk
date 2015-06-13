(function($, _, win){

	var centerIndex = {};
	var util= win.runmoney.util;

	$.extend(centerIndex, {

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

	centerIndex.init();

})(jQuery, _, window);