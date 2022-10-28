<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php wp_head(); ?>
</head>

<!-- add class to body based on page -->
<body <?php body_class(); ?>>

<!-- Create site header -->
<header class="site-header">
  <!-- Conditional to Link Site title everywhere but home page -->
    <h1 class="site-title">
      <?php if ( !is_home() ) : ?>
      <a href="<?php echo home_url( )?>">
        <?php bloginfo( 'name' )?>
      </a>
      <?php else : 
        bloginfo( 'name' );
      endif; ?>
    </h1>

  <!-- Create navigation section and icons  -->
    <nav class="buttons">
      <button class="btn-main">
        <i class="fas fa-bars"></i>
        <span class="screen-reader-text">Main Menu</span>
      </button>
      <button class="btn-social">
        <i class="fas fa-share-alt"></i>
        <span class="screen-reader-text">Social Menu</span>
      </button>
      <button class="btn-search">
        <i class="fas fa-search"></i>
        <span class="screen-reader-text">Search</span>
      </button>
    </nav>

    </header>

    <!-- Start main body content -->
  <div id="primary" class="content-area">
    <main id="main" class="site-main">