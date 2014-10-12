<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package holyarchers
 */
?>

	</div><!-- #content -->

  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <?php if(dynamic_sidebar('footer_left') ): ?>

        <?php else: ?>
          No Left Sidebar Setup
        <?php endif; ?>
      </div>

      <div class="col-sm-3">
        <?php if(dynamic_sidebar('footer_middle_left') ): ?>

        <?php else: ?>
          No Mid Sidebar Setup
        <?php endif; ?>
      </div>

      <div class="col-sm-3">
        <?php if(dynamic_sidebar('footer_middle_right') ): ?>
        <?php else: ?>
          No Right Sidebar Setup
        <?php endif; ?>
      </div>
      <div class="col-sm-3">
        <?php if(dynamic_sidebar('footer_right') ): ?>
        <?php else: ?>
          No Right Sidebar Setup
        <?php endif; ?>
      </div>
    </div>
  </div>


  <div class="wrapper wrapper-footer">
    <div class="container container-footer">
      Footer
    </div>
  </div>


<?php wp_footer(); ?>

</body>
</html>
