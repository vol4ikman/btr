<?php
    $hide_section1         = get_field( 'hide_section1' );
    $section_title1        = get_field( 'section_title1' );
    $section_subtitle1     = get_field( 'section_subtitle1' );
    $section_content1      = get_field( 'section_content1' );
    $section_button_title1 = get_field( 'section_button_title1' );
    $section_button_link1  = get_field( 'section_button_link1' );
?>

<?php if( ! $hide_section1 ) : ?>

<section class="section who-we-are-section wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
    <div class="row">
        <div class="large-12 columns">
            <div class="section-inner who-we-are">

                <?php if( $section_title1 ) : ?>
                    <div class="section-title">
                        <h3 class="os-english">
                            <?php echo $section_title1; ?>
                            <img src="<?php echo THEME; ?>/images/dark-logo.png ?>" alt="<?php echo $section_title1; ?>">
                        </h3>
                        <div class="devider">
                            <span></span>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if( $section_subtitle1 ) : ?>
                    <div class="section-subtitle">
                        <?php echo $section_subtitle1; ?>
                    </div>
                <?php endif; ?>

                <?php if( $section_content1 ) : ?>
                    <div class="section-content">
                        <?php echo $section_content1; ?>
                    </div>
                <?php endif; ?>

                <?php if( $section_button_link1 ): ?>
                    <div class="section-button">
                        <a href="<?php echo $section_button_link1; ?>" role="link" title="<?php echo $section_button_title1; ?>">
                            <?php echo $section_button_title1; ?><span role="presentation"></span>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>
