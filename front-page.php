<?php get_header(); ?>

<div class="section">

  <h2 class="section-title">
    <?php
      $category_name = "Breads";
      echo $category_name;
    ?>
  </h2>

  <?php 
  // Bread Query
  $bread_query = new WP_Query(
    array(
      'category_name'   =>  'breads',
      'posts_per_page'  =>  '3',
      'orderBy'         =>  'rand'
    )
  );

  if ( $bread_query -> have_posts() ) :
    while ( $bread_query -> have_posts() ) :
      $bread_query -> the_post();
      get_template_part('template-parts/content');
    endwhile;
    else :
      get_template_part('template-parts/content-none.php');
  endif; ?>
</div>

<div class="section">

  <h2 class="section-title">
    <?php
      $category_name = "Desserts";
      echo $category_name;
    ?>
  </h2>

  <?php 
  // Dessert Query
  $desserts_query = new WP_Query(
    array(
      'category_name'   =>  'desserts',
      'posts_per_page'  =>  '2'
    )
  );

  if ( $desserts_query -> have_posts() ) :
    while ( $desserts_query -> have_posts() ) :
      $desserts_query -> the_post();
      get_template_part('template-parts/content');
    endwhile;
    else :
      get_template_part('template-parts/content-none.php');
  endif; ?>

</div>

<div class="section">

  <h2 class="section-title">
    <?php
      $category_name = "Biscuits";
      echo $category_name;
    ?>
  </h2>

  <?php 
  // Biscuits Query
  $biscuits_query = new WP_Query(
    array(
      'category_name'   =>  'biscuits',
      'posts_per_page'  =>  '3',
      'orderBy'         =>  'rand'
    )
  );

  if ( $biscuits_query -> have_posts() ) :
    while ( $biscuits_query -> have_posts() ) :
      $biscuits_query -> the_post();
      get_template_part('template-parts/content');
    endwhile;
    else :
      get_template_part('template-parts/content-none.php');
  endif; ?>

</div>

<?php 

get_footer();