/**
 * Remove select values that don't work with this Overlay Child
 */
( function( $ ) {
    jQuery( document ).ready( function() {
        $( "#customize-control-overlay-stick-header-element select option[value='stick-onlynav']" ).remove();
        $( "#customize-control-overlay-menu-position select option[value='overlay-menu-dropdown']" ).remove();
    });
} )( jQuery );
