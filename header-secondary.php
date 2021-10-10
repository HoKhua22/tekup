<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <title>Tekup Solution</title>

  <?php wp_head(); ?>

  <link href="<?php echo get_template_directory_uri() ?>/style.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <header id="header" class="nk-header">
    <div class="menu">
      <div class="menu_left">
        <div>
          <img src="<?php echo get_template_directory_uri() ?>/images/home/poiter.svg" alt="" />
          <img class="menu_logo" src="<?php echo get_template_directory_uri() ?>/images/home/tekup.svg" alt="" />
        </div>
        <div class="menu_language">
          <span>NGÔN NGỮ</span>
          <select name="lang" id="language">
            <option value="vn">viet nam</option>
            <option value="eng"></option>
          </select>
        </div>
      </div>
      <label for="menu_checkbox" class="menu_right">
        <img src="<?php echo get_template_directory_uri() ?>/images/home/bars.svg" alt="" />
      </label>
      <input type="checkbox" id="menu_checkbox" />
      <div class="menu_main">
        <label for="menu_checkbox" class="menu_main_close">
          <img src="<?php echo get_template_directory_uri() ?>/images/home/Close.svg" alt="" />
        </label>
        <div class="main_list">
          content <br />
          abc xyz <br />
          <img src="https://images.squarespace-cdn.com/content/v1/53883795e4b016c956b8d243/1551438228969-H0FPV1FO3W5B0QL328AS/chup-anh-thuc-an-1.jpg" alt="" width="100%" />
        </div>
        <div class="main_footer">footer</div>
      </div>
    </div>
  </header>
  <style>
    .menu {
      position: fixed;
      width: 100vw;
      padding: 27px 46px 0 46px;
      z-index: 20;

      display: flex;
      align-items: center;
      justify-content: space-between;

    }

    .menu_left {
      display: flex;
      align-items: center;
    }

    .menu_logo {
      margin-left: 8px;
    }

    .menu_language {
      margin-left: 40px;
      font-size: 12px;
      font-weight: 700;
    }

    .menu_right {
      width: 40px;
      height: 40px;
      border-radius: 10px;

      display: flex;
      align-items: center;
      justify-content: center;

      background-color: #f8d000;
      cursor: pointer;
    }

    #menu_checkbox {
      display: none;
    }

    #menu_checkbox:checked~.menu_main {
      min-width: 737px;
      transform: translateX(0%);
    }

    .menu_main {
      height: 100vh;
      transform: translateX(100%);
      background-color: #f2f2f2;

      position: fixed;
      right: 0px;
      top: 0px;
      z-index: 30;
      padding: 70px 90px 110px 140px;
      transition: all 0.35s ease 0s;

      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .menu_main_close {
      text-align: right;
    }
  </style>