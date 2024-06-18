var 
	cantouch = ("ontouchstart" in document.documentElement) || ("ontouchstart" in window),
	click_event_name = cantouch ? 'touchstart' : 'click',
	timer,
	win_width;

$(document).ready(function() {
	//header();
});


function header() {
	var 
		header = $('.home'),
		content = $('#content');

	//helper menu
	var helperMenu = $('.helper_menu'),
		searchMenu = $('.search-bar-widget.search, .big-search'),
		fake_search = $('.fake_search'), 
		search_results = $('.search_results'),
		search_results_div = search_results.find('div'),
		searchField = searchMenu.find('input'),
		helperMenu_scroll = helperMenu.find('> li > div'),
		show_all_search_results = $('.show_all_search_results');

	if(!cantouch) {
		try {
		search_results.niceScroll(search_results_div, {
			cursorcolor : '#D8D8D8',
			cursorborder : 'none',
			cursorwidth: '8px',
			cursorfixedheight : 20,
			autohidemode : false,
			bouncescroll : false,
			horizrailenabled : false,
			cursorborderradius : 0,
			zindex : 10,
			railpadding: {
				right: 5
			}
		});
		} catch(e) {

		}
	} else {
		search_results.css('overflow-y', 'auto');
	}

	fake_search.click(function(e) {
		$(this).toggleClass('opened');
		searchMenu.toggleClass('active');
		searchMenu.toggle();
		fake_search.siblings('li').removeClass('active').find(helperMenu_scroll).hide();

		$(window).width() > 799 && searchField.last().show().outerWidth(helperMenu.width() - searchMenu.find('button').outerWidth());

		if (fake_search.hasClass('opened')) {
			searchField.val('');
			$(this).siblings('.opened').removeClass('opened').hide();
			setTimeout(function() {$(document).bind(click_event_name, hide_search);}, 0);
		} else {
			searchField.val('');
			search_results.hide();
			searchMenu.removeClass('active');
			searchMenu.hide();
			$(document).unbind(click_event_name, hide_search);
		}
	});

	// search input events
	searchField.keyup(function(e) {
		var visible_search_field = searchField.filter(':visible');
		auto_suggest_timeout && clearTimeout(auto_suggest_timeout);
		auto_suggest_timeout = setTimeout(function() {
			if(visible_search_field.val()) {
				var get_results = $(visible_search_field.get(0).form).data('get_results') || function(q) {
					return search_results.find('ul').html();
				};

				get_results.call(visible_search_field.get(0), visible_search_field.val());
				search_results.show();
				visible_search_field.is('#site_search_big') && setTimeout(function() {fake_search.addClass('opened');$(document).unbind(click_event_name, hide_search).bind(click_event_name, hide_search);}, 0);
				
				if ($('.big-search').is(':visible')) {
					search_results.css({
						'left' : $('.big-search').offset().left + 'px',
						'right' : 'auto'
					});
					$('.big-search').addClass('search-opened');
				} else {
					search_results.css({
						'left' : '',
						'right' : ''
					});
					$('.big-search').removeClass('search-opened');
				}

				if (e.keyCode == 27) { // esc
					search_results.hide();
					$('.big-search').removeClass('search-opened');
				}
			} else {
				search_results.hide();
				$('.big-search').removeClass('search-opened');
			}
		}, 300);
	});

	show_all_search_results.click( function() {
		searchMenu.find('form:visible').submit();
	});

	function close_search() {
		searchField.animate({
			padding: 'auto',
			width: 0
		}, 0);
		searchMenu.animate({
			width: 50
		});
		searchMenu.removeClass('active');
	}

	function close_search_mobile() {
		searchMenu.removeClass('active').width(50);
	}
}

var current = 0,
	auto_suggest_timeout;

function apply_auto_suggest_content(content) {
	if(!content) {
		search_results.hide();
                $('.show_all_search_results').hide();
		return;
	}

        var is_no_results = content;
        
        if(is_no_results.indexOf('no_results') != -1) {
            $('.search_results > div > ul').html('<li> o </li>');
            sliced = is_no_results.split('-');
            var _label_no_results = sliced[1];
            $('.search_results li').addClass('search-no-results');
            $('.search_results li').html('<h1 class="no-results-heading">' + _label_no_results + '</h1>');
            $('.show_all_search_results').hide();
            return;
        }
        
        
        

	$('.show_all_search_results').show();
	search_results.show();
        
	//search_results.getNiceScroll().resize();
        
	search_results.find('ul').html(content).end().show();

	var results = $('.search_results li'),
		result_text = '';

	/*
	if(e.keyCode == 40) { // move down
		if(current == results.length - 1) {
			current = 0;
		} else {
			current++;
		}

		result_text = results.eq(current).find('span').last().text();
		searchField.val(result_text);
	} else if(e.keyCode == 38) { // move up
		if (current == 0) {
			current = results.length - 1;
		} else {
			current--;
		}

		result_text = results.eq(current).find('span').last().text();
		searchField.val(result_text);
	}
	*/

	results.eq(current).addClass('active').siblings('li').removeClass('active');

	var ot = 0, i = 0;
	for(; i < current; ++i) {
		ot += results.eq(i).outerHeight();
	}

	//search_results.getNiceScroll().doScrollPos(0, ot);
}
