<?php
/**
 * Block Filters
 *
 * @package pixel_cyber_security
 * @since 1.0
 */

function pixel_cyber_security_block_wrapper( $pixel_cyber_security_block_content, $pixel_cyber_security_block ) {

	if ( 'core/button' === $pixel_cyber_security_block['blockName'] ) {
		
		if( isset( $pixel_cyber_security_block['attrs']['className'] ) && strpos( $pixel_cyber_security_block['attrs']['className'], 'has-arrow' ) ) {
			$pixel_cyber_security_block_content = str_replace( '</a>', pixel_cyber_security_get_svg( array( 'icon' => esc_attr( 'caret-circle-right' ) ) ) . '</a>', $pixel_cyber_security_block_content );
			return $pixel_cyber_security_block_content;
		}
	}

	if( ! is_single() ) {
	
		if ( 'core/post-terms'  === $pixel_cyber_security_block['blockName'] ) {
			if( 'post_tag' === $pixel_cyber_security_block['attrs']['term'] ) {
				$pixel_cyber_security_block_content = str_replace( '<div class="taxonomy-post_tag wp-block-post-terms">', '<div class="taxonomy-post_tag wp-block-post-terms flex">' . pixel_cyber_security_get_svg( array( 'icon' => esc_attr( 'tags' ) ) ), $pixel_cyber_security_block_content );
			}

			if( 'category' ===  $pixel_cyber_security_block['attrs']['term'] ) {
				$pixel_cyber_security_block_content = str_replace( '<div class="taxonomy-category wp-block-post-terms">', '<div class="taxonomy-category wp-block-post-terms flex">' . pixel_cyber_security_get_svg( array( 'icon' => esc_attr( 'category' ) ) ), $pixel_cyber_security_block_content );
			}
			return $pixel_cyber_security_block_content;
		}
		if ( 'core/post-date' === $pixel_cyber_security_block['blockName'] ) {
			$pixel_cyber_security_block_content = str_replace( '<div class="wp-block-post-date">', '<div class="wp-block-post-date flex">' . pixel_cyber_security_get_svg( array( 'icon' => esc_attr( 'calendar' ) ) ), $pixel_cyber_security_block_content );
			return $pixel_cyber_security_block_content;
		}
		if ( 'core/post-author' === $pixel_cyber_security_block['blockName'] ) {
			$pixel_cyber_security_block_content = str_replace( '<div class="wp-block-post-author">', '<div class="wp-block-post-author flex">' . pixel_cyber_security_get_svg( array( 'icon' => esc_attr( 'user' ) ) ), $pixel_cyber_security_block_content );
			return $pixel_cyber_security_block_content;
		}
	}
	if( is_single() ){

		// Add chevron icon to the navigations
		if ( 'core/post-navigation-link' === $pixel_cyber_security_block['blockName'] ) {
			if( isset( $pixel_cyber_security_block['attrs']['type'] ) && 'previous' === $pixel_cyber_security_block['attrs']['type'] ) {
				$pixel_cyber_security_block_content = str_replace( '<span class="post-navigation-link__label">', '<span class="post-navigation-link__label">' . pixel_cyber_security_get_svg( array( 'icon' => esc_attr( 'prev' ) ) ), $pixel_cyber_security_block_content );
			}
			else {
				$pixel_cyber_security_block_content = str_replace( '<span class="post-navigation-link__label">Next Post', '<span class="post-navigation-link__label">Next Post' . pixel_cyber_security_get_svg( array( 'icon' => esc_attr( 'next' ) ) ), $pixel_cyber_security_block_content );
			}
			return $pixel_cyber_security_block_content;
		}
		if ( 'core/post-date' === $pixel_cyber_security_block['blockName'] ) {
            $pixel_cyber_security_block_content = str_replace( '<div class="wp-block-post-date">', '<div class="wp-block-post-date flex">' . pixel_cyber_security_get_svg( array( 'icon' => 'calendar' ) ), $pixel_cyber_security_block_content );
            return $pixel_cyber_security_block_content;
        }
		if ( 'core/post-author' === $pixel_cyber_security_block['blockName'] ) {
            $pixel_cyber_security_block_content = str_replace( '<div class="wp-block-post-author">', '<div class="wp-block-post-author flex">' . pixel_cyber_security_get_svg( array( 'icon' => 'user' ) ), $pixel_cyber_security_block_content );
            return $pixel_cyber_security_block_content;
        }

	}
    return $pixel_cyber_security_block_content;
}
	
add_filter( 'render_block', 'pixel_cyber_security_block_wrapper', 10, 2 );
