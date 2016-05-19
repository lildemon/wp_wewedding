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
			$this.addClass("on")
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
						Remix.Alert({msg: '预约提交成功', callback: function() {
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
			!err && (err = vals['ccf_field_time-1'] ? '' : '请选择到店时间')
			!err && (err = /^[\u4E00-\u9FA5\uF900-\uFA2D]{2,5}$/.test(vals['ccf_field_contact-name-1']) ? '' : '请填写正确的姓名，2-5个汉字')
			!err && (err = /(^(([0\+]\d{2,3}-)?(0\d{2,3})-)(\d{7,8})(-(\d{3,}))?$)|(^0{0,1}1[3|4|5|6|7|8|9][0-9]{9}$)/.test(vals['ccf_field_phone-4']) ? '' : '请输入正确的电话号码')
			if(vals['ccf_field_email-5']) {
				!err && (err = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(vals['ccf_field_email-5']) ? '' : '请输入正确的邮箱')
			}
			return err
		},
		getVals: function() {
			return {
				'ccf_field_contact-name-1': this.refs.nameInput.val(),
				'ccf_field_time-1': this.refs.timeInput.val(),
				'ccf_field_phone-4': this.refs.mobileInput.val(),
				'ccf_field_email-5': this.refs.emailInput.val(),
				'ccf_field_radio-7': this._getCheckInput(),
				'ccf_field_paragraph-text-10': this.refs.notesInput.val()
			}
		},
		_getCheckInput: function() {
			return this.refs.checkInput.find('.check-box.on').parent().next('td').text()
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

