//slider on home page
$(document).ready(function() {
	$("#chained").scrollable({circular: true, mousewheel: true}).navigator().autoscroll({
		interval: 3000		
	});	
	
});

$(function() {
	$("#datepicker").datepicker({
		showOn: 'button',
		buttonImage: 'js/jquery-ui-1.8.2.datepicker/smoothness/images/calendar.gif',
		buttonImageOnly: true
	});
	
});

$(function(){ 	
	$("select").uniform({selectClass: 'book-table-form'
	});
	
});


//fancy box
$(function() {
	$("a.lightbox").fancybox({
		'titleShow'		: false,
		'transitionIn'	: 'elastic',
		'transitionOut'	: 'elastic'
	});	
});


//drop down menu
$(document).ready(function(){ 
	$("ul.sf-menu").superfish(); 
});


//Cufon font
/*Cufon.replace('.book-table p', { fontFamily: 'Christopherhand' });
Cufon.replace('.book-table-sidebar p', { fontFamily: 'Christopherhand' });
Cufon.replace('.tagline h3', { fontFamily: 'Vintlys Hand' });
Cufon.replace('.top-tagline p', { fontFamily: 'Vintlys Hand' });*/