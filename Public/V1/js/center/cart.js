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

			$("body").on("click", "tr.topic_tr a.topic_delete", function(event){
				var $a = $(this), $tr = $a.closest('tr');
				_this.doCartRemove({
					ids: $tr.data('tid')
				}).then(function(){
					window.location.reload();
				});
				return false;
			});

			$("body").on("click","a.topic_delete_select", function(event){
				var $checkboxs = $("tr.topic_tr input[type='checkbox']:checked");
				var tids = [];
				$.each($checkboxs, function(k,elem){
					var tid = $(elem).closest('tr').data('tid');
					tids.push(tid);
				});
				_this.doCartRemove({
					ids: tids.join(',')
				}).then(function(){
					window.location.reload();
				});
				return false;

			});

			$("body").on("click", "tr.topic_tr a.topic_remove", function(event){
				var $a = $(this), $tr = $a.closest('tr');
				_this.doCartRemoveToCollect({
					ids: $tr.data('tid')
				}).then(function(){
					window.location.reload();
				});
				return false;
			});

			$("body").on("click","a.topic_remove_select", function(event){
				var $checkboxs = $("tr.topic_tr input[type='checkbox']:checked");
				var tids = [];
				$.each($checkboxs, function(k,elem){
					var tid = $(elem).closest('tr').data('tid');
					tids.push(tid);
				});
				_this.doCartRemoveToCollect({
					ids: tids.join(',')
				}).then(function(){
					window.location.reload();
				});
				return false;

			});
			

			$("body").on("change", "input.cb_all", function(event){
				var isChecked = $(this).is(":checked");
				var $checkboxs = $("tr.topic_tr input[type='checkbox']");
				$.each($checkboxs, function(k,elem){
					$(elem).attr('checked',isChecked);
				});
				$.each($("input.cb_all"), function(i,elem){
					$(elem).attr('checked',isChecked);
				});
				$("tr.topic_tr input[type='checkbox']").trigger('change');
			});

			$("body").on("change", "tr.topic_tr input[type='checkbox']", function(event){
				var $checkboxs = $("tr.topic_tr input[type='checkbox']:checked");
				var totalGoldPrice = 0, num = 0;
				$.each($checkboxs, function(k,elem){
					var $tr = $(elem).closest('tr');
					num += 1;
					totalGoldPrice += parseInt($tr.data('goldprice'));
				});
				$("span.num").text(num);
				$("span.price").text(totalGoldPrice);
			});

		},

		doCartRemove: function(opt){
			var opt = opt || {};
			var promise = util.getJSON({
				url: '/Center/cart/subact/remove',
				params: {
					ids: opt.ids
				}
			});
			return promise;
		},

		doCartRemoveToCollect: function(opt){
			var opt = opt || {};
			var promise = util.getJSON({
				url: '/Center/cart/subact/movetocollect',
				params: {
					ids: opt.ids
				}
			});
			return promise;
		},

	});

	centerIndex.init();

})(jQuery, _, window);