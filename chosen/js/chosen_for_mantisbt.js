jQuery( document ).ready( function( $ ) {
	$( 'select' ).chosen( {
		allow_single_deselect:true
	} );
	$( 'select' ).each(function () {
		this.style.setProperty( 'display', 'none', 'important' );
	});
	$( '.chosen-container' ).css( { minWidth: '130px', width: 'auto' } );
	$( '.table-responsive' ).css('overflowX','visible');
} );
