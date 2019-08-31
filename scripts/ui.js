var frontConf = frontConf || {};

frontConf.ui = (function() {
	var $win;
	var $body;
	var primaryHeaderBreakpoint = 800;
	var sectionHeaderBreakpoint = 1000;

	var init = function() {
		$win  = $(window);
		$body = $('body');

		$body.on('click', '.primary-nav .active', togglePrimaryMenu);
		$body.on('click', '.section-nav .menu-toggle', toggleSectionMenu);
		$body.on('click', '.accordion-title', toggleAccordion);
		$body.on('click touchstart', '.schedule-breakdown .timeline dd.course', clickableScheduleBlock);
		$body.on('click touchstart', '.bookTrainingButton_buttton', toggleBookTrainingForm);
		$body.on('submit', '.bookTrainingForm_form', submitBookTrainingForm);		

		if ($body.find('.section-header').length) {
			$win.on('scroll', toggleStickyHeaders);
		}
	};

	var togglePrimaryMenu = function(event) {
		var $menu = $(this).parents('.primary-nav');

		$( '.section-nav' ).removeClass( 'open' );

		if ( $win.outerWidth() <= primaryHeaderBreakpoint ) {
			event.preventDefault();
			$menu.toggleClass( 'open' );
		}
	};

	var toggleSectionMenu = function( event ) {
		var $menu = $( this ).parents( '.section-nav' );

		$( '.primary-nav' ).removeClass( 'open' );

		if ( $win.outerWidth() <= sectionHeaderBreakpoint ) {
			event.preventDefault();
			$menu.toggleClass( 'open' );
		}
	};

	var toggleAccordion = function( event ) {
		$( this ).parents('.accordion').toggleClass( 'open' );
	};

	var toggleStickyHeaders = function( event ) {
		var $primaryHeader = $body.find( '.primary-header' );
		var $sectionHeader = $body.find( '.section-header' );

		if ( $win.outerWidth() <= sectionHeaderBreakpoint ) {
			$primaryHeader.removeClass( 'sticky' );

			if ( $win.scrollTop() > $primaryHeader.outerHeight() ) {
				$sectionHeader.addClass( 'sticky' );
			} else {
				$sectionHeader.removeClass( 'sticky' );
			}
		} else {
			if ( $win.scrollTop() > $primaryHeader.outerHeight() + $sectionHeader.outerHeight() ) {
				$sectionHeader.addClass( 'sticky' );
				$primaryHeader.addClass( 'sticky' );
			} else {
				$sectionHeader.removeClass( 'sticky' );
				$primaryHeader.removeClass( 'sticky' );
			}
		};
	}
	
	/*
	var clickableScheduleBlock = function(event) {
		window.location = $(this).children('a').attr('href');
	}
	*/
	
	var toggleBookTrainingForm = function(event) {		
		// reset other incomplete forms
		$('.bookTrainingForm_form').parents('.course-description').each(function() {
			$(this).children('.bookTrainingForm').hide();
			$(this).children('.bookTrainingButton').show();
		});
		
		// hide this training button
		$(this).parent().hide();
		
		// show this training form
		$(this).parent().next().show();
	}
	
	var submitBookTrainingForm = function(event) {
		var form_id = $(this).attr('id');
		
		// prevent default action (form from submitting traditionally)
		event.preventDefault();
		
		// get form action url
		var post_url = $(this).attr("action"); 

		// encode form elements for submission
		var form_data = $(this).serialize();
		
		// get submitter's name
		var name = $(this).find("#name").val();

		// ajax post		
		$.post(post_url, form_data, function(response) {
			// replace form with thank-you message
			$('#' + form_id).parent().empty().append('<p class="bookTrainningConfirmation">Thanks, ' + name + '. We\'ll be in touch shortly to schedule your custom training.</p>');
		});
	}

	return {
		init: init
	};
})();

$( frontConf.ui.init );