<?php
    /* Template Name: תחומי התמחות */
    $service_list = get_field( 'service_list' );
    get_header();
    get_template_part('inc/header/banner');
?>

<main class="site-main-container" role="main">

    <div class="row row-1405">
        <div class="large-12 columns">

            <?php if( have_posts() ) : ?>
                <div class="wp-the-content">
                    <?php while( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            <?php endif; ?>

            <?php if( $service_list ) : ?>

            <div class="service-list">
                <ul class="service-accordion">

                    <?php foreach( $service_list as $item ) : ?>
                    <li class="service-accordion-item">
                        <div class="accordion-item">

                            <?php if( $title = $item['title'] ) : ?>
                                <h3 class="accordion-service-title">
                                    <a href="#" title="<?php echo $title; ?>"><?php echo $title; ?></a>
                                </h3>
                            <?php endif; ?>

                            <div class="accordion-content-wrapper os-hebrew">
                                <?php if( $description = $item['description'] ) : ?>
                                    <div class="accordion-content-visibile"><?php echo $description; ?></div>
                                <?php endif; ?>

                                <?php if( $hidden_description = $item['hidden_description'] ) : ?>
                                    <div class="accordion-content-hidden"><?php echo $hidden_description; ?></div>
                                <?php endif; ?>
                            </div>

                        </div>
                    </li>
                    <?php endforeach; ?>

                </ul>
            </div>

            <?php endif; ?>

        </div>
    </div>

</main>


<?php get_footer(); ?>
