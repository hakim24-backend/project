var search_xhr = false,
	search_results = $('.search_results');

var fields = {"user_id":"User","foreign_object_id":"Item","foreign_object":"Object","i18n_country_language_id":"Country"}
var errors = {"not_empty":"Could not be empty","already_exists":"Item already exists in your wish list"}

function add_to_wishlist() {
	if($('.add_to_wish').length > 0) {
		$('.add_to_wish').off('click');
		$('.add_to_wish').click(function() {
			$this = $(this);
			pop_up({
				type: 'error',
				title:  ' ',
				buttons: {cancel: false},
				content: 'You must be a registered user in order to add samples. Please register or login to continue'
			});
			return;

			var decore_collection_id = $this.data('collection-id') ? $this.data('collection-id') : null;

			$.ajax({
				url: '/en_EN/ajax/my_krono/add_to_wish_list',
				data: {foreign_object_id: $this.data('object-id'), foreign_object: $this.data('object-type'), decore_collection_id: decore_collection_id},
				dataType: 'json'
			}).done(function(json) {
				var error_message = '';

				if(json.message) {
					if(json.errors) {
						error_message = '<ul>';
						$.each(json.errors, function(i, e) {
							if(typeof e === 'string') {
								error_message += '<li>' + errors[e] + '</li>';
							} else {
								error_message += '<li>' + (fields[e[0]] ? fields[e[0]] + ': ' : '') + errors[e[1]] + '</li>';
							}
						});
						error_message += '</ul>';
					}

					pop_up({
						type: json.error || json.errors ? 'error' : 'success',
						title:  json.title,
						buttons: {cancel: false},
						content: json.message + error_message
					});
				}

				if(!json.error && !json.errors) {
					$this.remove();
				}
			});
		});
	}
}
add_to_wishlist();

$('form,li.big-search form').data('get_results', function() {
	var search_value = $(this).val(),
		search_key = encodeURIComponent(search_value);

	if(search_value.length > 1) {
		if(!xhr_cache['search_results_' + search_key]) {
			if(search_xhr && search_xhr.readyState != 4) {
				search_xhr.abort();
			}

			$("#search-spinner-div").show();

			search_xhr = $.ajax({
				url: '/en_EN/ajax/search/auto_suggest',
				data: {q: search_key},
				dataType: 'json'
			}).done(function(json) {
				if(json.html) {
					xhr_cache['search_results_' + search_key] = json.html;
					$("#search-spinner-div").hide();

					apply_auto_suggest_content(xhr_cache['search_results_' + search_key]);

				} else {
					$('#header .search_results, .show_all_search_results').hide();
					$('#header .search_results > div > ul').html('<li> o </li>');
				}
			});
		} else {
			apply_auto_suggest_content(xhr_cache['search_results_' + search_key]);
		}

	}
});
$( document ).ready(function() {
	// submit function
	$(function () {
		$('#subForm').submit(function (e) {
			e.preventDefault();
			var error = false;
			$('.fieldNameError, .emailEmailError, .captchaError, .aggreedError').html('');
			$('#fieldEmail').removeClass('error');


			var user_name = $('#fieldName').val();
			var user_email = $('#fieldEmail').val();
			var captcha = $('#captcha').val();

			if(!user_name) {
				$('#fieldName').addClass('error');
				$('.fieldNameError').addClass('errors').show().html('Could not be empty');
				error = true;
			} else {
				$('#fieldName').removeClass('error');
				$('.fieldNameError').removeClass('errors').empty();
			}


			if(user_email) {
				var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				if(!re.test(user_email)) {
					$('#fieldEmail').addClass('error');
					$('.emailEmailError').addClass('errors').show().html('Invalid e-mail address');
					error = true;
				}
			} else {
				$('#fieldEmail').addClass('error');
				$('.emailEmailError').addClass('errors').show().html('Could not be empty');
				error = true;
			}

			if(!captcha) {
				$('#captcha').addClass('error');
				$('.captchaError').addClass('errors').show().html('Could not be empty');
			} else {
				$('#captcha').removeClass('error');
			}

			if( !$('#gd_jamb').is(':checked') ) {
				$('.aggreedError').addClass('errors').show().html('Please enter confirmation');
				error = true;
			}

			$.getJSON(
				this.action,
				$(this).serialize(),

				function (data) {})
				.done( function (result, status, xhr) {
					$('#pop-up-header-title').html('Subscribe to Our Newsletter');
					$('div#content').hide();
					$('.form-success').show();
					$('.greetings-messages-container').show();

					setTimeout(function() {
						$('#modalWindowCMSubscribes').iziModal('close', {
							transitionOut:'comingOut'
						});
						closePopup('subscribe_success')
					}, 3000);
				})
				.fail(function (xhr, status, error) {
					_response = JSON.parse(xhr.responseText);

					$('.captchaError').show();
					if(_response.captcha_error) {
						$('#captcha').addClass('error');
						$('.captchaError').addClass('errors').show().html(_response.captcha_error);
					}

				});
			// end Ajax request

		});
	});

});

/**************************************************************/
/*************** End of modal Window for subscribers **********/
/**************************************************************/
