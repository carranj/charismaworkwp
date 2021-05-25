<?php get_header(); ?>



<div class="container">
  
  <div class="row">
    <div class="col-md-9 blogContainer">
      <h1><?php wp_title(''); ?></h1>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
      <?php get_template_part( 'page-templates/flexible_content/flexible_content' ); ?>

        <?php endwhile; else: ?>
        <h1>Oh No!</h1>
        <p>No Content is appearing for this page!</p>
    <?php endif; ?>
    </div>
    <div class="col-md-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
  
  

</div>







<?php get_footer(); ?> 