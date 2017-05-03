var frontConf = frontConf || {};

frontConf.ui = (function() {
	var $win;
	var $body;
	var mobileBreakpoint = 600;

	var init = function() {
		$win  = $( window );
		$body = $( 'body' );

		$body.on( 'click', '.primary-nav .active', togglePrimaryMenu );
		$body.on( 'click', '.section-nav .menu-toggle', toggleSectionMenu );
	};

	var togglePrimaryMenu = function( event ) {
		var $menu = $( this ).parents( '.primary-nav' );

		if ( $win.outerWidth() <= mobileBreakpoint ) {
			event.preventDefault();
			$menu.toggleClass( 'open' );
		}
	};

	var toggleSectionMenu = function( event ) {
		var $menu = $( this ).parents( '.section-nav' );

		if ( $win.outerWidth() <= mobileBreakpoint ) {
			event.preventDefault();
			$menu.toggleClass( 'open' );
		}
	};

	return {
		init: init
	};
})();

$( frontConf.ui.init );