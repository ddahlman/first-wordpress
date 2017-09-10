<?php
get_header();
?>
  <div class='container'>
    <hr>
    <div class='row'>
      <div class='col-sm-12'>
        <?php
if(have_posts()) {
    while(have_posts()) {
        the_post();
        
        echo "<a class='title-links' href='";
        the_permalink();
        echo "'><h1>";
        the_title();
        echo "</h1>";
        echo "</a>";
        the_content();
      
        
    }
} else {
    echo wpautop('Tyvärr så fanns det inga blogginlägg...');
}
?>
      </div>
    </div>
    <?php get_footer(); ?>