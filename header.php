<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>
    <?php bloginfo('title')?>
  </title>
  <?php wp_head() ?>
</head>

<body>

  <nav class='navbar navbar-inverse navbar-fixed-top'>
    <div class='container-fluid'>
      <div class='navbar-header'>
        <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#collapse' aria-expanded='false'>
          <span class='sr-only'>Toggle navigation</span>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
        </button>
        <a class='navbar-brand' href="<?php bloginfo('url')?>">
          <span class='fa fa-home'></span>
          <?php bloginfo('name')?>
        </a>
      </div>
      <div class='collapse navbar-collapse' id='collapse'>
        <?php bootstrap_nav(); ?>
      </div>
    </div>
  </nav>