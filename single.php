<?php get_header(  );?>

    
<div class="container">
<div class="blog-header">
<h1 class="blog-title"><?php bloginfo('name');?></h1>
<p class="lead blog-description"> <?php bloginfo('description');?></p>
</div>
</div>



<main class="container">
<div class="row">
<?php if(have_posts()):?>
  <?php while(have_posts()):the_post() ;?>
<article class="blog-post">
  <h2 class="blog-post-title">
  <?php the_title();?>
  </h2>
  <p class="blog-post-meta">
    <?php the_date()?> by <a href="#"><?php the_author()?></a>
    </p>
  <?php the_content();?>
<hr>
<?php comments_template( );?>
</div>
</article>
<?php endwhile;?>
<?php else:?>
  <p><?php echo('No Posts Found'); ?></p>
<?php endif;?>
</div>
</main>

<?php get_footer();?>