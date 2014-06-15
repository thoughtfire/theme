<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Post Data Template-Part File
 *
 * @file           post-data.php
 * @package        blackforest
 * @author         DrWeb
 * @version        Release: 1.0
 * @filesource     wp-content/themes/blackforest/post-data.php
 * @since          available since Release 1.0
 */
?>

<?php if( !is_page() && !is_search() ) { ?>

	<div class="post-data">
		<?php the_tags( __( 'Tagged with:', 'responsive' ) . ' ', ', ', '<br />' ); ?>
		<?php printf( __( 'Posted in %s', 'responsive' ), get_the_category_list( ', ' ) ); ?>
	</div><!-- end of .post-data -->

<?php } ?>

<div class="post-edit"><?php edit_post_link( __( 'Edit', 'responsive' ) ); ?></div>