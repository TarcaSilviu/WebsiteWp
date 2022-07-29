<?php get_header(  );?>

    
<div class="container">
<div class="blog-header">
<h1 class="blog-title"><?php bloginfo('name');?></h1>
<p class="lead blog-description"> <?php bloginfo('description');?></p>
</div>
</div>


<main class="container">
<section class="showcase">
    <div class="container">
        <h1>Bootstrap theme</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa atque quos, sunt quo distinctio aliquid porro ducimus impedit. Est, commodi provident? Provident sunt commodi sit expedita ipsum, fugiat molestias a.</p>
        <a class="btn btn-primary btn-lg">Read more</a>
    </div>
</section>

<section class="boxes">
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="box">
                <i class="fa fa-user-group" aria-hidden="true"></i>
                <h3>lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad aliquam sunt saepe in inventore. Tenetur quas necessitatibus ullam corporis commodi ipsum, quos dignissimos quasi quia at eum officiis possimus aut?</p>
            </div>
        </div>
 


        <div class="col-md-4">
            <div class="box">
                <i class="fa fa-camera"></i>
                <h3>lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad aliquam sunt saepe in inventore. Tenetur quas necessitatibus ullam corporis commodi ipsum, quos dignissimos quasi quia at eum officiis possimus aut?</p>
            </div>
        </div>



        <div class="col-md-4">
            <div class="box">
                <i class="fa fa-search" aria-hidden="true"></i>
                <h3>lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad aliquam sunt saepe in inventore. Tenetur quas necessitatibus ullam corporis commodi ipsum, quos dignissimos quasi quia at eum officiis possimus aut?</p>
            </div>
        </div>
    </div>
</div>


<div class="row-g5">
<div class="col-md-8>

<?php $args = array(
        'posts_per_page' => 5, /* how many post you need to display */
        'offset' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_type' => 'post', /* your post type name */
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            ?>
            <div class="blog-post">
            <h2 class="blog-post-title">
    
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            
            </h2>
            <p class="blog-post-meta">
            <?php the_date();?> by <?php the_author();?>
            </p>    
              <div class="post-thumb">  
                <?php the_post_thumbnail(); ?>
             </div>
             <div class="post-excerp">
            <?php the_excerpt(); ?>
            </div>       
            </div>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
    endif;?>
</div>



</main>

<?php get_footer();?>