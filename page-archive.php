<?php
/*
Template Name: Archives
*/
?>
  <?php
get_header();
?>
    <div class='container'>
      <div class='single-page'>
        <?php
the_post();
echo "<div class='well posts'>";
echo "<a class='title-links' href='";
the_permalink();
echo "'><h1>";
the_title();
echo "</h1>";
echo "</a>";
echo "<hr>";
echo "<h2>Per månad</h2>";
echo "<ul>";
wp_get_archives('type=monthly');
echo "</ul>";
echo "<h2>Per kategori:</h2>";
echo "<ul>";
wp_list_categories();
echo "</ul>";
echo "</div>";
?>
      </div>


      <?php get_footer(); ?>