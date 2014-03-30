/* form actions */

jQuery(function($){
	$('#suggestform').submit(function(){
		errordelay = 3500;

		// controls
		hata = false;
		if( $('#your_name').val().length < 2 ){
			hata = true;
			$('.your_nameerror').fadeIn();
			setTimeout(function(){
				$('.your_nameerror').fadeOut('slow');
			}, errordelay);
		}
		if( $('#your_email').val().length < 6 || $('#your_email').val().indexOf('@') == -1 || $('#your_email').val().indexOf('.') == -1 ){
			hata = true;
			$('.your_emailerror').fadeIn();
			setTimeout(function(){
				$('.your_emailerror').fadeOut('slow');
			}, errordelay);
		}

		// recipients control
		if( $('#recipient1name').val().length > 1 || $('#recipient1email').val().length > 1 || $('#recipient2name').val().length > 1 || $('#recipient2email').val().length > 1 || $('#recipient3name').val().length > 1 || $('#recipient3email').val().length > 1 ){
			// recipient 1
			if( $('#recipient1name').val().length > 1 || $('#recipient1email').val().length > 1 ){
				if( $('#recipient1name').val().length < 2 ){
					hata = true;
					$('.recipient1name').fadeIn();
					setTimeout(function(){
						$('.recipient1name').fadeOut('slow');
					}, errordelay);
				}
				if( $('#recipient1email').val().length < 6 || $('#recipient1email').val().indexOf('@') == -1 || $('#recipient1email').val().indexOf('.') == -1 ){
					hata = true;
					$('.recipient1email').fadeIn();
					setTimeout(function(){
						$('.recipient1email').fadeOut('slow');
					}, errordelay);
				}
			}
			// recipient 2
			if( $('#recipient2name').val().length > 1 || $('#recipient2email').val().length > 1 ){
				if( $('#recipient2name').val().length < 2 ){
					hata = true;
					$('.recipient2name').fadeIn();
					setTimeout(function(){
						$('.recipient2name').fadeOut('slow');
					}, errordelay);
				}
				if( $('#recipient2email').val().length < 6 || $('#recipient2email').val().indexOf('@') == -1 || $('#recipient2email').val().indexOf('.') == -1 ){
					hata = true;
					$('.recipient2email').fadeIn();
					setTimeout(function(){
						$('.recipient2email').fadeOut('slow');
					}, errordelay);
				}
			}
			// recipient 3
			if( $('#recipient3name').val().length > 1 || $('#recipient3email').val().length > 1 ){
				if( $('#recipient3name').val().length < 2 ){
					hata = true;
					$('.recipient3name').fadeIn();
					setTimeout(function(){
						$('.recipient3name').fadeOut('slow');
					}, errordelay);
				}
				if( $('#recipient3email').val().length < 6 || $('#recipient3email').val().indexOf('@') == -1 || $('#recipient3email').val().indexOf('.') == -1 ){
					hata = true;
					$('.recipient3email').fadeIn();
					setTimeout(function(){
						$('.recipient3email').fadeOut('slow');
					}, errordelay);
				}
			}
		}else{
			hata = true;
			$('.recipientserror').fadeIn();
			setTimeout(function(){
				$('.recipientserror').fadeOut('slow');
			}, errordelay);
		}

		if( !hata ){
			$('.form_overlay').fadeIn('fast');
			$('.sending').fadeIn('fast');

			// ajax call
			$.post('send.php', $('#suggestform').serialize(), function(response){
				$('.sending').fadeOut('fast');
				if( response == 'OK' ){
					$('.send_success').fadeIn('fast');
				}else{
					$('.send_error').fadeIn('fast');
				}
			});
		}

		return false;
	});
});
