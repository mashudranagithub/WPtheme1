<div class="blog-post">
    <h2 class="blog-post-title"><?php the_title(); ?></h2>
    <br>

<div class="pull-left" style="margin-right:30px;">
	 <?php 

        if(has_post_thumbnail()){
          the_post_thumbnail('large', array('class' => 'img-fluid' ));
        }

     ?>
</div>

    <p class="blog-post-meta pull-right"> <?php the_date(); ?> by <a href="#"> <?php the_author(); ?> </a></p>

    <?php the_content(); ?>
</div><!-- /.blog-post -->