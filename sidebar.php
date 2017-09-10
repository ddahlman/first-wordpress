<div class="col-sm-3 col-sm-offset-1 well posts">
  <div class="sidebar">
    <h4>Om</h4>
    <p>
      <?php the_author_meta( 'description' ); ?>
    </p>
  </div>
  <div class="sidebar-module">
    <h4>Arkiv</h4>
    <ol class="list-unstyled">
      <?php wp_get_archives('type=monthly'); ?>
        <!-- More archive examples -->
    </ol>
  </div>
  <div class="sidebar-module">
    <h4>Social</h4>
    <?php wp_nav_menu( array( 'theme_location' => 'social menu' ) ); ?>
  </div>
</div>
<!-- /.blog-sidebar -->