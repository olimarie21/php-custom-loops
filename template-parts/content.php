<?php ?>
<article <?php post_class(); ?>>

  <h2 class="entry-title">
    <?php the_title(); ?>
  </h2>

  <div class="entry-thumbnail">
    <?php the_post_thumbnail( ); ?>
  </div>

  <div class="entry-content">
    <?php 
      if ( !is_single() ) :
        the_excerpt(  );
      else :
        the_content( );
      endif;
    ?>
  </div>
  <div class="entry-footer">
    <?php the_category( ' • ' ); ?>
  </div>
</article>