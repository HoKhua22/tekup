<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Tekup Solution</title>

  <?php wp_head(); ?>

  <link href="style.css" rel="stylesheet">
</head>

<body>
  <header>
    <div class="container">
      Đây là Header nhé
      <?php get_template_part('template-parts/home/home', 'banner'); ?>
    </div>
  </header>