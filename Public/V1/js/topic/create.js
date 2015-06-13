(function($, _, win){

	var topicCreate = {};
	var util= win.runmoney.util;

	$.extend(topicCreate, {

		logined: _logined || false,

		selectedStocks:[],

		topicId:'',

		init: function(){
			this.buildStocks();
			this.buildAutoComplete();
			this.bindEvent();
		},
		bindEvent:function(){

			var _this = this;

			$("#selected_stock_tb").on('click', 'a.stock.btn_delete', function(event){
				var $a = $(this), stockId = $a.data('stockid');
				_this.removeStock(stockId);
				return false;
			});

			$("#selected_stock_tb").on('click', 'a.stock.btn_plus', function(event){
				var $a = $(this), $input = $a.siblings('input');
				$input.val((parseFloat($input.val())+0.1).toFixed(1));
				_this.updateStockInfo();
				return false;
			});

			$("#selected_stock_tb").on('click', 'a.stock.btn_minus', function(event){
				var $a = $(this), $input = $a.siblings('input');
				$input.val((parseFloat($input.val())-0.1).toFixed(1));
				_this.updateStockInfo();
				return false;
			});

			$("a.btn_topic_save").on("click", function(event){
				var topic = _this.formatTopic();
				if(!topic.title || !topic.thumb || !topic.desc || !topic.para || !topic.remark || topic.pics.length<1 || topic.stocks.length<1 ){
					alert('必填项不能为空！');
					return;
				}
				_this.saveTopic(topic);
				return false;
			});

			$("a.btn_topic_preview").on("click", function(event){
				
			});

		},

		showTips: function(){
			util.showDialog({
				tmpl:$("#topic_create_tmpl").html(),
				confirmCb:function(){
					
				},
				closeCb:function(){

				}
			});
		},

		formatTopic: function(){

			var topic = {};
			topic.title = $.trim($("#topic_title").val());
			topic.thumb = $("a.topic_thumb").length>0 ? $("a.topic_thumb").attr('href'):'';
			topic.desc = $.trim($("#topic_desc").val());
			topic.para = $.trim($("#topic_para").val());

			topic.pics = [];
			$.each($("a.topic_pic"), function(i,a){
				topic.pics.push($(a).attr('href'));
			});
			topic.remark = $.trim($("#topic_remark").val());

			topic.stocks =[];
			$.each($("#selected_stock_tb tbody tr"), function(i,tr){
				topic.stocks.push($(tr).data('code')+'~'+$(tr).find('input').val());
			});

			return topic;
		},

		saveTopic: function(topic){
			var _this = this,
				topic = topic || {};
			var promise = util.postJSON({
				url: '/Topic/dosave',
				params: {
					id: _this.topicId,
					title: topic.title,
					thumb: topic.thumb,
					desc: topic.desc,
					para: topic.para,
					pics: topic.pics.join('|'),
					remark: topic.remark,
					stocks: topic.stocks.join('|')
				}
			});
			promise.then(function(res){
				var data = res.data;
				_this.topicId = data.id;
				_this.showTips();
			});
		},

		addStock:function(stock){
			var _this = this,
				stocks = _this.selectedStocks,
				isIn = false;
			for(var i = 0,len = stocks.length; i < len;i++){
				if(stocks[i].id == stock.id){
					isIn = true;
				}
			}
			if(!isIn){
				_this.selectedStocks.push(stock);
				_this.buildStocks();
			}
		},

		removeStock: function(stockId){
			var _this = this,
				stocks = _this.selectedStocks,
				isIn = false;
			for(var i = 0,len = stocks.length; i < len;i++){
				if(stocks[i].id == stockId){
					_this.selectedStocks.splice(i,1);
				}
			}
			_this.buildStocks();
		},
		
		buildAutoComplete: function(){
			var _this = this;
			$( "#stock_auto_complete" ).autocomplete({
                source: function( request, response ) {
                    $.ajax({
                      url: G.APP+"/Common/acquery",
                      dataType: "jsonp",
                      data: {
                        q: request.term
                      },
                      success: function( res ) {
                      	if(res.state == 0){
                      		response( res.data.list || [] );
                      	}                        
                      }
                    });
                },
                minLength: 2,
                select: function( event, ui ) {
                    var stock = ui.item ;
                    _this.addStock(stock);
                },
                open: function() {

                },
                close: function() {

                }

            }).autocomplete( "instance" )._renderItem = function( ul, item ) {
              return $( "<li>" )
                .append( "<a data-id='"+item.id+"' data-code='"+item.code+"' data-name='"+item.name+"'>" +item.code+"/"+ item.name +"/"+ item.name_py +"/"+((item.type == 1 || item.type == 2)?"深圳":"上海")+ "</a>" )
                .appendTo( ul );
            };
		},
		buildStocks:function(){
			var _this = this;
			var str = _.template($("#stock_selected_tmpl").html(), {stocks: _this.selectedStocks});
			$("#selected_stock_tb").empty().html(str);
			_this.updateStockInfo();
		},

		updateStockInfo: function(){

			var num = 0 , total = 0;
			$.each($("#selected_stock_tb tbody tr input"), function(i, elem){
				num += 1;
				total += parseFloat($(elem).val());
			})
			$("#stock_total_info").html("股票列表及其特仓（"+num+"只占<em class='stock_total'>"+total.toFixed(1)+"%</em>）");
		}

	});

	topicCreate.init();

})(jQuery, _, window);