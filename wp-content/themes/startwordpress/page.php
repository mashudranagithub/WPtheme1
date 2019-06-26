<?php get_header(); ?>

<div class="row">

    <div class="col-sm-12" <?php post_class(); ?> >

        <?php
        if (have_posts()) : while (have_posts()) : the_post();

                get_template_part('content', get_post_format());

		        if(has_post_thumbnail()){
		          the_post_thumbnail('large', array('class' => 'img-fluid' ));
		        }

            endwhile;
        endif;
        ?>

    </div><!-- /.blog-main -->

</div><!-- /.row -->

<?php get_footer(); ?>