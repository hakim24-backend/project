//selectbox ----------------------------------------------------------------------

function custom_selectbox(select) {
	var $this = this;
	this.$select = $(select);
	this.$select.data('custom_selectbox', $this);
	this.$select_wrap = $('<div class="select" />').insertAfter(select); 
	
	var
		$select = $(select),
		custom_select = $this.$select_wrap;


	this.$title = $('<strong />').text(select.options[select.selectedIndex].text).appendTo(custom_select),
	this.$custom_select_wrap = $('<div class="custom_select_wrap" />').appendTo(custom_select);
	this.$new_options = $("<ul />").appendTo(this.$custom_select_wrap);
	
	$('#page').getNiceScroll().hide();
	
	//this.$title.css('width', this.$select.width());
	$(select).hide();

	this.refreshNewSelect();
	this.$new_options.niceScroll({
		cursorwidth : 4,
		cursorfixedheight : 17,
		cursorcolor : "#c2c2c2",
		cursorborder : 0,
		cursorborderradius : 0,
		autohidemode: false,
		railoffset: {top: 0, left:-4}
	}).resize();
}


custom_selectbox.prototype = {
	refresh: function() {
		this.$new_options.html('');
		this.refreshNewSelect();
		this.$new_options.getNiceScroll().hide();
	},

	refreshNewSelect: function() {
		var 
			$this = this,
			select = this.$select.get(0);

		for(var j = 0; j < select.options.length; ++j) {
			$('<li />').text(select.options[j].text).appendTo(this.$new_options);
		}
		this.$title.unbind('click').click(function() {
			$this.$new_options.getNiceScroll().hide();
			$('div.select ul').not($this.$new_options).slideUp();
			$('div.select strong').not($this.$title).removeClass('active');
			$(this).toggleClass('active');
			
			$this.$new_options.stop().slideToggle(function(){
				done: $this.$new_options.getNiceScroll().resize().show();
			});

			if($(this).hasClass('active')) {
				setTimeout(function() {
					$('body').unbind('touchstart click', closeSelectbox).bind('touchstart click', closeSelectbox);
					try {$('#page').getNiceScroll().hide();} catch(e) {}
				}, 0);
			} else {
				$('body').unbind('touchstart click', closeSelectbox);
				try {$('#page').getNiceScroll().show().resize();} catch(e) {}
			}

			return false;
		});

		function closeSelectbox(e) {
			if (!$this.$new_options.find('li').filter(e.target).length && !$this.$title.filter(e.target).length) {
				$this.$title.filter('.active').trigger('click');
				try {$('#page').getNiceScroll().show().resize();} catch(e) {}
			}
		}
		//reset value
		this.$new_options.find('li').click(function() {
			$('body').unbind('touchstart click', closeSelectbox);
			$this.$new_options.getNiceScroll().hide();
			
			$this.$title.text($(this).text());
			select.options[$(this).index()].selected = true;
			$(this).parents('.select').prev($this.$select).change();
			$this.$title.removeClass('active');
			$this.$new_options.stop(true).slideUp(function(){
				$this.$new_options.getNiceScroll().hide();
				try {$('#page').getNiceScroll().show().resize();} catch(e) {}
			});
		});
	}
};

function selectbox() {
	$('select').each(function(idx, select){
		new custom_selectbox(select);
	});
	
	/*$('body').unbind('click').bind('click', function() {
		$('select + div.select strong.active').trigger('click');
	});*/
}