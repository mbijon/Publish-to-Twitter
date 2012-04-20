jQuery( document ).ready( function ( $ ) {
	// Adds another row to list of category/twitter account pairings
	$( '.ptt-add-another' ).click( function() {
		var $new_row = $( '#ptt-twitter-category-pairing-clone' ).clone(), $div = $( '#ptt-twitter-category-pairings' );
		$new_row.css( {
			visibility : 'visible',
			height : ''
		} ).appendTo( $div );
	} );

	// Removes a pairing row
	$( '.ptt-delete' ).live( 'click', function() {
		var $this = $( this ), $parent_div = $this.parents( '.ptt-twitter-category-pairing' );
		$parent_div.fadeOut( 'fast', function() {
			$parent_div.remove();
		} );
		return false;
	} );
} );