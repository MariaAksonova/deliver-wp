<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package deliver
 */

get_header(); ?>

<div class="page-title">
	<div class="container">
		<h2>Our Blog</h2>
	</div>
</div>
<div class="container main">
	<div id="primary" class="content-area col-md-8 col-sm-12">
		<main id="main" class="site-main" role="main">
			<div class="posts row">
				<?php if ( have_posts() ) :
					while ( have_posts() ) : the_post(); ?>
						<article class="post col-xs-12">
							<div class="post-content">
								<div class="img-wrap">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('full', 'class=img-responsive'); ?>
									</a>
								</div>
								<h2>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
								<div class="info start-xs">
									<span class="time"><?php the_time('F j, Y'); ?></span>
									<span class="author"><?php the_author(); ?></span>
									<span class="category"><?php the_category(', '); ?></span>
									<span class="comments"><?php comments_number('no comments', '1 comment', '% comments'); ?></span>
								</div>
								<div class="content">
									<?php the_content(); ?>
								</div>
							</div>
						</article>
					<?php endwhile; ?>
				<?php else: ?>
					<p>No posts found</p>
				<?php endif; ?>
			</div>
			<div class="comments">
				<div class="col-xs-12">
					<?php comments_template(); ?>
				</div>
			</div>
		</main>
	</div>

<?php
get_sidebar();
get_footer();
