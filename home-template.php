<?php
/*
Template Name: Home
*/
get_header(); ?>

    <section class="about">
        <div class="container">
            <?php
            $the_slug = 'about-us-section';
            $args = array(
//          'name'           => $the_slug,
                'post_type'      => 'about-us',
                'post_status'    => 'publish',
                'posts_per_page' => 1
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post(); ?>
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                    <div class="content col-md-8 col-md-offset-2 col-xs-12">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <?php
            $query = new WP_Query( array('post_type' => 'services-reviews', 'posts_per_page' => 100 ) );
            if ($query->have_posts()):?>
                <ul class="wc-table">
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <li class="col-md-4 col-xs-12" <?php
                        if ( $thumbnail_id = get_post_thumbnail_id() ) {
                            if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'normal-bg' ) )
                                printf( ' style="background:  url(%s) no-repeat;"', $image_src[0] ); } ?>>
                            <div class="service-content">
                                <h3><?php the_title(); ?></h3>
                                <div class="description">
                                    <?php the_content(); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="button button-default green-text" data-text="View more"><span>Find Out More</span></a>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; wp_reset_postdata(); ?>
        </div>
    </section>

    <section class="works">
        <div class="container">
            <h2>Some of Our Latest Work</h2>
            <p class="content col-md-8 col-md-offset-2 col-xs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis
                quis, interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum est pretium.</p>
            <?php
            $query = new WP_Query( array('post_type' => 'works-reviews', 'posts_per_page' => 100 ) );
            if ($query->have_posts()):?>
                <ul class="wc-table">
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <li class="col-md-4 col-xs-12" <?php
                        if ( $thumbnail_id = get_post_thumbnail_id() ) {
                            if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'normal-bg' ) )
                                printf( ' style="background:  url(%s) no-repeat;"', $image_src[0] ); } ?>>
                            <h3><?php the_title(); ?></h3>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; wp_reset_postdata(); ?>
        </div>
    </section>

    <section class="purchase">
        <div class="container">
            <h2>Do you Like What You See?</h2>
            <p class="content col-md-8 col-md-offset-2 col-xs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis
                quis, interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum est pretium.</p>
            <div class="col-xs-12">
                <a href="#" class="main-btn">Purchase</a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>