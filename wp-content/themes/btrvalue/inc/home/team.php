<?php
    $select_3_team_members = get_field( 'select_3_team_members' );
    $args = array(
        'post_type' => 'team',
        'posts_per_page' => 3,
        'post__in' => $select_3_team_members,
        'orderby' => 'post__in'
    );
    $team = new WP_Query($args);
    $columns = 0;
?>

<?php if( $select_3_team_members && $team->have_posts() ) : ?>

<section class="section team-section wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
    <div class="row medium-collapse full-width">
        <div class="small-12 columns">
        <?php while( $team->have_posts() ) : $team->the_post(); $columns++; ?>
            <div class="team-member-column member-column-<?php echo $columns; ?>">
                <div class="team-member" data-id="<?php echo $post->ID; ?>">
                    <figure>
                        <?php the_post_thumbnail('team-large'); ?>
                    </figure>
                    <div class="team-member-description">
                        <h4><?php the_title(); ?></h4>
                        <?php if( $role = get_field('role') ) : ?>
                            <div class="role">
                                <?php echo $role; ?>
                            </div>
                        <?php endif; ?>
                        <div class="devider">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
</section>

<?php endif; ?>
