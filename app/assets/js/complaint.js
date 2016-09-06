jQuery(document).ready(function($) {
	$('#search-btn').click(function(event) {
		
		var data = {
			keyword : $('#complaint_id').val(),
			ajax : 1,
			page : 'search'
		}

		$.post('/', data, function(data, textStatus, xhr) {
			if(data.status) {
				$('#search-complaint_id').html(data.data.noaduan);
				$('#search-complaint_problem').html(data.data.masalah);
				$('#search-complaint_category').html(data.data.category.kategori);
				$('#search-complaint_status').html(data.data.status);
				$('#search-complaint_status').attr('class', 'label label-'+data.data.class);
				$.fn.fullpage.moveTo(2);
			} else {
				//alert(data.data.message);
			}
			console.log(data);
		});
	});
});