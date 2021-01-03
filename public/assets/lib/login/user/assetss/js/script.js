$(window).on('load', function() {
	$('#jumbotron1 .container').addClass('muncul');
	$('.thumbnail').each(function(i) {
		setTimeout(function() {
			$('.thumbnail').eq(i).addClass('muncul');
		}, 300 * i)
	})
	$('.well').each(function(i) {
		setTimeout(function() {
			$('.well').eq(i).addClass('muncul');
		}, 300 * i)
	})
	$('.card').each(function(i) {
		setTimeout(function() {
			$('.card').eq(i).addClass('muncul');
		}, 300 * i)
	})
	$('.login-card').addClass('muncul');
	$('.register-form').addClass('muncul');
})
$(window).scroll(function() {
	var wScroll = $(this).scrollTop();

	if (wScroll > 500) {
		$('.scroll-up').addClass('muncul');
	}else {
		$('.scroll-up').removeClass('muncul');
	}

	if (wScroll > $('#title').offset().top - 300) {
		$('.biodata').each(function(i) {
			setTimeout(function() {
				$('.biodata').eq(i).addClass('muncul');
			}, 300 * i)
		})
	}
})

$('#to-top').click(function() {
	$('body').animate({scrollTop: 0}, 800);
})

