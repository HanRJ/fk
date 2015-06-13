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
				_this.doCollectRemove({
					tid: $tr.data('tid')
				}).then(function(){
					window.location.reload();
				});
				return false;
			});

		},

		doCollectRemove: function(opt){
			var opt = opt || {};
			var promise = util.getJSON({
				url: '/Topic/delcollect',
				params: {
					tid: opt.tid
				}
			});
			return promise;
		}

	});

	centerIndex.init();

})(jQuery, _, window);