function pop_up(options) {
	var default_options = {
		html: false,
		title: 'Message Title',
		content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
		type: '',
		buttons: {
			ok: {
				title: 'OK',
				callback: function() {
					hide_popup();
				}
			},
			cancel: {
				title: 'Cancel',
				callback: hide_popup
			}
		}
	};

	options = $.extend(true, default_options, options || {});

	var popup_wrapper = $('<div id="popup_wrapper"/>').appendTo('body').addClass(options.type),
		popup_bgr = $('<div id="popup_bgr"/>').appendTo('body').hide().click(hide_popup);

	var public_methods = {hide_popup: hide_popup};

	popup_wrapper.draggable({
		handle: 'h2',
		containment: 'document'
	}).delegate('a', 'click', function() {
		if(options.buttons[$(this).data('button-type')] && options.buttons[$(this).data('button-type')].callback) {
			options.buttons[$(this).data('button-type')].callback.call(public_methods, this);
		}
	});

	if (options.html) {
		popup_wrapper.html(options.html);
	} else { 
		var title = $('<h2/>').appendTo(popup_wrapper).html(options.title),
		 	container = $('<div/>').insertAfter(title);
		 $('<p />').appendTo(container).html(options.content);
		 if (options.buttons) {
		 	var button_holder = $('<p/>').addClass('selectors').appendTo(container);
		 	options.buttons.ok && $('<a data-button-type="ok" href="javascript:;" />').attr('title', options.buttons.ok.title).text(options.buttons.ok.title).appendTo(button_holder);
		 	options.buttons.cancel && $('<a data-button-type="cancel" href="javascript:;" />').attr('title', options.buttons.cancel.title).text(options.buttons.cancel.title).appendTo(button_holder);
		 };
		
	}

	var esc = function(e) {
		if (e.which == 27) { // 27 is 'Esc' in the keyboard
			hide_popup();  // function close popup
		}
	}

	popup_bgr.show();
	popup_wrapper.fadeIn(400, function(){
		$('body').bind('keyup', esc);
	});

	function hide_popup() {
		popup_wrapper.fadeOut('normal', function() {
			popup_wrapper.remove();
			popup_bgr.remove();
			$('body').unbind('keyup', esc);
		});
	}
}