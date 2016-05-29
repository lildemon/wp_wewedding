!function($) {
	$(document).ready(function(){
		jeDate({
			dateCell:"#textymdhms",  
			isinitVal:false,
			isTime:true, 
			festival: true, //显示节日
			minDate:"2014-09-19 00:00:00",
		})
		jeDate.skin("gray")
		var $check = $(".check-box")
		$check.on("click",function(){ // checkbox
			var $this = $(this),
				name = $this.attr("name")
			$(".check-box[name="+name+"]").removeClass("on")
			$this.toggleClass("on")

		})

		$("#submit").on("click",function(){
			$(".cover").css("display","block")
		})

		$(".close").on("click",function(){
			$(".cover").css("display","none")
		})

	})


	Remix.create({
		remixEvent: {
			'input, *, @': 'onInput',
			'change, *, @': 'onInputChange',
			'click, submitBtn': 'onSubmit'
		},
		initialize: function() {
			var self = this
			var $ccf_form = $('form.ccf-form')
			var ccf_action = this._ccf_action = $ccf_form.attr('action')
			this.refs.submit_form.attr('action', ccf_action)
			this._form_id = $ccf_form.data('formId')
			this._form_nonce = $('input[name=form_nonce]').val()
		},
		onInput: function(e, $el) {
			/*
			if(this._isFormValid()) {
				this.refs.submitBtn.removeClass('btn-grey').addClass('btn-red')
			} else {
				this.refs.submitBtn.removeClass('btn-red').addClass('btn-grey')
			}
			*/
		},
		onInputChange: function(e, $el) {
			$el.val($.trim($el.val()))
		},
		onSubmit: function() {
			var self = this
			var vals = this.getVals()
			var msg
			if(msg = this.validate(vals)) {
				Remix.Alert({msg: msg})
				return
			}

			Remix.Alert({msg: '正在提交...'})

			
			$.ajax({
				url: location.href + self._ccf_action,
				dataType: 'json',
				type: 'POST',
				data: $.extend(vals, {
					form_id: self._form_id,
					form_page: location.href,
					form_nonce: self._form_nonce,
					ccf_form: 1
				}),
				success: function(data) {
					if(data.success) {
						Remix.Alert({msg: '提交成功！请耐心等待工作人员与您联系。', callback: function() {
							location.href = '/'
						}})
					} else {
						Remix.Alert({msg: data.completion_message})
					}
					if(data.code == 1) {
						location.replace('success.html')
					} else {
						Remix.Alert({content: data.msg})
					}
				},
				error: function() {
					Remix.Alert({msg: '对不起，提交失败，请稍后再试 :)'})
				}
			})
			
		},
		validate: function(vals) {
			var err = ''
			!err && (err = vals['ccf_field_arrive-time'] ? '' : '请选择到店时间')
			!err && (err = /^[\u4E00-\u9FA5\uF900-\uFA2D]{2,5}$/.test(vals['ccf_field_contact-name']) ? '' : '请填写正确的姓名，2-5个汉字')
			!err && (err = /(^(([0\+]\d{2,3}-)?(0\d{2,3})-)(\d{7,8})(-(\d{3,}))?$)|(^0{0,1}1[3|4|5|6|7|8|9][0-9]{9}$)/.test(vals['ccf_field_contact-phone']) ? '' : '请输入正确的电话号码')
			if(vals['ccf_field_contact-email']) {
				!err && (err = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(vals['ccf_field_contact-email']) ? '' : '请输入正确的邮箱')
			}
			return err
		},
		getVals: function() {
			return {
				'ccf_field_choosed-store': this.refs.storeSelect.val(),
				'ccf_field_arrive-time': this.refs.timeInput.val(),
				'ccf_field_contact-name': this.refs.nameInput.val(),
				'ccf_field_contact-phone': this.refs.mobileInput.val(),
				'ccf_field_contact-email': this.refs.emailInput.val(),
				'ccf_field_service-requirement': this._getRadioSelects(this.refs.srvReqSelect),
				'ccf_field_service-prepare': this._getCheckboxSelects(this.refs.srvPrepareSelect),
				'ccf_field_product-requirement': this._getCheckboxSelects(this.refs.productReqSelect),
				'ccf_field_product-favor': this._getCheckboxSelects(this.refs.productFavSelect),
				'ccf_field_product-use-for': this._getCheckboxSelects(this.refs.productUseSelect),
				'ccf_field_budget-range': this._getRadioSelects(this.refs.budgetRangeSelect),
				'ccf_field_diamond-size': this._getRadioSelects(this.refs.diamondSizeSelect),
				'ccf_field_extra-notes': this.refs.notesInput.val()
			}
		},
		/*
		 * 获取自定义checkbox的单选结果
		 */
		_getRadioSelects: function($ref) {
			// assert only one checkbox is on
			return $ref.find('.check-box.on span').text()
		},
		/*
		 * 获取自定义checkbox的复选结果，返回数组
		 */
		_getCheckboxSelects: function($ref) { 
			var results = []
			$ref.find('.check-box.on span').each(function() {
				results.push($(this).text())
			})
			return results
		}
	}).bindNode('#main')

	Remix.create('Alert', {
		template: $('#alert-tmpl').html(),
		remixEvent: {
			'click, ok': 'onClick'
		},
		initialize: function() {
			this.node.appendTo('body')
		},
		render: function() {
			this.refs.msg.text(this.state.msg)
		},
		onClick: function() {
			if(this.state.callback) {
				this.state.callback()
			}
			this.destroy()
		}
	})
}(jQuery)

