<?php
/*
Template Name: Resumé
*/
?>
  <?php get_header(); ?>
    <div class='container'>
      <div class='row'>
        <div class='col-md-7'>
          <div class='single-page'>
            <h2>Yrken</h2>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="well posts">
                <ul>
                  <li>
                    <?php echo the_field('emp_name'); ?>
                      <hr>
                  </li>
                  <li>
                    <?php echo the_field('emp_dates'); ?>
                      <hr>
                  </li>
                  <li>
                    <?php echo the_field('emp_info'); ?>
                      <hr>
                  </li>
                </ul>
              </div>
              <?php endwhile; else: ?>
                <p>
                  <?php _e('Det gick inte att hitta några inlägg'); ?>
                </p>
                <?php endif; ?>
          </div>


          <h2>Utbildningar</h2>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="well posts">
              <ul>
                <li>
                  <?php echo the_field('edu_name'); ?>
                    <hr>
                </li>
                <li>
                  <?php echo the_field('edu_years'); ?>
                    <hr>
                </li>
                <li>
                  <?php echo the_field('edu_info'); ?>
                    <hr>
                </li>
              </ul>
            </div>
            <?php endwhile; else: ?>
              <p>
                <?php _e('Det gick inte att hitta några inlägg'); ?>
              </p>
              <?php endif; ?>
        </div>
      </div>
    </div>
    <?php get_footer(); ?>