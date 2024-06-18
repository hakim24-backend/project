

$(document).on('change', '#subs-cond', function() {
	if($('#subs-cond:checkbox:checked').length > 0) {
		$terms = true;
	} else {
		$terms = false;
	}
	if($captcha && $terms) {
		submitForm();
	}
});

function submitForm() {
	$('#subs-modal').modal('hide');
	$('#subsForm').trigger('submit');
};

$(document).on('click', '.subscribe-submit', function(e) {
	e.preventDefault();
	let $form;

	if($(this).closest('.sub-form').hasClass('desktop-sub-form')) {
		$form = $('.desktop-sub-form');
	} else {
		$form = $('.mobile-sub-form');
	}

	var error = false;
	$form.find('.fieldNameError, .emailEmailError, .captchaError, .aggreedError').html('');
	$form.find('#fieldEmail').removeClass('error');


	var first_name = $form.find('input[name=cm-fname]').val();
	var last_name = $form.find('input[name=cm-lname]').val();
	var user_email = $form.find('input[name=cm-email]').val();
	var country = $form.find('input[name=cm-fo-yhijhil]').val();

	if(!first_name) {
		$form.find('input[name=cm-fname]').addClass('error');
		$form.find('.fieldNameError').addClass('errors').show().html('Could not be empty');
		error = true;
	} else {
		$form.find('input[name=cm-fname]').removeClass('error');
		$form.find('.fieldNameError').removeClass('errors').empty();
	}

	if(!last_name) {
		$form.find('input[name=cm-lname]').addClass('error');
		$form.find('.fieldNameError').addClass('errors').show().html('Could not be empty');
		error = true;
	} else {
		$form.find('input[name=cm-lname]').removeClass('error');
		$form.find('.fieldNameError').removeClass('errors').empty();
	}

	if(user_email) {
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if(!re.test(user_email)) {
			$form.find('input[name=cm-email]').addClass('error');
			$form.find('.emailEmailError').addClass('errors').show().html('Invalid e-mail address');
			error = true;
		} else {
			$('input[name=cm-email]').removeClass('error');
			$('.emailEmailError').removeClass('errors').empty();
		}
	} else {
		$form.find('input[name=cm-email]').addClass('error');
		$form.find('.emailEmailError').addClass('errors').show().html('Could not be empty');
		error = true;
	}

	if(country == '') {
		$form.find('input[name=cm-fo-yhijhil]').addClass('error');
		error = true;
	} else {
		$form.find('input[name=cm-fo-yhijhil]').removeClass('error');
	}

	if(!error) {
		$('#subs-modal').modal();
	}
});

$(document).ready(function() {
	$('#subsForm').submit(function (e) {
		e.preventDefault();
		$.getJSON(
			this.action,
			$(this).serialize(),

			function (data) {})
			.done( function (result, status, xhr) {
				pop_up({
					type: 'success',
					title: false,
					buttons: {cancel: false},
					content: 'Thank you for signing up!<br/>You’ve been added to our mailing list.'
				});

				$('#subsForm').find("input[type=text],input[type=email]").val("");
				$('#subs-modal').find("input[type=checkbox]").prop( "checked", false );
				$('#subsForm').find("select").val("").trigger('change');
			})
			.fail(function (xhr, status, error) {
				_response = JSON.parse(xhr.responseText);

				$('.captchaError').show();
				if(_response.captcha_error) {
					$('#captcha').addClass('error');
					$('.captchaError').addClass('errors').show().html(_response.captcha_error);
				}
			});

	});
});



$('.home-carousel').carousel({
	interval: 4500
});
$(document).ready(function () {
	$('.center').slick({
		centerMode: true,
		centerPadding: '60px',
		slidesToShow: 3,
		infinite: true,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					arrows: false,
					centerMode: true,
					centerPadding: '55px',
					slidesToShow: 3
				}
			},
			{
				breakpoint: 481,
				settings: {
					arrows: false,
					centerMode: true,
					centerPadding: '55px',
					slidesToShow: 1
				}
			}
		]
	});

	$('.mobile-only h3').on('click', function() {
		let el = $(this).find('div.container1');
		el.toggleClass('is-visible');
	});
});