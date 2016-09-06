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
				alert('Complaint details requested not found');
			}
			console.log(data);
		});
	});

	$('#new-complaint-btn').click(function(event) {
		/* Act on the event */
		var data = {};
		
		$.each($('form[name="form-new-complaint"] :input'), function(index, val) {
			if(val != "") {
				var input = $(val);
				data[val.name] = input.val();	
			}
		});

		data['ajax'] = 1;
		data['page'] = 'complaint-new';

		$.post('/', data, function(data, textStatus, xhr) {
			if(data.status) {
				alert('Complaint submmited. Your complaint ID is ' + data.data.noaduan);
			} else {
				alert('Unable to submit complaint, please try again');
			}
		});

		event.preventDefault();

	});
});