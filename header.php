<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Tekup Solution</title>

  <?php wp_head(); ?>

  <link href="style.css" rel="stylesheet">
</head>

<body>
  <header id="header" class="nk-header">
    <div class="header-main">
      <div class="header-container container">
        <p>Header</p>
      </div>
    </div>
    <div class="header-banner">

      <?php get_template_part('template-parts/home/home', 'banner'); ?>

    </div>
  </header>