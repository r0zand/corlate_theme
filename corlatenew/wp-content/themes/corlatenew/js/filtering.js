jQuery(function($){
	$(document).ready(function(){
	$(document).on('change','#filter', function(e){
		e.preventDefault();
		var category = $(this).find('option:selected').val();
		console.log(category);
		$.ajax({
			url: myfilters.url,
			data: { action:'myfilter',category: category }, // form data
			type:'post', // POST
			success: function(result)
			{
				$('#response').html(result);
			}
		});
		
});
});
})