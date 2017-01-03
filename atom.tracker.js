// JavaScript Document
function tally() {
	$('#tally').load('log.php?mode=tally');
}

function build() {
	$('#log').load('log.php?mode=build');
	tally();
}


$('document').ready(function() {
	build();
	$('#form-new').submit(function(event) {
			event.preventDefault();
			var form = $(this);
			var data = form.serialize();
			
			$.ajax({
				url: 'log.php?mode=new',
				data: data,
				success: function() {
					build();	
				}
				
				});
		
		});
	
	
	
	
});