<?php
get_header();
echo "<div class='header-img'>";
the_custom_header_markup();
echo "<div class='img-text'><h1 class='h1-img'>";
echo get_bloginfo( 'description' );
echo "</h1></div>";
echo "</div>";
?>
  <div class='container'>
    <hr>
    <div class='row'>
      <div class='col-sm-8'>
        <?php
if(have_posts()) {
    while(have_posts()) {
        the_post();
        /*echo "<div class='well posts'>";*/
        echo "<a class='title-links' href='";
        the_permalink();
        echo "'><h1>";
        the_title();
        echo "</h1>";
        echo "</a>";
        
        the_content('Läs mer...');
        echo "<em> skapad av: ";
        the_author();
        echo "</em>";
        echo "<p class='time'>";
        the_time('Y-m-d G:i');
        echo "</p>";
        echo "<hr>";
        
        /* echo "</div>";*/
    }
} else {
    echo wpautop('Tyvärr så fanns det inga blogginlägg...');
}
?>
      </div>
      <?php get_sidebar(); ?>
    </div>
    <?php get_footer(); ?>