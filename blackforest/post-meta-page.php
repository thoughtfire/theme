<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Page Meta-Data Template-Part File
 *
 * @file           post-meta-page.php
 * @package        blackforest
 * @author         DrWeb
 * @version        Release: 1.0
 * @filesource     wp-content/themes/blackforest/post-meta-page.php
 * @since          available since Release 1.0
 */
?>

	<h1 class="entry-title post-title"><?php the_title(); ?></h1>

<?php if( comments_open() ) : ?>
	<div class="post-meta">
		<?php responsive_post_meta_data(); ?>

		<?php if( comments_open() ) : ?>
			<span class="comments-link">
		<span class="mdash">&mdash;</span>
				<?php comments_popup_link( __( 'No Comments &darr;', 'responsive' ), __( '1 Comment &darr;', 'responsive' ), __( '% Comments &darr;', 'responsive' ) ); ?>
		</span>
		<?php endif; ?>
	</div><!-- end of .post-meta -->
<?php endif; ?>