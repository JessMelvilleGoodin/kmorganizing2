<?php
/*-----------------------------------------------------------------------------------*/
/* Output image */
/*-----------------------------------------------------------------------------------*/
if ( !function_exists( 'tz_image' ) ) {
	function tz_image( $postid = null, $imagesize ) {

		$post_id = ( null === $postid ) ? get_the_ID() : $postid;

		if ( has_post_thumbnail( $postid ) ):

			$lightbox = get_post_meta( $post_id, 'tz_image_lightbox', TRUE );

			if ( $lightbox == 'yes' )
				$lightbox = TRUE;
			else
				$lightbox = FALSE;

			$src     = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), array( '9999','9999' ), false, '' );
			$thumb   = get_post_thumbnail_id();
			$img_url = wp_get_attachment_url( $thumb, 'full' ); //get img URL
			$image   = aq_resize( $img_url, 700, 700, true ); //resize & crop img

			if ( $lightbox ) :
				echo '<figure class="featured-thumbnail thumbnail large"><a class="image-wrap" rel="prettyPhoto" title="'. get_the_title() .'" href="'. $src[0] .'"><img src="'. $image .'" alt="'. get_the_title() .'" /><span class="zoom-icon"></span></a></figure><div class="clear"></div>';
			else :
				echo '<figure class="featured-thumbnail thumbnail large"><img src="'. $image .'" alt="'. get_the_title() .'" /></figure><div class="clear"></div>';
			endif;

		endif;

	}
}

?>