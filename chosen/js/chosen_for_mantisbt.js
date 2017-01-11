jQuery( document ).ready( function( $ ) {
	$( 'select' ).chosen( {
		allow_single_deselect:true
	} );
	$( '.chosen-container' ).css( { minWidth: '130px', width: 'auto' } );
} );
