$('#vote').click(function() {
	$.ajax({
		type: 'POST',
		url: '/beer/search',
		success: function(response) {
			$('#results').html(response);
		},
		data: {
			format: 'html',
		    query: $('input[name=query]').val(),
		    _token: $('input[name=_token]').val(),
		},
	});
});