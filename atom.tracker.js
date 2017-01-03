// JavaScript Document
$('document').ready(function() {
	
	$('#form-new').submit(function(event) {
			event.preventDefault();
			var form = $(this);
			var data = form.serialize();
			
			$.ajax({
				url: 'log.php',
				data: data
				
				});
		
		});
	
	
	
	});