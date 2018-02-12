<?php
    $op_hide_section  = get_field( 'op_hide_section' );
    if( ! $op_hide_section ) :
        $op_section_title = get_field( 'op_section_title' );
        $partners_gallery = get_field( 'partners_gallery' );
?>

    <section class="section our-partners-section wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
        <div class="section-inner">
            <?php if( $op_section_title ): ?>
                <div class="row">
                    <div class="large-12 columns">
                        <div class="section-title">
                            <h3>
                                <?php echo $op_section_title; ?>
                                <img src="<?php echo THEME; ?>/images/dark-logo.png" alt="">
                            </h3>
                        </div>
                        <div class="section-gold-devider"><span></span></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if( $partners_gallery ) : $partners_gallery_counter = 0; ?>
                <div class="row large-up-6 medium-up-4 small-up-2">
                    <?php foreach( $partners_gallery as $partner ) : $partners_gallery_counter++; ?>
                        <div class="column">
                            <div class="partner partner-<?php echo $partners_gallery_counter; ?>">
                                <?php if( $link = $partner['link'] ) : ?>
                                    <a href="<?php echo $link; ?>" title="<?php echo $partner['image']['alt']; ?>">
                                <?php endif; ?>
                                    <img src="<?php echo $partner['image']['sizes']['partner']; ?>" alt="<?php echo $partner['image']['alt']; ?>" title="<?php echo $partner['image']['alt']; ?>">
                                <?php if( $link = $partner['link'] ) : ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

<?php endif; ?>
