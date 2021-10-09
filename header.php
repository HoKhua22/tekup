<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <title>Tekup Solution</title>

  <?php wp_head(); ?>

  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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