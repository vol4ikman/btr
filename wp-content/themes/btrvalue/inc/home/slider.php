<?php $home_slider = get_field('home_slider'); ?>

<?php if( $home_slider ) : ?>

    <section class="section home-slider-section">
        <div class="home-banner">
            <div class="home-slider">
                <?php
                    $home_slider_counter = 0;
                    foreach( $home_slider as $slide ) :
                        $home_slider_counter++;
                        $image_url   = isset( $slide['image']['url'] ) ? $slide['image']['url'] : '';
                        $image_style = 'style="background-image:url('.$image_url.');"';
                        $title       = $slide['text'] ? $slide['text'] : '';
                ?>
                    <div class="home-slide slide-<?php echo $home_slider_counter; ?>">
                        <div class="slide-bg" <?php echo $image_style; ?>>

                        </div>
                        <div class="tagline-holder os-hebrew tagline-<?php echo $home_slider_counter; ?>">
                            <div class="tagline tagline-<?php echo $home_slider_counter; ?>"
                                data-in-effect="fadeIn" data-in-shuffle="false"
                                data-out-effect="fadeOut" data-out-shuffle="false" <?php echo ( $home_slider_counter == 1 ) ? 'style="opacity: 0;"' : ''; ?>>
                                <?php echo $title; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php endif; ?>
