(function( $ ) {
    "use strict";
    wp.customize( 'course_link_color', function( value ) {
        value.bind( function( to ) {
            $( 'a' ).css( 'color', to );
        } );
    });
    wp.customize( 'course_display_header', function( value ) {
    	value.bind( function( to ) {
        	false === to ? $( '#masthead' ).hide() : $( '#masthead' ).show();
    } )
    } );
})( jQuery );
