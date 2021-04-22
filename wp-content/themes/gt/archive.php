<?php get_header(); ?>

        <h2 class="page-heading"><?php the_archive_title(); ?></h2>

        <section>

            <?php
                while(have_posts()){
                   the_post();
            ?>

            <div class="card card-home">
                <a href="<?php the_permalink() ?>">
                    <h3><?php the_title(); ?></h3>
                </a>
                <a href="#"><?php echo get_the_category_list(', ') ?></a>
                <?php $tags = get_tags();
                    foreach ( $tags as $tag ) { ?>
                    <a href="<?php echo get_tag_link( $tag->term_id ); ?> " rel="tag"><?php echo $tag->name; ?></a>
                <?php } ?>
                <a href="<?php the_permalink(); ?>" class="btn-readmore">Read More</a>
            </div>
            
            <?php }
                wp_reset_query(); 
            ?>

        </section>

        <div class="pagination">
            <?php echo paginate_links(); ?>
        </div>
   
<?php get_footer(); ?>