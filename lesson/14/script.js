$(function (){

	$('input[type=submit]').on("click", function (e) {
		e.preventDefault();

		var json = {
			name: $('input[name=name]').val(),
			lastname: $('input[name=lastname]').val(),
		}

		$.ajax({
			url:$("form").prop('action'),
			method: 'POST',
			cache: false,
			data: 'json=' + JSON.stringify(json)
		}).done(function (msg){
			// $('#js-hello').html(msg);
		})
	})
});
