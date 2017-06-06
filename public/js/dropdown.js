$("#state").on('change', function(e){
	$.get('/cities/'+e.target.value, function(response, state){
		console.log(response);
	});
});