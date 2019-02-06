//require('./bootstrap');

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    var jQueryBridget = require('jquery-bridget');
    var Isotope = require('isotope-layout');
    const validate = require('jquery-validation');

} catch (e) {}

$(document).ready(function() {
	var $container = $('.isotope-wrapper');
	$container.isotope({ itemSelector: '.isotope-item', layoutMode: 'masonry' });

	$('.filters_listing').on( 'click', 'input', 'change', function(){
		var selector = $(this).attr('data-filter');
		$('.isotope-wrapper').isotope({ filter: selector });
	});

    var today = new Date(); 
    var dd = today.getDate(); 
    var mm = today.getMonth()+1; //January is 0! 
    var yyyy = today.getFullYear(); 
    if(dd<10){ dd='0'+dd } 
    if(mm<10){ mm='0'+mm } 
    var today = dd+'/'+mm+'/'+yyyy;

	$('input[name="dates"]').daterangepicker({
        autoUpdateInput: false,
        minDate: today,
        locale: {
            cancelLabel: 'Clear'
        }
    });
    $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('DD-MM-YY') + ' > ' + picker.endDate.format('DD-MM-YY'));
    });
    $('input[name="dates"]').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });

	$("table.room-info tr.view").on("click", function(e){
		e.preventDefault();
		$(this).toggleClass("open").next(".fold").toggle(function(){
			$('.isotope-wrapper').isotope();
		});
	});

	$("table.room-info tr.view a").on("click", function(e){
		e.preventDefault();
		$(this).parent().toggleClass("open").next(".fold").toggle(function(){
			$('.isotope-wrapper').isotope();
		});
	});

	$("a.show-rooms").on("click", function(e){
		e.preventDefault();
		$(this).toggleClass("open");
		$(this).parent().parent().parent().parent().next('.card').slideToggle(function(){
			$('.isotope-wrapper').isotope();
		});
	});

	$('.expand_hotel').click(function(e){
		e.preventDefault();
	});

	$('#contactform').submit(function(e){
		e.preventDefault();
		return false;
	});


	$('#newsletter_form').submit(function(e){
		e.preventDefault();
		return false;
	});

	$('#payment-form').validate({ // initialize the plugin
        rules: {
            firstname_booking: {
                required: true
            },
            lastname_booking: {
                required: true
            },
            email_booking: {
                required: true,
                email: true
            },
            email_booking_2: {
                equalTo: '[name="email_booking"]',
            },
            telephone_booking: {
                required: true
            },
            name_card_bookign: {
                required: true
            },
            card_number: {
                required: true,
                number: true
            },
            expire_month: {
                required: true,
                number: true
            },
            expire_year: {
                required: true,
                number: true
            },
            ccv: {
                required: true,
                number: true
            },
            street_1: {
                required: true,
            },
            street_2: {
                required: true,
            },
            city_booking: {
                required: true,
            },
            state_booking: {
                required: true,
            },
            postal_code: {
                required: true,
                number: true
            },
        }
    });

	$('#purchase-button').click(function(e){
		console.log('a');
	});
});