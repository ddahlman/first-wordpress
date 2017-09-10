<?php

get_header();
?>
  <div class='container'>
    <div class='single-page'>
      <?php

if(have_posts()) {
    while(have_posts()) {
        the_post();
        echo "<div class='posts'>";
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
        echo "</div>";
        echo "<hr>";
    }
    
} else {
    echo wpautop('Tyvärr så fanns det inga blogginlägg...');
}
?>

    </div>
    <?php get_footer(); ?>