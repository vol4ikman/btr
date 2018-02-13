<?php
    $header_background_image = get_field( 'header_background_image' );
    if( $header_background_image ){
        $header_banner_src = $header_background_image['sizes']['header-banner'];
    } else {
        $header_banner_src = '';
    }
    $page_title = get_the_title();
?>

<section class="section header-banner-section">
    <div class="header-banner-inner" style="background:url(<?php echo $header_banner_src; ?>) no-repeat top center;">        
        <div class="header-banner-title">
            <div class="row row-1280">
                <div class="large-12 columns">
                    <h1><?php echo $page_title; ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
