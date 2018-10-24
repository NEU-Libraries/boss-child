<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Boss
 * @since Boss 1.0.0
 */

get_header(); ?>

<?php if ( is_active_sidebar('sidebar') ) : ?>
	<div class="page-right-sidebar">
<?php else : ?>
	<div class="page-full-width">
<?php endif; ?>

        <section id="primary" class="site-content">
            <div id="content" role="main">

				<p>Searching ...</p>

            </div><!-- #content -->
        </section><!-- #primary -->

    <?php if ( is_active_sidebar('sidebar') ) : 
        get_sidebar('sidebar'); 
    endif; ?>
    </div>
<?php get_footer(); ?>
