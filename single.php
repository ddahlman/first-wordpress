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
    $comments_args = array('label_submit'=>'Posta',
    // change the title of the reply section
    'title_reply'=>'Write a Reply or Comment',
    // remove "Text or HTML to be displayed after the set of comment fields"
    'comment_notes_after' => '',
    // redefine your own textarea (the comment body)
    'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
    );
    comments_template($comments_args);
} else {
    echo wpautop('Tyvärr så fanns det inga blogginlägg...');
}
?>

    </div>
    <?php get_footer(); ?>