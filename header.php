<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="keywords" content="">
  <meta name="description" content="<?php bloginfo("description"); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/style.css">
  <link rel="icon" href="" type="image/png">
  <title>
      <?php if(is_front_page()): ?>
      <?php bloginfo("name"); ?>
      <?php else: ?>
      <?php the_title(); ?> | <?php bloginfo("name"); ?>
      <?php endif; ?>
</title>
  <?php wp_head(); ?>
</head>
<body>

  <header class="header">
      <h1><?php bloginfo("name"); ?></h1>
      <p><?php bloginfo("description"); ?></p>
  </header>
