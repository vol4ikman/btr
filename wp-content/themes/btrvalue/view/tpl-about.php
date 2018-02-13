<?php
    /* Template Name: אודות - קצת עלינו */
    $about_page_title       = get_field( 'about_page_title' );
    $about_page_description = get_field( 'about_page_description' );
    $about_select_team      = get_field( 'about_select_team' );
    get_header();
    get_template_part('inc/header/banner');
?>

<main class="site-main-container" role="main">

    <div class="row row-1362">
        <div class="large-12 columns">
            <div class="top-about-section">

                <?php if( $about_page_title ) : ?>
                    <h2><?php echo $about_page_title; ?></h2>
                <?php endif; ?>

                <?php if( $about_page_description ) : ?>
                    <div class="top-about-description">
                        <?php echo $about_page_description; ?>
                    </div>
                <?php endif; ?>

                <?php if( have_posts() ) : ?>
                    <div class="about-content wp-the-content os-hebrew">
                        <?php
                            while( have_posts() ) : the_post();
                                the_content();
                            endwhile; wp_reset_query();
                        ?>
                    </div>
                <?php endif; ?>

            </div>
            <h2></h2>
        </div>
    </div>

    <?php if( $about_select_team ) : ?>
        <div class="row row-1362 about-team-row">
            <div class="large-12 columns">

            </div>
        </div>
    <?php endif; ?>

</main>

<?php get_footer(); ?>
