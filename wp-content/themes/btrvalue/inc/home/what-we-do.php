<?php
    $hide_section_wwd        = get_field( 'hide_section_wwd' );
    if( ! $hide_section_wwd ) :
        $section_title_wwd       = get_field( 'section_title_wwd' );
        $section_description_wwd = get_field( 'section_description_wwd' );
        $items_wwd               = get_field( 'items_wwd' );
?>

<section class="section what-we-do-section wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
    <div class="section-inner">

        <?php if( $section_title_wwd || $section_description_wwd ) : ?>
            <div class="row">
                <div class="large-12 columns">
                    <div class="width-740">
                        <?php if( $section_title_wwd ) : ?>
                            <h3 class="section-title os-english">
                                <?php echo $section_title_wwd; ?>
                                <img src="<?php echo THEME; ?>/images/light-logo.png" alt="<?php echo $section_title_wwd; ?>">
                            </h3>
                        <?php endif; ?>

                        <?php if( $section_description_wwd ) : ?>
                            <div class="section-description">
                                <?php echo $section_description_wwd; ?>
                            </div>
                        <?php endif; ?>

                        <div class="section-gold-devider"><span></span></div>

                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if( $items_wwd ) : $items_counter = 0; ?>
            <div class="row row-1464">
                <div class="large-12 columns">
                    <div class="wwd-list">
                        <?php foreach( $items_wwd as $item ) :
                            $items_counter++;
                            if( $items_counter %3 == 0 ){
                                $items_class="last";
                            } else {
                                $items_class="";
                            }
                        ?>
                            <div class="wwd-item item-<?php echo $items_counter; ?> <?php echo $items_class; ?>">
                                <div class="wwd-icon">
                                    <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['title']; ?>">
                                </div>
                                <div class="wwd-content">
                                    <div class="wwp-text">
                                        <?php echo $item['title']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section>

<?php endif; ?>
